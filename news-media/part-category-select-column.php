<?php
/**
 * Template part for displaying a select list of the categories in a column.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

$news_specials_cat_id = 34;
?>

<div id="category-wrapper">

	<h2 class="font-16 bold color-secondary" data-arrow-icon="&#xf086">CATEGORIES</h2>

	<div id="categories-wrapper">

		<div id="categories">

			<?php
			$args = array(
				'child_of' => $news_specials_cat_id,
				'taxonomy' => 'category'
			);
			$categories = get_categories($args); ?>

			<!-- All -->
			<?php if ( is_singular('blog_posts') ) : ?>
				<a href="<?php the_permalink(704); ?>">
					<span class="block all-categories-selector sub-header black" data-category="all">All <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
				</a>
			<?php else: ?>
					<span class="block all-categories-selector sub-header" data-category="all">All <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
			<?php endif; ?>

			<!-- Categories -->
			<?php foreach ($categories as $category) { ?>
				<?php if ( is_singular('blog_posts') ) : ?>
					<a href="<?php the_permalink(704); ?>">
						<span class="block sub-header black" data-category="<?php echo $category->category_nicename; ?>"> <?php echo $category->name; ?> <i class="fa fa-chevron-right black" aria-hidden="true"></i></span>
					</a>
				<?php else: ?>
					<span class="block sub-header" data-category="<?php echo $category->category_nicename; ?>"> <?php echo $category->name; ?> <i class="fa fa-chevron-right" aria-hidden="true"></i></span>
				<?php endif; ?>
			<?php } ?>

		</div>

	</div>

</div>
