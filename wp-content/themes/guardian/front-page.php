<?php get_header(); 
$wl_theme_options = weblizar_get_options(); 
if ($wl_theme_options['_frontpage']=="on" && is_front_page())
{ ?>
<!-- Slider ======================================= -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>        
        <li data-target="#myCarousel" data-slide-to="2"></li>        
      </ol>
      <div class="carousel-inner">		
        <div class="item active">
			<?php if($wl_theme_options['slide_image'] !='') { ?> 
			<img src="<?php echo esc_url($wl_theme_options['slide_image']); ?>" class="img-responsive" alt="First slide">	
			<?php } ?>
			<div class="container">
				<div class="carousel-caption">	
				<?php if($wl_theme_options['slide_title'] !='') { ?> <p><strong><?php echo  esc_attr($wl_theme_options['slide_title']); ?></strong></p>	<?php } ?>
				<?php if($wl_theme_options['slide_desc'] !='') { ?>
				<p class="desc"><?php echo  esc_attr($wl_theme_options['slide_desc']); ?></p>
				<?php } ?>
				<?php if($wl_theme_options['slide_desc'] !='') { ?>
				<p><a class="btn btn-lg btn-primary" target="_blank" href="<?php if($wl_theme_options['slide_btn_link'] !='') { echo esc_url($wl_theme_options['slide_btn_link']); }  ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text']); ?></a></p>
				<?php } ?>
				</div>
			</div>
        </div>
		<div class="item ">
			<?php if($wl_theme_options['slide_image_1'] !='') { ?> 
			<img src="<?php echo esc_url($wl_theme_options['slide_image_1']); ?>" class="img-responsive" alt="Second slide">	
			<?php } ?>
			<div class="container">
				<div class="carousel-caption">	
				<?php if($wl_theme_options['slide_title_1'] !='') { ?> <p><strong><?php echo  esc_attr($wl_theme_options['slide_title_1']); ?></strong></p>	<?php } ?>
				<?php if($wl_theme_options['slide_desc_1'] !='') { ?>
				<p class="desc"><?php echo  esc_attr($wl_theme_options['slide_desc_1']); ?></p>
				<?php } ?>
				<?php if($wl_theme_options['slide_desc_1'] !='') { ?>
				<p><a class="btn btn-lg btn-primary" target="_blank" href="<?php if($wl_theme_options['slide_btn_link_1'] !='') { echo esc_url($wl_theme_options['slide_btn_link_1']); }  ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_1']); ?></a></p>
				<?php } ?>
				</div>
			</div>
        </div>
		<div class="item ">
			<?php if($wl_theme_options['slide_image_2'] !='') { ?> 
			<img src="<?php echo esc_url($wl_theme_options['slide_image_2']); ?>" class="img-responsive" alt="First slide">	
			<?php } ?>
			<div class="container">
				<div class="carousel-caption">	
				<?php if($wl_theme_options['slide_title_2'] !='') { ?> <p><strong><?php echo  esc_attr($wl_theme_options['slide_title_2']); ?></strong></p>	<?php } ?>
				<?php if($wl_theme_options['slide_desc_2'] !='') { ?>
				<p class="desc"><?php echo  esc_attr($wl_theme_options['slide_desc_2']); ?></p>
				<?php } ?>
				<?php if($wl_theme_options['slide_desc_2'] !='') { ?>
				<p><a class="btn btn-lg btn-primary" target="_blank" href="<?php if($wl_theme_options['slide_btn_link_2'] !='') { echo esc_url($wl_theme_options['slide_btn_link_2']); }  ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_2']); ?></a></p>
				<?php } ?>
				</div>
			</div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
 </div><!-- /.carousel -->

<div class="container-fluid feature_red_section1">
	<div class="container">
		<h2><?php 			
			if($wl_theme_options['home_service_title'] !='') { 	echo esc_attr($wl_theme_options['home_service_title']); } 
			if($wl_theme_options['home_service_description'] !='') {  ?>
			<b><?php echo esc_attr($wl_theme_options['home_service_description']); ?></b>
			<?php } ?>
		</h2>
	</div>
</div>
<div class="container-fluid feature_section1">
	<div class="container">
		<!-- <div class="margin_top3"></div> -->
		<div class="col-md-3 col-sm-6 one_fourth animate" data-anim-type="fadeIn" data-anim-delay="100">		
			<img src="<?php bloginfo('template_directory'); ?>/images/thumbnail/international-accounting.jpg" style="border:3px solid #fff;">			
			<?php if($wl_theme_options['service_1_title'] !='') { ?><a href="<?php echo esc_url($wl_theme_options['service_1_link']);  ?>"><h5 class="caps"><?php echo esc_attr($wl_theme_options['service_1_title']);  ?></h5></a><?php } ?>
			<?php if($wl_theme_options['service_1_text'] !='') { echo "<p>".apply_filters('the_content', esc_attr($wl_theme_options['service_1_text']), true). "</p>"; } ?>
		</div>		
		<div class="col-md-3 col-sm-6 one_fourth animate" data-anim-type="fadeIn" data-anim-delay="200">		
			<img src="<?php bloginfo('template_directory'); ?>/images/thumbnail/ok.jpg" style="border:3px solid #fff;">			
			<?php if($wl_theme_options['service_2_title'] !='') { ?><a href="<?php echo esc_url($wl_theme_options['service_2_link']);  ?>"><h5 class="caps"><?php echo esc_attr($wl_theme_options['service_2_title']);  ?></h5></a><?php } ?>
			<?php if($wl_theme_options['service_2_text'] !='') { echo "<p>".apply_filters('the_content', esc_attr($wl_theme_options['service_2_text']), true). "</p>"; } ?>
		</div>		
		<div class="col-md-3 col-sm-6 one_fourth animate" data-anim-type="fadeIn" data-anim-delay="300">			
			<img src="<?php bloginfo('template_directory'); ?>/images/thumbnail/tax.jpg" style="border:3px solid #fff;">			
			<?php if($wl_theme_options['service_3_title'] !='') { ?><a href="<?php echo esc_url($wl_theme_options['service_3_link']);  ?>"><h5 class="caps"><?php echo esc_attr($wl_theme_options['service_3_title']);  ?></h5></a><?php } ?>
			<?php if($wl_theme_options['service_3_text'] !='') { echo "<p>".apply_filters('the_content', esc_attr($wl_theme_options['service_3_text']), true). "</p>"; } ?>	
		</div>		
		<div class="col-md-3 col-sm-6 one_fourth last animate" data-anim-type="fadeIn" data-anim-delay="400">		
			<img src="<?php bloginfo('template_directory'); ?>/images/thumbnail/24hours.jpg" style="border:3px solid #fff;">			
			<?php if($wl_theme_options['service_4_title'] !='') { ?><a href="<?php echo esc_url($wl_theme_options['service_4_link']);  ?>"><h5 class="caps"><?php echo esc_attr($wl_theme_options['service_4_title']);  ?></h5></a><?php } ?>
			<?php if($wl_theme_options['service_4_text'] !='') { echo "<p>".apply_filters('the_content', esc_attr($wl_theme_options['service_4_text']), true). "</p>"; } ?>	
		</div>	
		
	</div>
</div><!-- end of service section1 -->
<div class="clearfix"></div>
<div class="container-fluid feature_section5">	
	<div class="container">
		<?php $wl_theme_options=weblizar_get_options();;
		if($wl_theme_options['blog_title'] !='') { echo "<h2>".esc_attr($wl_theme_options['blog_title']). "</h2><br>"; } ?>
			<div class="col-md-8">
		<?php	$sidebar_page = new WP_Query('pagename=Home');
			if( $sidebar_page->post->ID ) {
				$sidebar_page->the_post();
				the_content();
			} 
		?>
		</div>
		<div class="col-md-4">
	
		</div>
	</div>
</div><!-- end blog section5 -->
<div class="clearfix"></div>
<?php 
get_footer();
}
else 
{       
if(is_page()){
get_template_part('page');
} else {
get_template_part('index');
}
} ?>