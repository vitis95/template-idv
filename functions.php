<?php


add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('widgets');
add_theme_support('widgets-block-editor');


function load_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'load_theme_scripts');

function wpspecial_script_footer() {
	?>
		<script>
            $(document).ready(function(){
            console.log("CA")
            $(".header__icon-bar").click(function(e){
            e.preventDefault();
            $(".header__nav").toggleClass('show-menu'); }); });
		</script>
	<?php
}
add_action('wp_footer', 'wpspecial_script_footer');

// function cool_scripts () {
//     wp_enqueue_script('cool-stuff', get_stylesheet_uri() . '/js/script.js', array('jquery'), '3.6.0', false);
// }
// add_action('wp_enqueue_scripts', 'cool-stuff');
