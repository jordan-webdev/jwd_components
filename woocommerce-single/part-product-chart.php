<?php
/*
 * Template part consisting of other parts for configuration, specification
 * overview, PDFs and add-to-cart module
 */
?>

<div class="product-chart">

  <!-- Headers -->
  <?php get_template_part('template-parts/part', 'product-headers'); ?>

  <div class="product-chart__grid flex column align-start">

    <div class="product-chart__information flex-grow-1 align-self-stretch">
      <!-- Configure -->
      <?php get_template_part('template-parts/part', 'configure'); ?>

      <!-- Specifications -->
      <?php get_template_part('template-parts/part', 'specifications'); ?>

      <!-- Overview -->
      <?php get_template_part('template-parts/part', 'overview'); ?>

      <!-- Download PDF -->
      <?php get_template_part('template-parts/part', 'pdf'); ?>
    </div>

    <!-- Add-To-Cart module -->
    <?php get_template_part('template-parts/part', 'add-to-cart'); ?>

</div>

</div>
