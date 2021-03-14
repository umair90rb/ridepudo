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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/lightgallery.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/lg-transitions.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/lg-fb-comment-box.min.css">

	<script src="<?php echo base_url(); ?>rp_assets/js/jquery.min.js?v=2.0"></script>
	<script src="<?php echo base_url(); ?>rp_assets/js/bootstrap.bundle.min.js?v=2.0"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js?v=2.0/2.9.0/moment-with-locales.min.js?v=2.0"></script>
	<script src="<?php echo base_url(); ?>rp_assets/js/lightgallery.min.js"></script>
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/678d2df94148a99632857bcb6/994db1fd4dca27fee1798a677.js");</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-183947970-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-183947970-1');
	</script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/custom-app.css?v=2.1">

</head>
<body>

	<?php $this->load->view($nav_view); ?>

	<?php $this->load->view($module); ?>

	<?php if(isset($user) && $user){
			$this->load->view('login-footer-view');
	 	} else {
			$this->load->view('footer-view');
		} 
	?>
	
	<div class="loader " id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false">
    
	    <div class="loader-body">
	        <div id="ajax_loader">
	            <div class='body'>
				    <img src="<?php echo base_url(); ?>rp_assets/img/ride-pudo-animation-car.png">
				</div>
				<div class='longfazers'>
				    <span></span>
				    <span></span>
				    <span></span>
				    <span></span>
				</div>
	        </div>
	    </div>
	</div>
	

	<div class="modal fade" id="EmailVerifyModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
	        	<div class="login-box">
				  	<form class="px-4 py-3">
				  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	<span aria-hidden="true">&times;</span>
				        </button>
				  		<h3>Verify <span class="clr-primary">Email</span></h3>
				  		<div id="forget_email_div">
				  			<?php 
				  				$userid = '';
								if (isset($this->session->userdata['sessiondata']['user_id'])) {
									$userid = $this->session->userdata['sessiondata']['user_id'];
								}
				  			?>
				  			<input type="hidden" id="email_user_id" name="email_user_id" value="<?= $userid; ?>">
						    <label id="forget_error_text" class="clr-red f-10" style="display: none;">This email is not linked to any Account.</label>
					    	<div>
					    		<button type="button" id="emailverifylink_btn" class="btn btn-dark mt-20">Resend Email Verify Link</button>
					    	</div>
				  		</div>
				  	</form>
				</div>
	     	</div>
	    </div>
  	</div>
</div>

</body>

<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
</script>
<script type="text/javascript">
	$(window).bind("load", function () { "use strict"; $(".loader").fadeOut(1e3) })
	
	lightGallery(document.getElementById('profile-gallery'), {
		thumbnail:true
	});
	<?php 
		if (isset($this->session->userdata['sessiondata']['user_id'])) {
		$this->db->where('user_id',$this->session->userdata['sessiondata']['user_id']);
		$response = $this->db->get('users')->result_array();
		// echo '<pre>';
		// print_r($response[0]['email_verified']);
		// die;

		if ($response[0]['email_verified'] === '0') { 

	?>
		
		$('#EmailVerifyModal').modal();
	
	<?php } } ?>


	$('#emailverifylink_btn').click(function(){
	    var email_user_id = $('#email_user_id').val();

	    $.ajax({
	          url: base_url+'login/emailverifylink/'+email_user_id,
	          type:'GET',
	          data:'',
	        })//end of ajax
	        .done(function(json){
	          alert('Please check your mail.');       
	        })//end of done
	        .fail(function( xhr, status, errorThrown ) {
	          alert("Sorry, there was a problem!");
	          console.log("Error: " + errorThrown);
	          console.log("Status: " + status);
	          console.dir(xhr);
	        });//end of fail
	          
	  });// end of login



</script>

</html>