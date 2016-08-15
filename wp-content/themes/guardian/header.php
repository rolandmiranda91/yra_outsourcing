<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" /> 
	<?php } ?>	
	<?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
<div>
<header id="header">
	<div id="trueHeader" style="border-top:2px solid #13afeb">    
		<div class="wrapper">    
			<div class="container">    
				<!-- Logo -->
				<div class="col-md-3 col-sm-3 logo">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="logo" >
						<?php if($wl_theme_options['upload_image_logo']!='') 
						{ ?>
						<img src="<?php echo esc_url($wl_theme_options['upload_image_logo']); ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "50"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "180"; } ?>px;" />
						<?php } else { echo get_bloginfo('name'); } ?>						
					</a>
				</div>
				<!-- Menu -->
				<div class="col-md-9 col-sm-9 menu_main">				
					<div class="navbar yamm navbar">
						<div class="navbar-header">
								<div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  ><span><?php __('Menu','guardian'); ?></span>
									<button type="button" ><i class="fa fa-bars"></i></button>
								</div>
							</div>
							<!-- /Navigation  menus -->
						<div id="navbar-collapse-1" class="navbar-collapse collapse">  
						<?php
								wp_nav_menu( array(  
										'theme_location' => 'primary',
										'menu_class' => 'nav navbar-nav navbar-right',
										'fallback_cb' => 'weblizar_fallback_page_menu',
										'walker' => new weblizar_nav_walker()
										)
									);	
								?>	
						</div>		
					</div>			 
				</div><!-- end menu -->				
			</div>			
		</div>    
	</div>    
</header>
<div class="clearfix"></div>