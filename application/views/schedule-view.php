<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>rp_assets/css/calendar.css?v=2.1">
<script src="<?php echo base_url(); ?>rp_assets/js/calendar.js?v=2.0"></script>
<style type="text/css">
    a {
        text-decoration: none;
    }
    ul, ol, li {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #demo {
        width: 300px;
        margin: 150px auto;
    }
    p {
        margin: 0;
    }
    #dt {
        margin: 30px auto;
        height: 28px;
        width: 200px;
        padding: 0 6px;
        border: 1px solid #ccc;
        outline: none;
    }
	#pleaseWaitDialog{
		z-index: 1051 !important;
	}
	.dt-buttons{
		display: inline !important;
	}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-xl-3 col-lg-4 col-md-6 pt-80 pb-20 bg-gray2">
	      <div class="pt-3">
	        <div class="pl-30 pr-30">
	        	<p class="f-18 text-bold">Calendar</p>
	        </div>
	        <div class="pl-30 pr-30">
	        	<div class="bg-light"><div id="ca" class="calendar calendar-d"></div></div>
	        </div>
	        <div class="pr-20 pl-20">
	        	<hr>
	        	<h2 class="f-20 text-bold"><span class="rounded-circle bg-primary clr-light p-10">04</span> Sunday</h2>
	        	<div class="table-box2 bg-light mt-20">
					<table class="table">
						<tbody>
							<tr class="bg-light2">
						      	<td width="25%">
						    		<img class="img-fluid border border-dark rounded-circle" src="rp_assets/img/user.jpeg">
						    		<p class="text-center clr-primary f-9 mb-0">1:30 PM</p>
						      	</td>
						      	<td width="">
						      		<p class="text-bold f-11">Fade with <span class="clr-primary">Sarah Thompson</span></p>
									<p class="clr-dark2 text-bold f-9 mb-0">1 Stewart Palace</p>
									<p class="clr-dark2 text-bold f-9">Valley Stream, NY 11581</p>
									<p class="clr-dark2 f-8 text-right">3.5 Miles</p>
						      	</td>
						    </tr>	
						    <tr>
						      	<td width="25%">
						    		<img class="img-fluid border border-dark rounded-circle" src="rp_assets/img/user.jpeg">
						    		<p class="text-center clr-primary f-9 mb-0">1:30 PM</p>
						      	</td>
						      	<td width="">
						      		<p class="text-bold f-11">Fade with <span class="clr-primary">Sarah Thompson</span></p>
									<p class="clr-dark2 text-bold f-9 mb-0">1 Stewart Palace</p>
									<p class="clr-dark2 text-bold f-9">Valley Stream, NY 11581</p>
									<p class="clr-dark2 f-8 text-right">3.5 Miles</p>
						      	</td>
						    </tr>	
						    <tr>
						      	<td width="25%">
						    		<img class="img-fluid border border-dark rounded-circle" src="rp_assets/img/user.jpeg">
						    		<p class="text-center clr-primary f-9 mb-0">1:30 PM</p>
						      	</td>
						      	<td width="">
						      		<p class="text-bold f-11">Fade with <span class="clr-primary">Sarah Thompson</span></p>
									<p class="clr-dark2 text-bold f-9 mb-0">1 Stewart Palace</p>
									<p class="clr-dark2 text-bold f-9">Valley Stream, NY 11581</p>
									<p class="clr-dark2 f-8 text-right">3.5 Miles</p>
						      	</td>
						    </tr>			    
						</tbody>
					</table>
				</div>
	        </div>
	        <div class=""></div>
	      </div>
	    </div>
		<div role="main" class="col-xl-9 col-lg-8 col-md-6 pb-20 schdl-cntnr bg-light">
			<div class="container-fluid ntfcn-cntnr">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<h1 class="text-bold clr-primary">Schedule</h1>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5 col-12">
						<img class="img-fluid" src="rp_assets/img/scdl_map.png">
					</div>
					<div class="col-lg-7 col-12">
						<p class="mb-0 f-18 text-bold clr-primary">Fade with Sarah Thompson</p>
						<h3 class="text-bold">Madame's Spicy Style</h3>
						<p class="clr-dark2 text-bold f-15 mb-0">1 Stewart Palace</p>
						<p class="clr-dark2 text-bold f-15">Valley Stream, NY 11581</p>
						<div class="container-fluid">
							<div class="row mt-20 scdl-srvc-img-sec">
								<div class="col-lg-3 col-md-5 text-center text-bold">
									<p class="mb-0 ">Service:</p>
									<p class="clr-primary f-12">Sarah Thompson</p>
									<img class="img-fluid border border-dark rounded-circle mt-10" src="rp_assets/img/user.jpeg">
								</div>
								<div class="col-lg-3 col-md-5 text-center text-bold">
									<p class="mb-0 ">Driver:</p>
									<p class="clr-primary f-12">Maxx K</p>
									<img class="img-fluid border border-dark rounded-circle mt-10" src="rp_assets/img/user.jpeg">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-20">
					<div class="col-lg-3 col-md-3 col-12">
						<p class="text-bold f-20 clr-primary mb-0">Notifications</p>
						<hr class="mt-0">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="table-box">
							<table class="table">
								<tbody>
									<tr>
								      <td width="50%">
								      	<p class="f-15 mb-0">Your Driver <span class="text-bold clr-primary">Maxx K</span> is route in Gray Nissan, License Plate #THEGAME</p>
								      </td>
								      <td width="40%"></td>
								      <td class="text-center">
								      	<p class="m-0 clr-primary text-bold">08:30 PM</p>
								      </td>
								    </tr>
								    <tr>
								      <td width="50%">
								      	<p class="f-15 mb-0">Your Driver <span class="text-bold clr-primary">Maxx K</span> is route in Gray Nissan, License Plate #THEGAME</p>
								      </td>
								      <td width="40%"></td>
								      <td class="text-center">
								      	<p class="m-0 clr-primary text-bold">08:30 PM</p>
								      </td>
								    </tr>
								    <tr>
								      <td width="50%">
								      	<p class="f-15 mb-0">Your Driver <span class="text-bold clr-primary">Maxx K</span> is route in Gray Nissan, License Plate #THEGAME</p>
								      </td>
								      <td width="40%"></td>
								      <td class="text-center">
								      	<p class="m-0 clr-primary text-bold">08:30 PM</p>
								      </td>
								    </tr>
								    
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
	
<script>
    $('#ca').calendar({
        // view: 'month',
     	width: 240,
        height: 240,
        // startWeek: 0,
        // selectedRang: [new Date(), null],
        data: [
    {
      date: '2020/10/30',
      value: 'Dushahra'
    },
    {
      date: '2020/12/25',
      value: 'Merry Christmas'
    },
    {
      date: '2020/01/01',
      value: 'Happy New Year'
    }
  ],
        onSelected: function (view, date, data) {
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });

    $('#dd').calendar({
        trigger: '#dt',
        // offset: [0, 1],
        zIndex: 999,
        onSelected: function (view, date, data) {
            console.log('event: onSelected')
        },
        onClose: function (view, date, data) {
            console.log('event: onClose')
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || 'None'));
        }
    });
</script>
