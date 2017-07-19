<?php //An example of using as a repeater ?>

<?php if (have_rows("image_describers")) : ?>
   <div class="image-describers">
   <?php $i = 1; ?>
   <?php while (have_rows("image_describers")) :
     the_row();
     $reversed = $i % 2 == 0 ? true : false;
     $border = false;
     include(locate_template('template-parts/image-describer/part-image-describer.php'));

   ?>
   <?php $i++; ?>
   <?php endwhile; ?>
   </div>
 <?php endif; ?>
