<?php
/**
 * Template part for displaying the details of the categories chosen from the select category menu
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JBEC
 */

$args = array(
	'post_type'      => 'blog_posts',
	'posts_per_page' => -1,
);

$the_query = new WP_Query( $args );
?>

<?php  if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php
			$external = get_field('external_link');
			$youtube = get_field('youtube_link');
			$pdf = get_field('pdf_upload');
			$preview = get_field('preview_image');
		?>

		<article class="blog-item-wrapper clear <?php echo get_the_category()[0]->category_nicename; ?>">
			<div class="blog-preview-item">
				<?php if ($external) : ?>
					<a href="<?php echo $external ?>">
						<?php
							if ($preview) {
								echo '<img class="news-thumb-preview" src="' . $preview['url'] . '" alt="' . $preview['alt'] . '" />';
							}
						?>
					</a>
				<?php elseif ($youtube) :?>
					<a href="<?php echo $youtube ?>">
						<?php
							if ($preview) {
								echo '<img class="news-thumb-preview" src="' . $preview['url'] . '" alt="' . $preview['alt'] . '" />';
							}
						?>
					</a>
				<?php elseif ($pdf) : ?>
					<a href="<?php echo $pdf['url'] ?>">
						<?php
							if ($preview) {
								echo '<img class="news-thumb-preview" src="' . $preview['url'] . '" alt="' . $preview['alt'] . '" />';
							}
						?>
					</a>
				<?php else: ?>
					<a href="<?php echo get_the_permalink(); ?>">
						<?php
							$preview = get_field('preview_image');
							if ($preview)
								echo '<img class="news-thumb-preview" src="' . $preview['url'] . '" alt="' . $preview['alt'] . '" />';
						?>
					</a>
				<?php endif; ?>
			</div>
			<div class="blog-preview-item">
				<div class="news-preview-date-wrapper">
					<span class="fa fa-calendar-o color-primary" aria-hidden="true"></span>
					<span class="blog-preview-author"><?php echo get_the_date('F j, Y'); ?></span>
				</div>

				<?php if ($external): ?>
					<a href="<?php echo $external ?>">
						<h3 class="sub-header news-preview-title"><?php echo get_the_title(); ?></h3>
					</a>
					<p class="body-font news-media-excerpt"><?php echo get_the_content(); ?></p>
					<a href="<?php echo $external ?>">Go to Article</a>
				<?php elseif ($youtube): ?>
					<a href="<?php echo $youtube ?>">
						<h3 class="sub-header news-preview-title"><?php echo get_the_title(); ?></h3>
					</a>
					<p class="body-font news-media-excerpt"><?php echo get_the_content(); ?></p>
					<a href="<?php echo $youtube ?>">Watch Video</a>
				<?php elseif ($pdf): ?>
					<a href="<?php echo $pdf['url'] ?>">
						<h3 class="sub-header news-preview-title"><?php echo get_the_title(); ?></h3>
					</a>
					<p class="body-font news-media-excerpt"><?php echo get_the_content(); ?></p>
					<a href="<?php echo $pdf['url'] ?>">View PDF</a>
				<?php else: ?>
					<a href="<?php echo get_the_permalink(); ?>">
						<h3 class="sub-header news-preview-title"><?php echo get_the_title(); ?></h3>
					</a>
					<p class="body-font news-media-excerpt"><?php echo get_excerpt(150); ?></p>
				<?php endif; ?>

			</div>
		</article>
	<?php
		endwhile;
	endif;
	/* Restore original Post Data */
	wp_reset_postdata();
?>
