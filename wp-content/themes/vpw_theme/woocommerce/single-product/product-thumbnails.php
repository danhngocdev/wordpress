<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
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
 * @version     3.6.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;

$attachment_ids = $product->get_gallery_image_ids();

?>



<div class="col_large_default large-image">

<a  href="<?php the_post_thumbnail_url('full')?>" data-rel="prettyPhoto[product-gallery]" >

<img class="checkurl img-responsive" id="img_01" src="<?php the_post_thumbnail_url('full')?>" alt="<?php the_title()?>">
</a>

<div class="hidden">

<?php
if ( $attachment_ids && has_post_thumbnail() ) {
foreach ( $attachment_ids as $attachment_id ) {
?>
<div class="item">
<a href="<?php echo wp_get_attachment_image_url( $attachment_id, '', false, $attributes )?>" data-image="<?php echo wp_get_attachment_image_url( $attachment_id, '', false, $attributes )?>" data-zoom-image="<?php echo wp_get_attachment_image_url( $attachment_id, '', false, $attributes )?>"  data-rel="prettyPhoto[product-gallery]" >										
</a>
</div>	
<?php } } ?>
</div>
</div>

<div id="gallery_02" class="owl-carousel owl-theme thumbnail-product thumb_product_details not-dqowl" data-loop="false" data-lg-items="3" data-md-items="3" data-sm-items="3" data-xs-items="3" data-xxs-items="3">
<?php
if ( $attachment_ids && has_post_thumbnail() ) {
foreach ( $attachment_ids as $attachment_id ) {
?>
<div class="item">
<a href="javascript:void(0)" data-image="<?php echo wp_get_attachment_image_url( $attachment_id, '', false, $attributes )?>" data-zoom-image="<?php echo wp_get_attachment_image_url( $attachment_id, '', false, $attributes )?>">
<img data-img="<?php echo wp_get_attachment_image_url( $attachment_id, '', false, $attributes )?>" src="<?php echo wp_get_attachment_image_url( $attachment_id, '', false, $attributes )?>" alt="<?php the_title()?>">
</a>
</div>
<?php } } ?>
</div>

