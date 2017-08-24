content-blog.php uses add to any share buttons. Enqueue the script in functions.php like so:

// Add to any
    if (is_tax("blog_category") || is_singular("blog_posts")){
      wp_enqueue_script('jwd-add-to-any-js', '//static.addtoany.com/menu/page.js');
    }

Then, if need be, add OG like so:

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');

//Lets add Open Graph Meta Info

function insert_fb_in_head() {
    global $post;
    if ( !is_singular('blog_posts')){
      //if it is not a post or a page
      return;
    }
    echo '<meta property="og:title" content="' . get_the_title() . '"/>';
    echo '<meta property="og:type" content="article"/>';
    echo '<meta property="og:url" content="' . get_permalink() . '"/>';
    echo '<meta property="og:site_name" content="' .get_bloginfo('title'). '"/>';
    if(has_post_thumbnail( $post->ID )) {
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );
