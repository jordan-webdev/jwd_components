//Get excerpt function
function get_excerpt($limit)
{
    $excerpt = get_the_content();
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = $excerpt.'… <a class="read-more-link main-colour sub-header" href="'. get_permalink($post->ID) . '">' . 'Read More' . '<span class="fa fa-chevron-right aria-hidden="true"></span></a>';
    return $excerpt;
}
