<div class="product-description container-site">
  <header class="product-description__header">
  	<?php the_title('<h2 class="product-description__title color-secondary"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
  </header><!-- .entry-header -->

  <div class="product-description__grid">
    <!-- Image + Link for larger image -->
    <div class="product-description__image-wrapper">
      <?php $link = get_the_post_thumbnail_url(); ?>
      <img class="product-description__image" src="about:blank"; alt="" data-src=<?php echo $link; ?>
      <a data-fancybox="product-image" class="product-description__view-larger-link" href="<?php echo esc_url($link); ?>"></a>
    </div>

    <!-- Product Content -->
    <div class="product-description__content color-secondary">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <div class="product-description__cta-buttons">
        <button class="btn" type="button">Request a quote for <?php echo get_the_title(); ?></button>
        <?php
          $link = get_home_url() .'/wp-content/uploads/'. get_post_meta($post->ID, 'product_pdf', true);
          //$link = get_field('product_pdf')
        ?>
        <a class="btn btn--reversed btn--reversed-border" href="<?php echo esc_url($link); ?>" rel="noopener noreferrer" target="_blank">Download PDF</a>
      </div>
    </div>
  </div>
</div>
