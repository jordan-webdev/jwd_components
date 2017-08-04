 // Staff Custom Post Type
  function register_staff() {

  $labels = array(
  'name' => __( 'Staff'),
  'singular_name' => __( 'Staff'),
  'all_items' => __( 'All staff'),
  'add_new' => __( 'Add New Staff'),
  'add_new_item' => __( 'Add New Staff'),
  'edit_item' => __( 'Edit Staff'),
  'new_item' => __( 'New Staff'),
  'view_item' => __( 'View Staff'),
  'not_found' => __( 'No staff found'),
  'not_found_in_trash' => __( 'No staff found in Trash'),
  );

  $args = array(
  'label'               => __( 'Staff' ),
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
  'has_archive'         => false,
  'exclude_from_search' => false,
  'publicly_queryable'  => true,
  'capability_type'     => 'page',
  'menu_icon'           => 'dashicons-admin-users',
  );

  register_post_type( 'staff', $args );

  }

  add_action( 'init', 'register_staff', 0 );
