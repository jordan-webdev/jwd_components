//Pagination for custom post type
function custom_pagination($numpages = '', $pagerange = '', $paged='')
{
    if (empty($pagerange)) {
        $pagerange = 2;
    }

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($numpages == '') {
        global $wp_query;
        $numpages = $wp_query->max_num_pages;
        if (!$numpages) {
            $numpages = 1;
        }
    }

    $prev_arrow = is_rtl() ? '&raquo;' : '&laquo;';
    $next_arrow = is_rtl() ? '&laquo;' : '&raquo;';

    $pagination_args = array(
        'base'            => get_pagenum_link(1) . '%_%',
        'format'          => 'page/%#%',
        'total'           => $numpages,
        'current'         => $paged,
        'show_all'        => false,
        'end_size'        => 1,
        'mid_size'        => $pagerange,
        'prev_next'       => true,
        'prev_text'       => __('&laquo;'),
        'next_text'       => __('&raquo;'),
        'type'            => 'list',
        'add_args'        => false,
        'add_fragment'    => '',
        'prev_text'        => $prev_arrow,
        'next_text'        => $next_arrow,
    );


    $paginate_links = paginate_links($pagination_args);

    if ($paginate_links) {
        echo "<nav class='custom-pagination'>";
        //echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
        echo $paginate_links;
        echo "</nav>";
    }
}
