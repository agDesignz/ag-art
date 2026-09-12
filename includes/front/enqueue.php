<?php

function theme_files() {
    wp_register_style('agart-styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('agart-styles');
}