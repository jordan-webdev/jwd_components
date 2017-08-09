<?php
/*
* Call to action. Large bg image with two lines of text and a button
*/

$text__btn = get_field('cta_text_btn');
$text__btn = $text__btn ? $text__btn : 'Learn more';
$text__large = get_field('cta_text_large');
$text__small = get_field('cta_text_small');
$link = get_field('cta_link');
$img = get_field('cta_img');
?>
 <section
  class="cta js-responsive-bg"
  data-lg-bg="<?php echo esc_url($img['url']); ?>"
  data-sm-bg="<?php echo esc_url($img['sizes']['large']); ?>"
  >
   <h1 class="cta__header color-white">
     <span class="cta__large block"><?php echo esc_html($text__large); ?></span>
     <span class="cta__small block"><?php echo esc_html($text__small); ?></span>
   </h1>
   <a href="<?php echo esc_attr($link); ?>" class="btn cta__btn"><?php echo esc_html($text__btn); ?></a>
 </section>
