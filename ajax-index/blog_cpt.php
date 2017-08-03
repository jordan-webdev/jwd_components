// Blog Custom Post Type
function register_blog_posts()
{
    $labels = array(
    'name' => __('Blog Posts'),
    'singular_name' => __('Blog Post'),
    'all_items' => __('All Blog Posts'),
    'add_new' => __('Add new Blog Post'),
    'add_new_item' => __('Add new Blog Post'),
    'edit_item' => __('Edit Blog Post'),
    'new_item' => __('New Blog Post'),
    'view_item' => __('View Blog Post'),
    'not_found' => __('No Blog Posts found'),
    'not_found_in_trash' => __('No Blog Posts found in Trash'),
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
    'supports' => $supports,
    'menu_icon' => 'dashicons-welcome-write-blog',
    //'taxonomies' => array( 'category' ),
);
    register_post_type('blog_posts', $args);
}
add_action('init', 'register_blog_posts', 0);
