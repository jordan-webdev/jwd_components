<?php
/*
 * Template part for the info section of the contact page
 */

$images = get_template_directory_uri() . '/images';
$icon_map = $images .'/icon-map.jpg';
$icon_mail = $images .'/icon-mail.jpg';
$icon_phone = $images .'/icon-phone.jpg';
$icon_fax = $images .'/icon-fax.jpg';
$icon_clock = $images .'/icon-clock.jpg'
?>

<div class="contact-page__info contact-page__col">
  <!-- Title -->
  <h2 class="contact-page__title color-secondary ">CONTACT INFO</h2>

  <!-- Map -->
  <div id="map" class="contact-page__map"></div>
  <script>
    function initMap() {
  	var target = {lat: 43.776567, lng: -79.625209};,
  	var map = new google.maps.Map(document.getElementById('map'), {
  	  zoom: 15,
  	  center: target
  	});

    var getUrl = window.location;
    var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
    var iconLocation = baseUrl + '/wp-content/themes/jwd/images/map-marker-min.png';

  	var marker = new google.maps.Marker({
  	  position: target,
      icon: iconLocation,
  	  map: map
  	});
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=KEY_GOES_HERE&callback=initMap"></script>

  <!-- Dynamic Content -->
  <div class="contact-page__the-content">
    <?php the_content(); ?>
    <!-- Follow Us -->
    <h3 class="contact-page__sub-header">FOLLOW US</h3>

    <!-- Social Media -->
    <?php if (have_rows('header_add_social_media', 'options')): ?>
      <ul class="top-bar__social horizontal_list pad-l-15">
        <?php while (have_rows('header_add_social_media', 'options')): the_row(); ?>
          <?php
          $social_media = get_sub_field('header_social_media');
          $name = $social_media['label'];
          $name_lower = strtolower($name);
          $link = $social_media['value'];
          ?>
          <li class="top-bar__social_item horizontal_list__item">
            <a class="top-bar__social_link" href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
              <span class="fa fa-<?php echo esc_attr($name_lower); ?> color-primary"></span>
              <span class="screen-reader-text"><?php echo esc_html($name); ?></span>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>

</div>
