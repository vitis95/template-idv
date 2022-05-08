
<?php get_header(); ?>



<div class="content">
	<!-- Start Loop - -->
	<!-- Controlliamo se ci sono post e con il ciclo while li andiamo a visualizzare -->
	<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>
		<!-- -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- link e titolo del post -->
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<!-- Data e Categorie, la virgola nel caso in cui ci siano diverse categorie. -->
				<p> <?php the_time('j M , Y') ?> - <?php the_category(', '); ?></p>
				<!-- link e immagine di evidenza -->
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail('templateidv_single', array('class' => 'img-res','alt' => get_the_title())); ?>
				</a>
				<!-- Visualizza le prime 4 o 5 righe dell'articolo -->
				<?php the_excerpt();?>
			</article>
			<!-- Finisce qui sotto il while, quindi la lista degli articoli -->
	<?php endwhile; ?>

		<!-- Paginazione con i numeri  -->
			<div class="pagination">
				<?php /* Pagination */
				global $wp_query;
				$big = 999999999; // need an unlikely integer
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );
				?>
			</div>
			<!-- Se non ci sono articoli, viene visualizzato questo messaggio. -->
		<?php else : ?>
		  <h3> <?php esc_html_e('Sorry, no posts matched your criteria.', 'templateidv'); ?> </h3>
		<?php endif; ?>
	<!-- End Loop -->
</div>
<aside class="sidebar">
	<?php get_sidebar(); ?>
</aside>



<?php get_footer(); ?>
