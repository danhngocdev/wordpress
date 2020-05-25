<?php

/* Thêm Menu */

register_nav_menus(array('primary' => 'Menu chính'));
register_nav_menus(array('top' => 'Top '));
register_nav_menus(array('danhmuc' => 'Danh mục'));
// Thay doi duong dan logo admin

function wpc_url_login(){

return "#"; // duong dan vao website cua ban

}

add_filter('login_headerurl', 'wpc_url_login');



// mô tả ngắn



function description_short($more) {

    return '...';

}

add_filter( 'excerpt_more', 'description_short' );


/* Thêm css/js */



function vpw_style() {

wp_enqueue_script('script_1', get_template_directory_uri() . '/js/jquery-2.2.3.min.js');
wp_enqueue_script('script_0', get_template_directory_uri() . '/js/rx-all-min.js',1,'',true);
wp_enqueue_script('script_2', get_template_directory_uri() . '/js/option-selectors.js',1,'',true);
wp_enqueue_script('script_3', get_template_directory_uri() . '/js/owl.carousel.min.js',1,'',true);
wp_enqueue_script('script_4', get_template_directory_uri() . '/js/bootstrap.min.js',1,'',true);
wp_enqueue_script('script_5', get_template_directory_uri() . '/js/cs.script.js',1,'',true);
wp_enqueue_script('script_41', get_template_directory_uri() . '/js/double_tab_togo.js',1,'',true);
wp_enqueue_script('script_51', get_template_directory_uri() . '/js/appear.js',1,'',true);
wp_enqueue_script('script_6', get_template_directory_uri() . '/js/main.js',1,'',true);

wp_enqueue_style('css_0', get_template_directory_uri() . '/css/themify-icons.css');
wp_enqueue_style('css_1', get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style('css_2', get_template_directory_uri() . '/css/owl.carousel.min.css');
wp_enqueue_style('css_3', get_template_directory_uri() . '/css/base.scss.css');
wp_enqueue_style('css_4', get_template_directory_uri() . '/css/style.scss.css');
wp_enqueue_style('css_5', get_template_directory_uri() . '/css/module.scss.css');
wp_enqueue_style('css_6', get_template_directory_uri() . '/css/responsive.scss.css');
wp_enqueue_style('css_7', get_template_directory_uri() . '/css/bpr-products-module.css');

wp_enqueue_style('css_71', get_template_directory_uri() . '/admin/menu-image.css');

wp_enqueue_style('css_style115', get_template_directory_uri() . '/style.css');
wp_enqueue_style('css_icon', get_template_directory_uri() . '/icon/css/font-awesome.min.css');
		
}

add_action('wp_enqueue_scripts', 'vpw_style');



// Widget ảnh

function vpw_admin_style() {

        wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/admin/admin.css');
        wp_enqueue_script('script_7', get_template_directory_uri() . '/admin/menu-image-admin.js');
}

add_action('admin_enqueue_scripts', 'vpw_admin_style');

add_action('login_head', 'vpw_admin_style');

/* Thêm sidebar */

if (function_exists('register_sidebar')) {

        register_sidebar(array(

            'name'          => 'Trang chủ ',

            'id'            => 'trangchu',

            'description'   => '',

            'before_widget' => '<section class="%s awe-section-5" id="%s"><div class="section_banner"><div class="container"><div class="banner-image-col-tab"><div class="row d-flex"><div class="item px-4 mb-4">',

            'after_widget'  => '</div></div></div></div></div></section>',

            'before_title'  => '<h2 class="title-christmas">',

            'after_title'   => '</h2>'

        

        ));
        register_sidebar(array(

            'name'          => 'Sidebar danh mục',

            'id'            => 'sidebar-1',

            'description'   => '',

            'before_widget' => '<aside id="%1$s" class="aside-item sidebar-category %2$s" >',

            'after_widget'  => '</div></aside>',

            'before_title'  => '<div class="aside-title"> <h2 class="title-head margin-top-0"><span>',

            'after_title'   => '</span></h2> </div><div class="aside-content">'
        ));
        register_sidebar(array(

            'name'          => 'Sidebar sản phẩm',

            'id'            => 'sidebar-2',

            'description'   => '',

            'before_widget' => '<aside id="%1$s" class="aside-item sidebar-category %2$s" >',

            'after_widget'  => '</div></aside>',

            'before_title'  => '<div class="aside-title"> <h2 class="title-head margin-top-0"><span>',

            'after_title'   => '</span></h2> </div><div class="aside-content">'
        ));
        register_sidebar(array(

            'name'          => 'Sidebar tin tức',

            'id'            => 'sidebar-3',

            'description'   => '',


            'before_widget' => '<aside id="%1$s" class="aside-item sidebar-category %2$s" >',

            'after_widget'  => '</div></aside>',

            'before_title'  => '<div class="aside-title"> <h2 class="title-head margin-top-0"><span>',

            'after_title'   => '</span></h2> </div><div class="aside-content">'
        ));
         register_sidebar(array(

            'name'          => 'Chân trang 1',

            'id'            => 'footer1',

            'description'   => '',

            'before_widget' => '',

            'after_widget'  => '',

            'before_title'  => '<h4 class="title-menu"><a> ',

            'after_title'   => '</a></h4>'

        ));
        register_sidebar(array(

            'name'          => 'Chân trang 2',

            'id'            => 'footer2',

            'description'   => '',

            'before_widget' => '',

            'after_widget'  => '',

            'before_title'  => '<h4 class="title-menu"><a> ',

            'after_title'   => '</a></h4>'

        ));
        register_sidebar(array(

            'name'          => 'Chân trang 3',

            'id'            => 'footer3',

            'description'   => '',

            'before_widget' => '',

            'after_widget'  => '',

            'before_title'  => '<h4 class="title-menu"><a> ',

            'after_title'   => '</a></h4>'

        ));
        register_sidebar(array(

            'name'          => 'Chân trang 4',

            'id'            => 'footer4',

            'description'   => '',

            'before_widget' => '',

            'after_widget'  => '',

            'before_title'  => '<h4 class="title-menu"><a> ',

            'after_title'   => '</a></h4>'

        ));
        register_sidebar(array(

            'name'          => 'Chân trang 5',

            'id'            => 'footer5',

            'description'   => '',

            'before_widget' => '',

            'after_widget'  => '',

            'before_title'  => '<h4 class="title-menu"><a> ',

            'after_title'   => '</a></h4>'

        ));
        register_sidebar(array(

            'name'          => 'Chân trang 6',

            'id'            => 'footer6',

            'description'   => '',

            'before_widget' => '',

            'after_widget'  => '',

            'before_title'  => '<h4 class="title-menu"><a> ',

            'after_title'   => '</a></h4>'

        ));
        register_sidebar(array(

            'name'          => 'Chân trang 7',

            'id'            => 'footer7',

            'description'   => '',

            'before_widget' => '',

            'after_widget'  => '',

            'before_title'  => '<h4 class="title-menu"><a> ',

            'after_title'   => '</a></h4>'

        ));
       
        
}





remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

remove_action( 'wp_print_styles', 'print_emoji_styles' );




/* Menu bootstrap Wordpress */
include_once dirname(__FILE__) . '/inc/menu-image.php';
include_once dirname(__FILE__) . '/inc/home-widget.php';
include_once dirname(__FILE__) . '/inc/post-type.php';
require_once( dirname( __FILE__ ) . '/theme-option/option.php');
require_once( dirname( __FILE__ ) . '/wp_bootstrap_navwalker.php');

function basix_getPostViews($postID) {

    $count_key = 'basix_post_views_count';

    $count     = get_post_meta($postID, $count_key, TRUE);

    if ($count == '') {

        delete_post_meta($postID, $count_key);

        add_post_meta($postID, $count_key, '0');

        return "0";

    }

    return $count;

}



function basix_setPostViews($postID) {

    $count_key = 'basix_post_views_count';

    $count     = get_post_meta($postID, $count_key, TRUE);

    if ($count == '') {

        $count = 0;

        delete_post_meta($postID, $count_key);

        add_post_meta($postID, $count_key, '0');

    } else {

        $count++;

        update_post_meta($postID, $count_key, $count);

    }

}



function wpdocs_custom_excerpt_length( $length ) {

    return 35;

}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


// Tìm kiếm sản phẩm theo danh mục

function kt_advanced_search_query($query) {



    if($query->is_search()) {

        

        // tag search

        if (isset($_GET['cat']) && $_GET['cat']) {

            $taxquery = array(

                array(

                    'taxonomy' => 'product_cat',

                    'field'    => 'term_id',

                    'terms'    => array( $_GET['cat'] ),

                    'operator' => 'IN'

                ),

                'relation' => 'OR',

            );

            $query->tax_query  = $taxquery;

            $query->query_vars['tax_query'] = $query->tax_query;

        }

        return $query;

    }



}

add_action('pre_get_posts', 'kt_advanced_search_query');






// Breadcrumbs
function custom_breadcrumbs() {
       
    // Settings
    $separator          = '  <span><i class="fa fa-angle-right"></i></span>  ';
    $breadcrums_id      = 'breadcrumb';
    $breadcrums_class   = 'breadcrumb';
    $home_title         = 'Trang chủ';
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            // Get post category info
            $category = get_the_category();
             
            if(!empty($category)) {
              
                // Get last category post is in
                $last_category = end(array_values($category));
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
       
        echo '</ul>';
           
    }
       
}


// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 14; // 3 products per row
	}
}



