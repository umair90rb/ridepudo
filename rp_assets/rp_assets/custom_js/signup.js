$(document).ready(function(){

	$("#1").keyup(function(){
	    var text_lenght = $('#1').val().length;
	    if (text_lenght == 3) {
	    	$('#2').focus();
	  	}
	});

	$("#2").keyup(function(){
	    var text_lenght = $('#2').val().length;
	    if (text_lenght == 3) {
	    	$('#3').focus();
	  	}
	});

	$('#register_email').blur(function(){
        var email = $('#register_email').val();

        $.ajax({
          url: base_url+'signup/check_email',
          type:'POST',
          dataType:'json',
          data:email,
        })//end of ajax
        .done(function(json){
        if(json){
        	$('#email_error').show();
          $('#btn_register').attr("disabled","disabled");
        }
        else{
            $('#email_error').hide();
            $('#btn_register').removeAttr("disabled");
        }
          
        })//end of done
        .fail(function( xhr, status, errorThrown ) {
          alert("Sorry, there was a problem!");
          console.log("Error: " + errorThrown);
          console.log("Status: " + status);
          console.dir(xhr);
        });//end of fail 
    });// end of regisrer email

});

function signup_user(){

  var tc_check = $('#tc_check:checkbox:checked').length > 0;

  console.log(tc_check);

  if (tc_check) {
	
	 var data = JSON.stringify($('#signup_form').serializeArray(this));

	  $.ajax({
      url: base_url+'signup/create_user',
      type:'POST',
      dataType:'json',
      data:data,
    })//end of ajax
    .done(function(json){
      
      if(json){
        window.location.href = base_url+'home';
      }else{
        alert("Error signing up, please contact support");
      }
      
    })//end of done
    .fail(function( xhr, status, errorThrown ) {
      alert("Sorry, there was a problem!");
      console.log("Error: " + errorThrown);
      console.log("Status: " + status);
      console.dir(xhr);
    });//end of fail

  } else {
    alert('Please check terms and conditions before signup.');
  }
}

function check_repeat_password(){
    var pass1 = $('#password').val();
    var pass2 = $('#confirm_password').val();

    if(pass1 != pass2){
      $('#password_error').show();
      $('#btn_register').attr("disabled","disabled");
    } else{
    	$('#password_error').hide();
    	$('#btn_register').removeAttr('disabled');
    } // end of else

}// end of function
