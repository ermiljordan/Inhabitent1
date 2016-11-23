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

<p><a href="<?php echo $url ?>" class="shop-botton"><?php echo $term->name.' Stuff'; ?></a></p>
    </div>
        <?php
        }
        ?>
  </div>
 </section> <!-- shop stuff -->


<!--INHABITENT JOURNAL-->
<section class ="inhabitent-journal"></section>
  <h2>Inhabitent Journal</h2>
    <div class="get-post">

      <?php
       $args = array( 'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'DESC',);
        $product_posts = get_posts( $args );
      ?>

      <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
        <div class ="post-content">
          <?php the_post_thumbnail(); ?>
        <div class="journal-info">
          <p> <?php the_date(); ?>
              <?php $comments_count = wp_count_comments();
              echo $comments_count->approved . "Comments"; ?>
          </p>

          <h3><a href ="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <a class="read" href="<?php the_permalink(); ?>">Read entry</a>
        </div>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
</section>

<!--ADVENTURE TIME!-->
  <div class= "latest-adventures">
    <h2>Latest Adventures</h2>

    <section class= "adventures">
        <div class="photo-1">
            <h3><a class = "adventure-link" href ="#">Getting Back to Nature in a Canoe</a></h3>
            <p><a class = "read-more-button" href ="#">Read More</a></p>
        </div>
        <div class="photo-right">
            <div class="photo-2">
                <h3><a class = "adventure-link" href ="#">A night with Friends at the Beach</a></h3><br>
                <p><a class = "read-more-button" href ="#">Read More</a></p>

            </div>
            <div class = "photo-bottom">
                <div class="photo-3">
                    <h3><a class = "adventure-link" href ="#">Taking in the View at Big Mountain</a></h3>
                    <p><a class = "read-more-button" href ="#">Read More</a></p>

                </div>
                <div class="photo-4">
                    <h3><a class = "adventure-link" href ="#">Star-Gazing at the Night Sky</a></h3>
                    <p><a class = "read-more-button" href ="#">Read More</a></p>

                </div>
            </div>
        </div>

    </section>
     <p><a class = "more-adventures-button" href ="#">More Adventures</a></p>
</div>

<?php get_footer(); ?>

    </section>
