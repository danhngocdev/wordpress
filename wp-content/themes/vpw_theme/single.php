<?php

/**

* Template : Chi tiết

*/
$categories = get_the_category($post->ID);
basix_setPostViews($post->ID);

?>

<?php get_header();the_post();?>

<section class="bread-crumb margin-bottom-30">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php echo custom_breadcrumbs()?>
			</div>
		</div>
	</div>
</section>


<div class="container article-wraper" itemscope itemtype="http://schema.org/Article">
<div class="row">		
	<section class="right-content col-lg-9 ">
		<div class="box-heading relative">
		</div>
		<article class="article-main">
			<div class="row">
				<div class="col-lg-12">

					<div class="article-details">
						
						<h1 class="article-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h1>
						<div class="date">
							<i class="fa fa-clock-o"></i> <?php the_time('F')?>,
							<div class="news_home_content_short_time">
								<?php the_time('d/m/Y')?>
							</div>
							<div class="post-time">
							<i class="fa fa-user" aria-hidden="true"></i>
							Đăng bởi <span><?php echo get_the_author()?></span>
						</div>
						
						</div>
						
						<div class="article-content">
							<div class="rte">
								<?php the_content()?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="row row-noGutter tag-share">
						
						<?php
						$tags = wp_get_post_tags($post->ID);
						if($tags){
						echo '<div class="col-xs-12 col-sm-6 tag_article "><b>Tags:</b>';
						foreach($tags as $tag){
						echo ' <a href="'.get_term_link($tag->slug,'post_tag').'">'.$tag->name.'</a>,';
						}
						echo '</div>';
						}
						?>

						
						
						<div class="col-xs-12 col-sm-6">
						<div class="social-sharing f-right">
							<div class="addthis_inline_share_toolbox share_add">
								<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58589c2252fc2da4"></script>
							</div>
						</div>
						</div>
						
					</div>
				</div>
							
			</article>
		</section>		
		
		<aside class="blog_hai left left-content col-lg-3 ">
			<?php
			dynamic_sidebar('sidebar-3');
			?>
		</aside>
		
	</div>
</div>



<?php get_footer(); ?>


