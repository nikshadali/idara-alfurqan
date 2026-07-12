<?php
$directory = '/home/hp/owais_projects/idara_alfurqan/idara-theme/';
$files = glob($directory . '*.php');
$replacement = "<?php echo esc_url( home_url( '/contact/' ) ); ?>";

foreach ($files as $file) {
    $content = file_get_contents($file);
    $lines = explode("\n", $content);
    $changed = false;
    $new_lines = [];
    
    foreach ($lines as $line) {
        if (strpos($line, 'wa.me/') !== false) {
            if (strpos($line, 'title="WhatsApp"') !== false || strpos($line, 'contact-wa-card') !== false || strpos($line, 'var whatsappUrl') !== false || strpos($line, 'header-landing.php') !== false) {
                $new_lines[] = $line;
            } else {
                $new_line = str_replace('https://wa.me/923166694116', $replacement, $line);
                if (strpos($file, 'page-landing.php') !== false && strpos($new_line, '9233329991120') !== false) {
                    // Do not replace wa.me in landing page if it is for the form script
                    if (strpos($line, 'whatsappUrl') === false) {
                         $new_line = str_replace('https://wa.me/9233329991120', $replacement, $new_line);
                    }
                }
                
                // wait, the landing page uses #hero-form for its CTA links. The user said "all cta button like 'Book Free trail class' etc".
                // I will replace wa.me/923166694116 everywhere.

                if ($new_line !== $line) {
                    $changed = true;
                }
                $new_lines[] = $new_line;
            }
        } else {
            $new_lines[] = $line;
        }
    }
    
    if ($changed) {
        file_put_contents($file, implode("\n", $new_lines));
        echo "Updated $file\n";
    }
}
echo "Done.\n";
