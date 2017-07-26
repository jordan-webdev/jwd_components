<?php
/*
 * Template part to display the price, currency and stock message
 */

$id = get_the_ID();
$product = new WC_Product($id);

$price = $product->get_price();
$in_stock = $product->get_stock_status() == "instock" ? true : false;
$out_of_stock_text = get_field('product_specs_lead_time');
$out_of_stock_default_text = "Out of stock";
//$out_of_stock_text = $out_of_stock_text ? $out_of_stock_text : "Out of Stock";
$stock_text = ( $out_of_stock_text ) ? $out_of_stock_text : ( ($in_stock) ? "In stock" : $out_of_stock_default_text );
$stock_class = $stock_text == $out_of_stock_text || $stock_text == $out_of_stock_default_text ? "color-red" : "color-primary";

?>

<div class="jwd-woocommerce-products__price-wrapper">
  <span class="jwd-woocommerce-products__price block bold">
    <span class="jwd-woocommerce-products__currency-symbol"><?php echo get_woocommerce_currency_symbol(); ?></span>
    <span class="jwd-woocommerce-products__price-amt"><?php echo esc_html($price); ?></span>
    <span class="jwd-woocommerce-products__currency-text normal">USD</span>
  </span>
</div>

<span class="jwd-woocommerce-products__stock-message block <?php echo esc_attr($stock_class); ?>"><?php echo esc_html($stock_text); ?></span>
