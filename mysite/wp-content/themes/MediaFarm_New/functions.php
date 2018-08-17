<?php 
	function media_Farm_New_Scripts(){
		wp_enqueue_style('stylesheet', get_stylesheet_uri());
		wp_enqueue_style('style-fornt', get_theme_file_uri('/css/style.css'), array(), '1.0');
		wp_enqueue_style('scroll-down', get_theme_file_uri('/css/scroll-down.css'), array(), '1.0');
		wp_enqueue_style('slick', get_theme_file_uri('/css/slick.css'), array(), '1.0');
		wp_enqueue_style('bootstrap-min', get_theme_file_uri('/css/bootstrap.min.css'), array(), '1.0');

		wp_enqueue_script('jquery-min', get_theme_file_uri('/js/jquery.min.js'), array(), true);
		wp_enqueue_script('bootstrap-min', get_theme_file_uri('/js/bootstrap.min.js'), array(), true);
		wp_enqueue_script('slick', get_theme_file_uri('/js/slick.js'), array(), true);
		
	}
	add_action('wp_enqueue_scripts', 'media_Farm_New_Scripts');
?>