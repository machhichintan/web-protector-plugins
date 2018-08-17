<?php
/*
  Plugin Name: Website Protector
  Plugin URI: https://profiles.wordpress.org/machhichintan
  Description: Website Protector Plugin
  Version: 1.0
  Author: Machhi Chintan
  Author URI: https:facebook.com/chintan207
 */

//is Not admin start


error_reporting(1);
if (!is_admin()) {
    $protector = plugins_url('website-protector');
    ?>

    <script src="<?php echo $protector; ?>/assets/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo $protector; ?>/protector.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $protector; ?>/style.css"> 

    <div class="hide" style="display:none;">
        <?php require_once 'protector.php'; ?>
    </div><?php
    
    //$front_back = get_option('front_back');
    $front_f12 = get_option('front_f12');
    $front_ctrl_u = get_option('front_ctrl_u');
    $right_click = get_option('right_click');
    $text_copy = get_option('text_copy');
    $text_paste = get_option('text_paste');
    $text_cut = get_option('text_cut');
    $text_select = get_option('text_select');
    $text_undo = get_option('text_undo');

    ?>

    <script>
        //All Key enable/ disable Start
        var front_f12 = '<?php echo ($front_f12 == "yes") ? true : null; ?>';      //F12 enable/ disable
        var front_ctrl_u = '<?php echo ($front_ctrl_u == "yes") ? true : null; ?>'; //Ctrl U enable/ disable
        var right_click = '<?php echo ($right_click == "yes") ? true : null; ?>';   //Right Click enable/ disable
        var text_copy = '<?php echo ($text_copy == 'yes') ? true : null; ?>';       //Text Copy enable/ disable
        var text_paste = '<?php echo ($text_paste == 'yes') ? true : null; ?>';     //Text paste enable/ disable
        var text_cut = '<?php echo ($text_cut == 'yes') ? true : null; ?>';         //Text cut enable/ disable
        var text_select = '<?php echo ($text_select == 'yes') ? true : null; ?>';   //Text Select enable/ disable
        var text_undo = '<?php echo ($text_undo == 'yes') ? true : null; ?>';       //Ctrl + z
        //All Key enable/ disable End

        console.log("right_click");
    </script>

    <?php

} else {
    if (($_GET['page'] == 'website-protector') || ($_GET['page'] == 'plugins-protector')) {
        add_action('admin_enqueue_scripts', 'websiteprotector_scripts_basic');
    }
}
//is Not admin end
//admin menu Hook start
add_action('admin_menu', 'website_backend_menu');

//admin menu Hook ebd
//Create admin menu start
function website_backend_menu() {
    add_menu_page('Website Protector', 'Website Protector', 'manage_options', 'website-protector', 'website_protector', 'dashicons-lock');
    add_submenu_page('website-protector', 'Plugins Protector', 'Plugins Protector', 'manage_options', 'plugins-protector', 'plugins_protector');
}

//Create admin menu	end
//Menu Functionality start
function website_protector() {
    require_once 'protector.php';
}

function plugins_protector() {
    require_once 'template/plugins-protector.php';
}


//Menu Functionality end
//plugins scripts and style start
function websiteprotector_scripts_basic() {
    $protector = plugins_url('website-protector');
    wp_register_script('custom-script', plugins_url('/materialize/js/materialize.js', __FILE__));
    wp_enqueue_script('custom-script');

    wp_register_style('custom-style', plugins_url('/materialize/css/materialize.css', __FILE__));
    wp_enqueue_style('custom-style');

    wp_register_style('custom-style1', plugins_url('/assets/css/admin-css.css', __FILE__));
    wp_enqueue_style('custom-style1');

    wp_register_style('custom-style2', plugins_url('/assets/css/my.css', __FILE__));
    wp_enqueue_style('custom-style2');

    // toastr
    wp_register_style('toastr-style', plugins_url('/assets/toastr/toastr.min.css', __FILE__));
    wp_enqueue_style('toastr-style');

    wp_register_script('toastr-script', plugins_url('/assets/toastr/toastr.min.js', __FILE__));
    wp_enqueue_script('toastr-script');
}

add_action('wp_ajax_data_fetch', 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch', 'data_fetch');

function data_fetch() {
    

    if (isset($_POST['myformdata']['mydata']['front_back']) && $_POST['myformdata']['mydata']['front_back'] == 'on') {
        update_option('front_back', 'yes');
    } else {
        update_option('front_back', 'no');
    }

    if (isset($_POST['myformdata']['mydata']['front_f12']) && $_POST['myformdata']['mydata']['front_f12'] == 'on') {
        update_option('front_f12', 'yes');
    } else {
        update_option('front_f12', 'no');
    }
    if (isset($_POST['myformdata']['mydata']['front_ctrl_u']) && $_POST['myformdata']['mydata']['front_ctrl_u'] == 'on') {
        update_option('front_ctrl_u', 'yes');
    } else {
        update_option('front_ctrl_u', 'no');
    }

    if (isset($_POST['myformdata']['mydata']['right_click']) && $_POST['myformdata']['mydata']['right_click'] == 'on') {
        update_option('right_click', 'yes');
    } else {
        update_option('right_click', 'no');
    }

    if (isset($_POST['myformdata']['mydata']['text_copy']) && $_POST['myformdata']['mydata']['text_copy'] == 'on') {
        update_option('text_copy', 'yes');
    } else {
        update_option('text_copy', 'no');
    }

    if (isset($_POST['myformdata']['mydata']['text_paste']) && $_POST['myformdata']['mydata']['text_paste'] == 'on') {
        update_option('text_paste', 'yes');
    } else {
        update_option('text_paste', 'no');
    }

    if (isset($_POST['myformdata']['mydata']['text_cut']) && $_POST['myformdata']['mydata']['text_cut'] == 'on') {
        update_option('text_cut', 'yes');
    } else {
        update_option('text_cut', 'no');
    }

    if(isset($_POST['myformdata']['mydata']['text_select']) && $_POST['myformdata']['mydata']['text_select'] == 'on') {
        update_option('text_select', 'yes');
    } else { 
        update_option('text_select', 'no');
    }

    if(isset($_POST['myformdata']['mydata']['text_undo']) && $_POST['myformdata']['mydata']['text_undo'] == 'on' ) { 
        update_option('text_undo', 'yes');
    } else { 
        update_option('text_undo', 'no');
    }

    echo 'success';
    exit;
}
?>
