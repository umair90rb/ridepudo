$(document).ready(function(){

	$('#login_btn').click(function(){
		var data = $('#LoginForm').serializeArray(this);

		$.ajax({
          url: base_url+'login/user_login',
          type:'POST',
          dataType:'json',
          data:JSON.stringify(data),
        })//end of ajax
        .done(function(json){
        // console.log(json);
          if(Object.keys(json).length > 0){

	        	if (json.user_type == '1') {
	        		window.location.href = base_url+'admin_dashboard';
	        	} else if (json.user_type == '2') {
              window.location.href = base_url+'carbase_dashboard';
            } else if (json.user_type == '4') {
              window.location.href = base_url+'stylist_profile';
            } else {
	        		window.location.href = base_url+'home';
	        	}
            
	         	
	        } else {
    			$('#login_error_text').show();
	        	$('#login_error_text').text('Username or Password is wrong!');
	        }
          
        })//end of done
        .fail(function( xhr, status, errorThrown ) {
          alert("Sorry, there was a problem!");
          console.log("Error: " + errorThrown);
          console.log("Status: " + status);
          console.dir(xhr);
        });//end of fail 
	        
	});// end of login

	$('#sendlink_btn').click(function(){
		var email = $('#forget_email').val();

		$('#ForgetModal').modal('hide');
		$('#loadingModal').modal('show');

		$.ajax({
          url: base_url+'login/send_forgetpasword',
          type:'POST',
          dataType:'json',
          data:JSON.stringify(email),
        })//end of ajax
        .done(function(json){

        	$('#loadingModal').modal('hide');
	        $('#forget_email_div').html(json);

	        $('#ForgetModal').modal('show');       
        })//end of done
        .fail(function( xhr, status, errorThrown ) {
          alert("Sorry, there was a problem!");
          console.log("Error: " + errorThrown);
          console.log("Status: " + status);
          console.dir(xhr);
        });//end of fail
	        
	});// end of login

	$('#forget_email').blur(function(){
        var email = $('#forget_email').val();

        $.ajax({
          url: base_url+'signup/check_email',
          type:'POST',
          dataType:'json',
          data:email,
        })//end of ajax
        .done(function(json){

        	if(json){
        		$('#forget_error_text').hide();
	            $('#sendlink_btn').removeAttr("disabled");
	        } else{
	            $('#forget_error_text').show();
	        	$('#sendlink_btn').attr("disabled","disabled");
	        }
	          
        })//end of done
        .fail(function( xhr, status, errorThrown ) {
          alert("Sorry, there was a problem!");
          console.log("Error: " + errorThrown);
          console.log("Status: " + status);
          console.dir(xhr);
        });//end of fail 
    });// end of regisrer email
	
});// end of document ready function


function show_forget_modal(){
	$('#loginModal').modal('hide');
	$('#ForgetModal').modal('show');
}