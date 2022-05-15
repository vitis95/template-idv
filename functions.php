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
            'nav_primary' => esc_html__( 'Nav Primary', 'tempalteidv'),
            'nav_secondary' => esc_html__( 'Nav Secondary', 'tempalteidv')
        ) );
        // Load theme languages
        load_theme_textdomain( 'templateidv', get_template_directory().'/languages' );
    }
}
add_action( 'after_setup_theme', 'templateidv_setup');
/* ------------------------------
Add Class CSS
------------------------------ */
   // Additional class on li - l'ho fatto per aggiungere la classe creata da me --> =header__nav__item e non quella che assegna wp alle li ovvero .menu-item 
   function add_additional_class_on_li($classes, $item, $args) {
    if (isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
    }
    return $classes;
  }

  add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
/* ------------------------------
Walker
------------------------------ */
if (!function_exists('register_navwalker')) :
  function register_navwalker() {
      require('inc/jsc-navwalker.php');
  }
endif;
add_action('after_setup_theme', 'register_navwalker');
/* ------------------------------
Register Sidebars
------------------------------ */
if (! function_exists('tempalteidv_sidebars')) {
  function tempalteidv_sidebars() {
    $args = array(
      'name'          => 'Primary',
      'id'            => 'primary',
      'description'   => 'Normal full width sidebar.',
      'class'         => '',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widgettitle">',
      'after_title'   => '</h3>'
    );

    register_sidebar( $args );

  }
}

add_action( 'widgets_init', 'tempalteidv_sidebars' );


/* ------------------------------
Include Styles and script
------------------------------ */
if (!function_exists('templateidv_styles_scripts') ) {
    function templateidv_styles_scripts() {
        // wp_enqueue_script('jquery');
        wp_enqueue_script('templateidv_scripts',get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);
        wp_enqueue_style('tempalteidv-sourcesanspro','//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');
        wp_enqueue_style( 'tempalteidv-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css');
        wp_enqueue_style('tempalteidv', get_template_directory_uri().'/style.css');

    }
}
add_action('wp_enqueue_scripts', 'templateidv_styles_scripts');
