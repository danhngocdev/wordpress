
<?php



class spbox2 extends WP_Widget {
function __construct() {

parent::__construct(

'spbox2',

'SẢN PHẨM BOX 1',

array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )

);

}



function form( $instance ) {

$default = array(

);

$instance = wp_parse_args( (array) $instance, $default );

}



function update( $new_instance, $old_instance ) {

$instance = $old_instance;

return $instance;

}



function widget( $args, $instance ) {

extract($args);

$tieu_de = get_field('tieu_de', 'widget_' . $args[widget_id]);
$post_number = get_field('so_luong', 'widget_' . $args[widget_id]);
$cat = get_field('danh_muc', 'widget_' . $args[widget_id]);
$cc= get_term_by('id', $cat, 'product_cat');
$slug2=$cc->slug;
$args2 = array(
'posts_per_page' => $post_number,
'product_cat' => $slug2,
'post_type' => 'product',
'orderby' => 'id', 
'meta_query' => array(
'key'       => '_featured',
'value'     => 'yes',
) 
);
$product_hot = new WP_Query( $args2 );
?>






<section class="awe-section-3" id="home_block_3"> 


<section class="section_hotdeal">
<div class="container">
<div class="row">
<div class="col-12" style="width: 100%;"><img src="http://localhost:5555/noithatmihome.com/wp-content/uploads/2020/05/banner_qc.png" style="
    width: 100%;
"></div>
<div class="content_hihi col-lg-12">
<div class="heading_hotdeal">
<h2 class="title-head">
<a href="<?php echo get_term_link($cat,'product_cat')?>"> <?php echo $tieu_de ?></a>
</h2>
</div>

<div class="border_wrap">
<div class="owl_product_comback ">
<div class="product_comeback_wrap">
<div class="owl_product_item_content owl-carousel not-nav2 " data-dot="false" data-nav='false' data-lg-items='5' data-md-items='4' data-sm-items='3' data-xs-items="2" data-margin='20'>

<?php
if ($product_hot->have_posts()):
while( $product_hot->have_posts() ) :
$product_hot->the_post();
$_product = wc_get_product(get_the_ID());
?>

<div class="item saler_item col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
<div class="owl_item_product product-col">
<?php
wc_get_template_part( 'content', 'product' );
?>
</div>
</div>

<?php endwhile;endif ?>



</div>

</div>
</div>
</div>
</div>
</div>
</div>
</section>
</section>


<?php


}



}



add_action( 'widgets_init', 'spbox2' );

function spbox2() {

register_widget('spbox2');

}



class spbox3 extends WP_Widget {
function __construct() {

parent::__construct(

'spbox3',

'SẢN PHẨM BOX 2',

array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )

);

}



function form( $instance ) {

$default = array(

);

$instance = wp_parse_args( (array) $instance, $default );

}



function update( $new_instance, $old_instance ) {

$instance = $old_instance;

return $instance;

}



