// Add the "Blog Category" taxonomy
function create_blog_hierarchical_taxonomy() {

  $labels = array(
    'name' => _x( 'Blog Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Blog Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Blog Categories' ),
    'all_items' => __( 'All Blog Categories' ),
    'parent_item' => __( 'Parent Blog Category' ),
    'parent_item_colon' => __( 'Parent Blog Category:' ),
    'edit_item' => __( 'Edit Blog Category' ),
    'update_item' => __( 'Update Blog Category' ),
    'add_new_item' => __( 'Add New Blog Category' ),
    'new_item_name' => __( 'New Blog category Name' ),
    'menu_name' => __( 'Blog Categories' ),
  );

  register_taxonomy(
    'blog_category',
    'blog_posts',
    array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'blog' ),
    ));

}
add_action( 'init', 'create_blog_hierarchical_taxonomy', 0 );
