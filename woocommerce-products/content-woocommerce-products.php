<?php
/**
 * Template part for displaying the content of the WooCommerce product on the listing page
 *
 * Includes Image, title, specs, price, stock/lead time, add to card
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jwd
 */

$link = get_the_permalink();
?>
<li class="jwd-woocommerce-products__item flex column">

  <div class="jwd-woocommerce-products__image-wrapper">
    <a class="jwd-woocommerce-products__image-link" href="<?php echo esc_url($link); ?>">
      <?php the_post_thumbnail(); ?>
    </a>
  </div>

  <h2 class="jwd-woocommerce-products__title color-primary"><?php echo get_the_title(); ?></h2>

  <?php get_template_part('template-parts/part', 'jwd-woocommerce-products-specs'); ?>

  <!-- Price, stock, link -->
  <div class="mar-t-auto">

    <?php get_template_part('template-parts/part', 'price-stock'); ?>

    <a class="jwd-woocommerce-products__link btn text-center block" href="<?php echo esc_url($link); ?>">View Product</a>

  </div>

</li>
