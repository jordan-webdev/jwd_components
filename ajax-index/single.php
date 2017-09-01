<?php
/**
 * The template for displaying single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jwd
 */

get_header();

$tax_id = 18;
$tax_image = get_field('taxonomy_image', 'blog_category_'.$tax_id);
$bg = get_field('page_bg', 'blog_category_18');
?>

	<div id="primary" class="content-area">
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
					<?php
						$title =  'Blog';
						$text =  str_replace(array("<p>", "</p>"), "", term_description(18, 'blog_category'));
						include(locate_template("template-parts/part-intro.php"));
					?>

					<?php if ($tax_image): ?>
						<!-- Tax Image -->
						<div class="tax-image flex align-center justify-center mar-t-20">
							<?php echo wp_get_attachment_image($tax_image['ID'], 'post-thumbnail'); ?>
						</div>
					<?php endif; ?>

          <div class="site-content-wrapper">
      			<?php
      			while ( have_posts() ) : the_post();
      			?>

      			<section class="two-column-wrapper flex flex-wrap" class="clear site-container">
							<!-- Categories -->
      				<div class="two-column-item">
      					<?php get_template_part('template-parts/part', 'category-select-column'); ?>
      				</div>

							<!-- Results -->
      				<div id="js-blog-listing-results" class="two-column-item flex-grow-1 js-ajax-content-container">
								<div class="height-100 js-category-results">
      						<?php get_template_part('template-parts/content', 'blog'); ?>
								</div>
      				</div>
      			</section>

      			<?php
      			endwhile; // End of the loop.
      			?>
          </div>
        </div>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php
get_footer();
