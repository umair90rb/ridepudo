<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Pudo</title>
	<link rel="icon" type="text/css" href="<?php echo base_url(); ?>rp_assets/img/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/bootstrap.min.css?v=2.1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/css/all.min.css?v=2.1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/custom.css?v=2.1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/custom-app.css?v=2.1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/dashboard.css?v=2.1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/loader.css?v=2.1">

	<script src="<?php echo base_url(); ?>rp_assets/js/jquery.min.js?v=2.0"></script>
	<script src="<?php echo base_url(); ?>rp_assets/js/bootstrap.bundle.min.js?v=2.0"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js?v=2.0/2.9.0/moment-with-locales.min.js?v=2.0"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/custom-app.css?v=2.1">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-expand-sm navbar-dark bg-dark">
  		<a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="img-fluid" src="<?php echo base_url(); ?>rp_assets/img/logo.png"></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

	  	<div class="collapse navbar-collapse" id="navbarsExample05">
		    <ul class="navbar-nav ml-auto">
		      	
		    </ul>
	  	</div>
	</nav>

	<section id="setPassword" class="container-fluid bg-img">
		<div class="row justify-content-xl-start justify-content-lg-center">
			<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 col-12">
				
			</div>
			<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 srch-box-cntnr">
				<div class=" srch-box signup-box mb-80 mt-80 text-center">
					<form id="set_password_form">
						<h3 class="text-bold f-18 clr-light">Set your Password</h3>
						<div class="pr-60 pl-60"><hr></div>

						<label>Password</label>
						<input id="password" type="password" class="form-control" name="password" placeholder="Minimum 6 characters">
						<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
						<input type="hidden" name="email" value="<?php echo $email;?>">

						<label>Confirm Password</label>
						<input id="confirm_password" type="password" class="form-control" placeholder="Minimum 6 characters" onchange="check_repeat_password();">
						<label id="password_error" class="clr-red f-10" style="display: none;">Both passwords must match.</label>
					</form>

					<div><button type="button" onclick="set_password()" id="set_password" class="btn btn-dark mt-20">Set Password</button></div>
				</div>
			</div>
		</div>
	</section>

	<?php $this->load->view('footer-view'); ?>
</body>

<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
</script>

<div id="status_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-mainclr clr-white">
        <h4 class="modal-title">Alert !</h4>
      </div>
      <div class="modal-body">
        <h4 class="clr-grey">Your Password is successfully set. Please Login your account. </h4>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url(); ?>" class="btn bg-primary lh-1 clr-light" >Login</a>
      </div>
    </div>

  </div>
</div>

<script src="<?php echo base_url(); ?>rp_assets/custom_js/set_password.js?v=2.0"></script>

</html>
