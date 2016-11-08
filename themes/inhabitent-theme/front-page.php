<?php
/**
 * The template for displaying all pages.
 * Template Name: Front Page
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <section class ="hero-images">
    <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" class ="hero-img" alt="inhabitent circle logo" />
  </section> 

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section class ="shots-stuff"></section>

      <section class ="inhabitent-journal"></section>

      <section calss ="adventure"> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
