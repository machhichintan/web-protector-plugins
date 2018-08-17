<?php
/*
Plugin Name: Website Protector
Plugin URI: https://profiles.wordpress.org/machhichintan
Description: Website Protector Plugin
Author: Machhi Chintan
Author URI: https:facebook.com/chintan207
*/



if(!is_admin()) { ?>
	<div class="hide" style="display:none;">
		<?php require_once 'protector.php'; ?>
	</div>
	<?php
	
	//echo $front_back;
	if($front_back == "yes"){
		$protector = plugins_url('website-protector'); 
		?>
		<script src="<?php echo $protector; ?>/assets/js/jquery-1.9.1.min.js"></script>
		<script src="<?php echo $protector; ?>/protector.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo $protector; ?>/style.css"> 
		<?php
	}
}

//admin menu Hook
add_action( 'admin_menu', 'website_backend_menu' );

function website_backend_menu() {
	
	add_menu_page( 'Website Protector', 'Website Protector', 'manage_options', 'website-protector', 'website_protector', plugins_url( 'website-protector/assets/images/protector.png' ));
	add_submenu_page( 'website-protector', 'Plugins Protector', 'Plugins Protector', 'manage_options', 'plugins-protector', 'plugins_protector');
	add_submenu_page( 'website-protector', 'Demo', 'Demo', 'manage_options', 'demo', 'demo_function');
		
}
function website_protector() {
	require_once 'protector.php';	
}
function plugins_protector() {
	require_once 'template/plugins-protector.php';
}
function demo_function() {
	require_once 'demo.php';
}



function websiteprotector_scripts_basic()
{

	$protector = plugins_url('website-protector');    
    wp_register_script( 'custom-script', plugins_url( '/materialize/js/materialize.js', __FILE__ ));
    wp_enqueue_script( 'custom-script' );


    wp_register_style( 'custom-style', plugins_url( '/materialize/css/materialize.css', __FILE__ ));
    wp_enqueue_style( 'custom-style' );

    wp_register_style( 'custom-style1', plugins_url( '/assets/css/admin-css.css', __FILE__ ));
    wp_enqueue_style( 'custom-style1' );

    wp_register_style( 'custom-style2', plugins_url( '/assets/css/my.css', __FILE__ ));
    wp_enqueue_style( 'custom-style2' );
}
add_action( 'admin_enqueue_scripts', 'websiteprotector_scripts_basic' );