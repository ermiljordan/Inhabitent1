<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
            <div class= "social-buttons">
                <a class = "like-button" href ="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
                <a class = "twitter-button" href ="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
                <a class = "pinterest-button" href ="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
			</div>
            <?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
        <?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
