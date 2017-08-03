// Glossary Term Custom Post Type
 function register_glossary_term() {

 $labels = array(
 'name' => __( 'Glossary Terms'),
 'singular_name' => __( 'Glossary Term'),
 'all_items' => __( 'All Glossary Terms'),
 'add_new' => __( 'Add New Glossary Term'),
 'add_new_item' => __( 'Add New Glossary Term'),
 'edit_item' => __( 'Edit Glossary Term'),
 'new_item' => __( 'New Glossary Term'),
 'view_item' => __( 'View Glossary Term'),
 'not_found' => __( 'No Glossary Terms found'),
 'not_found_in_trash' => __( 'No Glossary Terms found in Trash'),
 );

 $args = array(
 'label'               => __( 'Glossary Terms' ),
 'description'         => __( ''),
 'labels'              => $labels,
 'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
 'hierarchical'        => false,
 'public'              => true,
 'show_ui'             => true,
 'show_in_menu'        => true,
 'show_in_nav_menus'   => true,
 'show_in_admin_bar'   => true,
 'can_export'          => true,
 'has_archive'         => true,
 'exclude_from_search' => false,
 'publicly_queryable'  => true,
 'capability_type'     => 'page',
 'menu_icon'           => 'dashicons-editor-help',
 // This is where we add taxonomies to our CPT
 'taxonomies'          => array( 'glossary_category' ),
 );

 register_post_type( 'glossary_term', $args );

 }

 add_action( 'init', 'register_glossary_term', 0 );
