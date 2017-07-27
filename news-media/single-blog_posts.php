<?php
/**
 * The template for displaying news and specials
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JBEC
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="padding-site">
        <div class="container-site">
          <div class="site-content-wrapper">
      			<?php
      			while ( have_posts() ) : the_post();
      			?>

      			<section id="two-column-wrapper" class="clear site-container">
      				<div class="two-column-item">
      					<?php get_template_part('template-parts/part', 'category-select-column'); ?>
      				</div>
      				<div class="two-column-item">
      					<?php get_template_part('template-parts/content', 'news-specials'); ?>
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
