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
?>

<section class="image-describer">
  <div class="image-describer__image-wrapper">
    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
  </div>
  <div class="image-describer__content">
    <h2 class="image-describer__title"><?php echo esc_html($title); ?></h2>
    <p class="image-describer__text"><?php echo esc_html($text); ?></p>
    <?php if ($link): ?>
      <a class="btn image-describer__link" href="<?php echo esc_url($link); ?>">
        View Details
      </a>
    <?php endif; ?>
  </div>
</section>
