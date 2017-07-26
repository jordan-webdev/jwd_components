<?php
/*
 * Template Part for the Configure section of the product chart
 */
?>

<div id="configure" class="product-chart__configure">
  <h2 class="product-chart__title flex space-between">
    CONFIGURE
    <div class="product-chart__collapse-toggle pointer">
      <span class="fa fa-chevron-up" aria-hidden="true"></span>
    </div>
  </h2>

  <div class="product-chart__collapse-area">
    <?php woocommerce_template_single_add_to_cart(); ?>
  </div>
</div>
