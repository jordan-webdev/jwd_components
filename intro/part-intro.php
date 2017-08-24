<?php
/*
 * Intro blurb for a page. Includes title and text
 */
$archive = is_archive();
//ACF or existing title
$title = is_null($title) || empty($title) ? get_field('intro_title') : $title;
//Archive page (including category)
$title = $archive ? str_replace(array("Archives: ", "Category: ", " All"), "", get_the_archive_title()) : $title;
$title = is_tax('blog_category') ? "Blog" : $title;
//ACF or existing text
$text = isset($text) ? $text : get_field('intro_text');
//Archive page (including category)
$text = $archive ? str_replace(array('<p>', '</p>'), '', get_the_archive_description()) : $text;
?>

<?php if ($title): ?>
  <div class="intro__wrapper">
    <header class="intro text-center pad-t-30">
      <?php if (is_singular("blog_posts")): ?>
        <!-- H2 for single -->
        <h2 class="intro__title header mar-b-15"><?php echo esc_html($title); ?></h2>
        <?php else: ?>
        <h1 class="intro__title header mar-b-15"><?php echo esc_html($title); ?></h1>
      <?php endif; ?>

      <?php if ($text): ?>
        <p class="intro__text color-dark-grey"><?php echo esc_html($text); ?></p>
      <?php endif; ?>
    </header>
  </div>
<?php endif; ?>
