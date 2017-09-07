<?php

// Modify meta key to allow wildcard
function add_wildcard_to_meta_key_filter( $where ) {

  $where = str_replace("meta_key = 'test_repeater_%", "meta_key LIKE 'test_repeater_%", $where);

  return $where;
}
add_filter('posts_where', 'add_wildcard_to_meta_key_filter');
