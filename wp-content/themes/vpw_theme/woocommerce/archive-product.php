<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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

get_header( 'shop' );

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
<div class="container">
	<div class="row">					
		<section class="main_container collection col-lg-9 col-lg-push-3 col-md-9 col-md-push-3">
			<div class="category-products products">
				<div class="sortPagiBar">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">	
							<div class="box-heading relative">
								<h1 class="title-head margin-top-0"><?php woocommerce_page_title(); ?></h1>				
							</div>				
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 text-xs-left text-sm-right">
							<div class="bg-white clearfix f-right">
								<div class="view-mode">				
		
									<a href="?view=list" data-view="list" onclick="switchView('list')">
										<b class="btn button-view-mode view-mode-list  <?php  if($_GET['view']=="list"){ ?> active <?php } ?>">
											<i class="fa fa-th-list" aria-hidden="true"></i>
										</b>
										<span>Danh sách</span>
									</a>
									<a href="?view=grid" data-view="grid">
										<b class="btn button-view-mode view-mode-grid <?php  if($_GET['view']=="list"){ }else{ ?> active <?php } ?> ">
											<i class="fa fa-th" aria-hidden="true"></i>					
										</b>
										<span>Lưới</span>
									</a>
								</div>
								<div id="sort-by">
									<ul>
										<li><span class="val">Mặc định</span>
											<ul class="ul_2">
												<li><a href="./" onclick="sortby('default')"><i></i> Mặc định</a></li>								
												<li><a href="./?orderby=popularity"><i></i> Phổ biến nhất</a></li>
												<li><a href="./?orderby=rating"><i></i> Đánh giá cao nhất</a></li>
												<li><a href="./?orderby=date"><i></i> Mới nhất</a></li>
												<li><a href="./?orderby=price"><i></i> Giá tăng</a></li>
												<li><a href="./?orderby=price-desc"><i></i> Giá giảm dần</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>



				<?php  if($_GET['view']=="list"){ ?>

				<section class="products-view products-view-list">
					<div class="row">
						
				<?php
				if ( woocommerce_product_loop() ) {
				?>

				<?php

				woocommerce_product_loop_start();


				if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
				the_post();

				/**
				* Hook: woocommerce_shop_loop.
				*
				* @hooked WC_Structured_Data::generate_product_data() - 10
				*/
				do_action( 'woocommerce_shop_loop' );
				?>
				<div class="col-xs-12 item_list">
					<?php
					wc_get_template_part( 'content', 'product-list' );
					?>
				</div>
				<?php
				}
				}

				woocommerce_product_loop_end();

				/**
				* Hook: woocommerce_after_shop_loop.
				*
				* @hooked woocommerce_pagination - 10
				*/
				do_action( 'woocommerce_after_shop_loop' );
				} else {
				/**
				* Hook: woocommerce_no_products_found.
				*
				* @hooked wc_no_products_found - 10
				*/
				do_action( 'woocommerce_no_products_found' );
				}
				?>
				</div>
				</section>

				<?php }else{ ?>


				<section class="products-view products-view-grid">
					<div class="row row-noGutter-75">
						
				<?php
				if ( woocommerce_product_loop() ) {
				?>

				<?php

				woocommerce_product_loop_start();


				if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
				the_post();

				/**
				* Hook: woocommerce_shop_loop.
				*
				* @hooked WC_Structured_Data::generate_product_data() - 10
				*/
				do_action( 'woocommerce_shop_loop' );
				?>

				<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
					<?php
					wc_get_template_part( 'content', 'product' );
					?>
				</div>
				<?php
				}
				}

				woocommerce_product_loop_end();

				/**
				* Hook: woocommerce_after_shop_loop.
				*
				* @hooked woocommerce_pagination - 10
				*/
				do_action( 'woocommerce_after_shop_loop' );
				} else {
				/**
				* Hook: woocommerce_no_products_found.
				*
				* @hooked wc_no_products_found - 10
				*/
				do_action( 'woocommerce_no_products_found' );
				}
				?>
				</div>
				</section>
				<?php } ?>


			</div>
		</section>

		<aside class="dqdt-sidebar sidebar left left-content col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9">

				<?php get_sidebar()?>
		
		</aside>


	</div>
</div>

<?php
get_footer( 'shop' );