function widget( $args, $instance ) {

extract($args);
$tieu_de = get_field('tieu_de', 'widget_' . $args[widget_id]);
$post_number = get_field('so_luong', 'widget_' . $args[widget_id]);
$cat = get_field('danh_muc', 'widget_' . $args[widget_id]);
$catchinh = get_field('danh_muc_chinh', 'widget_' . $args[widget_id]);
$banner = get_field('banner', 'widget_' . $args[widget_id]);
$cc= get_term_by('id', $catchinh, 'product_cat');
$slug2=$cc->slug;
$args2 = array(
'posts_per_page' => $post_number,
'product_cat' => $slug2,
'post_type' => 'product',
'orderby' => 'id', 
'meta_query' => array(
'key'       => '_featured',
'value'     => 'yes',
) 
);
$product_hot = new WP_Query( $args2 );
?>



<section class="awe-section-4" id="home_block_4"> 

<div class="section_fashion_hot section_base ">
<div class="container">
<div class="row">
<div class="clearfix">
<div class="col-md-12">
<div class="border_bottom_title clearfix">
</div>
<div class="title_top_menu">
<h3><a href="<?php echo get_term_link($catchinh,'product_cat')?>"> <?php echo $tieu_de ?></a></h3>

<div class="btn_menu">
<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
</div>
<ul class="clearfix">

<?php $i=1; foreach($cat as $cat1){ $y=$i++; ?>
<li><a href="<?php echo get_term_link($cat1->term_id,'product_cat')?>" title="<?php echo $cat1->name ?>"><?php echo $cat1->name ?></a></li>
<?php  } ?>

<li><a href="<?php echo get_term_link($catchinh,'product_cat')?>" class="more_view">Xem tất cả</a></li>
</ul>

</div>

</div>
<div class="col-md-12">
<div class="content_sec clearfix ">
<div class="col-md-12 col-lg-12 image_right col-lg-push-0 col-md-push-0">
<div class="prd_sec">
<div class="products owl-carousel owl-theme products-view-grid" data-nav="true" data-lg-items="5" data-md-items="3" data-sm-items="3" data-xs-items="2" data-margin="15">



<?php
$i=0;
if ($product_hot->have_posts()):
while( $product_hot->have_posts() ) :
$product_hot->the_post();
$_product = wc_get_product(get_the_ID());
$y=$i++;
?>
<?php if($y%2==0) { echo '<div class="item saler_item">' ; } ?>
<?php
wc_get_template_part( 'content', 'product' );
?>
<?php if($y%2==1) { echo '</div>' ; } ?>

<?php endwhile;endif ?>

</div>
</div>
</div>
<div class="col-lg-3 col-md-3 hidden-sm  fix-padding-left col-lg-pull-9 col-md-pull-9">
<div class="banner_img">
<?php echo $banner ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<?php


}



}



add_action( 'widgets_init', 'spbox3' );

function spbox3() {

register_widget('spbox3');

}






class spbox1 extends WP_Widget {
function __construct() {

parent::__construct(

'spbox1',

'SẢN PHẨM BOX 3',

array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )

);

}



function form( $instance ) {

$default = array(

);

$instance = wp_parse_args( (array) $instance, $default );

}



function update( $new_instance, $old_instance ) {

$instance = $old_instance;

return $instance;

}



function widget( $args, $instance ) {

extract($args);
$tieu_de = get_field('tieu_de', 'widget_' . $args[widget_id]);
$post_number = get_field('so_luong', 'widget_' . $args[widget_id]);
$cat = get_field('danh_muc', 'widget_' . $args[widget_id]);
$cc= get_term_by('id', $cat, 'product_cat');
$slug2=$cc->slug;
$args2 = array(
'posts_per_page' => $post_number,
'product_cat' => $slug2,
'post_type' => 'product',
'orderby' => 'id', 
'meta_query' => array(
'key'       => '_featured',
'value'     => 'yes',
) 
);
$product_hot = new WP_Query( $args2 );
?>



<section class="awe-section-7" id="home_block_7"> 



<div class="section_choose_private section_base">
<div class="container">
<div class="row">
<div class="clearfix">
<div class="col-md-12">
<div class="border_bottom_title clearfix">
</div>
<div class="title_top_menu">
<h3><a href="<?php echo get_term_link($cat,'product_cat')?>"> <?php echo $tieu_de ?></a></h3>
</div>
</div>
<div class="col-md-12">
<div class="content_sec clearfix">
<div class="prd_sec">
<div class="products owl-carousel owl-theme products-view-grid" data-nav="true" data-lg-items="3" data-md-items="2" data-sm-items="2" data-xs-items="1" data-margin="15">


<?php
$i=0;
if ($product_hot->have_posts()):
while( $product_hot->have_posts() ) :
$product_hot->the_post();
$_product = wc_get_product(get_the_ID());
$y=$i++;
?>
<?php if($y%2==0) { echo '<div class="item saler_item"><div class="owl_item_product product-col-1">' ; } ?>



<div class="product-box-h product-box-1">
<div class="row">
<div class="col-sm-5 col-xs-5 col-xs-left-f">
<div class="product-thumbnail">
<a class="image_link display_flex" href="<?php the_permalink()?>" title="<?php the_title()?>">
<img src="<?php echo get_template_directory_uri()?>/images/rolling.svg?1543485569065"  data-lazyload="<?php the_post_thumbnail_url('size240')?>" alt="<?php the_title()?>">
</a>
</div>
</div>
<div class="col-sm-7 col-xs-7 col-xs-right-f pad-col-15">
<div class="product-info a-left">

<h3 class="product-name"><a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a></h3>

<div class="bizweb-product-reviews-badge" data-id="11672132"></div>
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



</div>


<?php if($y%2==1) { echo '</div></div>' ; } ?>

<?php endwhile;endif ?>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>






<?php


}



}



