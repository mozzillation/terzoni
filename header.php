<?php
/**
 * Default theme header
 *
 * Displays the <head> section as well as the opening tag for the body
 * 
 * @package terzoni
 * @since terzoni 1.0.0
 * @license GPL 2.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- Responsive stylesheet -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	
	<?php indented_wp_head(); ?>

</head>

<body <?php body_class(); ?> >
<div id="page">
	
	  <section class="header module">
      <div class="header__wrap">
        <div class="header__logo">
			<a href="<?php bloginfo('home');?>">
			  <div class="header__logo_img">
				<img src="<?php bloginfo('template_directory');?>/frontend/img/logo.svg" class="svg" alt="<?php bloginfo('title'); ?> "/>
			  </div>
			</a>	
        </div>

        <div class="header__nav_desktop">
		  <?php wp_nav_menu( array( 'container'=> false, 'items_wrap' => '%3$s', 'menu_class'=> false, 'theme_location' => 'main-menu', 'container_class' => '' ) );?>
		  <?php wp_nav_menu( array( 'container'=> false, 'items_wrap' => '%3$s', 'menu_class'=> false, 'theme_location' => 'lang-menu', 'container_class' => '' ) );?>	
        </div>

        <div class="clear"></div>

		<div class="header__nav_button">
			<img src="<?php bloginfo('template_directory');?>/frontend/img/menu.svg" class="svg">
		</div>

      </div>
      <div class="clear"></div>
    </section>
	  
	
	<nav class="header__nav_mobile">
		
		<div class="header__nav_mobile_close">
			<img src="<?php bloginfo('template_directory');?>/frontend/img/x.svg" class="svg">
		</div>
		
		<div class="header__nav_mobile_list">
		  <?php wp_nav_menu( array( 'container'=> false, 'items_wrap' => '%3$s', 'menu_class'=> false, 'theme_location' => 'main-menu', 'container_class' => '' ) );?>
		</div>
		
		<div class="language">
		   <?php wp_nav_menu( array( 'container'=> false, 'items_wrap' => '%3$s', 'menu_class'=> false, 'theme_location' => 'lang-menu', 'container_class' => '' ) );?>	
		</div>
		
	</nav>  
	  
	 <div class="header__nav_overlay">
  	 </div> 
