<?php
/*
 * Breadcrumb. Includes Page title and breadcrumb
 * Requires Breadcrumb NavXT https://en-ca.wordpress.org/plugins/breadcrumb-navxt/
 */

//Archive title for archives (including category), with fallback to the_title for single
$title = is_archive() ? strtoupper(str_replace(array("Archives: ", "Category: "), "", get_the_archive_title())) : strtoupper(get_the_title());
?>
<div class="padding-site breadcrumb__wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/breadcrumb-bg.jpg)">
  <header class="breadcrumb color-white container-site">
    <h1 class="breadcrumb__title"><?php echo $title; ?></h1>
    <nav class="breadcrumb__navigation"><?php bcn_display($return = false, $linked = true, $reverse = false, $force = false); ?></nav>
  </header>
</div>
