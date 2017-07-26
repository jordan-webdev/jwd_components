<?php
/*
 * Template part for the Add-To-Cart module of the product chart
 */

$phone = get_field('site_phone', 'options');
?>
<div class="product-chart__add-to-cart text-center">
  <div class="product-chart__qty-wrapper flex align-center justify-center">
    <span class="product-chart__qty-text">Qty</span>
    <input class="product-chart__qty" type="number" value="1" />
  </div>

  <?php get_template_part('template-parts/part', 'price-stock'); ?>

  <div class="product-chart__buttons flex column align-center">

    <button class="btn product-chart__add-btn" type="button">ADD TO CART</button>

    <a class="product-chart__phone btn btn--grey" href="tel:<?php echo esc_attr($phone); ?>">
      <span class="fa fa-phone" aria-hidden="true"></span>
      Call for volume pricing
    </a>

  </div>
</div>
