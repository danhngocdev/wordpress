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

$thepostid = get_the_ID();
$sale_price_dates_to    = ( $date = get_post_meta( $thepostid, '_sale_price_dates_to', true ) ) ? date_i18n( 'm/d/Y', $date ) : '';

?>




<div class="product-box-h">
  <div class="product-thumbnail">
    <a class="image_link display_flex" href="<?php the_permalink()?>" title="<?php the_title()?>">
      <img src="<?php echo get_template_directory_uri()?>/images/rolling.svg?1543485569065"  data-lazyload="<?php the_post_thumbnail_url('size240')?>" alt="<?php the_title()?>">
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
    <?php if($sale_price_dates_to){ ?>
    <div class="wrap_time"><div class="time" data-time="<?php echo $sale_price_dates_to ?>"></div></div>  
  <?php } ?>
  </div>
  <div class="product-info a-left">
    <h3 class="product-name"><a class="height_name text2line" href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a></h3>
    <div class="bizweb-product-reviews-badge" data-id="11666776"></div>
    <div class="product-hides">
      <div class="product-hide">
        
        
        <div class="price-box clearfix">    

          <?php if($_product->get_price()){ ?>
          <div class="special-price"> <span class="price product-price"><?php echo  number_format($_product->get_price(),0,",",",")?> đ</span></div>
          <?php }else{ ?>
          <div class="special-price"> <span class="price product-price">Liên hệ</span></div>
          <?php } ?>
          <?php if($_product->get_sale_price()){ ?>
          <div class="old-price"><span class="price product-price-old"><?php echo  number_format($_product->get_regular_price(),0,",",",")?> đ</span></div>
          <?php } ?>

        </div>    
        
        
      </div>
    </div>

    <div class="product-action clearfix visible-xs">
    <a class="call-Phone-number-left" href="tel:0971858996" target="_blank" rel="nofollow">Gọi điện</a>
    <a class="send-message-facebook-right" href="https://www.messenger.com/t/noithatcaocapmihome" target="_blank" rel="nofollow"></a>
    
     </div>
    <div class="product-action clearfix hidden-xs">
       <div>
          
          <?php if($_product->get_price()){ ?>
          <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
          <?php } ?>
          <a  title="Xem nhanh" href="<?php the_permalink()?>" data-handle="adidas-neo-advantage" class="xem_nhanh btn-circle btn_view btn right-to quick-view  sgh__js-quick-view yith-wcqv-button" data-product_id="<?php echo get_the_ID()?>" >
            <i class="fa fa-eye"></i>
          </a>
          <!-- href="//www.facebook.com/sharer.php?u=https://tubeptruongson.com/san-pham/tu-bep-go-soi-nga-tbsn063/" -->
          <a title="share facebook" target="_blank" rel="nofollow" href="//www.facebook.com/sharer.php?u=<?php echo(the_permalink()) ?>" class="share-facebook-in-home-page">
            <i class="fa fa-facebook"></i>
          </a>
        </div>
    <div>
      <a class="send-message-facebook" href="https://www.messenger.com/t/noithatcaocapmihome" target="_blank" rel="nofollow">Gửi tin nhắn</a>
      <a class="call-Phone-number" href="tel:0971858996" target="_blank" rel="nofollow">Gọi điện</a>
    </div>
            
    </div>



  </div>
</div>
