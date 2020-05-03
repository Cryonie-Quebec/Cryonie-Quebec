<?php   
/**
 * @package biztt
 */
 ?>
 <?php function biztt_style_js()
 {
 	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/app/require/bootstrap/css/bootstrap.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.css');
	wp_enqueue_style( 'biztt-basic-style', get_stylesheet_uri() );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/app/require/bootstrap/js/bootstrap.js', array('jquery'));	
	wp_enqueue_script( 'biztt-toggle-jquery', get_template_directory_uri() . '/js/biztt-toggle.js', array('jquery'));	

	wp_enqueue_style( 'layout', get_template_directory_uri() . '/layout/styles/layout.css' );
	wp_enqueue_style( 'framework', get_template_directory_uri() . '/layout/styles/framework.css' );
	wp_enqueue_style( 'custom.flexslider.css', get_template_directory_uri() . '/layout/styles/custom.flexslider.css' );
	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/layout/styles/style.css' );
	
	wp_enqueue_style( 'jquery.backtotop.js', get_template_directory_uri() . '/layout/scripts/jquery.backtotop.js' );
	wp_enqueue_style( 'jquery.flexslider-min.js', get_template_directory_uri() . '/layout/scripts/jquery.flexslider-min.js' );
	wp_enqueue_style( 'jquery.min.js', get_template_directory_uri() . '/layout/scripts/jquery.min.js' );
	wp_enqueue_style( 'jquery.mobilemenu.js', get_template_directory_uri() . '/layout/scripts/jquery.mobilemenu.js' );

 }
 add_action( 'wp_enqueue_scripts', 'biztt_style_js' );
?>