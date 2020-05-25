<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$_product = wc_get_product(get_the_ID());
if ( $related_products ) : ?>



<div class="col-lg-12 related-product margin-top-20 xs-margin-top-0 margin-bottom-30">
<div class="section_prd_feature section_base">
<div class="border_bottom_title clearfix">
</div>
<div class="title_top_menu">
<h3 class="title-head"><a href="#">Sản phẩm cùng loại</a></h3>
</div>
<div class="products product_related products-view-grid-bb owl-carousel owl-theme products-view-grid not-dot2" data-dot= "false" data-nav= "false" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="15">

<?php foreach ( $related_products as $related_product ) : ?>

<?php
$post_object = get_post( $related_product->get_id() );

setup_postdata( $GLOBALS['post'] =& $post_object );

?>
<div class="item saler_item">
<div class="owl_item_product product-col-1">						
<?php
wc_get_template_part( 'content', 'product' );
?>
</div>
</div>
<?php endforeach; ?>

</div>
</div>
</div>

<?php endif;

wp_reset_postdata();
