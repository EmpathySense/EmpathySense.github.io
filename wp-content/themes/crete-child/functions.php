<?php
/**
 * Theme functions and definitions.
 */
function crete_child_enqueue_styles() {
    wp_enqueue_style( 'crete-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'crete-style' ),
        wp_get_theme()->get('Version')
    );
}

add_action(  'wp_enqueue_scripts', 'crete_child_enqueue_styles' );