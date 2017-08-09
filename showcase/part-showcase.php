<?php
/*
 * Showcase module.
 * background, header, items, carousel
 */

 $bg = get_field('showcase_background');
 $title = get_field('showcase_title');
 $subtitle = get_field('showcase_subtitle');
?>

<section
  class="showcase js-responsive-bg padding-site"
  data-lg-bg="<?php echo esc_url($bg['url']); ?>"
	data-sm-bg="<?php echo esc_url($bg['sizes']['medium']); ?>"
>

  <header class="showcase__header">
    <h2 class="showcase__title color-primary header-fluid-size"><?php echo esc_html($title); ?></h2>
    <?php if ($subtitle): ?>
      <p class="showcase__subtitle"><?php echo esc_html($subtitle); ?></p>
    <?php endif; ?>
  </header>

  <?php if (have_rows('showcase_items')): ?>
    <ul class="showcase__items js-showcase__carousel color-white">
      <?php while (have_rows('showcase_items')):
        the_row();
        $link = get_term_link(get_sub_field('showcase_items_category')[0]);
        $img = get_sub_field('showcase_items_img');
        $title = get_sub_field('showcase_items_title');
      ?>
        <li class="showcase__item">
          <a href="<?php echo esc_url($link);?>">
            <div class="showcase__img-wrapper">
              <img class="showcase__img" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_url($img['alt']); ?>">
            </div>
            <h3 class="showcase__item-title color-primary"><?php echo esc_html($title); ?></h3>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>

</section>
