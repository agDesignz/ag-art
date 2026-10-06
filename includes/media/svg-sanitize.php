<?php 

// Sanitize SVG files
function sanitize_svg_upload($data, $file, $filename, $mimes) {
    if ($data['type'] === 'image/svg+xml') {
        $svg_content = file_get_contents($file['tmp_name']);
        if (strpos($svg_content, '<?xml') !== false || strpos($svg_content, '<!DOCTYPE') !== false) {
            wp_die(__('SVG files are not allowed to contain XML or DOCTYPE declarations.', 'text-domain'));
        }
    }
    return $data;
}
