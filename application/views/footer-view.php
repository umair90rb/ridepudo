<footer class="container-fluid bg-dark">
	<div class="row pt-50 pb-100">
		<div class="col-lg-7 col-12">
			<h1 id="subscribe-header">PICK UP. DROP OFF</h1>
			<div class="container-fluid">
				<div class="row sty-tch mt-20">
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-10 pl-0">
						<input id="subscriber_email" type="text" name="" class="form-control" placeholder="enter email address here to stay in touch">
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 pr-0 text-right">
						<a type="button" onclick="add_subscriber();"><i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
				<div class="row mt-20 mb-20 scl-mda-btn">
					<div>
						<a href="https://www.snapchat.com/add/ridepudo" target="_blank" type="button"><i class="fab fa-snapchat-ghost"></i></a>
						<a href="https://www.facebook.com/ridepudo" target="_blank" type="button"><i class="fab fa-facebook"></i></a>
						<a href="https://www.instagram.com/ridepudo" target="_blank" type="button"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-1 col-1"></div>
		<div class="col-lg-4 col-12 pr-30">
			<p class="clr-primary foot-hd f-20">About Pudo</p>
			<p class="clr-secondary f-14 mt-20">
				PUDO is a startup company providing a roundtrip car service to customers needing to get to and from cosmetology appointments. 
				From spas to hairsalons or even tattoos, let PUDO be your inexpensive chauffer!
			</p>
			<p class="clr-secondary f-11">&copy; 2020 Pudo, LLC. All rights reserved</p>
		</div>
	</div>
</footer>

<script type="text/javascript">

	function add_subscriber(){
		var email = $('#subscriber_email').val();
		$('#loadingModal').modal('show');

		$.ajax({
          url: base_url+'login/add_subscriber',
          type:'POST',
          dataType:'json',
          data:JSON.stringify(email),
        })//end of ajax
        .done(function(json){
	        $('#subscribe-header').html("Thank You for signing up");
        })//end of done
        .fail(function( xhr, status, errorThrown ) {
          alert("Sorry, there was a problem!");
          console.log("Error: " + errorThrown);
          console.log("Status: " + status);
          console.dir(xhr);
        });//end of fail
	}

</script>