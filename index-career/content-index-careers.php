<?php
/*
 * Content for the index of career CPT
 */

?>

<?php get_template_part('template-parts/part', 'breadcrumb'); ?>

<?php get_template_part('template-parts/part', 'intro'); ?>

<?php
   $args = array(
     'post_type' => 'career',
     'posts_per_page' => -1,
   );
   $query = new WP_Query($args);

   $even = count($query->posts) % 2 == 0 ? true : false;
 ?>

 <?php if ( $query->have_posts() ): ?>
   <div class="padding-site">
     <div class="container-site">
       <h2 class="index-careers__archive-title color-secondary">OPEN POSITIONS</h2>
       <div class="index-careers flex flex-wrap <?php echo ($even ? 'index-careers--even' : ''); ?>">
         <?php while ( $query->have_posts() ): $query->the_post(); ?>
           <?php get_template_part('template-parts/part', 'career'); ?>
         <?php endwhile; ?>
       </div>
     </div>
   </div>
 <?php endif; wp_reset_postdata(); ?>



</div>
