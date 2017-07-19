<?php
/*
 * Related Items.
 * Title, slider of items that link (Image, title)
 */

$current_id = $post->ID;
$parent_id = $post->post_parent;
$parent_title = get_the_title($parent_id);
$type = "page";
$title = "OTHER " .strtoupper($parent_title);
$page_parent = $parent_id;

// page, cpt, cat
$type = 'page';

$current_ID = get_the_ID();

$args = array(
 'posts_per_page' => -1,
);

switch ($type) {
  case 'page':
    $args['post_type'] = 'page';
    $args['post_parent'] = $page_parent;
    break;

  case 'cpt':
    $args['post_type'] = $cpt;
    break;

    case 'cat':
      $args['cat'] = $cat_id;
      break;
}

$query = new WP_Query($args);
?>

<?php if ($query->have_posts()): ?>
  <div class="related-items__wrapper padding-site">
    <nav class="related-items container-site">
      <h2 class="related-items__title"><?php echo esc_html($title); ?></h2>
      <ul class="related-items__list js-related-items__list owl-carousel">
        <?php while ($query->have_posts()):
         $query->the_post();
         $title = get_the_title();
         $current_item = $current_ID == get_the_ID() ? true : false;
         $link = get_the_permalink();
        ?>
          <?php if (!$current_item): ?>
            <li class="related-items__item flex align-center">
                <a class="related-items__link related-items__image-wrapper" href="<?php echo esc_url($link); ?>">
                <?php the_post_thumbnail('small'); ?>
              </a>
              <a class="related-items__link" href="<?php echo esc_url($link); ?>">
                <h2 class="related-items__item-title color-secondary"><?php echo esc_html($title); ?></h2>
              </a>
            </li>
          <?php endif; ?>
        <?php endwhile; ?>
      </ul>
    </nav>
  </div>
<?php endif; wp_reset_postdata(); ?>