add_action( 'widgets_init', 'spbox1' );

function spbox1() {

register_widget('spbox1');

}




class spwg extends WP_Widget {
function __construct() {

parent::__construct(

'spwg',

'SẢN PHẨM WIDGET',

array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )

);

}



function form( $instance ) {

$default = array(

);

$instance = wp_parse_args( (array) $instance, $default );

}



function update( $new_instance, $old_instance ) {

$instance = $old_instance;

return $instance;

}



function widget( $args, $instance ) {

extract($args);

$tieu_de = get_field('tieu_de', 'widget_' . $args[widget_id]);
$post_number = get_field('so_luong', 'widget_' . $args[widget_id]);
$cat = get_field('danh_muc', 'widget_' . $args[widget_id]);
$term=get_term_by('id', $cat, 'product_cat');
$slug2=$term->slug;
$args2 = array(
'posts_per_page' => $post_number,
'product_cat' => $slug2,
'post_type' => 'product',
'orderby' => 'id', 
'meta_query' => array(
'key'       => '_featured',
'value'     => 'yes',
) 
);
$product_hot = new WP_Query( $args2 );
$thumbnail_id = get_woocommerce_term_meta( $cat, 'thumbnail_id', true );
$image = wp_get_attachment_url( $thumbnail_id );

?>

<div class="module_best_sale_product">
<div class="title_module_">
<h2 class="title"><a href="<?php echo get_category_link($cat)?>"><?php echo $tieu_de ?></a></h2>
</div>
<div class="sale_off_today">

<div class="not-dqowl wrp_list_product">

<?php
if ($product_hot->have_posts()):
while( $product_hot->have_posts() ) :
$product_hot->the_post();
$_product = wc_get_product(get_the_ID());
?> 

<div class="item_small">
<div class="product-mini-item clearfix   on-sale">
<a href="<?php the_permalink()?>" class="product-img">
<img src="<?php the_post_thumbnail_url('size160')?>" alt="<?php the_title()?>">
</a>

<div class="product-info"> 
<h3><a href="<?php the_permalink()?>" title="<?php the_title()?>" class="product-name text3line"><?php the_title()?></a></h3>
<div class="price-box">


<?php if($_product->get_price()){ ?>
<span class="price"><span class="price product-price"><?php echo  number_format($_product->get_price(),0,",",",")?>₫</span> </span>
<?php }else{ ?>
<span class="price"><span class="price product-price">Liên hệ</span> </span>
<?php } ?>
<?php if($_product->get_sale_price()){ ?>
<span class="old-price"><del class="sale-price"><?php echo  number_format($_product->get_regular_price(),0,",",",")?>₫</del> </span> 
<?php } ?>


</div>

</div>
</div>
</div>


<?php
endwhile;
endif; ?>


</div>
</div>
</div>



<?php


}



}



add_action( 'widgets_init', 'spwg' );

function spwg() {

register_widget('spwg');

}





class cat_post1 extends WP_Widget {
function __construct() {

parent::__construct(

'cat_post1',

'TIN TỨC WIDGET',

array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )

);

}

function form( $instance ) {
$default = array(
);
$instance = wp_parse_args( (array) $instance, $default );
}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
return $instance;
}

