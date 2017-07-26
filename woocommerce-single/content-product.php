<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes & Jordan Webdev
 * @package 	WooCommerce/Templates & jwd
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<!-- Gallery + Description -->
<?php get_template_part('template-parts/part', 'jwd-wc-product-description'); ?>

<!-- Configurations, Specs, Overview, PDFs and add-to-cart module -->
<?php get_template_part('template-parts/part', 'product-chart'); ?>

<!-- Up Arrow -->
<a class="up-arrow" href="#options" data-offset="-150">
  <img  src="<?php echo get_template_directory_uri(); ?>/images/product-up-arrow.png" alt="Click to go up" />
</a>
