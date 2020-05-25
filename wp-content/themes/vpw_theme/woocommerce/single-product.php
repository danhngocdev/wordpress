<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
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

get_header( 'shop' ); 


wp_enqueue_style('css_01', get_template_directory_uri() . '/css/lightbox.css');

wp_enqueue_script('script_81', get_template_directory_uri() . '/js/jquery.elevatezoom308.min.js',1,'',true);
wp_enqueue_script('script_91', get_template_directory_uri() . '/js/jquery.prettyphoto.min005e.js',1,'',true);
wp_enqueue_script('script_911', get_template_directory_uri() . '/js/jquery.prettyphoto.init.min367a.js',1,'',true);

$_product = wc_get_product(get_the_ID());
?>

<section class="bread-crumb">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php echo custom_breadcrumbs()?>
			</div>
		</div>
	</div>
</section>
<section class="product margin-top-20" itemscope itemtype="http://schema.org/Product">	
<div class="container">
<div class="row">
<div class="details-product">
<?php while ( have_posts() ) : the_post(); ?>

<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>
</div>


</div>
</div>
</section>

<?php get_footer( 'shop' ); ?>


<script> 
	var ww = $(window).width();

	function validate(evt) {
		var theEvent = evt || window.event;
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode( key );
		var regex = /[0-9]|\./;
		if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		}
	}

	var selectCallback = function(variant, selector) {


		if (variant) {
			$('.iwishAddWrapper').attr('data-variant',variant.id);
			var form = jQuery('#' + selector.domIdPrefix).closest('form');

			for (var i=0,length=variant.options.length; i<length; i++) {

				var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
				if (radioButton.size()) {
					radioButton.get(0).checked = true;
				}
			}
		}
		var addToCart = jQuery('.form-product .btn-cart'),
			form = jQuery('.form-product .form_product_content'),
			form2 = jQuery('.soluong'),
			productPrice = jQuery('.details-pro .special-price .product-price'),
			qty = jQuery('.group-status .first_status .availabel'),
			sale = jQuery('.details-pro .old-price .product-price-old'),
			comparePrice = jQuery('.details-pro .old-price .product-price-old');

		if (variant && variant.available) {
			if(variant.inventory_management == "bizweb"){
				if (variant.inventory_quantity != 0) {
					qty.html('Còn hàng');
				} else if (variant.inventory_quantity == ''){
					qty.html('Hết hàng');
				}
			} else {
				qty.html('Còn hàng');
			}
			addToCart.html('<span class="text_1">MUA NGAY</span><span class="text_2">Giao hàng miễn phí tận nơi</span>').removeAttr('disabled');	
			if(variant.price == 0){
				productPrice.html('Liên hệ');	
				comparePrice.hide();
				form.addClass('hidden');
				sale.removeClass('sale');

				if(variant.inventory_management == "bizweb"){
					if (variant.inventory_quantity != 0) {
						qty.html('Còn hàng');
					} else if (variant.inventory_quantity == ''){
						qty.html('Hết hàng');
					}
				} else {
					qty.html('Còn hàng');
				}
			}else{
				form.removeClass('hidden');
				productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
				// Also update and show the product's compare price if necessary
				if ( variant.compare_at_price > variant.price ) {
					comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
					sale.addClass('sale');
					if(variant.inventory_management == "bizweb"){
						if (variant.inventory_quantity != 0) {
							qty.html('Còn hàng');
							form2.removeClass('hidden');
						} else if (variant.inventory_quantity == ''){
							qty.html('Còn hàng');
							form2.removeClass('hidden');
						}
					} else {
						qty.html('Còn hàng');
						form2.removeClass('hidden');
					}
				} else {
					comparePrice.hide();  
					sale.removeClass('sale');
					if(variant.inventory_management == "bizweb"){
						if (variant.inventory_quantity != 0) {
							qty.html('Còn hàng');
							form2.removeClass('hidden');
						} else if (variant.inventory_quantity == ''){
							qty.html('Hết hàng');
						}
					} else {
						qty.html('Còn hàng');
						form2.removeClass('hidden');
					}
				}       										
			}

		} else {
			addToCart.html('<span class="text_1">HẾT HÀNG</span><span class="text_2">Liên hệ 0983953936</span>').attr('disabled', 'disabled');
			qty.html('Hết hàng');
			form.removeClass('hidden');
			if(variant){
				if(variant.price != 0){
					form.removeClass('hidden');
					addToCart.addClass('hidden');
					productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));
					// Also update and show the product's compare price if necessary
					if ( variant.compare_at_price > variant.price ) {
						form.addClass('hidden');
						comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
						sale.addClass('sale');
						addToCart.text('Hết hàng').attr('disabled', 'disabled').removeClass('hidden');
						if(variant.inventory_management == "bizweb"){
							if (variant.inventory_quantity != 0) {
								qty.html('Còn hàng');
							} else if (variant.inventory_quantity == ''){
								form2.addClass('hidden');
								form.removeClass('hidden');
								qty.html('Hết hàng');
								addToCart.removeClass('hidden');
							}
						} else {
							qty.html('Còn hàng');
						}
					} else {
						comparePrice.hide();   
						sale.removeClass('sale');
						form.addClass('hidden');
						addToCart.text('Hết hàng').attr('disabled', 'disabled').removeClass('hidden');
						if(variant.inventory_management == "bizweb"){
							if (variant.inventory_quantity != 0) {
								qty.html('Còn hàng');
							} else if (variant.inventory_quantity == ''){
								form2.addClass('hidden');
								form.removeClass('hidden');
								qty.html('Hết hàng');
								addToCart.removeClass('hidden');
							}
						} else {
							qty.html('Còn hàng');
						}
					}     
				}else{
					productPrice.html('Liên hệ');	
					comparePrice.hide();
					form.addClass('hidden');	
					sale.removeClass('sale');
					addToCart.addClass('hidden');
				}
			}else{
				productPrice.html('Liên hệ');	
				comparePrice.hide();
				form.addClass('hidden');	
				sale.removeClass('sale');
				addToCart.addClass('hidden');
			}
		}
		/*begin variant image*/
		if (variant && variant.image) {  
			var originalImage = jQuery(".large-image img"); 
			var newImage = variant.image;
			var element = originalImage[0];
			Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
				jQuery(element).parents('a').attr('data-href', newImageSizedSrc);
				jQuery(element).attr('src', newImageSizedSrc);
				if (ww >= 1200){
					
					$("#img_01").data('zoom-image', newImageSizedSrc).elevateZoom({
						responsive: true,
						gallery:'gallery_02',
						cursor: 'pointer',
						galleryActiveClass: "active"
					});
					 $("#img_01").bind("click", function(e) {
						 var ez = $('#img_02').data('elevateZoom');
					 });
					 
					 }
					});

					setTimeout(function(){
						$('.checkurl').attr('href',$(this).attr('src'));
						if (ww >= 1200){
							
							$('.zoomContainer').remove();
							 $("#img_01").elevateZoom({
								 gallery:'gallery_02', 
								 zoomWindowWidth:420,
								 zoomWindowHeight:500,
								 zoomWindowOffetx: 10,
								 easing : true,
								 scrollZoom : false,
								 cursor: 'pointer', 
								 galleryActiveClass: 'active', 
								 imageCrossfade: true
							 });
							 
							 }
							},200);

						} 
					};

						   jQuery('.swatch :radio').change(function() {
							   var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
							   var optionValue = jQuery(this).val();
							   jQuery(this)
								   .closest('form')
								   .find('.single-option-selector')
								   .eq(optionIndex)
								   .val(optionValue)
								   .trigger('change');
						   });
						   if (ww >= 1200){
							   
							   $(document).ready(function() {
								   if($(window).width()>1200){
									   $('#img_01').elevateZoom({
										   gallery:'gallery_02', 
										   zoomWindowWidth:420,
										   zoomWindowHeight:500,
										   zoomWindowOffetx: 10,
										   easing : true,
										   scrollZoom : true,
										   cursor: 'pointer', 
										   galleryActiveClass: 'active', 
										   imageCrossfade: true
									   });
								   }
							   });
								
								}
								$("#img_02").click(function(e){
									e.preventDefault();
									var hr = $(this).attr('src');
									$('#img_01').attr('src',hr);
									$('.large_image_url').attr('href',hr);
									$('#img_01').attr('data-zoom-image',hr);
								});


								/*For recent product*/
								var alias = 'loa-vi-tinh-microtek-mt-125';
								/*end*/
								if (ww >= 1200){
									
									$(document).ready(function() {
										$('#img_01').elevateZoom({
											gallery:'gallery_02', 
											zoomWindowWidth:420,
											zoomWindowHeight:500,
											zoomWindowOffetx: 10,
											easing : true,
											scrollZoom : true,
											cursor: 'pointer', 
											galleryActiveClass: 'active', 
											imageCrossfade: true

										});
									});
									 
									 }
									 $('#gallery_00 img, .swatch-element label').click(function(e){

										 $('.checkurl').attr('href',$(this).attr('src'));
										 if (ww >= 1200){
											 
											 setTimeout(function(){
												 $('.zoomContainer').remove();				
												 $('#zoom_01').elevateZoom({
													 gallery:'gallery_02', 
													 zoomWindowWidth:420,
													 zoomWindowHeight:500,
													 zoomWindowOffetx: 10,
													 easing : true,
													 scrollZoom : true,
													 cursor: 'pointer', 
													 galleryActiveClass: 'active', 
													 imageCrossfade: true
												 });
											 },300);
											  
											  }
											 });

