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
<a href="" class="header__logo"><?php bloginfo('name'); ?></a>
<a href="" class="header__icon-bar"><span></span><span></span><span></span></a>


<?php /* Main Navigation - inserire menu dinamico */
    wp_nav_menu( array(
        'theme_location' => 'header', // nome dato in function.php
        'depth' => 2, // può avere sotto menu, quindi tendine
        'container' => false, // non vogliamo nessun container
        'menu_class' => 'header__nav' // classe che abbiamo in ul
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
