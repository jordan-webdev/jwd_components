<?php
/*
 * Template part for displaying a staff card, as part of the staff index
 */

$linked_in = get_field('staff_linked_in');
$position = get_field('staff_position');
$email = get_field('staff_email');
?>

<div class="index-staff__card">
  <!-- Image -->
  <div class="index-staff__image-wrapper mar-b-15">
    <?php the_post_thumbnail(); ?>
  </div>

  <!-- All Text Content -->
  <div class="index-staff__content">
    <!-- Name -->
    <h2 class="index-staff__title color-primary mar-b-10"><?php echo get_the_title(); ?></h2>

    <!-- Position + Social Media -->
    <div class="index-staff__position-social flex align-end color-secondary mar-b-7">
      <!-- Position -->
      <?php if ($position): ?>
        <span class="index-staff__position mar-r-10"><?php echo esc_html($position); ?></span>
      <?php endif; ?>
      <!-- Social Media -->
      <div class="index-staff__social">
        <!-- LinkedIn -->
        <?php if ($linked_in): ?>
          <a class="staff__linkedin-link mar-r-5" href="<?php echo esc_url($linked_in); ?>" target="_blank" rel="noopener noreferrer">
            <span class="fa fa-linkedin" aria-hidden="true"></span>
          </a>
        <?php endif; ?>
      </div>
    </div>

    <!-- Email -->
    <?php if ($email): ?>
      <a class="index-staff__email color-secondary" href="<?php echo esc_url($email); ?>"><?php echo esc_html($email); ?></a>
    <?php endif; ?>

    <!-- Dynamic Content -->
    <div class="index-staff__content-wrapper mar-t-15">
      <?php the_content(); ?>
    </div>
  </div>



</div>
