<?php

// Variables

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));

// // Hooks
add_action('wp_enqueue_scripts', 'theme_files');
add_action('after_setup_theme', 'editor_setup_theme');