function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 14;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 14; // 4 related products
	$args['columns'] = 14; // arranged in 2 columns
	return $args;
}

function vpw_theme_woo() {


    // Declare WooTheme support
    // https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
    add_theme_support( 'woocommerce' );

}

add_action( 'after_setup_theme', 'vpw_theme_woo' );


add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );



/*
* Code Bỏ /product/ hoặc /cua-hang/ hoặc /shop/ ... có hỗ trợ dạng %product_cat%
* Thay /cua-hang/ bằng slug hiện tại của bạn
*/
function devvn_remove_slug( $post_link, $post ) {
    if ( !in_array( get_post_type($post), array( 'product' ) ) || 'publish' != $post->post_status ) {
        return $post_link;
    }
    if('product' == $post->post_type){
        $post_link = str_replace( '/san-pham/', '/', $post_link ); //Thay cua-hang bằng slug hiện tại của bạn
    }else{
        $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
    }
    return $post_link;
}
add_filter( 'post_type_link', 'devvn_remove_slug', 10, 2 );
/*Sửa lỗi 404 sau khi đã remove slug product hoặc cua-hang*/
function devvn_woo_product_rewrite_rules($flash = false) {
    global $wp_post_types, $wpdb;
    $siteLink = esc_url(home_url('/'));
    foreach ($wp_post_types as $type=>$custom_post) {
        if($type == 'product'){
            if ($custom_post->_builtin == false) {
                $querystr = "SELECT {$wpdb->posts}.post_name, {$wpdb->posts}.ID
                            FROM {$wpdb->posts} 
                            WHERE {$wpdb->posts}.post_status = 'publish' 
                            AND {$wpdb->posts}.post_type = '{$type}'";
                $posts = $wpdb->get_results($querystr, OBJECT);
                foreach ($posts as $post) {
                    $current_slug = get_permalink($post->ID);
                    $base_product = str_replace($siteLink,'',$current_slug);
                    add_rewrite_rule($base_product.'?$', "index.php?{$custom_post->query_var}={$post->post_name}", 'top');
                }
            }
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'devvn_woo_product_rewrite_rules');
/*Fix lỗi khi tạo sản phẩm mới bị 404*/
function devvn_woo_new_product_post_save($post_id){
    global $wp_post_types;
    $post_type = get_post_type($post_id);
    foreach ($wp_post_types as $type=>$custom_post) {
        if ($custom_post->_builtin == false && $type == $post_type) {
            devvn_woo_product_rewrite_rules(true);
        }
    }
}
add_action('wp_insert_post', 'devvn_woo_new_product_post_save');


/*
* Remove product-category in URL
* Thay product-category bằng slug hiện tại của bạn. Mặc định là product-category
*/
add_filter( 'term_link', 'devvn_product_cat_permalink', 10, 3 );
function devvn_product_cat_permalink( $url, $term, $taxonomy ){
    switch ($taxonomy):
        case 'product_cat':
            $taxonomy_slug = 'danh-muc'; //Thay bằng slug hiện tại của bạn. Mặc định là product-category
            if(strpos($url, $taxonomy_slug) === FALSE) break;
            $url = str_replace('/' . $taxonomy_slug, '', $url);
            break;
    endswitch;
    return $url;
}
// Add our custom product cat rewrite rules
function devvn_product_category_rewrite_rules($flash = false) {
    $terms = get_terms( array(
        'taxonomy' => 'product_cat',
        'post_type' => 'product',
        'hide_empty' => false,
    ));
    if($terms && !is_wp_error($terms)){
        $siteurl = esc_url(home_url('/'));
        foreach ($terms as $term){
            $term_slug = $term->slug;
            $baseterm = str_replace($siteurl,'',get_term_link($term->term_id,'product_cat'));
            add_rewrite_rule($baseterm.'?$','index.php?product_cat='.$term_slug,'top');
            add_rewrite_rule($baseterm.'page/([0-9]{1,})/?$', 'index.php?product_cat='.$term_slug.'&paged=$matches[1]','top');
            add_rewrite_rule($baseterm.'(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?product_cat='.$term_slug.'&feed=$matches[1]','top');
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'devvn_product_category_rewrite_rules');
/*Sửa lỗi khi tạo mới taxomony bị 404*/
add_action( 'create_term', 'devvn_new_product_cat_edit_success', 10, 2 );
function devvn_new_product_cat_edit_success( $term_id, $taxonomy ) {
    devvn_product_category_rewrite_rules(true);
}



add_image_size( 'size240', 240, 240,true );
add_image_size( 'size160', 160, 160,true );
add_image_size( 'size100', 100, 70,true );
add_image_size( 'size480', 480, 340,true );
//add_image_size( 'size440', 440, 520,true );
//add_image_size( 'size550', 550, 309,true );




function my_acf_google_map_api( $api ){
    
    $api['key'] = 'AIzaSyDxwTrmOU7F6x04_jUiUzY6eXlIchY2iVM';
    
    return $api;
    
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');