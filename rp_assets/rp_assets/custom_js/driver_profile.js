$(document).ready(function() {

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

    $("#profile_image_input").on("change", function() {
       $("#upload_profile_btn").click();
    });

    $("#image_input").on("change", function() {
       $("#upload_btn").click();
    });

});

function update_profile(){

	var data = JSON.stringify($('#driver_form').serializeArray(this));

	$.ajax({
          type:'POST',
          url:base_url+'driver_profile/update_profile',
          data:data,
          dataType:'json',
         
    })
    .done(function( json ) {

      location.reload();

    })
    .fail(function( xhr, status, errorThrown ) {
      
      alert("Sorry, there was a problem!");
      console.log("Error: " + errorThrown);
      console.log("Status: " + status);
      console.dir(xhr);
    });
}

function upload_profile_image() {
	$("#profile_image_input").click();
}
