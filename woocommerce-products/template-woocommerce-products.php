<?php
/**
 * Template Name: WooCommerce Products Listing
 *
 * The template for displaying the Service details Layout
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jwd
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main">

 			<?php
         while (have_posts()) : the_post();
             get_template_part('template-parts/part', 'breadcrumb');
             get_template_part('template-parts/part', 'intro');
         endwhile; // End of the loop.


        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'product',
          'posts_per_page' => 8,
          'paged' => $paged,
        );
        $query = new WP_Query($args);
      ?>

          <?php if ($query->have_posts()): ?>
            <div class="padding-site">
              <div class="container-site">
                <ul class="jwd-woocommerce-products flex flex-wrap container-site">
                <?php while ($query->have_posts()):
                  $query->the_post();
                ?>
                  <?php get_template_part('template-parts/content', 'woocommerce-products'); ?>
                <?php endwhile; ?>
                </ul>
              </div>

              <div class="container-site flex align-center justify-center load-more">
                <button
                  class="jwd-woocommerce-products__load-more btn load-more__btn js-load-more"
                  data-page="1"
                  data-selector=".jwd-woocommerce-products"
                >
                  Load More
                </button>
                <img class="load-more__loader" src="<?php echo get_template_directory_uri(); ?>/ajax-loader.gif" alt="loading, please wait..." />
              </div>
            </div>



            <?php //custom_pagination(); ?>
          <?php endif; wp_reset_postdata(); ?>

 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php
 get_footer();
