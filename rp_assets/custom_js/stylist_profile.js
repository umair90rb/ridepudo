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

function delete_image(id){
  $.ajax({
          type:'POST',
          url:base_url+'stylist_profile/delete_image',
          data:JSON.stringify(id),
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

function update_profile(){

	var data = JSON.stringify($('#shop_details_form').serializeArray(this));

	$.ajax({
          type:'POST',
          url:base_url+'stylist_profile/update_profile',
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

function upload_image(){
  $("#image_input").click();
}

function add_service_row(){
  var html = '<form id="service_form'+service_row_key+'">\
      <div class="row form-sections">\
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">\
          <div class="form-group">\
            <label>Service Name</label>\
            <input type="text" class="form-control" name="service_name" id="service_name'+service_row_key+'" placeholder="Service Name">\
          </div>\
        </div>\
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">\
          <div class="form-group">\
            <label>Price</label>\
            <input type="number" class="form-control" name="price" id="price'+service_row_key+'">\
          </div>\
        </div>\
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">\
          <div class="form-group">\
            <label>Time (in Min.)</label>\
            <input type="text" class="form-control" name="time" id="time'+service_row_key+'">\
          </div>\
        </div>\
        <div class="col-lg-9 col-md-9 col-sm-12 col-12">\
          <div class="form-group">\
            <label>Service Details</label>\
            <input type="text" class="form-control" name="details" id="details'+service_row_key+'">\
            <input type="hidden" class="form-control" name="shop_id" value="'+shop_id+'">\
          </div>\
        </div>\
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">\
          <div class="form-group">\
            <label>Action</label>\
            <button type="button" onclick="add_service(\'service_form'+service_row_key+'\')" class="btn bg-primary lh-1 clr-light">Add</button>\
          </div>\
        </div>\
      </div>\
    </form>';

  $('#services').append(html);

  service_row_key++;
}

function add_service(from_id){

  var data = $('#'+from_id).serializeArray(this);

    $.ajax({
        type:'POST',
        url:base_url+'stylist_profile/save_service_info',
        data:JSON.stringify({'action':'add_service', 'form_data':data}),
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

function update_service(id,from_id){
  console.log(from_id);

  var data = $('#'+from_id).serializeArray(this);
  console.log(data);
  
  data = Object.assign({ 4 : {'name': 'id', 'value' : id} }, data);

  console.log(data);

    $.ajax({
        type:'POST',
        url:base_url+'stylist_profile/save_service_info',
        data:JSON.stringify({'action':'update_service', 'form_data':data}),
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

function delete_service(id){

  data = { 0 : {'name': 'id', 'value' : id} };

    $.ajax({
        type:'POST',
        url:base_url+'stylist_profile/save_service_info',
        data:JSON.stringify({'action':'delete_service', 'form_data':data}),
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