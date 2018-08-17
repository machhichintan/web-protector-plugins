<?php
	// function active_plugins() {
	// 	$the_plugs = get_option('active_plugins');
	// 	echo '<ul>';
	// 	foreach($the_plugs as $key => $value) {
	// 		$string = explode('/',$value); // Folder name will be displayed
	// 		echo '<li>'.$string[0] .'</li>';
	// 	}
	// 	echo '</ul>';
	// }
//active_plugins();

if(isset($_POST['protector_check'])){
		echo "<pre>";
		print_r($_POST);

}
else{

}




?>
<div class="wrap">
	<h2><?php esc_html_e('Plugins Protector', 'website-protector') ?></h2>
	<div class="tablenav top"></div>
	<form action="" method="post" name="plugins">
		<div class="wp-list-table widefat plugins">
			<div class="active_plugins">
				<div class="active_select_all">
					<p>
				      <label>
				        <input type='checkbox' name='select_all[]' value='' />
				        <span><?php //echo $plugin_name_cap; ?></span>
				      </label>
				    </p>
				</div>
	
				<h2><?php esc_html_e( 'Activated Plugins', 'website-protector' ); ?></h2>
				<ul> <?php
					$active_all_plugins = get_option('active_plugins');



					foreach($active_all_plugins as $newmy){

						$path_parts = explode('/', $newmy);
						$desired_output = $path_parts[0];
						$plugin_name = str_replace('-', ' ', $desired_output); 
						$plugin_name_cap =  ucwords($plugin_name);?>


						<p>
					      <label>
					        <input type='checkbox' name='active_plugins[]' value='<?php echo $newmy; ?>' />
					        <span><?php echo $plugin_name_cap; ?></span>
					      </label>
					    </p>

					    <?php


					} ?>
					<p class="submit">
						<input type="submit" name="active_plugin_btn" class="waves-effect waves-light btn-large" value="Hide"/>
					</p>
				</ul>
			</div>
			<div class="hide_plugins">
				<h2><?php esc_html_e( 'Hide Plugins', 'website-protector' ); ?></h2>
				<ul> <?php
					$active_all_plugins = get_option('active_plugins');



					foreach($active_all_plugins as $newmy){

						$path_parts = explode('/', $newmy);
						$desired_output = $path_parts[0];
						$plugin_name = str_replace('-', ' ', $desired_output); 
						$plugin_name_cap =  ucwords($plugin_name);?>


						<p>
					      <label>
					        <input type='checkbox' name='active_plugins[]' value='<?php echo $newmy; ?>' />
					        <span><?php echo $plugin_name_cap; ?></span>
					      </label>
					    </p>

					    <?php


					} ?>
					<p class="submit">
						<input type="submit" name="hide_plugin_btn" class="waves-effect waves-light btn-large" value="Unhide"/>
					</p>
				</ul>
			</div>
		</div>
		<!-- <p class="submit">
			<input type="submit" name="protector_check" class="button button-primary" value="Hide"/>
		</p> -->
	</form>
	
</div>
<?php 
// function run_activate_plugin( $plugin ) {
//     $current = get_option( 'active_plugins' );
//     $plugin = plugin_basename( trim( $plugin ) );

//     if ( !in_array( $plugin, $current ) ) {
//         $current[] = $plugin;
//         sort( $current );
//         do_action( 'activate_plugin', trim( $plugin ) );
//         update_option( 'active_plugins', $current );
//         do_action( 'activate_' . trim( $plugin ) );
//         do_action( 'activated_plugin', trim( $plugin) );
//     }

//     return null;
// }
// run_activate_plugin( 'akismet/akismet.php' );

?>