<?php
/**
* Header
*/
global $vpw_theme,$woocommerce;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>
<?php wp_title('-', TRUE, 'right'); ?><?php bloginfo('name'); ?><?php if (is_front_page()) {
echo ' - ';
bloginfo('description');
} ?>
</title>
<link href="<?php the_field('favi','option')?>" rel="shortcut icon" type="image/vnd.microsoft.icon" />
<?php wp_head(); ?>
<link href='//fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css' />
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=vietnamese" rel="stylesheet">
</head>
<body <?php echo body_class('woocommerce'); ?>>
	<div class="hidden-md hidden-lg opacity_menu"></div>
		<!-- Main content -->
		<!-- Menu mobile -->
<div id="mySidenav" class="sidenav menu_mobile hidden-md hidden-lg">
	<div class="top_menu_mobile">
		<span class="close_menu">
		</span>
	</div>
	<div class="content_memu_mb">
		<div class="link_list_mobile">

			<ul class="ct-mobile hidden">
				

			</ul>
			<?php
			wp_nav_menu( array(
			'theme_location'    => 'primary',
			'container'         => false,
			'menu_id'           => 'ct-mobile',
			'menu_class'        => 'ct-mobile',
			) );
			?>
		</div>
	</div>
</div>
<!-- End -->
<header class="header">
	<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
				<ul class="topbar_left hidden-sm hidden-xs">
					<li>
						<a class="welcome_text"><?php the_field('title','option')?></a>
					</li>
					<li>
						<a><?php the_field('mo_cua','option')?></a>
					</li>
				</ul>    
			</div>

			<div class="col-lg-6 col-md-5 col-sm-12 d-list col-xs-12 a-right topbar_right">
				<div class="list-inline a-center f-right">
					<ul>
						<li class="login_content">
							<a class="hidden-lg click_account"><i class="fa fa-user" aria-hidden="true"></i> Tài khoản</a>
							<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="hidden-xs hidden-sm hidden-md"><i class="fa fa-user" aria-hidden="true"></i> Tài khoản</a>
							<ul class="ul_account">
								<?php if(!is_user_logged_in()){ ?>
								<li><a href='<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>' id='customer_login_link'><<i class="ion ion-ios-log-in"></i> Đăng nhập</a></li>
								
								<li> <a href='<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>' id='customer_register_link'><i class="ion ion-ios-contacts"></i> Đăng ký</a></li>
								<?php }else{ ?>
								<li><a href='<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>' id='customer_login_link'><i class="fa fa-user"></i>  Tài khoản</a></li>

								<li> <a href='<?php echo wp_logout_url( $redirect ); ?> ' id='customer_register_link'><i class="fa fa-sign-out" aria-hidden="true"></i> Thoát</a></li>
								<?php } ?>
							</ul>
						</li>
						<li class="hidden-xs">
							
							<a href="<?php echo home_url()?>/" title="Khuyến mãi hot" class="account_a">
								<i class="fa fa-star" aria-hidden="true"></i> Khuyến mãi hot
							</a>
							
						</li>
						<li class="hidden-xs">
							
							<a href="<?php echo home_url()?>/" title="Hệ thống cửa hàng" class="account_a">
								<i class="fa fa-map-marker" aria-hidden="true"></i> Hệ thống cửa hàng
							</a>
							
						</li>
						
						
							
					</ul>
				</div>


			</div>
		</div>
	</div>
</div>
	<div class="mid-header wid_100 f-left">
		<div class="container">
			<div class="row">
				<div class="content_header">
					<div class="header-main">
						<div class="menu-bar-h nav-mobile-button hidden-md hidden-lg">
							<a href="#nav-mobile"><img src='<?php echo get_template_directory_uri()?>/images/i_menubar.png' alt='menu bar' /></a>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="logo">

								
								<a href="<?php echo home_url()?>" class="logo-wrapper ">					
									<img src="<?php the_field('logo','option')?>" alt="logo ">					
								</a>
								
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
							<div class="header-left">
								<div class="header_search">
	<form action="<?php echo home_url()?>" method="get" class="input-group search-bar" role="search">

		<input type="text" name="s" value="" autocomplete="off" placeholder="Bạn đang tìm sản phẩm nào..." class="input-group-field auto-search">
		<input type="hidden" name="post_type" value="product">
		<span class="input-group-btn">
			<button type="submit" class="btn icon-fallback-text">
				<span class="fa fa-search" ></span>      
			</button>
		</span>
	</form>
	
	<div id='search_suggestion'>
	<div id='search_top'>
		<div id="product_results"></div>
		<div id="article_results"></div>
	</div>
	<div id='search_bottom'>
		<a class='show_more' href='#'>Hiển thị tất cả kết quả cho "<span></span>"</a>
	</div>
</div>
	
</div>

 
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-xs-12 no-padding-left">
							<div class="header-right">
								<div class="hotline_dathang hidden-sm">
									<div class="icon_hotline">
										<i class="fa fa-phone" aria-hidden="true"></i>
									</div>
									<div class="content_hotline">
										
										<a href="tel:<?php the_field('hotline','option')?>"><?php the_field('hotline','option')?></a>
										
										<span>Hotline đặt hàng</span>
									</div>
								</div>
								<div class="top-cart-contain f-right">
									<div class="mini-cart text-xs-center">
										<div class="heading-cart cart_header">
											<a href="<?php echo wc_get_cart_url(); ?>" title="Giỏ hàng">
											<div class="icon_hotline">
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
											</div>
											</a>
											<div class="content_cart_header">
												<a class="bg_cart" href="<?php echo wc_get_cart_url(); ?>" title="Giỏ hàng">
													(<span class="count_item count_item_pr"><?php echo WC()->cart->get_cart_contents_count(); ?></span>) Sản phẩm
													<span class="text-giohang">Giỏ hàng</span>
												</a>
											</div>
											
										</div>	
										<div class="top-cart-content">					
											<ul id="cart-sidebar" class="mini-products-list count_li">
												
												<?php 
												woocommerce_mini_cart();
												?>

											</ul>
										</div>
									</div>
								</div>
								<div class="top-cart-contain f-right hidden">
									<div class="mini-cart text-xs-center">
										<div class="heading-cart">
											<a class="bg_cart" href="<?php echo wc_get_cart_url(); ?>" title="Giỏ hàng">
												<i class="ion-android-cart"></i>
												<span class="count_item count_item_pr"></span>
											</a>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrap_main hidden-xs hidden-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-mega hidden-sm hidden-xs">
				<div class="menu_mega">
					<div class="title_menu">
						<span class="title_">Danh mục sản phẩm</span>
						<span class="nav_button"><span><i class="fa fa-bars" aria-hidden="true"></i></span></span>
					</div>
					
					<div class="list_menu_header menu_all_site col-lg-3 col-md-3">
						<?php
						wp_nav_menu( array(
						'theme_location'    => 'danhmuc',
						'container'         => false,
						'menu_id'           => 'nav',
						'menu_class'        => 'ul_menu site-nav-vetical',
						) );
						?>
					</div>
					
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="bg-header-nav hidden-xs hidden-sm">
					<div>
						<div class= "row row-noGutter-2">
							<nav class="header-nav">
								<?php
								wp_nav_menu( array(
								'theme_location'    => 'primary',
								'container'         => false,
								'menu_id'           => 'nav',
								'depth'	          => 3,
								'menu_class'        => 'item_big',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
								) );
								?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
<div id="menu-overlay" class=""></div>


