<?php
/*
 * Intro blurb for a page. Includes title and text
 */

$archive = is_archive();

//ACF or existing title
$title = is_null($title) || empty($title) ? get_field('intro_title') : $title;
//Archive page (including category)
$title = $archive ? str_replace(array("Archives: ", "Category: "), "", get_the_archive_title()) : $title;

//ACF or existing text
$text = isset($text) ? $text : get_field('intro_text');
//Archive page (including category)
$text = $archive ? str_replace(array('<p>', '</p>'), '', get_the_archive_description()) : $text;
?>

<div class="intro__wrapper padding-site">
  <header class="intro container-site color-secondary">
    <h2 class="intro__title"><?php echo esc_html($title); ?></h2>
    <?php if ($text): ?>
      <p class="intro__text"><?php echo esc_html($text); ?></p>
    <?php endif; ?>
  </header>
</div>
