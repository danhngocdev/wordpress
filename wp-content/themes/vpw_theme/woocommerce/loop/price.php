<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
$_product = wc_get_product(get_the_ID());
?>
<div class="price-box">
<?php if($_product->get_price()){ ?>
<div class="special-price inline-block">
<span class="price product-price"><?php echo  number_format($_product->get_price(),0,",",",")?> đ</span>
</div>
<?php }else{ ?>
<div class="special-price inline-block">
<span class="price product-price">Liên hệ</span>
</div>
<?php } ?>

<?php if($_product->get_sale_price()){ ?>
<div class="old-price inline-block">                                                             
<span class="price product-price-old"><?php echo  number_format($_product->get_regular_price(),0,",",",")?> đ</span>
</div>
<?php } ?>
</div>