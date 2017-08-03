<?php
/**
 * Template part for displaying the details of the categories chosen from the select category menu
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jwd
 */

$blog_category = get_the_terms($post->ID, 'blog')[0];
$blog_category_slug = $blog_category->slug;
$single_slug = $post->post_name;

?>

		<?php
			$external = get_field('external_link');
			$youtube = get_field('youtube_link');
			$pdf = get_field('pdf_upload');
			$preview = get_field('preview_image');
		?>

    <div class="color-grey--bg pad-b-15 pad-l-15 pad-r-15 blog-item-padding-wrapper">
  		<article class="blog-item-wrapper clear <?php echo $blog_category_slug; ?> all">
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
            <!-- Preview image for internal stories -->
  					<a
              class="js-blog-ajax-link"
              href="<?php echo get_the_permalink(); ?>"
              data-slug="<?php echo $blog_category_slug; ?>"
              data-single-slug="<?php echo $single_slug; ?>"
            >
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
            <!-- External Article -->
  					<a href="<?php echo $external ?>" target="_blank" rel="noopener noreferrer">
  						<h3
                class="color-secondary news-preview-title"
                data-slug="<?php echo $blog_category_slug; ?>"
                data-single-slug="<?php echo $single_slug; ?>"
              >
                <?php echo get_the_title(); ?>
              </h3>
  					</a>
  					<p class="body-font news-media-excerpt"><?php echo get_the_content(); ?></p>
  					<a href="<?php echo esc_url($external); ?>" target="_blank" rel="noopener noreferrer">Go to Article</a>
  				<?php elseif ($youtube): ?>
            <!-- YouTube -->
  					<a href="<?php echo $youtube ?>" target="_blank" rel="noopener noreferrer">
              <h3
                class="color-secondary news-preview-title"
                data-slug="<?php echo $blog_category_slug; ?>"
                data-single-slug="<?php echo $single_slug; ?>"
              >
                <?php echo get_the_title(); ?>
              </h3>
  					</a>
  					<p class="body-font news-media-excerpt"><?php echo get_the_content(); ?></p>
  					<a href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener noreferrer">Watch Video</a>
  				<?php elseif ($pdf): ?>
            <!-- PDF -->
  					<a href="<?php echo $pdf['url'] ?>" target="_blank" rel="noopener noreferrer">
              <h3
                class="color-secondary news-preview-title"
                data-slug="<?php echo $blog_category_slug; ?>"
                data-single-slug="<?php echo $single_slug; ?>"
              >
                <?php echo get_the_title(); ?>
              </h3>
  					</a>
  					<p class="body-font news-media-excerpt"><?php echo get_the_content(); ?></p>
  					<a href="<?php echo esc_url($pdf['url']); ?>" target="_blank" rel="noopener noreferrer">View PDF</a>
  				<?php else: ?>
            <!-- Internal Story -->
  					<a
              href="<?php echo get_the_permalink(); ?>"
              class="js-blog-ajax-link"
              data-slug="<?php echo $blog_category_slug; ?>"
              data-single-slug="<?php echo $single_slug; ?>"
            >
              <h3 class="color-secondary news-preview-title">
                <?php echo get_the_title(); ?>
              </h3>
  					</a>
  					<p class="body-font news-media-excerpt"><?php echo get_excerpt(150, $blog_category_slug, $single_slug); ?></p>
  				<?php endif; ?>

  			</div>
  		</article>
    </div>
