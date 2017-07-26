<?php
/*
 * Template Part for the Overview section of the product chart
 */
?>

<div id="overview" class="product-chart__overview">
  <h2 class="product-chart__title flex space-between">
    OVERVIEW
    <div class="product-chart__collapse-toggle pointer">
      <span class="fa fa-chevron-up" aria-hidden="true"></span>
    </div>
  </h2>

  <div class="product-chart__collapse-area">
    <?php if (have_rows("image_describers")) : ?>
      <div class="image-describers">
      <?php $i = 1; ?>
      <?php while (have_rows("image_describers")) :
        the_row();
        $reversed = $i % 2 == 0 ? true : false;
        $border = false;
        include(locate_template('template-parts/image-describer/part-image-describer.php'));

      ?>
      <?php $i++; ?>
      <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
