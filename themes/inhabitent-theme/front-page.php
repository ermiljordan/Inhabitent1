<?php
/**
 * The template for displaying all pages.
 * Template Name: Front Page
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <div class ="hero-images">
    <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" class ="hero-img" alt="inhabitent circle logo" />
  </div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part ( 'template-parts/content', 'page' ); ?>

    <?php endwhile ?>

  </main><!-- #main -->
</div><!-- #primary -->

<section class = "shop-stuff">
  <h2>Shop Stuff</h2>
    <div class="shop-section">

      <?php   
          $terms = get_terms('product_type');
          foreach ($terms as $term) {
      ?>

      <?php
        $url = get_term_link ($term->slug , 'product_type');
      ?>

    <div class="shop-stuff-content">
      <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg">
        <p>
          <?php echo $term->description ?>
        </p>

        <p><a href= '$url' class='button'><?php echo $term->name ?></a></p>
    </div>
        <?php
        }
        ?>
  </div>
 </section> <!-- shop stuff -->

      <section class ="inhabitent-journal"></section>
      <h2 class ="entry-class"></h2>

      <div>
        <h2 class="latest-adventures">Latest Adventures</h2>
      <section class ="adventures">
        <div class="photo-1">
        </div>
        <div class="right-photo">
          <div class="photo-2">
          </div>
        <div class="bottom-photo">
          <div class= "photo-3">
          </div>
          <div class="photo-4">
          </div>
        </div>
        </div>
      </section>
    </div>
<?php get_footer(); ?>
