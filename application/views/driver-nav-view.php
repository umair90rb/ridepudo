<?php   $f = substr($user['first_name'],0,1);
		$l = substr($user['last_name'],0,1);
?>
<nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark bg-dark">
  	<a class="navbar-brand" href="<?php echo base_url(); ?>/home"><img class="img-fluid" src="<?php echo base_url(); ?>rp_assets/img/logo.png"></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarsExample05">
	    <ul class="navbar-nav ml-auto">

	      	<li class="nav-item brdr-r <?php if ($module == "driver-schedule-view") { echo "active";} ?>">
		        <a class="nav-link" href="<?php echo base_url(); ?>driver_schedule">Schedule</a>
		    </li>

		    <li class="nav-item">
	      		<a class="nav-link nav-img-sec" href="#" role="button" id="dropdownUserLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	      			<span><?php echo $f; ?><?php echo $l; ?></span>
	      		</a>
	      		<div class="dropdown-menu animate slideIn dropdownNotify" aria-labelledby="dropdownUserLink">
					<a class="dropdown-item" href="<?php echo base_url(); ?>driver_profile">Profile</a>
				    <a class="dropdown-item" href="<?php echo base_url(); ?>login/logout">Logout</a>
				</div>
	      	</li>

		    <li class="nav-item">
	      		<a class="nav-link ntfctn-lnk" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
	      		<div class="dropdown-menu animate slideIn dropdownNotify" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
				    <a class="dropdown-item" href="#">Another action</a>
				    <a class="dropdown-item" href="#">Something else here</a>
				</div>
	      	</li>

	      	<li class="nav-item">
	      		<button data-toggle="dropdown"  class="srch-btn"><i class="fas fa-search"></i></button>
	      		<div class="dropdown-menu animate slideIn search-strip">					
                    <form class="form-inline login-form">
                    	<div class="container-fluid">
		                    <div class="col-lg-8 col-12 pl-0">
		                    	<input type="text" class="form-control store-input" placeholder="Store, Style, Service">
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
	      	</li>
	    </ul>
  	</div>
</nav> 