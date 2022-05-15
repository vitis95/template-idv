
<?php

class jsc_wp_nav_menu_walker extends Walker_Nav_menu
{

    function start_lvl(&$output, $depth = 0, $args = null)
    {

        $tmp_class = "child-" . $depth;
        $output .= "<ul class='" . $tmp_class . "'>";

    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $output .= "<li >A" . $item->title;
        // $tmp_class_2 = "header__nav__item";
        // $output .= "<li class='" . $tmp_class_2 . "'>A" . $item->title;
        // var_dump($depth);
        // var_dump($args);
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "...</li>";
    }

}

?>