function widget( $args, $instance ) {

extract($args);

$tieu_de = get_field('tieu_de', 'widget_' . $args[widget_id]);
$mo_ta = get_field('mo_ta', 'widget_' . $args[widget_id]);
$post_number = get_field('so_luong', 'widget_' . $args[widget_id]);
$cat = get_field('danh_muc', 'widget_' . $args[widget_id]);
$icon = get_field('icon', 'widget_' . $args[widget_id]);
$args2 = array(
'posts_per_page' => $post_number,
'cat' => $cat,
'orderby' => 'id',
);
$tintuc = new WP_Query( $args2 );
?>

<div class="blog-aside aside-item blog-aside-article">
<div>
<div class="aside-title-article">
<h2 class="title-head"><span><a href="<?php echo get_category_link($cat)?>" title="<?php echo $tieu_de ?>"><?php echo $tieu_de ?></a></span></h2>
</div>
<div class="aside-content-article">
<div class="blog-list blog-image-list">


<?php
if ($tintuc->have_posts()):
while( $tintuc->have_posts() ) :
$tintuc->the_post();
?>

<div class="loop-blog">
<div class="thumb-left">
<a href="<?php the_permalink()?>">

<picture>
<img src="<?php the_post_thumbnail_url('size100')?>" style="max-width:100%;" class="img-responsive" title="<?php the_title()?>" alt="<?php the_title()?>">
</picture>

</a>
</div>
<div class="name-right">
<h3><a href="<?php the_permalink()?>" title="<?php the_title()?>"><?php the_title()?></a></h3>

</div>
</div>

<?php
endwhile;
endif; ?>


</div>
</div>
</div>
</div>



<?php
}
}

add_action( 'widgets_init', 'cat_widget' );

function cat_widget() {

register_widget('cat_post1');

}




class box6 extends WP_Widget {
function __construct() {

parent::__construct(

'box6',

'BOX BANNER',

array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )

);

}

function form( $instance ) {
$default = array(
);
$instance = wp_parse_args( (array) $instance, $default );
}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
return $instance;
}

function widget( $args, $instance ) {

extract($args);

?>

<section class="awe-section-2" id="home_block_2"> 
<aside class="adv_bottom">
<div class="container">
<div class="row"> 
<?php
if( have_rows('list', 'widget_' . $args[widget_id]) ):
while ( have_rows('list', 'widget_' . $args[widget_id]) ) : the_row();
?>


<!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="adv_bottom_inner">
<figure class="img_effect img_1">
<a href="<?php the_sub_field('link')?>" title="Banner 1"><img class="img-responsive center-base" src="<?php the_sub_field('anh')?>" alt="Banner 1"></a>
</figure>
</div>
</div> -->

<?php
endwhile;
else :
endif;
?>
</div>
</div>
</aside>
</section>


<!-- hiển thị danh mục -->
<section class="awe-section-12 hidden-sm hidden-xs" id="home_block_12"> 
<aside class="adv_bottom">
<div class="container">
<div class="row"> 
    <div class="heading_hotdeal">
    <h2 class="title-head">
    DANH MỤC SẢN PHẨM
    </h2>
    </div>
  <?php
  $orderby = 'term_id';
  $order = 'asc';
  $hide_empty = false ;
  $term_group = 1;
  $cat_args = array(
      'orderby'    => $orderby,
      'order'      => $order,
      'hide_empty' => $hide_empty,
      'include' => '344,345,346,347,348,349,350,351,352,353,355,360,361,362,363,354,355',
  );
  $product_categories = get_terms( 'product_cat', $cat_args );
  foreach($product_categories as $index => $category):?>
  <div class="col-lg-2 col-md-3  slider-menu-category ">
    <div class="slider-menu-category-image">
        <a  href="<?php echo get_category_link($category->term_id)?>">
        <!-- <img src="<?php 
            $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
            echo (wp_get_attachment_url( $thumbnail_id ));
          ?>" alt="<?php echo $category ->name; ?>" class="slider-menu-category-image-thumb"
        > -->
          <span class="slider-menu-category-title">
            <?php echo $category ->name; ?>
          </span>
      </a>
  </div>
  
  </div>
   
  <?php endforeach; ?>


</div></div></div>

</div>
</div>
</aside>
</section>




<?php
}
}

add_action( 'widgets_init', 'box6' );

function box6() {

register_widget('box6');

}








