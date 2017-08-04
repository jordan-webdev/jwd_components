<?php
/*
 * Template part for displaying a career (PDF, title, apply button)
 */

$email = get_field('career_email');
$pdf = get_field('career_pdf');
$images = get_template_directory_uri() . '/images';
$title = get_the_title()
?>

<div class="index-careers__career flex align-center mar-b-15">
  <!-- PDF icon + title as a link to the PDF -->
  <a class="index-careers__pdf-link flex-grow-1 mar-r-20" href="<?php echo esc_url($pdf); ?>" target="_blank" rel="noopener noreferrer">
    <h3 class="index-careers__title color-secondary font-16 flex column align-start">
      <img class="flex-shrink-0 mar-r-15 index-careers__pdf-icon" src="<?php echo esc_url($images . '/pdf.jpg'); ?>" alt="PDF">
      <?php echo $title; ?>
    </h3>
  </a>
  <!-- Apply Button -->
  <a class="index-careers__apply btn flex-shrink-0" href="mailto:<?php echo esc_attr($email); ?>?subject=<?php echo esc_attr($title); ?> Application">APPLY</a>
</div>