</script>

<script>



	$(document).ready(function (e) {

		var sale_count = $('.details-product .product-detail-left .sale_count .bf_');
		if (sale_count == '-0%') {
			sale_count.text('-1%');
		} else if (sale_count == '-100%') {
			sale_count.text('-99%');
		}

		$("#gallery_02").owlCarousel({
			navigation : true,
			nav: true,
			navigationPage: false,
			navigationText : false,
			slideSpeed : 1000,
			pagination : true,
			dots: false,
			margin: 5,
			autoHeight:true,
			autoplay:false,
			autoplayTimeout:false,
			autoplayHoverPause:true,
			loop: false,
			responsive: {
				0: {
					items: 3
				},
				543: {
					items: 3
				},
				768: {
					items: 3
				},
				991: {
					items: 3
				},
				992: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});

		$('#gallery_02 img, .swatch-element label').click(function(e){
			e.preventDefault();
			var ths = $(this).attr('data-img');
			$('.large-image .checkurl').attr('href', ths);

			$('.large-image .checkurl img').attr('src', ths);

			/*** xử lý active thumb -- ko variant ***/
			var thumbLargeimg = $('.details-product .large-image a').attr('href');
			var thumMedium = $('#gallery_02 .owl-item .item a').find('img').attr('src');
			var url = [];

			$('#gallery_02 .owl-item .item').each(function(){
				var srcImg = '';
				$(this).find('a img').each(function(){
					var current = $(this);
					if(current.children().size() > 0) {return true;}
					srcImg += $(this).attr('src');
				});
				url.push(srcImg);
				var srcimage = $(this).find('a img').attr('src');
				if (srcimage == thumbLargeimg) {
					$(this).find('a').addClass('active');
				} else {
					$(this).find('a').removeClass('active');
				}
			});
		})

	});

</script>