class doitac extends WP_Widget {
function __construct() {

parent::__construct(

'doitac',

'BOX ĐỐI TÁC',

array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )

);

}

function form( $instance ) {
$default = array(
);
$instance = wp_parse_args( (array) $instance, $default );
}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
return $instance;
}

function widget( $args, $instance ) {

extract($args);

?>



<section class="awe-section-8" id="home_block_8"> 
  <div class="section_brand">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-xs-12 ">
        <div class="heading">
          <h2 class="title-head">
            <a href="#"><?php the_field('tieu_de', 'widget_' . $args[widget_id]);?></a>
          </h2>
        </div>
      </div>
      <div class="col-lg-12 col-xs-12 ">
        <div class="owl-carousel owl-theme brand_content not-nav2" data-loop="true" data-nav= "false" data-lg-items="6" data-md-items="6" data-xs-items="2" data-sm-items="4" data-margin="15">
          
          <?php 
          $images = get_field('hinh_anh', 'widget_' . $args[widget_id]);

          if( $images ): ?>
          <?php foreach( $images as $image ): ?>

          <div class="item">
            <a class="img_" href="<?php echo $image['description']; ?>">
              <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" >
            </a>
          </div>
           <?php endforeach; ?>
          <?php endif; ?>
          
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<?php
}
}

add_action( 'widgets_init', 'doitac' );

function doitac() {

register_widget('doitac');

}







class camket extends WP_Widget {
function __construct() {

parent::__construct(

'camket',

'BOX CAM KẾT',

array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )

);

}

function form( $instance ) {
$default = array(
);
$instance = wp_parse_args( (array) $instance, $default );
}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
return $instance;
}

function widget( $args, $instance ) {

extract($args);

?>


<section class="awe-section-9" id="home_block_9"> 
  <section class="section_service_end">
  <div class="container">
    <div class="row row-noGutter-2">
      <div class="wrap_item_srv owl-carousel owl-theme service_content" data-nav="false" data-dot="true" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1"  data-margin="15">
        
        <?php 
        $images = get_field('hinh_anh', 'widget_' . $args[widget_id]);
        if( $images ): ?>
        <?php foreach( $images as $image ): ?>
        
        <div class="col-item-srv">
          <div class="service_item_ed">
            <span class="iconx">
              <img alt="<?php echo $image['title']; ?>" src="<?php echo $image['sizes']['thumbnail']; ?>"/>
            </span>
            <div class="content_srv">
              <span class="title_service"><?php echo $image['title']; ?></span>
              <span class="sum_service"><?php echo $image['description']; ?></span>
            </div>
          </div>
        </div>

         <?php endforeach; ?>
          <?php endif; ?>
        
      </div>
    </div>
  </div>
</section>
</section>


<?php
}
}

add_action( 'widgets_init', 'camket' );

function camket() {

register_widget('camket');

}






class camket2 extends WP_Widget {
function __construct() {

parent::__construct(

'camket2',

'BOX CAM KẾT WIDGET',

array( 'description'  =>  'Widget hiển thị bài viết theo chuyên mục' )

);

}

function form( $instance ) {
$default = array(
);
$instance = wp_parse_args( (array) $instance, $default );
}

function update( $new_instance, $old_instance ) {
$instance = $old_instance;
return $instance;
}

function widget( $args, $instance ) {

extract($args);

?>
<div class="wrap_module_service">

  <?php 
  $images = get_field('hinh_anh', 'widget_' . $args[widget_id]);

  if( $images ): ?>
  <?php foreach( $images as $image ): ?>
    
  <div class="item_service">
    <div class="wrap_item_">
      <div class="content_service" style="background: url(<?php echo $image['sizes']['thumbnail']; ?>) no-repeat left  center;">
        <p><?php echo $image['title']; ?></p>
        <span><?php echo $image['description']; ?></span>
      </div>
    </div>
    
  </div>

  <?php endforeach; ?>
  <?php endif; ?>


</div>



<?php
}
}

add_action( 'widgets_init', 'camket2' );

function camket2() {

register_widget('camket2');

}


