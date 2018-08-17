
<div class="wrap">
    <h2><?php esc_html_e('Website Protector', 'website-protector') ?></h2>
    <div class="tablenav top"></div>
    <form action="" method="post" name="website_protector_form" id="website_protector_form">
        <div class="wp-list-table widefat plugins">
            <div class="active_plugins">
                <div class="active_select_all">
                    <p>
                        <label><input type="checkbox" name="front_back" class="check_all" onclick="checkAll(this, 'child_box')" <?php echo ( get_option('front_back') == 'yes' ) ? 'checked' : ''; ?>>
                            <span>Check All</span>
                        </label>
                    </p>
                    <h2><?php esc_html_e('Website Protector', 'website-protector'); ?></h2>
                </div>
                <div class="web_protector">
                    <ul>
                        <li>
                            <p>
                                <label><input type="checkbox" id="front_f12" value="das" name="front_f12" class="child_box" onclick="childBox('check_all', 'child_box')" <?php echo ( get_option('front_f12') == 'yes' ) ? 'checked' : ''; ?>>
                                    <span>F12 Key</span>
                                </label>
                            </p>
                            <p>
                                <label><input type="checkbox" name="front_ctrl_u" class="child_box" onclick="childBox('check_all', 'child_box')" <?php echo ( get_option('front_ctrl_u') == 'yes' ) ? 'checked' : ''; ?>>
                                    <span>Ctrl + U</span>
                                </label>
                            </p>
                        </li>
                        <li>
                            <p>
                                <label><input type="checkbox" name="right_click" class="child_box" onclick="childBox('check_all', 'child_box')" <?php echo ( get_option('right_click') == 'yes' ) ? 'checked' : ''; ?>>
                                    <span>Rigth Click</span>
                                </label>
                            </p>
                            <p>
                                <label><input type="checkbox" name="text_copy" class="child_box" onclick="childBox('check_all', 'child_box')" <?php echo ( get_option('text_copy') == 'yes' ) ? 'checked' : ''; ?>>
                                    <span>Copy Text</span>
                                </label>
                            </p>
                        </li>
                        <li>
                            <p>
                                <label><input type="checkbox" name="text_paste" class="child_box" onclick="childBox('check_all', 'child_box')" <?php echo ( get_option('text_paste') == 'yes' ) ? 'checked' : ''; ?>>
                                    <span>Paste Text</span>
                                </label>
                            </p>
                            <p>
                                <label><input type="checkbox" name="text_cut" class="child_box" onclick="childBox('check_all', 'child_box')" <?php echo ( get_option('text_cut') == 'yes' ) ? 'checked' : ''; ?>>
                                    <span>Cut Text</span>
                                </label>
                            </p>
                        </li>
                        
                        <input type="hidden" value="<?php echo base64_encode(serialize($_POST)); ?>" name="posted" />
                        <p class="submit">
                            <a name="protector_check" id="web_protector" class="waves-effect waves-light btn-large">Submit</a>
                             <!--<input type="submit" name="protector_check" class="waves-effect waves-light btn-large" />--> 
                            
                            <input type="submit" value="Submit" class="waves-effect waves-light btn-large">
                        </p>
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    function childBox(parentKey, childKey) {
        if (jQuery("." + childKey + ":checked").length == jQuery("." + childKey).length) {
            jQuery("." + parentKey).prop("checked", true);
        } else {
            jQuery("." + parentKey).prop("checked", false);
        }
    }
    function checkAll(object, childKey) {
        jQuery("." + childKey).prop("checked", object.checked);
    }
</script>



<!-- Ajax -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        //alert();
    });
</script>

<script>

//        jQuery("#web_protector").click(function () {
////            e.preventDefault();
//
//            jQuery.ajax({
//                url: ajaxurl,
//                type: "POST",
//                data: {
//                    action: 'data_fetch',
//                    myformdata: jQuery('#website_protector_form').serialize()
//                },
//                success: function (data) {
//
//                    console.log('success');
//
//                },
//                error: function () {
//                    alert('error');
//                }
//            });
//
//        });
//    });



    jQuery(document).ready(function ($) {
        $("form#website_protector_form").submit(function (event) {
            event.preventDefault();
            var formData = {};
            formData['action'] = 'data_fetch';
            $('input[type=checkbox]').each(function(){
                if($(this).prop('checked')) {
                    formData[$(this).prop('name')] = this.value;
                }
            })
//            var newmsg = $("#newmsg").val();
            console.log(formData);
            $.ajax({
                type: "POST",                
                url: ajaxurl,
                data: serialize(JSON.stringify(formData)),               
                success: function () {
                    //alert('success');
                }
            });
        });
    });


</script>