<?php
/*
 * Content for the single blog page
 */
?>

<div class="js-ajax-content-container">
  <article id="post-<?php the_ID(); ?>" <?php post_class('js-category-results single-news-media pad-15 pad-b-0'); ?>>
  	<header class="blog-header single-news-media__header">
      <div class="single-news-media__thumbnail-wrapper">
    		<?php the_post_thumbnail(); ?>
      </div>
  		<?php the_title( '<h2 class="color-secondary header-fluid-sizing single-news-media__title">', '</h2>' ); ?>
  		<div class="blog-preview-publish-wrapper">
  			<div class="blog-preview-date-wrapper">
  				<span class="fa fa-calendar-o color-primary" aria-hidden="true"></span>
  				<span class="blog-preview-author"><?php echo get_the_date('F j, Y'); ?></span>
  			</div>
  		</div>
  	</header><!-- .entry-header -->

  	<div class="blog-content">
  		<?php the_content(); ?>
  	</div><!-- .entry-content -->

    <!-- Go Back link -->
  	<footer class="entry-footer">
      <?php
        $blog_categories = get_the_terms($post->ID, 'blog_category');
        $current_blog_category = $blog_categories[0];
        $cat_id = $current_blog_category->term_id;
        $cat_name = $current_blog_category->name;
        $cat_slug = $current_blog_category->slug;
        $cat_link = get_term_link($cat_id, 'blog');


        //$cat_slug = $cat->slug;
        //$cat_name = $cat->name;
        //echo $cat_name;
      ?>
  			<a
          class="blog-back-to-link single-news-media__back-link block js-blog-ajax-link"
          href="<?php echo $cat_link; ?>"
          data-slug="<?php echo $cat_slug; ?>"
        >
  				<span class="fa fa-caret-left color-primary" aria-hidden="true"></span>
  				<span class="color-primary">Back to <span class="blog-category"><?php echo $cat_name; ?></span></span>
  				<span class="blog-category-nice none"><?php echo get_the_category()[0]->category_nicename; ?></span>
  			</a>
  	</footer><!-- .entry-footer -->
  </article><!-- #post-## -->
</div>

<!-- Pagination (container used for AJAX) -->
<div class="ajax-pagination"></div>
