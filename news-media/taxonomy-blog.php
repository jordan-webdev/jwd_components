<?php
/**
 * The template for displaying blog posts, with the custom blog taxonomy (in order to preserve the "Products"
 * category base)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jwd
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php get_template_part('template-parts/part', 'breadcrumb'); ?>

      <div class="site-content-wrapper">
        <div class="padding-site">
          <section>
      			<div class="clear container-site news-wrapper two-column-wrapper flex flex-wrap">
              <!-- Categories -->
      				<div class="two-column-item">
      					<?php get_template_part('template-parts/part', 'category-select-column'); ?>
      				</div>

              <!-- Results -->
      				<div class="two-column-item js-ajax-content-container">
								<div class="height-100 js-category-results">
		              <?php while ( have_posts() ) : the_post(); ?>
		                <?php get_template_part('template-parts/part', 'category-description-column'); ?>
		              <?php endwhile; ?>
								</div>
      				</div>
      			</div>
            <!-- Pagination -->
            <div class="ajax-pagination">
              <?php ajax_archive_pagination(); ?>
            </div>
          </section>
        </div>
      </div>


		</main><!-- #main -->
	</div><!-- #primary -->



<?php
get_footer();
