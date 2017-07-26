<?php
/*
 * Template Part for the Specifications section of the product chart
 */

global $product;
$all_meta = get_post_meta($product->get_ID());
$attributes = unserialize($all_meta["_product_attributes"][0]);
?>

<div id="specifications" class="product-chart__specifications">
  <h2 class="product-chart__title flex space-between">
    SPECIFICATIONS
    <div class="product-chart__collapse-toggle pointer">
      <span class="fa fa-chevron-up" aria-hidden="true"></span>
    </div>
  </h2>

  <div class="product-chart__collapse-area">
    <?php foreach($attributes as $attr => $val):
      $label = $val['name'];
      $val = str_replace("breakline", "<br />", esc_html($val['value']));
    ?>
      <div class="product-chart__specification flex column align-start">
        <label class="product-chart__specification-label bold"><?php echo esc_html($label); ?></label>
        <p class="product-chart__specification-value align-start"><?php echo $val; ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</div>
