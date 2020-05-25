<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
$_product = wc_get_product(get_the_ID());
?>



<div class="product-box product-box-h clearfix">															
	<div class="product-thumbnail">
		<a class="image_link display_flex" href="<?php the_permalink()?>" title="<?php the_title()?>">
			<img src="<?php echo get_template_directory_uri()?>/images/rolling.svg"  data-lazyload="<?php the_post_thumbnail_url('size240')?>" alt="<?php the_title()?>">
		</a>
		
		<?php if($_product->get_sale_price()){ ?>

		<div class="sale-flash sale">Sale</div>


		<!-- Tag giá sốc -->

		<div class="tagdacbiet_sale sale-flash">
		Giá sốc<br>
		<div class="font16">
		- <?php echo number_format((( $_product->get_regular_price() - $_product->get_sale_price() ) / ($_product->get_regular_price() / 100)),0,",","."); ?> % 

		</div>
		</div>
		<?php } ?>
		
		<!-- End tag giá sốc -->
		
	</div>
	<div class="product-info f-left">
		<h3 class="product-name"><a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a></h3>
		
		<div class="price-box clearfix">
			 <?php if($_product->get_price()){ ?>
	          <div class="special-price f-left"> <span class="price product-price"><?php echo  number_format($_product->get_price(),0,",",",")?> đ</span></div>
	          <?php }else{ ?>
	          <div class="special-price f-left"> <span class="price product-price">Liên hệ</span></div>
	          <?php } ?>
	          <?php if($_product->get_sale_price()){ ?>
	          <div class="old-price"><span class="price product-price-old"><?php echo  number_format($_product->get_regular_price(),0,",",",")?> đ</span></div>
	          <?php } ?>
						
		</div>		
		
		

		<div class="product-summary margin-top-10">
			<?php echo get_the_excerpt()?>
		</div>
		<div class="product-action clearfix hidden-xs">
			<div class="product-action clearfix hidden-xs">
		       <div>
		          
		          <?php if($_product->get_price()){ ?>
		          <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
		          <?php } ?>
		          <a data-toggle="tooltip" title="Xem nhanh" href="<?php the_permalink()?>" data-handle="adidas-neo-advantage" class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md sgh__js-quick-view yith-wcqv-button" data-product_id="<?php echo get_the_ID()?>" >
		            <i class="fa fa-eye"></i>
		          </a>
		          
		        </div>
		    </div>
		</div>
	</div>

</div>
				
