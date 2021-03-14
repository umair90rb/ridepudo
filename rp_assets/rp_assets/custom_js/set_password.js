function check_repeat_password(){
    var pass1 = $('#password').val();
    var pass2 = $('#confirm_password').val();

    if(pass1 != pass2){
      $('#password_error').show();
      $('#set_password').attr("disabled","disabled");
    } else{
    	$('#password_error').hide();
    	$('#set_password').removeAttr('disabled');
    } // end of else

}// end of function

function set_password(){
	
	var data = JSON.stringify($('#set_password_form').serializeArray(this));

	$.ajax({
      url: base_url+'set_password/create_password',
      type:'POST',
      dataType:'json',
      data:data,
    })//end of ajax
    .done(function(json){
      
      $('#status_modal').modal('show');
      
    })//end of done
    .fail(function( xhr, status, errorThrown ) {
      alert("Sorry, there was a problem!");
      console.log("Error: " + errorThrown);
      console.log("Status: " + status);
      console.dir(xhr);
    });//end of fail 
}