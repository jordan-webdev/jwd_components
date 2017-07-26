<?php
/*
 * Template Part for the Download PDF section of the product chart
 */
?>

<div id="pdf" class="product-chart__pdf">
  <h2 class="product-chart__title flex space-between">
    DOWNLOAD PDF
    <div class="product-chart__collapse-toggle pointer">
      <span class="fa fa-chevron-up" aria-hidden="true"></span>
    </div>
  </h2>

  <div class="product-chart__collapse-area">
    <?php if ( have_rows("product_specs_pdfs") ) : ?>
      <?php while ( have_rows("product_specs_pdfs") ) :
        the_row();
        $link = get_sub_field('product_specs_pdf')['url'];
        $text = get_sub_field('product_specs_pdf_text');
      ?>
      <div class="product-chart__pdf-wrapper flex align-center mar-b-10">
        <img class="mar-r-10" src="<?php echo get_template_directory_uri(); ?>/images/pdf.jpg" alt="Download PDF">
        <a class="product-chart__pdf-link color-secondary" href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
          <?php echo esc_html($text); ?>
        </a>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
