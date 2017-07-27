//Show more custom meta fields
add_filter('postmeta_form_limit', 'meta_limit_increase');
function meta_limit_increase($limit)
{
    return 200;
}
