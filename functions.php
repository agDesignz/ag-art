<?php

// Variables

// Includes
include(get_theme_file_path('/includes/media/get-icons.php'));

include(get_theme_file_path('/includes/blocks/block-setup.php'));
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));


// // Hooks
add_action( 'init', 'register_blocks' );
add_action('wp_enqueue_scripts', 'theme_files');
add_action('after_setup_theme', 'editor_setup_theme');


// <?php
/**
 * Return inline SVG markup for a theme icon.
*
* @param string $slug Filename without extension (e.g. 'logo').
*/
