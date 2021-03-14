<?php   $f = substr($info['first_name'],0,1);
		$l = substr($info['last_name'],0,1);
?>

<div class="modal fade" id="BookFeatureComingSoon" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
	        	<div class="login-box">
			  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        	<span aria-hidden="true">&times;</span>
			        </button>
					<h3 class="mb-30">Coming <span class="clr-primary">Soon</span></h3>
					<p>This is only a soft launch, but PUDO will officially be available for everyone’s use on March 10, 2021. We will keep you updated on new add-ons and promotions through our email list.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="BookTermandCond" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
	        	<div class="login-box">
			  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        	<span aria-hidden="true">&times;</span>
			        </button>
					<h3 class="mb-30">Booking Terms and <span class="clr-primary">Conditions</span></h3>
					<p><?php echo $info['term_and_cond']; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.pt-200{
		padding-top: 200px;
	}
	.mt-27{
		margin-top: 7%;
	}
</style>
<?php if($nav_view == 'stylist-nav-view'){
	$pt = 'pt-100';
}elseif($nav_view == 'customer-nav-view'){
	$pt = 'mt-27';
}else{
	$pt = 'pt-50';
} ?>
<main id="ShopView" class="bg-light <?=$pt?>  pb-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<div class="shop-profile-image border border-dark "  style="background-image: url('<?php echo base_url(); ?>rp_assets/Images/user_images/<?php echo $info['file_name']; ?>')">
								<?php if (empty($info['file_name'])) { ?>
					    			<div style="height: 130px; margin-top: 35px;">
					    				<h1 style="font-size: 100px;"><?php echo $f; ?><?php echo $l; ?></h1>
					    			</div>
					    		<?php } ?>
							</div>
							<div class="rating-sec text-center" style="color: #b760e4;">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</div>
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<p class="text-bold clr-primary f-25 mt-10 mb-0"><?php echo $info['first_name']; ?> <?php echo $info['last_name']; ?></p>
							<h3 class="text-bold"><?php echo $info['shop_name']; ?></h3>
							<?php if (!empty($info['street'])) { ?>
							<p class="clr-dark2 text-bold f-15 mb-0"><?php echo $info['street']; ?></p>
							<p class="clr-dark2 text-bold f-15"><?php echo $info['city']; ?>, <?php echo $info['state']; ?> - <?php echo $info['zip']; ?></p>
							<?php } ?>
							<!--<p class="f-13">(<span class="clr-primary">232</span>)Reviews</p>-->
							<a class="btn btn-dark bg-dark" type="button" data-toggle="modal" data-target="#BookFeatureComingSoon">Book Schedule</a>
							<?php if (!empty($info['term_and_cond'])) { ?>
								<a class="btn" type="button" data-toggle="modal" data-target="#BookTermandCond">
									<i class="fa fa-info-circle" aria-hidden="true"></i>
								</a>
							<?php } ?>
						</div>
					</div>
				</div>
				<hr>
				<?php if (!empty($info['services'])) { ?>
				<div class="myShop-schdl-box">
					<table class="table table-striped">
						<tbody>
							<?php foreach ($info['services'] as $key => $value) { ?>
							<tr>
								<td>
									<p class="text-bold mb-0"><?php echo $value['service_name']; ?></p>
									<p class="clr-dark2 f-15 mb-0"><?php echo $value['details']; ?></p>
									<label class="float-left f-15"><span class="text-bold">Duration</span><span class="ml-5 clr-dark2"><?php echo $value['time']; ?> mins</span></label>
									<label class="float-right f-15"><span class="text-bold">Price</span><span class="ml-5 clr-dark2">$<?php echo $value['price']; ?></span></label>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<?php } ?>
			</div>
			<div class="col-lg-6 col-12">
				<?php if (!empty($info['images'])) { ?>
				<div class="container-fluid myshop-img-sec">
					<div id="profile-gallery" class="row shop-images">
						<?php foreach ($info['images'] as $key => $value) { ?>
							<a href="<?php echo base_url(); ?><?php echo $value['path']; ?>/<?php echo $value['file_name']; ?>">
								<img src="<?php echo base_url(); ?><?php echo $value['path']; ?>/<?php echo $value['file_name']; ?>" />
							</a>
						<?php } ?>
					</div>
				</div>
				<?php } ?>

				<?php if (!empty($info['details'])) { ?>
				<p class="mt-20 f-17">
					<?php echo $info['details']; ?>
				</p>
				<?php } ?>
				
				<?php if (!empty($info['street'])) { ?>
					<a target="_blank" href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($info['street']); ?>">
						<img class="img-fluid shop-profile-map" alt="<?php echo urlencode($info['shop_name']); ?>" src="https://maps.googleapis.com/maps/api/staticmap?autoscale=1&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0x9900ff%7Clabel:%7C<?php echo urlencode($info['street']); ?>&size=800x350&zoom=15&key=AIzaSyCvgKVYuZ1J3mu5uS5k_h221WonVRZDnv0">
					</a>
				<?php } ?>
			</div>
		</div>

		<!--<div class="bg-gray2 mt-30 pl-50 pr-50 pt-20 pb-20">
			<div class="row">
				<div class="col-lg-4">
					<p class="f-20 text-bold clr-primary mb-0">Customer Review</p>
					<div class="rating-sec mt-0">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<label class="ml-10 clr-dark">5 Out of 5</label>
					</div>
					<div class="rtng-mtr mt-10">
						<div class="row">
							<div class="col-3"><label>5 Stars</label></div>
							<div class="col-9">
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="200"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-3"><label>4 Stars</label></div>
							<div class="col-9">
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="200"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-3"><label>3 Stars</label></div>
							<div class="col-9">
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="200"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-3"><label>2 Stars</label></div>
							<div class="col-9">
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="200"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-3"><label>1 Stars</label></div>
							<div class="col-9">
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="200"></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-lg-7 col-md-7 col-12">
					<p class="f-20 text-bold clr-primary mb-0">Customer images</p>
					<div class="myshop-img-sec mt-5">
						<div class="row">
							<div class="col-lg-3 col-6">
								<img class="img-fluid" src="<?php echo base_url(); ?>rp_assets/img/myshop-dummy-img.png">
							</div>
							<div class="col-lg-3 col-6">
								<img class="img-fluid" src="<?php echo base_url(); ?>rp_assets/img/myshop-dummy-img.png">
							</div>
							<div class="col-lg-3 col-6">
								<img class="img-fluid" src="<?php echo base_url(); ?>rp_assets/img/myshop-dummy-img.png">
							</div>
							<div class="col-lg-3 col-6">
								<img class="img-fluid" src="<?php echo base_url(); ?>rp_assets/img/myshop-dummy-img.png">
							</div>
						</div>
					</div>
					<div class="mt-10"><a class="clr-primary f-18 float-right" href="#">See all customer images</a></div>
				</div>
			</div>
		</div>
		<div class="row mt-50">
			<div class="col-12">
				<h3 class="text-bold clr-primary">Reviews</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-3">
				<a class="nav-img-sec border border-dark" href="#" role="button" id="dropdownUserLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	      			<span class="text-bold">ND</span>
	      		</a>
			</div>
			<div class="col-lg-11 col-9">
				<div>
					<label class="f-18 text-bold mb-0">FirstName LastNmae</label><label class="f-12 clr-dark2 mb-0 ml-30">September 3, 2018</label>
				</div>
				<div class="rating-sec m-0">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-9 col-12 mt-20 mb-30">
				<p class="ml-20">Despite the basic packaging, I was quite impressed with the condition of the phone, it looked brand new with- out a single scratch, which was one of my main concerns, when purchasing a refurbished phone. It also came with nicely packaged; headphones, aux adapter cable, and a charger. What I like the most about this purchase, the fact that it was SIM unlocked(read some reviews saying it wasn't). I was able to insert my AT&T SIM card and have it work immediately without any complications, I was able to call/text people within minutes of activating the phone. I've only had this phone for a week now and so far nothing seems to raise any red flags yet, l'll update my review if anything changes.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-1 col-3">
				<a class="nav-img-sec border border-dark" href="#" role="button" id="dropdownUserLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	      			<span class="text-bold">ND</span>
	      		</a>
			</div>
			<div class="col-lg-11 col-9">
				<div>
					<label class="f-18 text-bold mb-0">FirstName LastNmae</label><label class="f-12 clr-dark2 mb-0 ml-30">September 3, 2018</label>
				</div>
				<div class="rating-sec m-0">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="far fa-star"></i>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-9 col-12 mt-20 mb-30">
				<p class="ml-20">Despite the basic packaging, I was quite impressed with the condition of the phone, it looked brand new with- out a single scratch, which was one of my main concerns, when purchasing a refurbished phone. It also came with nicely packaged; headphones, aux adapter cable, and a charger. What I like the most about this purchase, the fact that it was SIM unlocked(read some reviews saying it wasn't). I was able to insert my AT&T SIM card and have it work immediately without any complications, I was able to call/text people within minutes of activating the phone. I've only had this phone for a week now and so far nothing seems to raise any red flags yet, l'll update my review if anything changes.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<button class="btn bg-primary clr-light rvw-btn">SEE ALL REVIEWS</button>
			</div>
		</div>
	</div>-->
</main>
<!--<div class="progress">
	<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="200"></div>
</div>-->