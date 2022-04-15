<?php get_header(); ?>


<h1><?php the_title() ?></h1>

<h2><?php bloginfo('name'); ?></h2>
<h3><?php bloginfo('description'); ?></h3>

<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>



<?php get_footer(); ?>