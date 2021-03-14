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
    			<img class="img-fluid user_profile_image" src="<?php echo base_url(); ?>rp_assets/Images/user_images/<?php echo $user['file_name']; ?>" style="border-radius: 50%;height: 130px;">
    		<?php }  else { ?>
    			<h1><?php echo $f; ?><?php echo $l; ?></h1>
    		<?php } ?>
    	</div>
    </div>
    <ul class="nav flex-column mb-2 mt-20">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          Profile
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">
          History
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Notification
        </a>
      </li> -->
    </ul>
  </div>
</nav>
<main role="main" id="stylishProfile" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 bg-light main-sec ">
	<div class="container-fluid pro-sec-cntnr">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<h1 class="text-bold clr-primary">Add Shop Details</h1>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-2 col-lg-3 col-md-4 col-12 mb-20">
				<div class="img-div-main">
					<div class="img-div">
		        		<?php if (!empty($user['file_name'])) { ?>
			    			<img class="img-fluid user_profile_image" src="<?php echo base_url(); ?>rp_assets/Images/user_images/<?php echo $user['file_name']; ?>" style="border-radius: 50%;height: 130px;">
			    		<?php }  else { ?>
			    			<div style="height: 130px;">
			    				<h1><?php echo $f; ?><?php echo $l; ?></h1>
			    			</div>
			    		<?php } ?>
		        		<div onclick="upload_profile_image();" class="upload_profile_image">
							<i class="fas fa-camera"></i>
						</div>
						<form method="post" enctype="multipart/form-data" id="profile_image_form" action="<?php echo base_url(); ?>stylist_profile/upload_profile_image" style="display: none;">
							<input type="hidden" name="current_file_name" value="<?php echo $user['file_name']; ?>">
							<input type="hidden" name="current_file" value="rp_assets/Images/user_images/<?php echo $user['file_name']; ?>">
							<input id="profile_image_input" class="profile_image_input" type="file" name="profile_image" accept="image/png,image/jpg,image/jpeg" style="display: block;">
							<input type="submit" value="submit" id="upload_profile_btn">
						</form>
		        	</div>
		        </div>
			</div>
			<div class="col-lg-9 col-md-11 col-12 pro-dsply-info">
				<div class="container-fluid">
				<form id="shop_details_form">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12 mt-20">
							<label>First Name</label>
							<input id="" type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo $user['first_name']; ?>">
						</div>
						<div class="col-lg-6 col-md-6 col-12 mt-20">
							<label>Last Name</label>
							<input id="" type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $user['last_name']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-lg-12 col-md-12 col-12 mt-20">
							<label>Email Name</label>
							<input id="email" type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $user['email']; ?>">
						</div>
						<div class="col-xl-6 col-lg-12 col-md-12 col-12 mt-20">
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
					<div class="row mt-20">
						<div class="col-12">
							<label>Shop Name</label>
							<input id="" type="text" class="form-control" name="shop_name" placeholder="Shop Name" value="<?php echo $info['shop_name']; ?>">
						</div>
					</div>
					<div class="row mt-20">
						<div class="col-lg-3 col-md-3 col-12">
							<label>Shop Description</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="thumbnail border"> 
				            	<textarea class="form-control" name="details" rows="4" value=""><?php echo $info['details']; ?></textarea>
				            </div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12 mt-20">
							<p class="text-bold clr-gray f-20">Mailing Address</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12 mt-20">
							<label>Street Address</label>
							<input id="" type="text" class="form-control" name="street" value="<?php echo $info['street']; ?>">
						</div>
						<div class="col-lg-6 col-md-6 col-12 mt-20">
							<label>City</label>
							<input id="" type="text" class="form-control" name="city" value="<?php echo $info['city']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12 mt-20">
							<label>State</label>
							<input id="" type="text" class="form-control" name="state" value="<?php echo $info['state']; ?>">
						</div>
						<div class="col-lg-6 col-md-6 col-12 mt-20">
							<label>Zip Code</label>
							<input id="" type="text" class="form-control" name="zip" value="<?php echo $info['zip']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12 mt-20">
							<label>Booking Term & Condition</label>
							<textarea class="form-control" name="book_term_cond" rows="4" value=""><?php echo $info['term_and_cond']; ?></textarea>
						</div>
					</div>
					
					<div class="row mt-20">
						<div class="col-lg-12 col-md-12 col-12">
							<p class="text-bold mb-0">Public Profile</p>
							<a class="profile-link" href="<?php echo base_url(); ?>profile/<?php echo $user['username']; ?>"><?php echo base_url(); ?>profile/<?php echo $user['username']; ?></a>
						</div>
					</div>

					<div class="row mt-20">
						<div class="col-lg-12 col-md-12 col-12 text-right">
							<button onclick="update_profile();" type="button" class="btn bg-primary lh-1 clr-light">Save</button>
						</div>
					</div>
				</form>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 col-12"></div>
		</div>
		<div class="row mt-20">
			<div class="col-lg-11 col-md-11 col-12">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-md-8 col-sm-12 col-12">
							<p class="text-bold f-20 clr-primary mb-0">Upload Shop Images</p>
							<hr class="mt-0">
						</div>
					</div>
					<ul class="row list-unstyled uploded-shop-list">
						<?php foreach ($info['images'] as $key => $value) { ?>
							<li class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mt-20">
					            <div class="thumbnail border"> 
					            	<a class="close" onclick="delete_image(<?php echo $value['id']; ?>);">×</a>
					            	<div class="crd-sec-main text-right">
						                <img src="<?php echo base_url(); ?><?php echo $value['path']; ?>/<?php echo $value['file_name']; ?>">
					                </div>
					            </div>
					        </li>
						<?php } ?>
				        
				        <li class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mt-20">
				            <div class="thumbnail border-dashed"> 
				            	<div class="crd-sec-main text-right">
					                <div onclick="upload_image();" id="image_upload" class="image_upload">
					                	<i class="fas fa-camera"></i>
					                </div>
					                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>stylist_profile/upload_image" style="display: none;">
										<input type="hidden" id="shop_id" name="shop_id" value="<?php echo $info['shop_id']; ?>">
										<input id="image_input" type="file" name="profile_image" accept="image/png,image/jpg,image/jpeg">
										<input type="submit" value="submit" id="upload_btn">
									</form>
				                </div>
				            </div>
				        </li>
				    </ul>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 col-12"></div>
		</div>
		<div class="row mt-20">
			<div class="col-xl-11 col-md-12 col-12">
				<div class="container-fluid">
				    <div class="row mt-20">
						<div class="col-lg-3 col-md-3 col-12">
							<p class="text-bold f-20 clr-primary mb-0">Services</p>
							<hr class="mt-0">
						</div>
					</div>
					<?php $service_next_key = 1; ?>
					<div id="services">
						<?php
						if(is_array($info['services'])){
						$service_next_key = count($info['services']) + 1;
						foreach ($info['services'] as $key => $value) { ?>
							<form id="service_form<?php echo $key ?>">
								<div class="row form-sections">
									<div class="col-lg-6 col-md-12 col-sm-12 col-12">
										<div class="form-group">
											<label>Service Name</label>
											<input type="text" class="form-control" name="service_name" id="service_name<?php echo $key ?>" placeholder="Service Name"  value="<?php echo $value['service_name'] ?>">
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-sm-12 col-12">
										<div class="form-group">
											<label>Price</label>
											<input type="number" class="form-control" name="price" id="price<?php echo $key ?>" value="<?php echo $value['price'] ?>">
										</div>
									</div>
									<div class="col-lg-3 col-md-6 col-sm-12 col-12">
										<div class="form-group">
											<label>Time (in Min.)</label>
											<input type="text" class="form-control" name="time" id="time<?php echo $key ?>" value="<?php echo $value['time'] ?>">
										</div>
									</div>
									<div class="col-xl-9 col-lg-8 col-sm-12 col-12">
										<div class="form-group">
											<label>Service Details</label>
											<input type="text" class="form-control" name="details" id="details<?php echo $key ?>" value="<?php echo $value['details'] ?>">
										</div>
									</div>
									<div class="col-xl-3 col-lg-4 col-sm-12 col-12">
										<div class="form-group">
											<label>Action</label>
											<button type="button" onclick="update_service('<?php echo $value['id']; ?>','service_form<?php echo $key ?>')" class="btn bg-primary lh-1 clr-light">Update</button>
											<span>&nbsp;</span>
											<button type="button" onclick="delete_service('<?php echo $value['id']; ?>')" class="btn bg-primary lh-1 clr-light">Delete</button>
										</div>
									</div>
								</div>
							</form>
						<?php }// end of foreach
							}  // end of if
						?>
					</div>
					<div class="row mt-20">
						<div class="col-lg-12 col-md-12 col-12 text-right">
							<button onclick="add_service_row();" class="btn btn-primary-lite lh-1"> <i class="fa fa-fw fa-plus-circle"></i> Add Service</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 col-12"></div>
		</div>
		<!--<div class="row mt-20">
			<div class="col-lg-11 col-md-11 col-12">
				<div class="container-fluid">
					<div class="row mt-20">
						<div class="col-lg-3 col-md-3 col-12">
							<p class="text-bold f-20 clr-primary mb-0">Bank Details</p>
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
						<div class="col-lg-12 col-md-12 col-12 text-right">
							<button class="btn bg-primary lh-1 clr-light">Save</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 col-12"></div>
		</div>-->
	</div>
</main>

<script type="text/javascript">
	var service_row_key = <?php echo $service_next_key; ?>;
	var shop_id = <?php echo $info['shop_id']; ?>;
</script>

<script src="<?php echo base_url(); ?>rp_assets/custom_js/stylist_profile.js?v=2.0"></script>
