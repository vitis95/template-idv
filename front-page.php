<div class="container clearfix">
<?php get_header(); ?>


<h1 class="main-title"><?php the_title() ?></h1>
<h2 class="blog-info-name"><?php bloginfo('name'); ?></h2>
<h3 class="blog-info-description"><?php bloginfo('description'); ?></h3>


<div class="content">
	<article class="post">
		<h2>lorem</h2>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo temporibus aspernatur ex, ea, libero in iusto, maiores molestiae cumque earum nihil necessitatibus. Vel deserunt soluta reiciendis, impedit voluptatem nesciunt nisi?</p>
	</article>
	<article class="post">
		<h2>lorem</h2>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo temporibus aspernatur ex, ea, libero in iusto, maiores molestiae cumque earum nihil necessitatibus. Vel deserunt soluta reiciendis, impedit voluptatem nesciunt nisi?</p>
	</article>
	<article class="post">
		<h2>lorem</h2>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo temporibus aspernatur ex, ea, libero in iusto, maiores molestiae cumque earum nihil necessitatibus. Vel deserunt soluta reiciendis, impedit voluptatem nesciunt nisi?</p>
	</article>
</div>
<aside class="sidebar">
	<div class="widget">
		<ul>
			<li><a href="">Ultimi Articoli</a></li>
			<li><a href="">Ultimi Articoli</a></li>
			<li><a href="">Ultimi Articoli</a></li>
			<li><a href="">Ultimi Articoli</a></li>
			<li><a href="">Ultimi Articoli</a></li>
		</ul>
	</div>
</aside>






<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>



<?php get_footer(); ?>