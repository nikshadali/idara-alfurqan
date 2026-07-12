import os
import glob

# Search path
directory = '/home/hp/owais_projects/idara_alfurqan/idara-theme/'
php_files = glob.glob(os.path.join(directory, '*.php'))

# The replacement URL
replacement = "<?php echo esc_url( home_url( '/contact/' ) ); ?>"

# To avoid replacing the WhatsApp icon links, we can check the line content
# Or we can just replace all occurrences of 'https://wa.me/923166694116' 
# EXCEPT if it's followed by title="WhatsApp" or class="contact-info-card contact-wa-card"

def replace_in_file(filepath):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    lines = content.split('\n')
    new_lines = []
    changed = False
    
    for line in lines:
        if 'wa.me/' in line:
            # Check if it's the WhatsApp contact icon or contact page WhatsApp link
            if 'title="WhatsApp"' in line or 'contact-wa-card' in line or 'var whatsappUrl' in line:
                new_lines.append(line)
            else:
                # Replace the URL
                new_line = line.replace('https://wa.me/923166694116', replacement)
                new_line = new_line.replace('https://wa.me/9233329991120', replacement)
                if new_line != line:
                    changed = True
                new_lines.append(new_line)
        else:
            new_lines.append(line)
            
    if changed:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write('\n'.join(new_lines))
        print(f"Updated {filepath}")

for f in php_files:
    replace_in_file(f)

print("Done.")
