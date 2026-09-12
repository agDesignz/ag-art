<?php
function editor_setup_theme() {
    add_theme_support('editor-styles');
    add_editor_style([
        '/build/index.css'
    ]);
}