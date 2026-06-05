import os
import re

base_dir = r"c:\laravel-projects\ethnic-wear"
blade_file = os.path.join(base_dir, "resources", "views", "refrence.blade.php")

with open(blade_file, 'r', encoding='utf-8') as f:
    content = f.read()

# Find <body ... >
body_match = re.search(r'<body[^>]*>', content)
if not body_match:
    print("Body not found")
    exit(1)

body_start_idx = body_match.start()
body_end_idx = body_match.end()

# Find <main ... >
main_match = re.search(r'<main[^>]*id="MainContent"[^>]*>', content)
if not main_match:
    main_match = re.search(r'<main\b[^>]*>', content)

if not main_match:
    print("Main not found")
    exit(1)

main_start_idx = main_match.start()

# Find </main>
main_close_idx = content.find('</main>')
if main_close_idx == -1:
    print("</main> not found")
    exit(1)

main_close_end_idx = main_close_idx + len('</main>')

# Find </body>
body_close_idx = content.rfind('</body>')
if body_close_idx == -1:
    print("</body> not found")
    exit(1)

# Parts
head_part = content[:body_end_idx]
header_part = content[body_end_idx:main_start_idx]
main_part = content[main_start_idx:main_close_end_idx]
footer_part = content[main_close_end_idx:body_close_idx]
tail_part = content[body_close_idx:]

layouts_app = head_part + "\n" + "@include('partials.header')" + "\n" + "@yield('content')" + "\n" + "@include('partials.footer')" + "\n" + tail_part
home_index = "@extends('layouts.app')\n\n@section('content')\n" + main_part + "\n@endsection\n"

# Write them out
with open(os.path.join(base_dir, "resources", "views", "layouts", "app.blade.php"), "w", encoding='utf-8') as f:
    f.write(layouts_app)

with open(os.path.join(base_dir, "resources", "views", "partials", "header.blade.php"), "w", encoding='utf-8') as f:
    f.write(header_part)

with open(os.path.join(base_dir, "resources", "views", "partials", "footer.blade.php"), "w", encoding='utf-8') as f:
    f.write(footer_part)

with open(os.path.join(base_dir, "resources", "views", "home", "index.blade.php"), "w", encoding='utf-8') as f:
    f.write(home_index)

print("Splitting complete.")
