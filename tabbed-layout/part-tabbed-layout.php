<?php
/*
 * Template part for tabbed layout (varying layouts, toggled between by tabs)
 */

$tabs = array('RMA REQUEST' => 'rma-request', 'CUSTOMER SUPPORT' => 'customer-support', 'ORDERING AND SHIPPING' => 'ordering-shipping');
?>

<div class="padding-site">
  <div class="container-site">
    <div class="tabbed-layout color-grey--bg">
      <div class="tabbed-layout__tabs flex">
        <?php $i = 0 ?>
        <?php foreach ($tabs as $label => $id): ?>
          <button
            type="button"
            class="tabbed-layout__tab flex-grow-1 color-white <?php echo( $i == 0 ? "active" : ""); ?>"
            data-for="<?php echo esc_attr($id); ?>"
          >
            <?php echo esc_html($label); ?>
          </button>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
      <div class="tabbed-layout__contents">
        <?php $i = 0 ?>
        <?php foreach ($tabs as $label => $id): ?>
          <div id="<?php echo esc_attr($id); ?>" class="tabbed-layout__content <?php echo( $i == 0 ? "active" : ""); ?>">
            <?php
            switch ($id) {
              case 'rma-request':
                echo do_shortcode('[contact-form-7 id="1054" title="RMA REQUEST"]');
                break;

              case 'customer-support':
                echo do_shortcode('[contact-form-7 id="1055" title="CUSTOMER SUPPORT"]');
                break;

              case 'ordering-shipping':
                if (have_rows("image_describers")) : ?>
                 <div class="image-describers">
                   <?php
                     $i = 1;
                     while (have_rows("image_describers")){
                       the_row();
                       $reversed = $i % 2 == 0 ? true : false;
                       $border = false;
                       include(locate_template('template-parts/image-describer/part-image-describer.php'));
                       $i++;
                     };
                   ?>
                 </div>
                <?php
                endif;
                break;
            }
            ?>
          </div>
          <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
