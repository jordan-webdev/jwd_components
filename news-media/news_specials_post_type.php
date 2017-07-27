<?php
//Include in functions.php

// News & Specials Custom Post Type
function custom_news_specials() {
$labels = array(
    'name' => __( 'News & Specials'),
    'singular_name' => __( 'News & Specials'),
    'all_items' => __( 'All News & Specials'),
    'add_new' => __( 'Add News & Specials'),
    'add_new_item' => __( 'Add News & Specials'),
    'edit_item' => __( 'Edit News & Specials'),
    'new_item' => __( 'New News & Specials'),
    'view_item' => __( 'View News & Specials'),
    'not_found' => __( 'No News & Specials found'),
    'not_found_in_trash' => __( 'No News & Specials found in Trash'),
);
 
$supports = array(
    'title',
    'editor',
    'author',
    'thumbnail',
    'comments',
    'custom-fields',
    'revisions',
    'page-attributes',
    'post-formats',
);
 
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queriable' => true,  // you should be able to query it
	'capability_type'     => 'page',
    'show_ui' => true,  // you should be able to edit it in wp-admin
    'exclude_from_search' => false,  // you should exclude it from search results
    'show_in_nav_menus' => true,  // you shouldn't be able to add it to menus
    'has_archive' => false,  // it shouldn't have archive page
    'rewrite' => false,  // it shouldn't have rewrite rules
    'supports' => $supports,
	'taxonomies' => array( 'category' ),
);
register_post_type('news_specials', $args);

}
add_action( 'init', 'custom_news_specials', 0 );