<?php

/**

 * Template : Chi tiết

 */

?>

<?php get_header(); the_post()?>

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
						
						<div class="article-content">
							<div class="rte">
								<?php the_content()?>
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