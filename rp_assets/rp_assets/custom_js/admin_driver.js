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

  var isBlank = checkBlankFields('CreateuserForm');

  if(isBlank){
      $('#required_modal').modal('show');
  } else {

  	$.ajax({
        url: base_url+'admin_driver/create_user',
        type:'POST',
        dataType:'json',
        data:data,
      })//end of ajax
      .done(function(json){
        
        if(json){
          window.location.href = base_url+'admin_driver';
        }
        
      })//end of done
      .fail(function( xhr, status, errorThrown ) {
        alert("Sorry, there was a problem!");
        console.log("Error: " + errorThrown);
        console.log("Status: " + status);
        console.dir(xhr);
      });//end of fail 
  }
}

function checkBlankFields(formId){
  var blankFields = [];
      
  $('#'+formId+' :input').each(function(index, el)
    {
      var isRequired =  $(el).attr('required');
      
  
      if(isRequired == 'required'){
        if (!$(el).val().length != 0){
            blankFields.push(el);
            $(el).addClass('error');
        }else{
            $(el).removeClass('error');
        }// end of else
      }
    
    });

  if(blankFields.length > 0){
    return true;
  }
  else{
    return false;
  }
      
}// end of checkBlankFields function