<?php

require_once( dirname(__FILE__) . '/wp-load.php' );
$_product = wc_get_product($_POST['id']);
 ?>


<div id="quickview" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6">
            <div class="image margin-bottom-15">
              <a class="img-product clearfix" title="" href="javascript:;">
                <img id="product-featured-image-quickview" class="img-responsive product-featured-image-quickview" src="//bizweb.dktcdn.net/100/308/325/themes/665783/assets/logo.png?1529113132007" alt="quickview"  />
              </a>
            </div>
            <div id="thumbnail_quickview">
              <div class="thumblist"></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="content">
              <h3 class="product-name"><a href=""><?php echo get_the_title( $_POST['id'] )?></a></h3>
              <div class="status clearfix">
                Trạng thái: <span class="inventory">
                <i class="fa fa-check"></i> Còn hàng
                </span>
              </div>
              <div class="price-box margin-bottom-20 clearfix">     
                <div class="special-price f-left">
                  <span class="price product-price">giá</span>
                </div>

                <div class="old-price">                              
                  <span class="price product-price-old">
                    giá sale
                  </span>
                </div>

              </div>  
              <div class="product-description rte"></div>
              <a href="#" class="view-more hidden">Xem chi tiết</a>
              <div class="clearfix"></div>
              <div class="info-other">
              
              </div>
              <form action="/cart/add" method="post" enctype="multipart/form-data" class="margin-top-20 variants form-ajaxtocart">
                <span class="price-product-detail hidden" style="opacity: 0;">
                  <span class=""></span>
                </span>
                <select name='variantId' class="hidden" style="display:none"></select>
                                
                <div class="clearfix"></div>
                <div class="quantity_wanted_p">
                  <label for="quantity-detail" class="quantity-selector">Số lượng</label>
                  <input type="text" onchange="if(this.value == 0)this.value=1;" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" id="quantity-detail" name="quantity" value="1"  class="quantity-selector text-center">
                  <button type="submit" name="add" class="btn  btn-primary add_to_cart_detail ajax_addtocart">
                    <span >Mua sản phẩm</span>
                  </button>
                </div>
                <div class="total-price" style="display:none">
                  <label>Tổng cộng: </label>
                  <span></span>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>

      <button type="button" class="btn btn-close btn-default" data-dismiss="modal"><i class="fa fa-close"></i></button>

    </div>
  </div>
</div>





<div class="row">
	<div class="frame_images col-md-6 col-sm-6 col-xs-12">      

	    <div class="app-figure" id="zoom-fig">
	      <a href="<?php echo get_the_post_thumbnail_url( $_POST['id'], 'thumbnail')?>" id="Zoom-1" class="MagicZoom" title="<?php echo get_the_title( $_POST['id'] )?>">
	      <img src="<?php echo get_the_post_thumbnail_url( $_POST['id'], 'thumbnail')?>" alt="<?php echo get_the_title( $_POST['id'] )?>"></a>
	    </div>

	    
	    <div class="clear"></div>
	</div>
	<div class="khung_thongtin col-md-6 col-sm-6 col-xs-12">
	    <h1 class="name-product"><span><?php echo get_the_title( $_POST['id'] )?></span></h1>
	    <ul id="khung_thongtin">        
	      <li class="gia_detail">
	      	<?php if($_product->get_price()){ ?>
			<?php echo  number_format($_product->get_price(),0,",",",")?> ₫
			<?php }else{ ?>
			Liên hệ
			<?php } ?>
			<?php if($_product->get_sale_price()){ ?>
			<font><?php echo  number_format($_product->get_regular_price(),0,",",",")?> ₫</font>
			<?php } ?>   
			</li>
	       <?php if($_product->get_sale_price()){ ?>
	       <li class="giacu-detail">Tiết kiệm : <?php echo number_format((( $_product->get_regular_price() - $_product->get_sale_price() )))  ?> đ</li>
	      	<?php } ?> 
	      	      <div class="description"><?php echo get_the_excerpt($_POST['id'])?> </div>          
	      <div class="xemchitiet" data-id="113">
	        <span><a href="<?php echo get_permalink( $_POST['id'] ); ?>">Chi tiết</a></span><br>          
	      </div>
	      <div class="icon-share">
	        <span>Share : </span>
	        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $_POST['id'] ); ?>" target="blank"><img src="<?php echo get_template_directory_uri()?>/images/facebook.png" alt="Share on Facebook"></a>
	        <a href="https://twitter.com/home?status=<?php echo get_permalink( $_POST['id'] ); ?>" target="blank"><img src="<?php echo get_template_directory_uri()?>/images/twitter.png" alt="Share on Twitter"></a>
	        <a href="https://plus.google.com/share?url=<?php echo get_permalink( $_POST['id'] ); ?>"><img src="<?php echo get_template_directory_uri()?>/images/google.png" alt="Share on Google+"></a>
	      </div>
	    </ul>
	</div>
</div>

