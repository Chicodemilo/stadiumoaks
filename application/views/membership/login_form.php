<div id='wrapper'>
    <div id="login_form">
		<h2>Please Login</h2>
		<?php 
			echo form_open('login/validate_credentials');
			$opts = 'placeholder="Username"';
			echo form_input('username', '', $opts);
			$opts = 'placeholder="Password"';
			echo form_password('password', '', $opts);
			echo form_submit('submit', 'Login');
		 ?>
		 <a href="<?php echo base_url() ?>login/forgot_password" class="not_fancy">I Forgot My Password</a>
	 </div>
</div>