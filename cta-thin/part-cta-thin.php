<?php
/*
 * Thin CTA banner. Title, text, link button
 */

$title = get_field('cta_thin_title');
$text = get_field('cta_thin_text');
$link = get_field('cta_thin_link');
$link_text = get_field('cta_thin_link_text');
?>

<div class="padding-site color-primary--bg">
  <section class="cta-thin color-white container-site">

    <div class="cta-thin__content">
      <h2 class="cta-thin__title"><?php echo esc_html($title); ?></h2>
      <?php if ($text): ?>
        <p class="cta-thin__text"><?php echo esc_html($text); ?></p>
      <?php endif; ?>
    </div>

    <a class="cta-thin__link btn btn--reversed" href="<?php echo esc_url($link); ?>">
      <?php echo esc_html($link_text); ?>
    </a>

  </section>
</div>
