<?php   $f = substr($user['first_name'],0,1);
		$l = substr($user['last_name'],0,1);
?>
<nav class="navbar navbar-expand-lg navbar-expand-sm navbar-dark bg-dark fixed-top">
  	<a class="navbar-brand" href="<?php echo base_url(); ?>home"><img class="img-fluid" src="<?php echo base_url(); ?>rp_assets/img/logo.png"></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarsExample05">
	    <ul class="navbar-nav ml-auto">

			<li class="nav-item">
				<a class="nav-link brdr-r" type="button" data-toggle="modal" data-target="#HowItWorksModal">How It Works</a>
			</li>
			  
	      	<li class="nav-item <?php if ($module == "myshop-view") { echo "active";} ?> ">
	        	<a class="nav-link brdr-r" href="<?php echo base_url(); ?>myshop">My Shop</a>
	      	</li>
	      	<!-- <li class="nav-item brdr-r <?php if ($module == "stylist-schedule-view") { echo "active";} ?>">
		        <a class="nav-link" href="#">Schedule</a>
		    </li> -->

		    <li class="nav-item mr-20">
	      		<a class="nav-link nav-img-sec" href="#" role="button" id="dropdownUserLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	      			<span><?php echo $f; ?><?php echo $l; ?></span>
	      		</a>
	      		<div class="dropdown-menu animate slideIn dropdownNotify" aria-labelledby="dropdownUserLink">
					<a class="dropdown-item" href="<?php echo base_url(); ?>stylist_profile">Profile</a>
				    <a class="dropdown-item" href="<?php echo base_url(); ?>login/logout">Logout</a>
				</div>
	      	</li>

		    <li class="nav-item mr-20">
	      		<a class="nav-link ntfctn-lnk" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
	      		<!-- <div class="dropdown-menu animate slideIn dropdownNotify" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
				    <a class="dropdown-item" href="#">Another action</a>
				    <a class="dropdown-item" href="#">Something else here</a>
				</div> -->
	      	</li>

	      	<!-- <li class="nav-item">
	      		<button data-toggle="dropdown"  class="srch-btn"><i class="fas fa-search"></i></button>
	      		<div class="dropdown-menu animate slideIn search-strip">					
                    <form class="form-inline login-form">
                    	<div class="container-fluid">
		                    <div class="col-lg-8 col-12 pl-0">
		                    	<input id="business_name" type="text" class="form-control store-input" placeholder="Store, Style, Service">
		                    </div>
		                    <div class="col-lg-3 col-10">
		                    	<div class="input-group">
			                        <input type="text" class="form-control" placeholder="Location">
			                        <div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fa fa-crosshairs"></i>
										</span>                    
									</div>
			                    </div>
			                </div>
			                <div class="col-lg-1 col-2"><a href="#"><i class="fas fa-times fa-2x"></i></a></div>
			                <div class="col-12">
			                	<div id="business" class="results" style="display: none;"></div>
			                </div>
		                </div>
                        
                    </form>
                </div>
	      	</li> -->
	    </ul>
  	</div>
</nav>

<div class="modal fade" id="HowItWorksModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
	        	<div class="login-box">
			  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        	<span aria-hidden="true">&times;</span>
			        </button>
					<h3 class="mb-30">How it <span class="clr-primary">Works</span></h3>
					<p><b>Step 1.</b> By putting in the zip code, location or service you choose, cosmetology services that are subscribed to PUDO in that area e.g: <i>Hairstylist, Barbershop, Masseuse, Tattoo Artist, Nail Salon etc. will show.</i></p>

					<p><b>Step 2.</b> After reviewing whos in the area, you can click a profile to view that service or artist page to see photos, comments, ratings and appointment times.<p>

					<p><b>Step 3:</b> To make an appointment click an appointment open time slot and book.(All bookings must be 2 hours in advance)<p>

					<p><b>Step 4:</b> After booking wait for an confirmation.</p>

					<p><b>Step 5:</b> Once the booking is confirmed you will receive a email, and on the day of your booking you will receive a notification and a update on your driver.</p>

					<p>Please Note <i>**** Your driver will be there earlier then your appointment time to get you there on TIME, so be timely! You will receive a notification of the time the driver will be to you and also receive an update when the driver is on the way !</i></p>

					<p><b>Step 6:</b> When you want to complete your appointment with your rideback option you will have an option to request a pick up when ready.</p>

					<p>(Choose this option when you want your driver to return for your pick up)</p>

					<p><i>*** One way trips are Ok but ROUNDTRIP Rides are our specialty, be sure to choose this option upon checkout</i></p>

					<p><b>Step 7:</b> Enjoy your Ride and tag us in your Pudo to your appointment on instagram @ridepudo<p>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var selected_business = '';
	jQuery(document).ready(function() {

	  jQuery('#business_name').on('keyup', function (){
	    var business_name_str = jQuery('#business_name').val();
	    var business_name = encodeURIComponent(business_name_str.trim());

	    if (business_name.length > 2 && (selected_business != business_name)) {
	        jQuery.ajax({
	              type:'POST',
	              dataType:'json',
	              url: base_url+'home/get_business',
	              data: JSON.stringify(business_name),
	              success:function(data){

	                jQuery('#business').empty();
	                var SuggestionOptions = '';

	                jQuery.each(data, function(i, item){

	                  SuggestionOptions += '<div class="item" style="padding: 10px;font-weight: 600;background-color: white;border-top: 1.5px solid grey;"><a style="color:#000000;" href="'+base_url+'profile/'+item.username+'">'+item.shop_name+'</a></div>';
	                }); // end of each

	                jQuery('#business').append(SuggestionOptions);
	                jQuery('#business').show();
	              },
	              error: function(errorThrown){
	                console.log(errorThrown);
	              } 
	            });

	    }//end of if

	  });//end of Keyup function
	  
	});//end of Keyup function
	  
</script>