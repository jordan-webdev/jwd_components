<?php
/**
 * The template for displaying an index of taxonomy custom posts with ajax animations
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jwd
 */

get_header();

$query_obj = get_queried_object();
$tax = $query_obj->taxonomy;

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
		              <?php
									while ( have_posts() ) : the_post();
											if ($tax == "blog"){
												get_template_part('template-parts/part', 'category-description-column');
											} else{
												 get_template_part('template-parts/part', 'tax-accordions');
											}
		              endwhile; ?>
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
