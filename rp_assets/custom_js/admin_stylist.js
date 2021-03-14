$(document).ready(function(){

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

function create_user(){
	
	var data = JSON.stringify($('#CreateuserForm').serializeArray(this));

	$.ajax({
      url: base_url+'admin_stylist/create_user',
      type:'POST',
      dataType:'json',
      data:data,
    })//end of ajax
    .done(function(json){
      
      if(json){
        window.location.href = base_url+'admin_stylist';
      }
      
    })//end of done
    .fail(function( xhr, status, errorThrown ) {
      alert("Sorry, there was a problem!");
      console.log("Error: " + errorThrown);
      console.log("Status: " + status);
      console.dir(xhr);
    });//end of fail 
}