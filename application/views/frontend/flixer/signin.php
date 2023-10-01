<?php if (get_settings('recaptcha')) : ?>
	<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
<?php endif; ?>

<div class="login-container">
	<div class="logo">
		<img src="<?php echo base_url(); ?>/assets/global/logo.jpg" alt="">
	</div>
	<div class="mymodal">
		<div class="collapse-btn">

			<button class="login-collapse" id="login-clp" onclick="loginChange('<?php echo base_url(); ?>')">Login</button>
			<button class="signup-collapse" id="signup-clp" onclick="signupChange('<?php echo base_url(); ?>')">Sign Up</button>
		</div>
		<!--  login form starts  -->

		<?php
		if ($this->session->flashdata('signin_result') == 'failed') :
		?>
			<!-- ERROR MESSAGE -->
			<div class="alert alert-dismissible alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo get_phrase('Login_failed! Please_try_again.'); ?>
			</div>
		<?php endif; ?>

		<form class="form" id="login-container" action="<?php echo base_url(); ?>index.php?home/signin" method="POST">

			<input type="hidden" name="_token" value="iJxLToF31pwYxip5BzoM4OvAC5yfa7oavVTz4X8Q" autocomplete="off">
			<div class="login--options">
				<a href="#" class="btns"><button name="Google" type="button">Login with Google</button></a>
				<a href="#" class="btns"> <button name="facebook" type="button">Login with Facebook</button></a>
				<a href="#" class="btns"><button name="twitter" type="button">Login with Twitter</button></a>
			</div>
			<div class="separator">
				<hr class="line">
				<p>OR</p>
				<hr class="line">
			</div>
			<div class="login-info--form">
				<div class="input_container">
					<label for="password_field" class="input_label">Email</label>
					<input id="password_field" type="email" class="input_field" type="email" name="email" title="Input email" placeholder="Email" required>
				</div>
				<div class="input_container">
					<label for="password_field" class="input_label">Password</label>
					<input id="password_field" type="password" class="input_field" type="password" name="password" title="Input Password" placeholder="********">
				</div>
				<div class="input_container">
					<label class="cyberpunk-checkbox-label">
						<input type="checkbox" class="cyberpunk-checkbox">
						Remember me</label>
				</div>
			</div>
			<button class="submit--btn" type="submit">Login</button>
			<div class="policy">
				<a href="<?php echo base_url(); ?>index.php?general/privacypolicy"><?php echo get_phrase('Privacy_Policy'); ?></a>
				<a href="<?php echo base_url(); ?>index.php?general/refundpolicy"><?php echo get_phrase('Refund_Policy'); ?></a>
				<a href="<?php echo base_url(); ?>index.php?general/faq"><?php echo get_phrase('Faq'); ?></a>


			</div>
		</form>

		<!--  signup form starts  -->


		<!-- verify email form starts -->

		<form action="" class="form verifyEmail-form" id="verifyEmail-form">
			<div class="login--options">
				<h2 class="heading">Verifying Email</h2>
				<p>A Verification email has been sent to <a href="#">email@gmail.com</a></p>
				<button id="next" type="submit" class="submit--btn">Proceed</button>
			</div>
			<div class="policy">
				<a href="<?php echo base_url(); ?>index.php?general/privacypolicy"><?php echo get_phrase('Privacy_Policy'); ?></a>
				<a href="<?php echo base_url(); ?>index.php?general/refundpolicy"><?php echo get_phrase('Refund_Policy'); ?></a>
				<a href="<?php echo base_url(); ?>index.php?general/faq"><?php echo get_phrase('Faq'); ?></a>
			</div>
		</form>
		<!-- ///// information form  -->
		<form action="" class="form" id="inform">
			<h2 class="heading">Setup Your Account</h2>

			<div class="login-info--form">
				<div class="input_container">
					<label for="password_field" class="input_label">User Name</label>
					<input id="password_field" class="input_field" type="text" name="input-name" placeholder="Username" required>
				</div>
				<div class="input_container">
					<label for="password_field" class="input_label">First Name</label>
					<input id="password_field" class="input_field" type="text" name="input-name" placeholder="First Name" required>
				</div>
				<div class="input_container">
					<label for="password_field" class="input_label">Last Name </label>
					<input id="password_field" class="input_field" type="text" name="input-name" title="Input Password" placeholder="Last Name" required>
				</div>
				<div class="input_container">
					<label class="input_label">Gender</label>
					<div class="gender">
						<select>
							<option value="0">Gender</option>
							<option value="1">Male</option>
							<option value="2">Female</option>
						</select>
					</div>
				</div>
			</div>
			<button class="submit--btn" type="submit" id="nextProfile">Save</button>
			<div class="policy  policyEnd">
				<a href="<?php echo base_url(); ?>index.php?general/privacypolicy"><?php echo get_phrase('Privacy_Policy'); ?></a>
				<a href="<?php echo base_url(); ?>index.php?general/refundpolicy"><?php echo get_phrase('Refund_Policy'); ?></a>
				<a href="<?php echo base_url(); ?>index.php?general/faq"><?php echo get_phrase('Faq'); ?></a>
			</div>
		</form>
		<!-- ///// information last form  -->
		<form action="" class="form" id="informLast">
			<h2 class="heading">Setup Your Profile</h2>
			<div class="login-info--form">
				<div class="input_container">
					<label class="input_label">Gender</label>
					<div class="gender">
						<select>
							<option value="0">Male</option>
							<option value="1">Female</option>

						</select>
					</div>
				</div>
				<div class="input_container">
					<label class="input_label">Age</label>
					<div class="gender">
						<select>
							<option value="0">10-18</option>
							<option value="1">25-32</option>
							<option value="2">30-60</option>
						</select>
					</div>
				</div>
				<div class="input_container">
					<label class="input_label">Role</label>
					<div class="gender">
						<select>
							<option value="0">Viewer</option>
							<option value="1">Male</option>
							<option value="2">Female</option>
						</select>
					</div>
				</div>
			</div>
			<button class="submit--btn lastForm" type="submit"><a href="user_dashboard/browse.html">Save</a></button>
			<div class="policy policyEnd">
				<a href="<?php echo base_url(); ?>index.php?general/privacypolicy"><?php echo get_phrase('Privacy_Policy'); ?></a>
				<a href="<?php echo base_url(); ?>index.php?general/refundpolicy"><?php echo get_phrase('Refund_Policy'); ?></a>
				<a href="<?php echo base_url(); ?>index.php?general/faq"><?php echo get_phrase('Faq'); ?></a>
			</div>
		</form>
	</div>
</div>