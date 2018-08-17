<?php 

	if(isset($_POST['protector_check'])){

		
		if (isset($_POST['front_back'])){
			update_option('front_back', 'yes');
		}
		else{
			update_option('front_back', 'no');
		}
	}
	$front_back = get_option('front_back');
?>
<div class="wrap">
	<h2><?php esc_html_e('Website Protector', 'website-protector') ?></h2>
	<div class="tablenav top"></div>
	<form action="" method="post" name="check">
		<p>
	      <label>
	       <input type="checkbox" name="front_back" <?php echo (get_option('front_back') == 'yes') ? 'checked' : ''; ?>>
	        <span>Front-End Protector</span>
	      </label>
	    </p>
		<p class="submit">
			<input type="submit" name="protector_check" class="button button-primary" />
		</p>
	</form>
</div>