<?php
/*
 * Content for the index of staff CPTs
 */

?>

<?php get_template_part('template-parts/part', 'breadcrumb'); ?>

<?php get_template_part('template-parts/part', 'intro'); ?>

<?php
   $args = array(
     'post_type' => 'staff',
     'posts_per_page' => -1,
   );
   $query = new WP_Query($args);
 ?>

 <?php if ( $query->have_posts() ): ?>
   <div class="padding-site">
     <div class="container-site">
       <div class="index-staff  flex flex-wrap">
         <?php while ( $query->have_posts() )
         {
           $query->the_post();
           get_template_part('template-parts/part', 'staff-card');
         }
         ?>
       </div>
     </div>
   </div>
 <?php endif; wp_reset_postdata(); ?>



</div>
