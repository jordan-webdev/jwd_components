<?php
/**
 * Plugin Name: Set Featured Image From Custom Field
 * Description: Set the featured image for all posts, based on a custom field value
 * Version: 1.0
 * Author: Jordan Webdev
 * Author URI: www.jordanwebdev.com
 */

add_action('admin_menu', 'jwd_set_featured_image_menu');

function jwd_set_featured_image_menu()
{
    add_menu_page('Set Images', 'Set images', 'manage_options', 'jwd-update-all-posts', 'jwd_set_featured_image_admin_page');
}

function jwd_set_featured_image_admin_page()
{

  // This function creates the output for the admin page.
  // It also checks the value of the $_POST variable to see whether
  // there has been a form submission.

  // The check_admin_referer is a WordPress function that does some security
  // checking and is recommended good practice.

  // General check for user permissions.
  if (!current_user_can('manage_options')) {
      wp_die(__('You do not have sufficient pilchards to access this page.'));
  }

  // Start building the page

  echo '<div class="wrap">';

    echo '<h2>Set all featured images</h2>';

  // Check whether the button has been pressed AND also check the nonce
  if (isset($_POST['jwd_set_featured_image_button']) && check_admin_referer('jwd_set_featured_image_button_clicked')) {
      // the button has been pressed AND we've passed the security check
    jwd_set_featured_image_action();
  }

    echo '<form action="options-general.php?page=jwd-update-all-posts" method="post">';

  // this is a WordPress security feature - see: https://codex.wordpress.org/WordPress_Nonces
  wp_nonce_field('jwd_set_featured_image_button_clicked');
    echo '<input type="hidden" value="true" name="jwd_set_featured_image_button" />';
    submit_button('Set Images');
    echo '</form>';

    echo '</div>';
}

function jwd_set_featured_image_action()
{
    echo '<div id="message" class="updated fade"><p>'
    .'All Images set.' . '</p></div>';


    $post_ids = get_posts(array(
      'post_type' => 'post',
      'fields' => 'ids',
      'posts_per_page'=> -1,
    ));

    foreach ($post_ids as $id) {
        $image = get_post_meta($id, 'product_image_file_name', true);
        $image_url = get_home_url() . '/wp-content/uploads/' . $image;
        // store the image ID in a var
        $image_id = pn_get_attachment_id_from_url($image_url);
        set_post_thumbnail($id, $image_id);
    }
}
