<div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="col span_1_of_3">
    		</div>
			<div class="col span_1_of_3 form-box">
			  	<div class="contact-form">
					<h3>Sign-In</h3>
					<?php echo form_open('administrator/auth'); ?>
						<span><input type="text" name="username" style="width:94%;" placeholder="Username"  value="<?php echo set_value('username'); ?>" /></span>
						<?php echo form_error('username'); ?>
						<span><input type="password" class="login-textbox" name="password" style="width:94%;" placeholder="Password"  value="<?php echo set_value('password'); ?>" /></span>
						<?php echo form_error('password'); ?>
						<div class="error"><?php if (isset($login_error)) { echo $login_error; } ?></div>
						<span><input class="myButton" type="submit" name="signin" value="Sign In"></span>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>