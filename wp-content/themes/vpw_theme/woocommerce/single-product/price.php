<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$_product = wc_get_product(get_the_ID());
?>


<div class="price-box" itemscope="" itemtype="http://schema.org/Offer">

<?php if($_product->get_price()){ ?>
<span class="special-price"><span class="price product-price" itemprop="price"><?php echo  number_format($_product->get_price(),0,",",",")?> đ</span> 
<meta itemprop="priceCurrency" content="VND">
</span> <!-- Giá Khuyến mại -->

<?php }else{ ?>
<span class="special-price"><span class="price product-price" itemprop="price">Liên hệ</span> 
<meta itemprop="priceCurrency" content="VND">
</span> <!-- Giá Khuyến mại -->

<?php } ?>
<?php if($_product->get_sale_price()){ ?>

<span class="old-price"><del class="price product-price-old sale" itemprop="priceSpecification"><?php echo  number_format($_product->get_regular_price(),0,",",",")?>₫</del> 
<meta itemprop="priceCurrency" content="VND">
</span> <!-- Giá gốc -->


<?php } ?>

</div>