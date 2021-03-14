<?php   $f = substr($user['first_name'],0,1);
		$l = substr($user['last_name'],0,1);
?>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
  <div class="sidebar-sticky pt-3">
    <div class="info-sec text-center">
    	<p class="text-bold f-20 m-0">Welcome</p>
    	<p class="mb-10 mt-0"><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></p>
    	<div class="img-div">
    		<?php if (!empty($user['file_name'])) { ?>
    			<img class="img-fluid user_profile_image" src="<?php echo base_url(); ?>rp_assets/Images/user_images/<?php echo $user['file_name']; ?>" height="50" width="50">
    		<?php }  else { ?>
    			<h1><?php echo $f; ?><?php echo $l; ?></h1>
    		<?php } ?>
    	</div>
    </div>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          Profile
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          History
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Notification
        </a>
      </li>
    </ul>
  </div>
</nav>
<main role="main" id="customerProfile" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-light main-sec">
	<div class="container-fluid pro-sec-cntnr">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<h1 class="text-bold clr-primary">Profile</h1>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-2 col-lg-3 col-md-4 col-12 mb-20">
				<div class="img-div-main">
					<div class="img-div">
		        		<?php if (!empty($user['file_name'])) { ?>
			    			<img class="img-fluid user_profile_image" src="<?php echo base_url(); ?>rp_assets/Images/user_images/<?php echo $user['file_name']; ?>">
			    		<?php }  else { ?>
			    			<div style="height: 130px;">
			    				<h1><?php echo $f; ?><?php echo $l; ?></h1>
			    			</div>
			    		<?php } ?>
		        		<div onclick="upload_profile_image();" class="upload_profile_image">
							<i class="fas fa-camera"></i>
						</div>
						<form method="post" enctype="multipart/form-data" id="profile_image_form" action="<?php echo base_url(); ?>customer_profile/upload_profile_image" style="display: none;">
							<input type="hidden" name="current_file" value="rp_assets/Images/user_images/<?php echo $user['file_name']; ?>">
							<input id="profile_image_input" class="profile_image_input" type="file" name="profile_image" accept="image/png,image/jpg,image/jpeg" style="display: block;">
							<input type="submit" value="submit" id="upload_profile_btn">
						</form>
		        	</div>
		        </div>
			</div>
			<div class="col-lg-9 col-12 pro-dsply-info">
				<div class="container-fluid">
					<form id="customer_form">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<label>First Name</label>
							<input id="" type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo $user['first_name']; ?>">
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<label>Last Name</label>
							<input id="" type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $user['last_name']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-12 mt-20">
							<label>Email Name</label>
							<input id="email" type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $user['email']; ?>">
						</div>
						<div class="col-lg-6 col-12 mt-20">
							<label>Phone Number</label>
							<?php $ph1 = substr($user['phone'],0,3);
								  $ph2 = substr($user['phone'],3,3);
								  $ph3 = substr($user['phone'],6,4);

							?>
							<div class="phone-sec">
								<span>(</span><input id="1" type="text" class="form-control in1" name="phone1" maxlength="3" value="<?php echo $ph1; ?>" ><span>)</span>
								<input id="2" type="text" class="form-control in2" name="phone2" maxlength="3" value="<?php echo $ph2; ?>"><span>-</span>
								<input id="3" type="text" class="form-control in3" name="phone3" maxlength="4" value="<?php echo $ph3; ?>">
							</div>
						</div>
					</div>
					
					<div class="row  mt-20">
						<div class="col-lg-12 col-md-12 col-12 text-right">
							<button  type="button" class="btn bg-primary lh-1 clr-light" onclick="update_profile();">Update</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row mt-20">
			<div class="col-lg-11 col-md-11 col-12">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<p class="text-bold f-20 clr-primary mb-0">Saved Cards</p>
							<hr class="mt-0">
						</div>
					</div>
					<ul class="row list-unstyled">
				        <li class="col-md-4 col-lg-4 col-12">
				            <div class="thumbnail border"> 
				            	<div><a class="close" href="#">×</a></div>
				            	<div class="crd-sec-main text-right">
					                <div class="crd-img">
				                		<img src="rp_assets/img/card.png" class="img-fluid">
				                	</div>
				                	<div class="crd-num-sec">
				                		<h3 class="mb-0 text-bold">XXXX-4294</h3>
				                		<p class="mb-10 mt-10 f-20 text-bold">Adam Jones</p>
				                		<p class="mb-0">2/25</p>
				                	</div>
				                </div>
				            </div>
				        </li>
				        <li class="col-md-4 col-lg-4 col-12">
				            <div class="thumbnail border"> 
				            	<div><a class="close" href="#">×</a></div>
				            	<div class="crd-sec-main text-right">
					                <div class="crd-img">
				                		<img src="rp_assets/img/card.png" class="img-fluid">
				                	</div>
				                	<div class="crd-num-sec">
				                		<h3 class="mb-0 text-bold">XXXX-4294</h3>
				                		<p class="mb-10 mt-10 f-20 text-bold">Adam Jones</p>
				                		<p class="mb-0">2/25</p>
				                	</div>
				                </div>
				            </div>
				        </li>
				        <li class="col-md-4 col-lg-4 col-12">
				        	<button class="btn border-secondary crd-add-btn"><i class="fas fa-plus "></i></button>
				        </li>
				    </ul>
				    <div class="row mt-20">
						<div class="col-lg-3 col-md-3 col-12">
							<p class="text-bold f-20 clr-primary mb-0">Direct Deposit</p>
							<hr class="mt-0">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<label>Name on Account</label>
							<input id="" type="text" class="form-control" name="" placeholder="Adam Jones">
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<label>Name of Financial Institution</label>
							<input id="" type="text" class="form-control" name="" placeholder="Bank of America">
						</div>
					</div>
					<div class="row mt-20">
						<div class="col-lg-6 col-md-6 col-12">
							<label>Routing Number</label>
							<input id="" type="text" class="form-control" name="" placeholder="XXXXXXXXXXX">
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<label>Account Number</label>
							<input id="" type="text" class="form-control" name="" placeholder="XXXXXXXXXXXXXXXX">
						</div>
					</div>
					<div class="row mt-20">
						<div class="col-lg-6 col-md-6 col-12">
							<label>Type of Account</label>
							<select class="form-control">
								<option hidden>Checking</option>
							</select>
						</div>
					</div>
					<div class="row mt-20">
						<div class="col-lg-3 col-md-3 col-12">
							<p class="text-bold clr-gray f-20">Mailing Address</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<label>Street Address</label>
							<input id="" type="text" class="form-control" name="" placeholder="">
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<label>City</label>
							<input id="" type="text" class="form-control" name="" placeholder="">
						</div>
					</div>
					<div class="row mt-20">
						<div class="col-lg-6 col-md-6 col-12">
							<label>State</label>
							<select class="form-control">
								<option>New York</option>
							</select>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<label>Zip Code</label>
							<input id="" type="text" class="form-control" name="" placeholder="">
						</div>
					</div>
					<div class="row mt-20">
						<div class="col-lg-12 col-md-12 col-12 text-right">
							<button class="btn bg-primary lh-1 clr-light">Edit</button>
						</div>
					</div>
				    <div class="row mt-20">
						<div class="col-lg-3 col-md-3 col-12">
							<p class="text-bold f-20 clr-primary mb-0">Subscription</p>
							<hr class="mt-0">
						</div>
					</div>
					<ul class="row list-unstyled">
				        <li class="col-md-12 col-lg-12 col-12">
				            <div class="thumbnail border"> 
				            	<div><a class="close" href="#">×</a></div>
				            	<div class="crd-sec-main pr-10 pl-10">
					                <h3 class="text-bold f-20 mt-0 mb-30">Payment cycle type</h2>
				                </div>
				            </div>
				        </li>
				    </ul>
				</div>
			</div>
		</div>
	</div>
</main>

<script src="<?php echo base_url(); ?>rp_assets/custom_js/customer_profile.js?v=2.0"></script>