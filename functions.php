<?php


add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('widgets');
add_theme_support('widgets-block-editor');


function load_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'load_theme_scripts');