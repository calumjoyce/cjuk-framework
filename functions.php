<?php

add_action('wp_enqueue_scripts', 'cjuk_scripts');
    function cjuk_scripts() {
        wp_enqueue_style('tailwind', get_template_directory_uri().'/dist/assets/css/tailwind.css', array(), 1 );
        wp_enqueue_style('soleil', 'https://fonts.cdnfonts.com/css/soleil');
        wp_enqueue_script('mainjs', get_template_directory_uri().'/src/assets/js/main.js', array(), 1 );
    }

// Theme support
add_theme_support('menus');

// Additional functions
include get_template_directory() . '/inc/advanced-custom-fields.php';
include get_template_directory() . '/inc/custom-blocks.php';
include get_template_directory() . '/inc/block-functions.php';

// Menus
add_action( 'init', 'register_header_menu' );
    function register_header_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
    }

?>