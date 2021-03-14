<section id="dvImage" class="container-fluid home-view" style="background-size: cover;background-position: center;">
	<div class="row justify-content-xl-end justify-content-lg-center">

		<?php if(isset($user) && $user){
				$this->load->view('search-home-view');
			} else {
				$this->load->view('signup-home-view');
			} 
		?>

	</div>
</section>
<script type="text/javascript" src="<?php echo base_url(); ?>rp_assets/js/background.cycle.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var path = '<?php echo base_url(); ?>rp_assets/img/';
		var images = [path+"bg3.jpg", path+"bg5.jpg", path+"bg6.jpg", path+"bg7.jpg", path+"bg4.jpg"];
		var duration = 10000;
		var fadeSpeed = 2000;
		
		$("#dvImage").backgroundCycle({
			imageUrls:images,
			fadeSpeed: fadeSpeed,
			duration: duration,
			backgroundSize: SCALING_MODE_COVER
		});
	});
</script>

<script type="text/javascript">
	var selected_business = '';
	jQuery(document).ready(function() {

	  jQuery('#business_name_home').on('keyup', function () {
	    var business_name_str = jQuery('#business_name_home').val();
	    var business_name = encodeURIComponent(business_name_str.trim());

	    if (business_name.length > 2 && (selected_business != business_name)) {
			jQuery('#business_home').append('<div class="item" style="padding: 10px;font-weight: 600;background-color: white;border-top: 1.5px solid grey;    text-align: left;"><div class="search-loader">Loading...</div></div>');
	        jQuery.ajax({
	              type:'POST',
	              dataType:'json',
	              url: base_url+'home/get_business',
	              data: JSON.stringify(business_name),
	              success:function(data) {
					jQuery('#business_home').empty();
					var SuggestionOptions = '';
					if ( data.length > 0 ) {
						jQuery.each(data, function(i, item){
							SuggestionOptions += '<div class="item" style="padding: 10px;font-weight: 600;background-color: white;border-top: 1.5px solid grey;    text-align: left;"><a style="color:#000000;" href="'+base_url+'profile/'+item.username+'">'+item.shop_name+'</a></div>';   
						}); // end of each
					} else {
	                	SuggestionOptions = '<div class="item" style="padding: 10px;font-weight: 600;background-color: white;border-top: 1.5px solid grey;    text-align: left;"><a style="color:#000000;">No Shop Results Found</a></div>';   
					}

					jQuery('#business_home').append(SuggestionOptions);
					jQuery('#business_home').show();
	              },
	              error: function(errorThrown){
					console.log(errorThrown);
					jQuery('#business_home').hide();
	              } 
	            });

	    } else {
			jQuery('#business_home').empty();
		}

	  });//end of Keyup function 

	});
</script>