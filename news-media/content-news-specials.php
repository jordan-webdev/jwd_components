<?php
/*
 * Content for the single news/media page
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="blog-header single-news-media__header">
    <div class="single-news-media__thumbnail-wrapper">
  		<?php the_post_thumbnail(); ?>
    </div>
		<?php the_title( '<h2 class="color-secondary header-fluid-sizing single-news-media__title">', '</h2>' ); ?>
		<div class="blog-preview-publish-wrapper">
			<div class="blog-preview-date-wrapper">
				<span class="fa fa-calendar-o" aria-hidden="true"></span>
				<span class="blog-preview-author"><?php echo get_the_date('F j, Y'); ?></span>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="blog-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php if ( is_singular('blog_posts') ) : ?>
			<a class="blog-back-to-link single-news-media__back-link block" href="<?php echo get_permalink(704); ?>">
		<?php endif; ?>
				<span class="fa fa-caret-left color-secondary" aria-hidden="true"></span>
				<span class="color-secondary">Back to <span class="blog-category"><?php echo get_the_category()[0]->name; ?></span></span>
				<span class="blog-category-nice none"><?php echo get_the_category()[0]->category_nicename; ?></span>
			</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
