<?php
/*
 * Drop down list toggled by a button.
 * Requires Magic Animations
 */

$pages = false;
$dd_text = isset($dd_text) ? $dd_text : get_field('drop_down_text');

//Pages dropdown only
if ($pages) {
    $dd_items_url = isset($dd_items_url) ? $dd_items_url : get_field('drop_down_items');
    $dd_items_id = url_to_postid($dd_items_url);
    $args = array(
    'child_of' => $dd_items_id,
    'sort_column' => 'menu_order',
  );
    $dd_items = get_pages($args);
}

?>
<div class="drop-down">
	<button class="drop-down__btn btn">
		<?php echo esc_html($dd_text); ?>
		<span class="fa fa-caret-down drop-down__caret"></span>
	</button>
	<ul class="drop-down__list magictime puffOut-slideUp">
		<?php foreach ($dd_items as $item):
      //$url = get_permalink($item->ID);
      $url = get_category_link($item->cat_ID);
      $title = $item->post_title ? $item->post_title : $item->cat_name;
    ?>
			<li class="drop-down__item">
				<a href="<?php echo esc_url($url); ?>">
          <span class="fa fa-caret-right" aria-hidden="true"></span>
          <?php echo esc_html($title); ?>
        </a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
