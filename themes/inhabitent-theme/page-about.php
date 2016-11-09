<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

        <h2 class="title">Our story</h2>
          <?php echo CFS()->get( 'our_story' ); ?>

          <h2 class="title">Our team</h2>
          <?php echo CFS()->get( 'our_team' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
