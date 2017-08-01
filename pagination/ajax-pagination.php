<!-- Pagination -->
<div class="ajax-pagination">
  <?php ajax_archive_pagination(); ?>
</div>

<!-- Results -->
<div class="js-ajax-content-container">
  <div class="js-ajax-results">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part('template-parts/part', 'faq'); ?>
    <?php endwhile; ?>
  </div>
</div>
