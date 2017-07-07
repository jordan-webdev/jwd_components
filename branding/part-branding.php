<?php
/*
 * The site logo, phone number, e-mail and business hours
 */

$images = get_template_directory_uri() . '/images';
$phone = get_field('site_phone', 'options');
$email = get_field('site_email', 'options');
?>

<div class="branding__wrapper padding-site">

  <div class="branding container-site">

      <!-- Logo -->
      <?php if (is_front_page()) : ?>
        <h1 class="branding__logo-h1">
          <a class="branding__logo-link" href="<?php echo get_home_url(); ?>" rel="home">
            <img class="branding__logo-image" src="<?php echo get_header_image(); ?>" alt="<?php bloginfo("title"); ?>">
            <span class="screen-reader-text"><?php bloginfo("name"); ?></span>
          </a>
        </h1>
      <?php else : ?>
        <a class="branding__logo-link" href="<?php echo get_home_url(); ?>" rel="home">
          <img class="branding__logo-image" src="<?php echo get_header_image(); ?>" alt="<?php bloginfo("title"); ?>">
          <span class="screen-reader-text"><?php bloginfo("name"); ?></span>
        </a>
      <?php
    endif; ?>

    <ul class="branding__info flex">

      <!-- Phone -->
      <li class="branding__info-item flex">
        <div>
          <img class="branding__icon" src="<?php echo $images; ?>/1489102854_phone-min.png"/>
        </div>
        <div>
          <h2 class="branding__label color-primary">CALL US NOW</h2>
          <a href="esc" class="branding__detail"><?php echo esc_html($phone); ?></a>
        </div>
      </li>

      <!-- Email -->
      <li class="branding__info-item flex">
        <div>
          <img class="branding__icon" src="<?php echo $images; ?>/1489104304_envelope-min.png"/>
        </div>
        <div>
          <h2 class="branding__label color-primary">EMAIL US</h2>
          <a href="mailto: <?php echo esc_attr($email); ?>" class="branding__detail"><?php echo esc_html($email); ?></a>
        </div>
      </li>

      <!-- Business Hours -->
      <li class="branding__info-item hours flex">
        <div>
          <img class="branding__icon" src="<?php echo $images; ?>/1489102920_clock-min.png" />
        </div>
        <div>
          <h2 class="branding__label color-primary">BUSINESS HOURS</h2>
          <?php if (have_rows('business_hours', 'options')): ?>
            <?php while (have_rows('business_hours', 'options')):
              the_row();
              $days = get_sub_field('business_hours_days');
              $hours = get_sub_field('business_hours_hours'); ?>
              <div class='hours__row branding__detail'>
                <span class='hours__days'> <?php echo esc_html($days); ?></span>
                <span class='bhours__hours'> <?php echo esc_html($hours); ?></span>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </li>

    </ul>

  </div>

</div>
