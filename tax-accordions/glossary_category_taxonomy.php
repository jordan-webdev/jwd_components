// Add the "glossary_category" taxonomy
function create_glossary_category_hierarchical_taxonomy() {

  $labels = array(
    'name' => _x( 'Glossary Category', 'taxonomy general name' ),
    'singular_name' => _x( 'Glossary Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Glossary Categories' ),
    'all_items' => __( 'All Glossary Categories' ),
    'parent_item' => __( 'Parent Glossary Category' ),
    'parent_item_colon' => __( 'Parent Glossary Category:' ),
    'edit_item' => __( 'Edit Glossary Category' ),
    'update_item' => __( 'Update Glossary Category' ),
    'add_new_item' => __( 'Add New Glossary Category' ),
    'new_item_name' => __( 'New Glossary category Name' ),
    'menu_name' => __( 'Glossary Categories' ),
  );

  register_taxonomy(
    'glossary_category',
    'glossary_term',
    array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
    ));

}
add_action( 'init', 'create_glossary_category_hierarchical_taxonomy', 0 );
