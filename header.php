<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



<header class="header clearfix">
<!-- <img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-test.png" alt="logo">     -->
<a href="<?php echo home_url(); ?>" class="header__logo"><?php bloginfo('name'); ?></a>
<a href="" class="header__icon-bar"><span></span><span></span><span></span></a>


<?php /* Main Navigation - inserire menu dinamico */
    // wp_die(var_dump(get_registered_nav_menus()));
    get_terms('nav_menu');
    wp_nav_menu( array(
        'theme_location' => 'header', // nome dato in function.php
        'depth' => 2, // può avere sotto menu, quindi tendine
        'container' => false, // non vogliamo nessun container
        //'container' => 'nav',
        //'container_class' => 'prova',
        // 'menu_id' => 'collapseExample'
        'menu_class' => 'header__nav', // classe che abbiamo in ul
        'add_li_class' => 'header__nav__item', // classe che abbiamo in li
        // 'items_wrap' => '<div class="testttt" %2$s"'
        //'walker' => new jsc_wp_nav_menu_walker() // è una estensione del menu di navigazione - questa classe fornisce aiuto agli sviluppatori per cambiare completamente e riorganizzare il menu
    )
    );
?>



    <!-- <ul class="header__nav">
        <li class=header__nav__item><a href="">Nav 1</a></li>
        <li class=header__nav__item><a href="">Nav 2</a></li>
        <li class=header__nav__item><a href="">Nav 3</a></li>
        <li class=header__nav__item><a href="">Nav 4</a></li>
        <li class=header__nav__item><a href="">Nav 5</a></li>
    </ul> -->
</header>

<?php if(is_front_page()){ ?>
  <h1 class="main-title"><?php the_title() ?></h1>
  <h2 class="blog-info-name"><?php bloginfo('name'); ?></h2>
  <h3 class="blog-info-description"><?php bloginfo('description'); ?></h3>
<?php } else if (is_category() || is_tag() ) { ?>
  <h1 class="main-title"><?php echo single_cat_title() ?> </h1>
<?php } else if (is_search() ) { ?>
  <h1 class="main-title">Risultati della ricerca per: <strong><i><?php echo $s ?></i></strong></h1>
<?php } ?>
