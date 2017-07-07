<?php
/*
 * Image Describer. Image on one side, title + text on the other
 * Optional link
 */

$img = get_field('image_describer_img');
$img = $img ? $img : get_sub_field('image_describer_img');
$title = get_field('image_describer_title');
$title = $title ? $title : get_sub_field('image_describer_title');
$text = get_field('image_describer_text');
$text = $text ? $text : get_sub_field('image_describer_text');
$link = get_field('image_describer_link');
$link = $link ? $link : get_sub_field('image_describer_link');

$image_describer_class = 'image-describer container-site';
$image_describer_class = $reversed ? $image_describer_class .' image-describer--reversed' : $image_describer_class;

$image_describer_wrapper_class = 'image-describer__wrapper padding-site';
$image_describer_wrapper_class = $border ? $image_describer_wrapper_class .' image-describer__wrapper--border' : $image_describer_wrapper_class;

$half_class = 'image-describer__image-wrapper image-describer__half';
$half_class = $reversed ? $half_class .' image-describer__half--reversed image-describer__image-wrapper--reversed' : $half_class;

$img_class = 'image-describer__image';
$img_class = $reversed ? $img_class : $img_class .' image-describer__image--reversed';
?>

<div class="<?php echo esc_attr($image_describer_wrapper_class); ?>">
  <section class="<?php echo esc_attr($image_describer_class); ?>">
    <div class="<?php echo esc_attr($half_class); ?>">
      <img class="<?php echo esc_attr($img_class); ?>" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
    </div>
    <div class="image-describer__content image-describer__half">
      <h2 class="image-describer__title"><?php echo esc_html($title); ?></h2>
      <div class="image-describer__text">
        <?php echo $text; ?>
      </div>
      <?php if ($link): ?>
        <a class="btn image-describer__link" href="<?php echo esc_url($link); ?>">
          View Details
        </a>
      <?php endif; ?>
    </div>
  </section>
</div>
