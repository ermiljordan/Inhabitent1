<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>


		<div class="entry-meta">
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
        		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
               <p class="product-price"><?php echo CFS()->get( 'product_price' ); ?> </p>

		<?php the_content(); ?>
        <div class = "social-button">
                <a class = "like-button" href ="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
                <a class = "twitter-button" href ="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
                <a class = "pinterest-button" href ="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
				</div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->