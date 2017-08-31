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
$tax_id = $query_obj->term_taxonomy_id;
$tax_parent = $query_obj->parent;
$tax_id = $tax_parent ? $tax_parent : $tax_id;
$tax_image = get_field('taxonomy_image', $tax.'_'.$tax_id);
$is_blog_category = $tax == "blog_category" ? true : false;
$bg = get_field('page_bg', $tax.'_'.$tax_id);
?>

	<div id="primary" class="content-area">
		<!-- BG image -->
		<main id="main"
			class="site-main js-responsive-bg <?php echo $bg ? "has-bg" : ""; ?>"
			<?php if ($bg): ?>
				data-lg-bg="<?php echo esc_url($bg["url"]); ?>"
				data-sm-bg="<?php echo esc_url($bg["sizes"]["medium_large"]); ?>"
			<?php endif; ?>
		>

			<div class="padding-site">
			  <div class="container-site">
					<!-- Intro -->
					<?php get_template_part('template-parts/part', 'intro'); ?>

					<?php if ($tax_image): ?>
						<!-- Tax Image -->
						<div class="tax-image flex align-center justify-center mar-t-20">
							<?php echo wp_get_attachment_image($tax_image['ID'], 'post-thumbnail'); ?>
						</div>
					<?php endif; ?>
			  </div>
			</div>

      <div class="site-content-wrapper">
        <div class="padding-site">
          <section class="relative">
						<img class="two-column-item__ajax-loader js-two-column-item__ajax-loader" src="<?php echo get_template_directory_uri() . "/ajax-loader.gif"; ?>" alt="Loading...please wait" />

      			<div class="clear container-site news-wrapper two-column-wrapper flex">
              <!-- Categories -->
      				<div class="two-column-item">
      					<?php get_template_part('template-parts/part', 'category-select-column'); ?>
      				</div>

              <!-- Results -->
      				<div id="js-blog-listing-results" class="two-column-item flex-grow-1 js-ajax-content-container">
								<div class="height-100 js-category-results">
		              <?php
									while ( have_posts() ) : the_post();
											if ($is_blog_category){
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

			<!-- CTA -->
			<?php
			$title = get_field('cta_thin_title', $tax.'_'.$tax_id);
			$text = get_field('cta_thin_text', $tax.'_'.$tax_id);
			$link = get_field('cta_thin_link', $tax.'_'.$tax_id);
			$link_text = get_field('cta_thin_link_text', $tax.'_'.$tax_id);
			include(locate_template("template-parts/part-cta-thin.php"));
			?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php
get_footer();
