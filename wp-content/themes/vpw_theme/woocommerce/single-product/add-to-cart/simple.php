<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

<form class="cart product-form product-actions" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>



<div class="form-group form_button_details margin-top-5">

<div class="form_product_content ">
<div class="soluong show">
<div class="label_sl margin-bottom-10">Số lượng:</div>
<div class="custom input_number_product custom-btn-number form-control">									
<button class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;" type="button">-</button>
<input type="text" id="qtym" name="quantity" value="1"  onkeyup="valid(this,'numbers')" onkeypress='validate(event)' class="form-control prd_quantity">

<div class="" style="width:350px">
<button class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button">+</button>
<a class="product-send-message-facebook" href="https://www.messenger.com/t/noithatcaocapmihome" target="_blank" rel="nofollow">Gửi tin nhắn</a>
</div>

</div>
</div>

<div class="button_actions clearfix">

<button type="submit" class="btn btn_base"  name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" >
<span class="text_1">MUA NGAY</span>
<span class="text_2">Giao hàng miễn phí tận nơi</span>
</button>									

<a class="btn btn_base btn_call" href="tel:<?php the_field('hotline','option')?>">
<span class="text_1">GỌI ĐẶT HÀNG</span>

<span class="text_2"> <?php the_field('hotline','option')?></span>

</a>

	<div class="button_actions clearfix">
		<div class="social-icons">
			<a href="//www.facebook.com/sharer.php?u=<?php echo(the_permalink()) ?>" title="Chia sẻ lên Facebook" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="product-share-on-facebook"><i class="fa fa-facebook"></i>
			</a>
			<a href="//twitter.com/share?url=<?php echo(the_permalink()) ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="product-share-on-twitter"><i class="fa fa-twitter"></i>
			</a>
			<a href="mailto:mihomeht@gmail.com?subject=<?php echo($product->get_name()) ?>&amp;body=Đặt đơn hàng: <?php echo(the_permalink()) ?>" rel="nofollow" class="product-share-on-email"><i class="fa fa-envelope-o"></i>
			</a>
			<a href="//pinterest.com/pin/create/button/?url=<?php echo($product->get_name()) ?>/&amp;media=<?php echo the_post_thumbnail_url()?>&amp;description=<?php echo($product->get_name()) ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="product-share-on-pinterest"><i class="fa fa-pinterest"></i>
			</a>
			<a href="//www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo(the_permalink()) ?>&amp;title=<?php echo($product->get_name()) ?>" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="product-share-on-linkedin"><i class="fa fa-linkedin"></i>
			</a>
		</div>
	</div>

</div>
</div>

</div>


</form>

<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
