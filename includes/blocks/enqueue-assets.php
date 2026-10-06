<?php

function enqueue_ag_art_assets() {
    // Define the SVG data
    $svg_files = [
        'logo' => 'logo.svg',
        'facebook' => 'facebook.svg',
        'instagram' => 'instagram.svg',
    ];

    $svg_data = [];
    foreach ($svg_files as $key => $file) {
        $svg_path = get_template_directory() . '/assets/icons/' . $file;
        if (file_exists($svg_path)) {
            $svg_content = file_get_contents($svg_path);
            $svg_data[$key] = $svg_content;
        }
    }

    // Enqueue the script that defines agArtSVGData
    wp_enqueue_script(
        'ag-art-svg-data',
        '', // No external file, just inline script
        [], // No dependencies
        '1.0',
        true // Load in footer (not strictly necessary for inline scripts)
    );

    // Add the inline script to define agArtSVGData
    wp_add_inline_script(
        'ag-art-svg-data',
        'const agArtSVGData = ' . wp_json_encode([
            'icons' => $svg_data,
            'assetPath' => get_template_directory_uri(),
        ]) . ';',
        'before' // Ensure it's added before the script it depends on
    );

    // Enqueue your block's scripts
    wp_enqueue_script(
        'ag-art-blocks',
        get_template_directory_uri() . '/blocks/index.js',
        ['ag-art-svg-data'], // Depend on ag-art-svg-data
        '1.0',
        true
    );
}