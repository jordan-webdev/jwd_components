<?php if ( have_rows("product_specs_listing_specs") ) : ?>
  <ul class="jwd-woocommerce-products__specs">
    <?php while ( have_rows("product_specs_listing_specs") ) :
      the_row();
      $text = get_sub_field('product_specs_listing_spec')
    ?>
      <li class="jwd-woocommerce-products__spec color-secondary">
          <?php echo esc_html($text); ?>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>
