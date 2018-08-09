<?php
/**
 *
 * @package terzoni
 * @since terzoni 1.0.2
 * @license GPL 2.0
 * 
 */

#-------------------------------------------------------------
# Enqueue Styles
#-------------------------------------------------------------

function terzoni_enqueue_styles() {             

	# Main stylesheet
  	wp_register_style( 'terzoni-main-styles' , get_template_directory_uri(). "/style.css" , array(), terzoni_theme_version, 'screen' );  	
  	wp_enqueue_style( 'terzoni-main-styles' );           

}

add_action( 'wp_enqueue_scripts' , 'terzoni_enqueue_styles' );

#-------------------------------------------------------------
# Enqueue Scripts 
#-------------------------------------------------------------

# False = Header
# True = Footer

function terzoni_enqueue_scripts() {
	
    # Custom Scripts 
	wp_register_script  ( 'jquery224' , get_template_directory_uri().'/frontend/js/jquery-2.2.4.min.js' , array(), terzoni_theme_version, true );
	wp_enqueue_script ( 'jquery224' );  
	
	# WidowFix 
	wp_register_script  ( 'widow' , get_template_directory_uri().'/frontend/js/jquery.widowFix.min.js' , array(), terzoni_theme_version, true );
	wp_enqueue_script ( 'widow' );  
	
	#Waypoint
	wp_register_script  ( 'inview' , get_template_directory_uri().'/frontend/js/in-view.min.js' , array(), terzoni_theme_version, true );
	wp_enqueue_script ( 'inview' ); 
	
	#Waypoint
	wp_register_script  ( 'resize' , get_template_directory_uri().'/frontend/js/ResizeSensor.js' , array(), terzoni_theme_version, true );
	wp_enqueue_script ( 'resize' ); 	
	
	#Waypoint
	wp_register_script  ( 'sticky' , get_template_directory_uri().'/frontend/js/sticky-sidebar.js' , array(), terzoni_theme_version, true );
	wp_enqueue_script ( 'sticky' ); 	
	


	# Custom Scripts 
	wp_register_script  ( 'terzoni-custom-code' , get_template_directory_uri().'/frontend/js/custom-code.js' , array(), terzoni_theme_version, true );
	wp_enqueue_script ( 'terzoni-custom-code' );  
	
	
	

}

add_action( 'wp_enqueue_scripts' , 'terzoni_enqueue_scripts'   );


#-------------------------------------------------------------
# Menu
#-------------------------------------------------------------

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'lang-menu' => __( 'Language' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

#-------------------------------------------------------------
# Thumbnail
#-------------------------------------------------------------

add_theme_support( 'post-thumbnails' );
