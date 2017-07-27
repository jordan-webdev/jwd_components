<?php
/**
 * Template Name: Blog Section
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
			<?php
			while ( have_posts() ) : the_post();
			?>

      <div class="site-content-wrapper">
        <div class="padding-site">
    			<section id="two-column-wrapper" class="clear container-site news-wrapper">
    				<div class="two-column-item">
    					<?php get_template_part('template-parts/part', 'category-select-column'); ?>
    				</div>
    				<div class="two-column-item color-grey--bg">
    					<?php get_template_part('template-parts/part', 'category-description-column'); ?>
    				</div>
    			</section>
        </div>
      </div>

			<?php
			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php
get_footer();
