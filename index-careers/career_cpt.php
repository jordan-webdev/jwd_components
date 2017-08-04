// Career Custom Post Type
   function register_career() {

   $labels = array(
   'name' => __( 'Careers'),
   'singular_name' => __( 'Career'),
   'all_items' => __( 'All Careers'),
   'add_new' => __( 'Add New Career'),
   'add_new_item' => __( 'Add New Career'),
   'edit_item' => __( 'Edit Career'),
   'new_item' => __( 'New Career'),
   'view_item' => __( 'View Career'),
   'not_found' => __( 'No Careers found'),
   'not_found_in_trash' => __( 'No Careers found in Trash'),
   );

   $args = array(
   'label'               => __( 'Careers' ),
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
   'menu_icon'           => 'dashicons-megaphone',
   );

   register_post_type( 'career', $args );

   }

   add_action( 'init', 'register_career', 0 );
