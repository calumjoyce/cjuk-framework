<?php

add_action('wp_enqueue_scripts', 'cjuk_scripts');
    function cjuk_scripts() {
        wp_enqueue_style( 'your-theme-styles', get_template_directory_uri().'/dist/assets/css/tailwind.css', array(), 1 );
    }

?>