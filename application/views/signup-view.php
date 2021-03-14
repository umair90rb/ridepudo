<section id="signUp" class="container-fluid bg-img">
	<div class="row justify-content-xl-start justify-content-lg-center">
		<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 col-12">
			
		</div>
		<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 srch-box-cntnr">
			<div class=" srch-box signup-box mb-80 mt-80 text-center">
				<form id="signup_form" autocomplete="off">
					<h3 class="text-bold f-18 clr-light">Signup on Pudo </h3>
					<div class="pr-60 pl-60"><hr></div>
					<p class="f-15 clr-light mb-0">Join our subscription service and have<br> Pudo be your fleet</p>
					<p class="f-15 clr-light mb-0"><b>Official Launch April 25</b></p>
					<label>First Name</label>
					<input id="first_name" type="text" class="form-control" name="first_name" placeholder="Adam">

					<label>Last Name</label>
					<input id="last_name" type="text" class="form-control" name="last_name" placeholder="Jones">

					<label>Email Name</label>
					<input id="register_email" type="text" class="form-control" name="email" placeholder="Adam.Jones@gmail.com" autocomplete="off">
					<label id="email_error" class="clr-red f-10" style="display: none;">Sorry email already exists, please login or reset password.</label>

					<label>Password</label>
					<input id="password" type="password" class="form-control" name="password" placeholder="Minimum 6 characters" autocomplete="off">

					<label>Confirm Password</label>
					<input id="confirm_password" type="password" class="form-control" placeholder="Minimum 6 characters" onchange="check_repeat_password();" autocomplete="off">
					<label id="password_error" class="clr-red f-10" style="display: none;">Both passwords must match.</label>

					<label>Phone Number</label>
					<div class="phone-sec">
						<span>(</span><input id="1" type="text" class="form-control in1" name="phone1" maxlength="3" ><span>)</span>
						<input id="2" type="text" class="form-control in2" name="phone2" maxlength="3" ><span>-</span>
						<input id="3" type="text" class="form-control in3" name="phone3" maxlength="4">
					</div>
					<div class="mt-20"><input id="tc_check" type="checkbox" name="" checked> I agree to <a style="font-weight: 700;color: #401854;" type="button" data-toggle="modal" data-target="#PolicyModal">Policy</a>  and <a style="font-weight: 700;color: #401854;" type="button" data-toggle="modal" data-target="#TCModal">Terms of Use</a>.</div>
					<input type="hidden" name="signup_for" value="customer">
				</form>

				<div><button type="button" onclick="signup_user()" id="btn_register" class="btn btn-dark mt-20">SIGN UP TODAY</button></div>
			</div>
		</div>
	</div>
</section>

<script src="<?php echo base_url(); ?>rp_assets/custom_js/signup.js?v=2.0"></script>
