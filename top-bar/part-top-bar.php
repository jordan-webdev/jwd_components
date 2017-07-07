<?php
/*
 * A top bar, containing social media, the site description, the account page
 * link and the shopping cart.
 */
 ?>

<div class="top-bar__wrapper font-primary color-secondary--bg color-white padding-site">

  <div class="top-bar container-site">

    <!-- Social Media -->
    <?php if (have_rows('header_add_social_media', 'options')): ?>
      <ul class="top-bar__social horizontal_list">
        <?php while (have_rows('header_add_social_media', 'options')): the_row(); ?>
          <?php
          $social_media = get_sub_field('header_social_media');
          $name = $social_media['label'];
          $name_lower = strtolower($name);
          $link = $social_media['value'];
          ?>
          <li class="top-bar__social_item horizontal_list__item">
            <a class="top-bar__social_link" href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
              <span class="fa fa-<?php echo esc_attr($name_lower); ?>"></span>
              <span class="screen-reader-text"><?php echo esc_html($name); ?></span>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>

    <?php site_description("top-bar__description"); ?>

    <div>
      <!-- Login -->
      <a class="top-bar__login" href="<?php echo get_permalink(59); ?>">
        <?php fa('sign-in'); ?>
        <span>Login / Register</span>
      </a>

      <!-- Cart -->
      <a
        class="top-bar__cart cart-customlocation color-primary"
        href="<?php echo wc_get_cart_url(); ?>"
        title="<?php _e('View your shopping cart'); ?>"
      >
        <?php fa('shopping-cart', 'top-bar__cart_icon'); ?>
        <span class="top-bar__total color-black"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        <span class="top-bar__cost"><?php echo WC()->cart->get_cart_total(); ?></span>
      </a>
    </div>

</div>

</div>
