<?php
/**
 * Template part for displaying the FAQs.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package parente_borean
 */

$args = array(
	'post_type'      => 'faq',
	'posts_per_page' => -1,
);

$the_query = new WP_Query( $args );
?>
<img id="ajax-loader" src="<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif" alt="loading, please wait..." />
<?php  if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<article class="two-column-item-wrapper clear <?php echo get_the_category()[0]->category_nicename; ?>">
			<div class="faq-question">
				<img class="faq-arrow" src="<?php echo get_template_directory_uri(); ?>/images/drop-down-arrow-blue-min.png" alt="click to expand the answer" />
				<h3 class="dark-blue"><?php echo get_the_title(); ?></h3>
			</div>
			<div class="faq-answer">
				<?php the_content(); ?>
			</div>
		</article>
	<?php
		endwhile;
	endif;
	/* Restore original Post Data */
	wp_reset_postdata();
	?>
