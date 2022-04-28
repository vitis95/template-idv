<?php
/* ------------------------------ 
Theme setup
------------------------------ */
if (! function_exists('templateidv_setup') ) {
    function templateidv_setup() {
        add_theme_support('menus');
        add_theme_support('title-tag');
        add_theme_support('widgets');
        add_theme_support('widgets-block-editor');

        // Enable automatic feed links
        add_theme_support( 'automatic-feed-links' );

        // Enable featured image
        add_theme_support( 'post-thumbnails' );

        // Thumbnail sizes
        add_image_size( 'tempalteidv_single', 800, 493, true ); // (cropped)
        add_image_size( 'tempalteidv_big', 1400, 928, true ); // (cropped)

        // Custom menu areas
        register_nav_menus( array(
            'header' => esc_html__( 'Header', 'tempalteidv')
        ) );

        // Load theme languages
        load_theme_textdomain( 'templateidv', get_template_directory().'/languages' );
    }
}
add_action( 'after_setup_theme', 'templateidv_setup');
/* ------------------------------ 
Include Styles and script
------------------------------ */
if (!function_exists('templateidv_styles_scripts') ) {
    function templateidv_styles_scripts() {
        // wp_enqueue_script('jquery');
        wp_enqueue_script('templateidv_scripts',get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);
        wp_enqueue_style('tempalteidv-sourcesanspro','//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');
        wp_enqueue_style('tempalteidv', get_template_directory_uri().'/style.css');
        
    }
}
add_action('wp_enqueue_scripts', 'templateidv_styles_scripts');







