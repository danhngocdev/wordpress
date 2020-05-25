<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
?>


<?php
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
<div class="rows">
<div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-5 col-lg-5">
<div class="row">
	<?php
	/**
	* Hook: woocommerce_before_single_product_summary.
	*
	* @hooked woocommerce_show_product_sale_flash - 10
	* @hooked woocommerce_show_product_images - 20
	*/
	do_action( 'woocommerce_before_single_product_summary' );
	?>
</div>
<div class="html_after_addtocart" style="margin-top: 10px;background-color: #fff1dd; padding: 8px; border: 1px dotted red; font-size: 18px"><b style="color: red">Hỗ trợ mua hàng:</b><br>
					<b>Hotline:  0971.858.996 - 0983.003.464</b><br><span style="font-size:14px"> (Bán hàng cả Thứ Bảy và Chủ Nhật)</span>
				</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 details-pro">
	<?php
	/**
	* Hook: woocommerce_single_product_summary.
	*
	* @hooked woocommerce_template_single_title - 5
	* @hooked woocommerce_template_single_rating - 10
	* @hooked woocommerce_template_single_price - 10
	* @hooked woocommerce_template_single_excerpt - 20
	* @hooked woocommerce_template_single_add_to_cart - 30
	* @hooked woocommerce_template_single_meta - 40
	* @hooked woocommerce_template_single_sharing - 50
	* @hooked WC_Structured_Data::generate_product_data() - 60
	*/
	do_action( 'woocommerce_single_product_summary' );
	?>
</div>
</div>



<div class="tab_h">

<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 no-padding">
<!-- Nav tabs -->
<div class="product-tab e-tabs">
<ul class="tabs tabs-title clearfix">	

<li class="tab-link" data-tab="tab-1">
<h3><span>Mô tả sản phẩm</span></h3>
</li>																	


<li class="tab-link" data-tab="tab-3">
<h3><span>Đánh giá</span></h3>
</li>																	

</ul>																									


<div id="tab-1" class="tab-content">
<div class="rte">



<div class="product-well">
<div class="ba-text-fpt">
<?php the_content()?>
</div>

<div class="show-more">
<a class="btn btn-default btn--view-more">
<span class="more-text">Xem đầy đủ</span>
<span class="less-text">Thu gọn</span>
</a>
</div>
</div>


</div>
</div>	

<div id="tab-3" class="tab-content">
<div class="rte">
<div id="bizweb-product-reviews" class="bizweb-product-reviews" data-id="11726699">
	<?php comments_template(); ?>
</div>
</div>
</div>	

</div>
</div>


</div>


</div>


<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
<div class="right_module margin-bottom-50">
<div class="module_service_details">
<?php
dynamic_sidebar('sidebar-2');
wp_reset_query();
?>
</div>
</div>
</div>
<?php
/**
* Hook: woocommerce_after_single_product_summary.
*
* @hooked woocommerce_output_product_data_tabs - 10
* @hooked woocommerce_upsell_display - 15
* @hooked woocommerce_output_related_products - 20
*/
do_action( 'woocommerce_after_single_product_summary' );
?>




<?php do_action( 'woocommerce_after_single_product' ); ?>
