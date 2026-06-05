import os

blade_file = r'c:\laravel-projects\ethnic-wear\resources\views\home\index.blade.php'
with open(blade_file, 'r', encoding='utf-8') as f:
    content = f.read()

content = content.replace('"@context"', '"@@context"')
content = content.replace('"@type"', '"@@type"')

with open(blade_file, 'w', encoding='utf-8') as f:
    f.write(content)
print("Replaced @context and @type")
