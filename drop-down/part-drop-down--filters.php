<?php
/*
 * Drop down list toggled by a button.
 */

$pages = false;
$dd_text = isset($dd_text) ? $dd_text : get_field('drop_down_text');

global $wp;
$current_url = home_url(add_query_arg(array(),$wp->request));

$query_obj = get_queried_object();
$term_id = $query_obj->term_id;
$current_category_url = get_term_link($term_id, "category");

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
<div class="drop-down drop-down--filters">
	<button class="drop-down__btn btn space-between align-center">
		<span class="flex-grow-1 text-left"><?php echo esc_html($dd_text); ?></span>
		<span class="fa fa-caret-down drop-down__caret"></span>
	</button>
	<ul class="drop-down__list drop-down--filters__list">
    <!-- Show All -->
    <li class="drop-down--filters__all flex">
      <div class="drop-down--filters__check-box js-filter-box js-filter-box-all pointer"></div>
      <a
        class="drop-down--filters__link js-ajax-link js-filter-link-all"
        href="<?php echo esc_url($current_category_url); ?>"
      >
        <span class="drop-down--filters__filter-text">ALL</span>
      </a>
    </li>
		<?php foreach ($dd_items as $label => $subitems):
    ?>
      <!-- Main filter -->
			<li class="drop-down__item">
        <span class="drop-down__item-label drop-down--filters__item-label">
          <span class="fa fa-caret-right drop-down__sub-icon drop-down--filters__sub-icon" aria-hidden="true"></span>
          <span class="drop-down--filters__item-label-text"><?php echo esc_html($label); ?></span>
        </span>
        <!-- Subitems -->
        <ul class="drop-down--filters__sub-items">
          <?php foreach ($subitems as $subitem):
            $key = strtolower(str_replace(" ", "_", $label));
          ?>
            <li class="drop-down--filters__sub-item flex align-center">
              <div class="drop-down--filters__check-box js-filter-box"></div>
              <a
                class="drop-down--filters__link js-ajax-link js-filter-link"
                href="<?php echo $current_url . '?' .$key. '[]=' .$subitem; ?>"
                data-filter-value="<?php echo esc_attr($subitem); ?>"
                data-filter-key="<?php echo esc_attr($key); ?>[]"
              >
                <span class="drop-down--filters__filter-text"><?php echo esc_html($subitem); ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
