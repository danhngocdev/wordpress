<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
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
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="col-xs-6 hidden-xs col-sm-4 col-lg-3 text-xs-left text-sm-right">
	<div class="viewmore hidden f-left">
		<a href="javascript:;" data-view="grid">
			<b class="btn button-view-mode view-mode-grid active ">
				<i class="fa fa-th" aria-hidden="true"></i>					
			</b>
		</a>
		<a href="javascript:;" data-view="list" onclick="switchView('list')">
			<b class="btn button-view-mode view-mode-list ">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</b>
		</a>
	</div>
	<div id="sort-by">
		<label class="left hidden hidden-xs"></label>
		<ul>
			<li><span>Sắp xếp theo</span>
				<ul>                    
					<li><a href="./" onclick="sortby('default')">Mặc định</a></li>								
					<li><a href="./?orderby=popularity">Phổ biến nhất</a></li>
					<li><a href="./?orderby=rating">Đánh giá cao nhất</a></li>
					<li><a href="/?orderby=date">Mới nhất</a></li>
					<li><a href="/?orderby=price">Giá tăng</a></li>
					<li><a href="/?orderby=price-desc">Giá giảm dần</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>