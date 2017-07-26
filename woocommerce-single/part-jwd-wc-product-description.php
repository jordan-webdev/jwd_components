<?php
/*
 * Template Part for displaying the product gallery and description
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

$id = get_the_ID();
$product = new WC_Product($id);

$currency = get_woocommerce_currency_symbol();
$price = $product->get_price();
$in_stock = $product->get_stock_status() == "instock" ? true : false;
?>

<div class="jwd-wc-product-description flex flex-wrap">

  <!-- Product Gallery -->
  <div class="jwd-wc-product-description__gallery js-flex-compare">

    <?php
      $full = get_the_post_thumbnail_url();
      $large = get_the_post_thumbnail_url($post->ID, 'large');
      $medium = get_the_post_thumbnail_url($post->ID, 'medium');
    ?>

    <!-- Main Image -->
    <a data-fancybox="product-gallery" class="jwd-wc-product-description__link jwd-wc-product-description__main-image-wrapper" href="<?php echo esc_url(get_the_post_thumbnail_url()); ?>"
    >
      <img
        src="<?php echo esc_url($large); ?>" alt="" class="js-jwd-wc-product-description__gallery-main"
        data-full="<?php echo esc_url($full); ?>"
        data-large="<?php echo esc_url($large); ?>"
        data-medium="<?php echo esc_url($medium); ?>"
      />
    </a>

    <p class="color-primary text-center jwd-wc-product-description__thumbs-text">Click thumbnails for larger image</p>

    <div class="jwd-wc-product-description__thumbs-wrapper flex space-between relative">
      <!-- Reuse the thumbnail for sizing purposes. Hide with css -->
      <div class="hidden">
        <img src="<?php echo esc_url($large); ?>" alt="" />
      </div>

      <!-- Thumbnails -->
      <div class="jwd-wc-product-description__thumbs flex space-between">
        <?php
          $attachment_ids = $product->get_gallery_image_ids();

          if ( $attachment_ids && has_post_thumbnail() ) :
            foreach ( $attachment_ids as $attachment_id ):
              $full = wp_get_attachment_image_url($attachment_id, 'full');
              $large = wp_get_attachment_image_url($attachment_id, 'large');
              $medium = wp_get_attachment_image_url($attachment_id, 'medium');
            ?>
              <!-- Thumbnail -->
              <div class="jwd-wc-product-description__thumb-wrapper pointer">
                <img
                  src="<?php echo esc_url($medium); ?>" alt="" class="js-jwd-wc-product-description__gallery-thumb jwd-wc-product-description__thumb"
                  data-full="<?php echo esc_url($full); ?>"
                  data-large="<?php echo esc_url($large); ?>"
                  data-medium="<?php echo esc_url($medium); ?>"
                />
              </div>
              <!-- Empty link for fancybox gallery -->
              <a data-fancybox="product-gallery" class="jwd-wc-product-description__link js-jwd-wc-product-description__hidden-link none" href="<?php echo esc_url($full); ?>"></a>
            <?php endforeach;
          endif; ?>
        </div>
    </div>
  </div>

  <!-- Product Content -->
  <div class="jwd-wc-product-description__content js-flex-compare">
    <?php the_title('<h2 class="jwd-wc-product-description__title color-primary header-fluid-size">', '</h2>'); ?>
    <div class="jwd-wc-product-description__text-wrapper">
      <?php the_content(); ?>
    </div>

    <?php get_template_part('template-parts/part', 'jwd-woocommerce-products-specs'); ?>
    <?php get_template_part('template-parts/part', 'price-stock'); ?>
  </div>

 </div>
