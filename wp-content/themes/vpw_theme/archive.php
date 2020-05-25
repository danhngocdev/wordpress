<?php

/**

* Template : Danh mục

*/

?>
<?php get_header(); ?>

<section class="bread-crumb">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php echo custom_breadcrumbs()?>
			</div>
		</div>
	</div>
</section>

<div class="container" itemscope itemtype="http://schema.org/Blog">
<div class="row">

<section class="right-content margin-bottom-50 col-md-9 ">			
	<div class="box-heading relative">
		<h1 class="title-head page_title"><?php single_cat_title()?></h1>
	</div>
	
	<section class="list-blogs blog-main">
		<div class="row">
		<?php 
		if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post();
		?>
		<div class="col-sm-12 blog_xxx">
		<article class="blog-item">
			<div class="row">
				<div class="col-lg-5">
					<div class="blog-item-thumbnail">						
						<a href="<?php the_permalink()?>">
							
							<picture>
								<img src="<?php the_post_thumbnail_url('size480')?>" style="max-width:100%;" class="img-responsive" title="<?php the_title()?>" alt="<?php the_title()?>">
							</picture>
							
						</a>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="blog-item-info">

						<h3 class="blog-item-name"><a href="<?php the_permalink()?>"><?php the_title()?></a>
						</h3>
						<div class="date"><i class="fa fa-clock-o"></i> <?php the_time('F')?>,
							<div class="news_home_content_short_time">
								<?php the_time('d/m/Y')?>
							</div>
							<span class="cmt_count_blog">
								<i class="fa fa-user" aria-hidden="true"></i>Đăng bởi <?php echo get_the_author()?>
							</span>
							
						</div>
						<p class="blog-item-summary">   <?php echo get_the_excerpt()?></p>
					</div>
				</div>
			</div>
		</article>
		</div>
		<?php
		endwhile; // end of the loop. ?>
		<?php endif; ?> 


			<div class="col-xs-12 text-center">

			<nav>
			<ul class="pagination clearfix">
			<?php
			global $wp_query;
			$big = 999999999; 
			echo paginate_links( array(

			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),

			'format'=> '?paged=%#%',

			'prev_text'=> __('«'),

			'next_text' => __('»'),

			'current' => max( 1, get_query_var('paged') ),

			'total' => $wp_query->max_num_pages

			) );

			?>
			</ul>
			</nav>

			</div>
				
	</div>
</section>

</section>
<aside class="blog_hai left left-content col-md-3 ">
	<?php
	dynamic_sidebar('sidebar-3');
	?>
</aside>
</div>
</div>


<?php get_footer(); ?>