<?php
/**
 * Template part for displaying the FAQs.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package parente_borean
 */

?>
<img id="ajax-loader" src="<?php echo get_template_directory_uri(); ?>/ajax-loader.gif" alt="loading, please wait..." />

<article class="tax-accordions__accordion two-column-item-wrapper clear <?php echo get_the_category()[0]->category_nicename; ?>">
	<header class="tax-accordions__toggler flex align-center space-between color-grey--bg pointer">
		<h3 class="color-secondary normal font-16"><?php echo get_the_title(); ?></h3>
    <img class="tax-accordions__arrow" src="<?php echo get_template_directory_uri(); ?>/images/faq-arrow-min.png" alt="click to expand the answer" />
	</header>
	<div class="tax-accordions__pullout">
		<?php the_content(); ?>
	</div>
</article>
