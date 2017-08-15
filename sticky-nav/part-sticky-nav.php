<?php /*
* Sticky Nav
*/
?>

<nav id="sticky-navigation" class="sticky-nav flex align-center bg-white">

  <!-- Logo -->
  <a class="sticky-nav__logo" href="<?php echo get_home_url(); ?>" rel="home">
    <img src="<?php echo get_header_image(); ?>" alt="<?php bloginfo("title"); ?>">
    <span class="screen-reader-text"><?php bloginfo("name"); ?></span>
  </a>

  <!-- Menu -->
  <?php $args = array(
    "theme_location" => "menu-1",
    "menu_class" => "wp-nav-menu sticky-nav__menu flex flex-grow-1",
    "menu_id" => "menu-sticky",
    "container" => false,
  );
  wp_nav_menu($args); ?>

  <!-- Buttons -->
  <!-- Popup toggle -->
  <label class="btn sticky-nav__btn js-scroll-blocker" for="quote-popup">
    Quote
    <span class="screen-reader-text">Click here to open the popup.</span>
  </label>
  <a class="sticky-nav__btn sticky-nav__contact btn" href="<?php echo get_permalink(88); ?>">Contact</a>

</nav>
