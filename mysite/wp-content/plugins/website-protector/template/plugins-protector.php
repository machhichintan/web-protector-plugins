<div class="wrap">
    <h2><?php esc_html_e('Plugins Protector', 'website-protector') ?></h2>
    <div class="tablenav top"></div>
    <form action="" method="post" name="plugins">
        <div class="wp-list-table widefat plugins">
            <div class="active_plugins">
                <div class="active_select_all">
                    <p>
                        <label>
                            <input type='checkbox' name='select_all[]' class="active_all_plugins" onclick="checkAll(this, 'active_child')" value='' />
                            <span>Check All</span>
                        </label>
                    </p>
                    <h2><?php esc_html_e('Activated Plugins', 'website-protector'); ?></h2>
                </div>
                <ul> <?php
                    $active_all_plugins = get_option('active_plugins');

                    foreach ($active_all_plugins as $newmy) {
                        $path_parts = explode('/', $newmy);
                        $desired_output = $path_parts[0];
                        $plugin_name = str_replace('-', ' ', $desired_output);
                        $plugin_name_cap = ucwords($plugin_name);
                        ?>
                        <li><p>
                                <label>
                                    <input type='checkbox' name='active_plugins[]' class="active_child" onclick="childCheck('active_all_plugins', 'active_child')" value='<?php echo $newmy; ?>' />
                                    <span><?php echo $plugin_name_cap; ?></span>
                                </label>
                            </p></li><?php }
                    ?>
                    <p class="submit">
                       <a name="hide_plugins" id="hide_plugins" class="waves-effect waves-light btn-large">Hide</a>
                    </p>
                </ul>
            </div>
            <div class="hide_plugins">
                <div class="hide_select_all">
                    <p>
                        <label>
                            <input type='checkbox' name='select_all[]' class="hide_all_plugins" onclick="checkAll(this, 'hide_child')" value='' />
                            <span>Check All</span>
                        </label>
                    </p>
                    <h2><?php esc_html_e('Hide Plugins', 'website-protector'); ?></h2>
                </div>
                <ul> 

                    <?php
                    $active_all_plugins = get_option('active_plugins');

                    foreach ($active_all_plugins as $newmy) {
                        $path_parts = explode('/', $newmy);
                        $desired_output = $path_parts[0];
                        $plugin_name = str_replace('-', ' ', $desired_output);
                        $plugin_name_cap = ucwords($plugin_name);
                        ?>
                        <li><p>
                                <label>
                                    <input type='checkbox' name='active_plugins[]' class="hide_child" onclick="childCheck('hide_all_plugins', 'hide_child')" value='<?php echo $newmy; ?>' />
                                    <span><?php echo $plugin_name_cap; ?></span>
                                </label>
                            </p>
                        </li><?php }
                    ?>
                    <p class="submit">
                       <a name="show_plugins" id="show_plugins" class="waves-effect waves-light btn-large">Show</a>
                    </p>
                </ul>
            </div>
        </div>
        <!-- <p class="submit">
                <input type="submit" name="protector_check" class="button button-primary" value="Hide"/>
        </p> -->
    </form>

</div>

<script type="text/javascript">
    function childCheck( parentClass, childClass ) {
        if ( jQuery( "." + childClass + ":checked" ).length == jQuery( "." + childClass ).length ) {
            jQuery( "." + parentClass ).prop( "checked", true );
        } else {
            jQuery( "." + parentClass ).prop( "checked", false );
        }

        // jQuery( "." + childClass + ":checked" ).change(true function(){
        //     var ischecked = jQuery("."+childClass).is('checked');
        //     if(!ischecked){
        //         alert( jQuery( "."+childClass ).val());
        //     }
        //     else{
        //         alert( jQuery( "."+childClass ).val());
        //     }
        // } );
        
    }
    function checkAll( obj, childClass ) {
        jQuery( "." + childClass ).prop( "checked", obj.checked );
    }
</script>