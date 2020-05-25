<?php

/**

* Template Name: TRANG CHỦ

*/

?>
<?php get_header();the_post();?>



<section class="awe-section-1" id="home_block_1">	
	<div class="home-slider owl-carousel owl-theme not-aweowl">
	
	
	<?php
	if( have_rows('cai_dat_sliders','option') ):
	while ( have_rows('cai_dat_sliders','option') ) : the_row();
	?> 
	
	
	
	<div class="item">
		<a href="<?php the_sub_field('link_slider')?>" class="clearfix">
			<img src="<?php the_sub_field('anh_slider')?>" alt="<?php the_sub_field('tieu_de_slider')?>">
		</a>	
	</div>
	
	
	<?php
	endwhile;
	else :
	endif;
	?>
	
	
	
</div>
</section>


<?php dynamic_sidebar('trangchu'); ?>


<?php get_footer(); ?>
