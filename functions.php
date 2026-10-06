<?php

// Variables

// Includes
include(get_theme_file_path('/includes/blocks/block-setup.php'));
// include(get_theme_file_path('/includes/blocks/enqueue-assets.php'));
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
// include(get_theme_file_path('/includes/media/svg-upload.php'));
// include(get_theme_file_path('/includes/media/svg-sanitize.php'));


// // Hooks
add_action( 'init', 'register_blocks' );
// add_action('enqueue_block_editor_assets', 'enqueue_ag_art_assets');
// add_action('wp_enqueue_scripts', 'enqueue_ag_art_assets');
add_action('wp_enqueue_scripts', 'theme_files');
add_action('after_setup_theme', 'editor_setup_theme');
// add_filter('mime_types', 'enable_svg_upload');
// add_filter('wp_handle_upload_prefilter', 'sanitize_svg_upload', 10, 4);


// <?php
/**
 * Return inline SVG markup for a theme icon.
 *
 * @param string $slug Filename without extension (e.g. 'logo').
 */
function my_theme_get_icon( string $slug ): string {
	$allowed = [ 'logo', 'search', 'cart' ];
	if ( ! in_array( $slug, $allowed, true ) ) {
		return '';
	}

	$path = get_theme_file_path( "assets/icons/{$slug}.svg" );
	if ( ! is_readable( $path ) ) {
		return '';
	}

	$svg = file_get_contents( $path );
	return $svg ? $svg : '';
}