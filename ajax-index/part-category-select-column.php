<?php
/**
 * Template part for displaying a select list of the categories in a column.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

// This module requires a category to be created, and for the items to have categories that
// are subcategories of it.

// Are we using the FAQ module?
$uses_faq = true;
if ($uses_faq){
  $faq_cat_id = 50;
  $is_faq_archive = is_tax('faq_category');
}

$news_specials_cat_id = 46;

$is_singular = is_singular('blog_posts');

$query_obj = get_queried_object();
$blog_category = $query_obj->name;

?>

<div id="category-wrapper">

	<h2 class="font-16 bold color-secondary js-categories-wrapper-toggle">
    CATEGORIES
    <span class="screen-reader-text">Click to expand categories</span>
  </h2>

	<div id="categories-wrapper">

		<div id="categories">

      <?php
      //F.A.Q
      if ($uses_faq && $is_faq_archive) {
    		$args = array(
    			'child_of' => $faq_cat_id,
    			'taxonomy' => 'faq_category'
    		);
      //News/Media
      } else{
        $args = array(
    			'child_of' => $news_specials_cat_id,
    			'taxonomy' => 'blog'
    		);
      }

			$categories = get_categories($args); ?>

			<!-- All -->
				<a href="<?php echo $is_faq_archive ? get_term_link($faq_cat_id) : get_term_link($news_specials_cat_id); ?>" data-slug="all" class="js-category-selector-link">
					<span
            class="block all-categories-selector sub-header <?php echo ($blog_category == "All" ? "color-primary js-selected-category" : ""); ?>"
            data-slug="all"
          >
            All
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </span>
				</a>


			<!-- Categories -->
			<?php foreach ($categories as $category) :
        //var_dump($category);
        $id = $category->term_id;
        $data_category = $category->category_nicename;
        $label = $category->name;
        $slug = $category->slug;

        $is_listing_match = $blog_category == $label ? true : false;
      ?>
  			<a href="<?php echo get_term_link($id); ?>" data-slug="<?php echo $slug; ?>" class="js-category-selector-link">
  				<span
            class="block sub-header <?php echo ($is_listing_match ? "color-primary js-selected-category" : ""); ?>"
            data-slug="<?php echo $data_category; ?>"
          >
            <?php echo $label; ?>
            <i class="fa fa-chevron-right black" aria-hidden="true"></i>
          </span>
  			</a>

			<?php endforeach; ?>

		</div>

	</div>

</div>
