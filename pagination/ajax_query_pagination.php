<?php
  // Setup the query for pagination (insert this before the loop)
  global $wp_query; $tmp_query = $wp_query; $wp_query = null; $wp_query = $query;
?>

<!-- Pagination -->
<div class="ajax-pagination">
  <?php ajax_query_pagination($wp_query, $tmp_query); ?>
</div>


<?php // functions.php 
function ajax_query_pagination($wp_query, $tmp_query){
  /* PAGINATION */
  $big = 999999999; // need an unlikely integer

  $args = array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format' => '?paged=%#%',
      'current' => max(1, get_query_var('paged')),
      'total' => $wp_query->max_num_pages,
      'prev_text'          => __('<span>&laquo;</span><span class="screen-reader-text">Previous</span>'),
      'next_text'          => __('<span>&raquo;</span><span class="screen-reader-text">Next</span>'),
      'mid_size' => 1,
  );
  ?>
  <nav class="pagination-wrapper flex flex-wrap justify-center">
    <?php echo paginate_links($args); ?>
  </nav>
<?php
  wp_reset_postdata();

  $wp_query = null;
  $wp_query = $tmp_query;
}
