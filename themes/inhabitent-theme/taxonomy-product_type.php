<?php get_header(); ?>

<div id="primary" class="content-area product-area">

		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					 the_archive_title( '<h1 class="page-title">', '</h1>') ;
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
    <div id="primary" class="archive-area">
                    <?php while ( have_posts() ) : the_post(); ?>                 
                        <div class = "product-item">
                        <article class= id="post-<?php the_ID(); ?>"<?php post_class(); ?>

                            <div class = "product-thumbnail">
                                <a href="<?php the_permalink() ; ?> "><?php the_post_thumbnail( 'large' ); ?></a>
                            </div>
                            <div class = "item-price">
                                <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                                <span><?php echo CFS()->get( 'product_price' ); ?></span>
                            </div>
                        </article><!-- #post-## -->
                        </div> <!-- product-item -->
                        <?php endwhile ?>     
                </div> <!-- archive-area -->
                    <?php else : ?>
                        <?php get_template_part( 'template-parts/content', 'none' ); ?>
                    <?php endif; ?>
    </section>  
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

