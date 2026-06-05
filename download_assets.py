import os
import re
import urllib.request
import urllib.parse
from urllib.error import URLError, HTTPError
import ssl

ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE

base_dir = r"c:\laravel-projects\ethnic-wear"
blade_file = os.path.join(base_dir, "resources", "views", "refrence.blade.php")
assets_dir = os.path.join(base_dir, "public", "assets")

if not os.path.exists(assets_dir):
    os.makedirs(assets_dir)

with open(blade_file, 'r', encoding='utf-8') as f:
    content = f.read()

url_pattern = re.compile(r'(href|src|data-src|poster)=["\']([^"\']+)["\']')
css_url_pattern = re.compile(r'url\((["\']?)([^"\')]+)\1\)')

urls_to_replace = {}

def process_url(url_string):
    original_url = url_string
    if url_string.startswith('//'):
        url_string = 'https:' + url_string
    elif url_string.startswith('/'):
        return None # Local path
    elif not url_string.startswith('http'):
        return None # Relative or other scheme

    if 'googletagmanager.com' in url_string or 'ajax.googleapis.com' in url_string:
        return None 

    parsed = urllib.parse.urlparse(url_string)
    
    domain = parsed.netloc
    path = parsed.path
    query = parsed.query

    if not domain:
        return None

    filename = os.path.basename(path)
    if not filename:
        filename = "index.html"
    
    filename = re.sub(r'[^A-Za-z0-9_.-]', '_', filename)
    if len(filename) > 100:
        filename = filename[-100:]
    
    domain_folder = re.sub(r'[^A-Za-z0-9_.-]', '_', domain)
    path_folder = os.path.dirname(path).strip('/')
    path_folder = re.sub(r'[^A-Za-z0-9_./-]', '_', path_folder)
    
    local_path_rel = os.path.join(domain_folder, path_folder, filename).replace('\\', '/')
    local_path_abs = os.path.join(assets_dir, domain_folder, path_folder, filename)
    
    return original_url, url_string, local_path_rel, local_path_abs

matches = url_pattern.findall(content)
for attr, url in matches:
    res = process_url(url)
    if res:
        urls_to_replace[res[0]] = res

matches_css = css_url_pattern.findall(content)
for quote, url in matches_css:
    res = process_url(url)
    if res:
        urls_to_replace[res[0]] = res

print(f"Found {len(urls_to_replace)} unique URLs to process.")

new_content = content
for original_url, info in urls_to_replace.items():
    _, fetch_url, local_path_rel, local_path_abs = info
    
    if not os.path.exists(local_path_abs):
        os.makedirs(os.path.dirname(local_path_abs), exist_ok=True)
        try:
            print(f"Downloading {fetch_url}...")
            req = urllib.request.Request(fetch_url, headers={'User-Agent': 'Mozilla/5.0'})
            with urllib.request.urlopen(req, context=ctx, timeout=15) as response, open(local_path_abs, 'wb') as out_file:
                out_file.write(response.read())
        except Exception as e:
            print(f"Failed to download {fetch_url}: {e}")
            continue 
    
    asset_str = f"{{{{ asset('assets/{local_path_rel}') }}}}"
    new_content = new_content.replace(f'="{original_url}"', f'="{asset_str}"')
    new_content = new_content.replace(f"='{original_url}'", f"='{asset_str}'")
    new_content = new_content.replace(f'url("{original_url}")', f'url("{asset_str}")')
    new_content = new_content.replace(f"url('{original_url}')", f"url('{asset_str}')")
    new_content = new_content.replace(f"url({original_url})", f"url('{asset_str}')")

with open(blade_file, 'w', encoding='utf-8') as f:
    f.write(new_content)

print("Done replacing and downloading assets.")
