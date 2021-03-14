<nav class="navbar navbar-expand-lg navbar-expand-sm navbar-dark bg-dark">
  	<a class="navbar-brand" href="<?php echo base_url(); ?>home"><img class="img-fluid" src="<?php echo base_url(); ?>rp_assets/img/logo.png"></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarsExample05">
	    <ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link brdr-r" type="button" data-toggle="modal" data-target="#HowItWorksModal">How It Works</a>
	      	</li>
	      	<li class="nav-item <?php if ($module == "stylist-signup-view") { echo "active";} ?> ">
	        	<a class="nav-link brdr-r" href="<?php echo base_url(); ?>stylist_signup">Set Up Business</a>
	      	</li>
		    <li class="nav-item brdr-r <?php if ($module == "signup-view") { echo "active";} ?>">
		        <a class="nav-link" href="<?php echo base_url(); ?>signup">Sign Up</a>
		    </li>
	      	<li class="nav-item mr-50">
	      		<a type="button" class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
	      	</li>
	      	
	      	<!-- <li class="nav-item">
	      		<button data-toggle="dropdown"  class="srch-btn"><i class="fas fa-search"></i></button>
	      		<div class="dropdown-menu animate slideIn search-strip">					
                    <form class="form-inline login-form">
                    	<div class="container-fluid">
		                    <div class="col-lg-8 col-sm-7 col-12 pl-0">
		                    	<input id="business_name" type="text" class="form-control store-input" placeholder="Store, Style, Service">
		                    </div>
		                    <div class="col-lg-3 col-sm-4 col-10">
		                    	<div class="input-group">
			                        <input type="text" class="form-control" placeholder="Location">
			                        <div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fa fa-crosshairs"></i>
										</span>                    
									</div>
			                    </div>
			                </div>
			                <div class="col-lg-1 col-sm-1 col-2"><a href="#"><i class="fas fa-times fa-2x"></i></a></div>

			                <div class="col-12">
			                	<div id="business" class="results" style="display: none;"></div>
			                </div>
		                </div>
                        
                    </form>
                </div>
	      	</li> -->
	    </ul>
  	</div>
</nav>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
	        	<div class="login-box">
				  	<form class="px-4 py-3" id="LoginForm">
				  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	<span aria-hidden="true">&times;</span>
				        </button>
				  		<h3>User <span class="clr-primary">Login</span></h3>
					    <div class="form-group mt-20">
					      	<label for="exampleDropdownFormEmail1">Email address</label>
					      	<input type="email" name="email" class="form-control" placeholder="email@example.com">
					    </div>
					    <div class="form-group">
					      	<label for="exampleDropdownFormPassword1">Password</label>
					      	<input type="password" name="password" class="form-control" placeholder="Password">
					    </div>
					    <label id="login_error_text" class="clr-red f-10" style="display: none;"></label>
				    	<div>
				    		<button type="button" id="login_btn" class="btn btn-dark mt-20">LOG IN</button>
				    	</div>
				    	<div class="mt-20 text-center">
				    		<a type="button" onclick="show_forget_modal();" class="clr-dark f-12">Forget Password?</a>
				    	</div>
				  	</form>
				</div>
	     	</div>
	    </div>
  	</div>
</div>

<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
	        	<div class="loader-body">
			        <div id="ajax_loader">
			            <div class='body'>
						    <img src="<?php echo base_url(); ?>rp_assets/img/ride-pudo-animation-car.png">
						</div>
						<div class='longfazers'>
						    <span></span>
						    <span></span>
						    <span></span>
						    <span></span>
						</div>
			        </div>
			    </div>
	     	</div>
	    </div>
  	</div>
</div>

<div class="modal fade" id="ForgetModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
	        	<div class="login-box">
				  	<form class="px-4 py-3">
				  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	<span aria-hidden="true">&times;</span>
				        </button>
				  		<h3>Forget <span class="clr-primary">Password</span></h3>
				  		<div id="forget_email_div">
				  			<div class="form-group mt-20">
						      	<label for="exampleDropdownFormEmail1">Enter your Email address</label>
						      	<input id="forget_email" type="email" name="email" class="form-control" placeholder="email@example.com">
						    </div>
						    <label id="forget_error_text" class="clr-red f-10" style="display: none;">This email is not linked to any Account.</label>
					    	<div>
					    		<button type="button" id="sendlink_btn" class="btn btn-dark mt-20">Send Link</button>
					    	</div>
				  		</div>
				  	</form>
				</div>
	     	</div>
	    </div>
  	</div>
</div>

<div class="modal fade" id="HowItWorksModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
	        	<div class="login-box">
			  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        	<span aria-hidden="true">&times;</span>
			        </button>
					<h3 class="mb-30">How it <span class="clr-primary">Works</span></h3>
					<p><b>Step 1.</b> By putting in the zip code, location or service you choose, cosmetology services that are subscribed to PUDO in that area e.g: <i>Hairstylist, Barbershop, Masseuse, Tattoo Artist, Nail Salon etc. will show.</i></p>

					<p><b>Step 2.</b> After reviewing whos in the area, you can click a profile to view that service or artist page to see photos, comments, ratings and appointment times.<p>

					<p><b>Step 3:</b> To make an appointment click an appointment open time slot and book.(All bookings must be 2 hours in advance)<p>

					<p><b>Step 4:</b> After booking wait for an confirmation.</p>

					<p><b>Step 5:</b> Once the booking is confirmed you will receive a email, and on the day of your booking you will receive a notification and a update on your driver.</p>

					<p>Please Note <i>**** Your driver will be there earlier then your appointment time to get you there on TIME, so be timely! You will receive a notification of the time the driver will be to you and also receive an update when the driver is on the way !</i></p>

					<p><b>Step 6:</b> When you want to complete your appointment with your rideback option you will have an option to request a pick up when ready.</p>

					<p>(Choose this option when you want your driver to return for your pick up)</p>

					<p><i>*** One way trips are Ok but ROUNDTRIP Rides are our specialty, be sure to choose this option upon checkout</i></p>

					<p><b>Step 7:</b> Enjoy your Ride and tag us in your Pudo to your appointment on instagram @ridepudo<p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="PolicyModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
	        	<div class="login-box">
			  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        	<span aria-hidden="true">&times;</span>
			        </button>
			  		<h3 class="mb-30">RidePudo <span class="clr-primary">Policy</span></h3>
				    <p>
						This Privacy Policy is incorporated by reference into the PUDO Terms of Use. The term “PUDO,” “Company,” “we,” and “us” includes Ride PUDO LLC and our affiliates and subsidiaries.
						Ride PUDO LLC and its domestic subsidiaries, including Newbell Car Service U.S. Department of Commerce regarding the collection, use, and retention of personal information. Ride PUDO has certified that it adheres to the Privacy Shield Principles of Notice, Choice, Accountability for Onward Transfer, Security, Data Integrity and Purpose Limitation, Access, and Recourse, Enforcement and Liability. If there is any conflict between the policies in this privacy policy and the Privacy Shield Principles, the Privacy Shield Principles shall govern.
					</p>

					<hr></hr>

					<h6>
						<b class="clr-primary">This Privacy Policy explains how PUDO may:</b><br/>
						collect, use, and disclose information we obtain through the “Service.”
					</h6>	

					<ul>
						<li>The “Service” means any website, mobile application, or Internet service under Ride PUDO LLC control, whether partial or otherwise, in connection with providing PUDOs online platform that connects users with vehicle-sharing transportation providers in major cities. Each reservation a user makes with such vehicle-sharing transportation providers on the Service is a “Reservation,” and each ride taken through a Reservation is a “Ride.” “Member” means any such individual who uses the Service to make Reservations and take Rides. “Driver Partner” means any such independent contractor partner who registers with the Service as a third-party transportation provider to provide Rides to Members.</li>
						<li>“Personal Information” means information that alone or when in combination with other information may be used to readily identify, contact, or locate you, such as: name, address, email address, or phone number. We do not consider Personal Information to include information that has been anonymized so that it does not allow a third party to easily identify a specific individual.</li>
					</ul>

					<hr></hr>
						
					<h6>
						<b class="clr-primary">THE SERVICE COLLECTS YOUR INFORMATION</b><br/>
						We collect Personal Information when you:
					</h6>
							
					<ul>
						<li>register to use the Service; use the Service; and communicate with us.</li>
						<li>We also collect information, such as anonymous usage statistics, by using cookies, server logs, and other similar technology as you use the Service.</li>
						<li>Two kinds of users may use the Service, Members and Driver Partners. We collect different types of information from these two types of users.</li>
						<li>Personal Information Collection – Members. You must register to make a Reservation through the Service. To register, you may need to provide Personal Information, such as your name, phone number, email address, billing address, and credit card information. You may also provide other optional information.</li>
						<li>Personal Information Collection – Driver Partners. To register as a Driver Partner, you may need to provide Personal Information such as your name, email address, phone number, date of birth, vehicle information, driver’s license information, insurance information, banking information and social security number (SSN) in the United States or National ID Number in the European Union.  This type information is collected from Driver Partners to enable our compliance with local and state laws and regulatory requirements applicable to the Service, compliance with tax laws, and to process payments to Driver Partners. Information collected from Driver Partners may be shared with federal and state tax agencies or local regulators as required by law.</li>
						<li>Using the Service. We collect information you post through the Service. For example, when you make a Reservation, the Service will collect the information you provide in such submissions, including any Personal Information. We will also store your transaction history.</li>
						<li>Making Payments. When you make payments through the Service, you may need to provide Personal Information to our third-party service providers, such as your credit card number. We (or our service providers on our behalf) may store this information for your convenience.</li>
						<li>Customer Support. We may collect Personal Information through your communications with our customer-support team.</li>
						<li>Location and Other Information from Your Mobile Device. We collect and store your location information if you enable your mobile device to send it to us. We may also collect information that identifies the mobile device you are using. Collection of this information improves the provision of the Service.  You may opt-out of location-based services at any time by editing the setting at the device level.</li>
						<li>Promotions and Co-Branded Services. We or our advertisers and other business partners may conduct or sponsor special contests, sweepstakes, and other promotions (“Promotions”) that users may enter, register for or otherwise participate in through the Service. Certain of these Promotions may be co-branded with one of our advertisers, business partners, charities, sponsors or other third parties (“Third-Party Partners”). Such co-branded services will identify the Third-Party Partner. In these instances, the Third-Party Partner may collect your Personal Information directly on its website or another online service may collect your Personal Information and share it with us and/or the Third-Party Partner. If you enter a Promotion, your Personal Information may be disclosed to Third-Party Partners or the public in connection with the administration of such Promotion, including, in connection with winner selection, prize fulfillment, and publication of a list of winners, as required by law or permitted by the Promotion’s rules.</li>
						<li>Promotions and Co-Branded Services. We or our advertisers and other business partners may conduct or sponsor special contests, sweepstakes, and other promotions (“Promotions”) that users may enter, register for or otherwise participate in through the Service. Certain of these Promotions may be co-branded with one of our advertisers, business partners, charities, sponsors or other third parties (“Third-Party Partners”). Such co-branded services will identify the Third-Party Partner. In these instances, the Third-Party Partner may collect your Personal Information directly on its website or another online service may collect your Personal Information and share it with us and/or the Third-Party Partner. If you enter a Promotion, your Personal Information may be disclosed to Third-Party Partners or the public in connection with the administration of such Promotion, including, in connection with winner selection, prize fulfillment, and publication of a list of winners, as required by law or permitted by the Promotion’s rules.</li>
						<li>Information You Provide About a Third Party. If you use our referral program to tell a friend, relative or someone you know about our Service (a “Referred Person”), we will ask you to provide the Referred Person’s name and e-mail address. We will automatically send the Referred Person an e-mail inviting them to try our Service. We may also send a follow-up e-mail or e-mails, at our discretion. If a Referred Person no longer wants to receive communications from us, they csn email us at ridepudo@gmail.com with their request and we will discontinue further communications.</li>
						<li>Cookies, Automatic Data Collection, and Related Technologies. The Service and our third party partners collect and store information that is generated automatically as you use it, including your preferences and anonymous usage statistics. When you visit the Service, we and our third-party service providers receive and record information on our server logs from your browser, including your unique device ID, IP address, and from cookies and similar technology. Cookies are small text files placed in visitors’ computer browsers to store their preferences. We may use information collected through these tracking technologies to remember information so that you won’t have to re-enter it on subsequent visits, to provide and monitor the effectiveness of the Service, to provide custom, personalized content including targeted advertising, to automatically update the Service on your mobile devices and for other purposes. Most browsers allow you to block and delete cookies, though depending on your mobile device you may not be able to delete tracking technologies from your device. Deleting or blocking cookies and other tracking technology may cause the Service to not work properly. Although we do our best to honor the privacy preferences of our members, we are not able to respond to Do Not Track signals from your browser at this time. Please see the Online Advertising section below to learn more about how tracking technologies may be used to serve advertising that is relevant to your interests.</li>
						<li>By using the Service, you are authorizing us to gather, parse, and retain data related to the provision of the Service.</li>
					</ul>

					<hr></hr>
						
					<h6>
						<b class="clr-primary">HOW PUDO USES YOUR INFORMATION</b><br/>
					</h6>

					<ul>
						<li>We use Personal Information to facilitate and improve our services; and communicate with you.</li>
						<li>We may use aggregate information for any purpose, including for marketing purposes.</li>
						<li>Internal and Service-Related Usage. We use information, including Personal Information, for internal and service-related purposes and may provide it to third parties to allow us to facilitate the Service. We may use and retain any data we collect to provide and improve our services.</li>
						<li>Communications. We may send email or text messages to the email address or phone number you provide to us to verify your account and for informational and operational purposes, such as account management, customer service, or system maintenance.</li>
						<li>Marketing. We may use information, including Personal Information, to facilitate transmittal of information that may be useful, relevant, valuable, or otherwise of interest to you, and to serve you personalized advertising content that may be relevant to your interests.</li>
						<li>Aggregate Data. We may anonymize and aggregate data collected through the Service and use it for any purpose.</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">PUDO MAY DISCLOSE YOUR INFORMATION</b><br/>
						We may share your information:
					</h6>

					<ul>
						<li>with our Driver Partners or Members only to facilitate your Rides;</li>
						<li>with our third-party service providers;</li>
						<li>in the context of a Driver Partner referral;</li>
						<li>with insurance companies, government agencies or law enforcement;</li>
						<li>to comply with legal obligations;</li>
						<li>to protect and defend our rights and property; and with your permission.</li>
						<li>We do not rent, sell, or share Personal Information about you with other people or nonaffiliated companies for their direct marketing purposes, unless we have your permission.</li>
						<li>Driver Partners and Members.  When a Member requests a Ride, we may share your first name and last initial and location with a Driver Partner in order to provide the Service. We will not share your e-mail address, phone number or other information with Driver Partners without your permission. With respect to Driver Partners, we may share your name, location and a masked phone number with a Member in order to provide the Service. In connection with a Member’s request to retrieve a lost and found item from a vehicle, we may share your phone number with a Member. Otherwise, we will not share your e-mail address, phone number or other information with Members without your permission.</li>
						<li>We Use Vendors and Service Providers. We may share any information we receive with vendors and service providers retained in connection with the provision of the Service. We will share information, including Personal Information, with our third-party transportation providers as necessary to provide the Service. If we transfer personal information to a third party, we will take reasonable and appropriate steps to ensure that the third party collects, processes and discloses personal information only for limited and specified purposes. Under Ride PUDO LLC Privacy Shield obligations, we may be liable if such third parties fail to meet those obligations.</li>
						<li>Driver Partner Referrals.  If you are a Driver Partner who has been referred to ride PUDO LLC by another Driver Partner, we may share with your referrer certain information relating to your activity during the applicable referral promotion period, if any (such as your status in the Ride PUDO system and the number of rides you completed during the promotion period).
						</li>
						<li>Marketing. We do not rent, sell, or share Personal Information about you with other people or nonaffiliated companies for their direct marketing purposes, unless we have your permission. We may share or allow access to data collected through tracking technologies to serve you personalized advertising content that may be relevant to your interests. Please see the Online Advertising section below to learn more.</li>
						<li>As Required by Law and Similar Disclosures. We may access, preserve, and disclose your Personal Information, other account information, and content if we believe doing so is required or appropriate to: comply with law enforcement requests and legal process, such as a court order or subpoena or to meet national security requirements; respond to your requests; or protect yours’, ours’ or others’ rights, property, or safety.</li>
						<li>Merger, Sale, or Other Asset Transfers. If we are involved in a merger, acquisition, financing due diligence, reorganization, bankruptcy, receivership, sale of company assets, or transition of service to another provider, your information may be sold or transferred as part of such a transaction as permitted by law and/or contract. We cannot control how such entities may use or disclose such information.</li>
						<li>We may also disclose your Personal Information with your permission.</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">SECURITY OF YOUR INFORMATION</b>
					</h6>
					
					<ul>
						<li>We take steps to ensure that your information is treated securely and in accordance with this Privacy Policy. Unfortunately, the Internet cannot be guaranteed to be 100% secure, and we cannot ensure or warrant the security of any information you provide to us. We do not accept liability for unintentional disclosure.</li>
						<li>By using the Service or providing Personal Information to us, you agree that we may communicate with you electronically regarding security, privacy, and administrative issues relating to your use of the Service. If we learn of a security system’s breach, we may attempt to notify you electronically by posting a notice on the Service or sending an email to you. You may have a legal right to receive this notice in writing. To receive free written notice of a security breach (or to withdraw your consent from receiving electronic notice), please notify us ridepudo@gmail.com</li>
						<li>We may retain your information for as long as your account is active and for up to six years after you close your account or it becomes inactive, in accordance with our data retention policy. In certain circumstances, we may retain your information for longer periods of time in order to provide you with services, comply with our legal obligations, resolve disputes and enforce our agreements, in accordance with our data retention policy.</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">CHILDREN’S PRIVACY</b>
					</h6>

					<ul>
						<li>We do not knowingly collect information from children under 13 and we do not want it. We will take steps to delete it if we learn we have collected it.</li>
						<li>No part of our Service is directed towards children under the age of 13 and we do not knowingly collect, maintain, or use Personal Information from children under the age of 13. If you learn that your child has provided us with Personal Information without your consent, you may alert us at ridepudo@gmail.com. If we learn that we have collected any Personal Information from children under 13, we will promptly take steps to delete such information and terminate the child’s account, in compliance with the Children’s Online Privacy Protection Act (COPPA).</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">INTERNATIONAL USERS</b>
					</h6>

					<ul>
						<li>By using the Service, you will transfer data to the United States.</li>
						<li>By choosing to visit the Service or otherwise provide information to us, you agree that any dispute over privacy or the terms contained in this Privacy Policy will be governed by the law of the state of New York and the adjudication of any disputes arising in connection with PUDO or the Service will be in accordance with the Terms of Use.</li>
						<li>If you are visiting from the European Union or other regions with laws governing data collection and use, please note that you are agreeing to the transfer of your information to the United States and processing globally. By providing your information, you consent to any transfer and processing in accordance with this Policy.</li>
					</ul>
		
					<hr></hr>

					<h6>
						<b class="clr-primary">YOUR CHOICES FOR LIMITED USE AND DISCLOSURE OF YOUR DATA</b>
					</h6>

					<ul>
						<li>You control your account information and settings. You may update your account information and email-communication preferences at any time by logging into the app and changing your settings under Edit Profile.</li>
						<li>Communications. You can stop receiving promotional e-mail communications from us by clicking on the “unsubscribe link” provided in such communications. We make every effort to promptly process all unsubscribe requests. You may not opt-out of Service-related communications (e.g., account verification, texts informing you of where your vehicle is located and the status of your live rides, receipts, reminders, changes/updates to features of the Service, technical and security notices).</li>
						<li>Online Advertising. We may permit third party online advertising networks to collect information about your use of our website over time so that they may play or display ads that may be relevant to your interests on our Service as well as on other websites or apps. Typically, the information we share is provided through cookies or similar tracking technologies, which recognize the device you are using and collect information, including click stream information, browser type, time and date you visited the site, and other information. Please refer to your browser’s or mobile device’s technical information for instructions on how to delete and disable cookies, and other tracking/recording tools. Note that disabling cookies may disable many features available through the Service. (To learn more about cookies, clear gifs/web beacons and related technologies, and to learn how you may be able to opt-out of interest-based advertising from many online advertising networks, you may wish to visit http://www.allaboutcookies.org and/or the Network Advertising Initiative’s online resources, at http://www.networkadvertising.org). You may also manage certain advertising cookies by visiting the EU-based Your Online Choices www.youronlinechoices.eu.  If you access our service on your mobile device, you may not be able to control tracking technologies through changing your settings in your profile.</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">ACCESSING, UPDATING, OR DELETING YOUR INFORMATION.</b>
					</h6>

					<ul>
						<li>If you would like to access, update or correct any information that you have provided to us through your use of the Service or otherwise, or if you would like to delete your personal information maintained by PUDO, or if you have suggestions for improving this Privacy Policy, please send an email to ridepudo@gmail.com. Upon request, we will take reasonable steps to correct, update, amend or delete your personal information, though we may not be able to permanently delete your personal information in all instances, such as when the information has been shared with third parties.</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">HOW TO RESOLVE COMPLAINTS</b>
					</h6>

					<p>In compliance with the EU-US Privacy Shield Principles, PUDO commits to resolve complaints about your privacy and our collection or use of your personal information. If you have any questions about this privacy policy, the information that we collect from you, or the Services, please contact us at:</p>

					<ul>
						<li>Ride Pudo LLC, www.ridepudo.com - ridepudo@gmail.com</li>
						<li>European Union individuals with inquiries or complaints regarding this Privacy Policy should address your inquiry or complaint first to us at the address listed above. PUDO takes all concerns about privacy and use of data very seriously, and shall endeavor to reply to you within 45 days of receiving a complaint.</li>
						<li>If you have an unresolved privacy or data use concern that we have not addressed satisfactorily, please contact US @ ridepudo@gmail.com</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">CHANGES TO OUR PRIVACY POLICY AND PRACTICES</b>
					</h6>

					<ul>
						<li>We may revise this Privacy Policy, so please review it periodically.</li>
						<li>Posting of Revised Privacy Policy. We will post any adjustments to the Privacy Policy on the Service, and the revised version will be effective when it is posted. If you are concerned about how your information is used, you should read this Privacy Policy periodically.</li>
						<li>New Uses of Personal Information. From time to time, we may desire to use Personal Information for uses not previously disclosed in our Privacy Policy. If our practices change regarding previously collected Personal Information in a way that would be materially less restrictive than stated in the version of this Privacy Policy in effect at the time we collected the information, we will make reasonable efforts to provide notice and obtain consent to any such uses as may be required by law.</li>
					</ul>
				</div>
	     	</div>
	    </div>
  	</div>
</div>

<div class="modal fade" id="TCModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-md" role="document">
	    <div class="modal-content">
	      	<div class="modal-body">
	        	<div class="login-box">
			  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			        	<span aria-hidden="true">&times;</span>
			        </button>
			  		<h3>RidePudo <span class="clr-primary">Terms of Use</span></h3>
				    <p>
						Please read these Terms of Use (“Terms“) carefully before using the Service.
					</p>
					<p>
						These Terms include Ride PUDO LLC Privacy Policy, which is incorporated by reference into these Terms. We have included several annotations in boxes to help explain or emphasize key sections. These annotations are for convenience only and have no legal or contractual effect.
					</p>
					<p>
						This agreement is a legally binding contract. It may change as our business changes, and you agree you will review it and any updates regularly. Your continued use of the Service means you accept any changes.
					</p>
					<p>
						Binding Agreement. These Terms constitute a binding agreement between you and Ride PUDO and its affiliates and subsidiaries (“PUDO,” “Company,” “we,” “us”). “You” and “users” shall mean all users of the Service. You accept these Terms each time you access the Service. If you do not accept these Terms, you must not use the Service. If you are under 18 years of age, you represent and agree that you possess the legal consent of your parent or guardian to access and use the Service.
					</p>
					<p>
						Revisions to Terms. We may revise these Terms at any time by posting an updated version. You should visit this page periodically to review the most current Terms because you are bound by them. Your continued use of the Service after a change to these Terms constitutes your binding acceptance of these Terms.
					</p>
					<p>	
						The terms “post” and “posting” as used in these Terms shall mean the act of submitting, transmitting, sharing, uploading, publishing, displaying, or similar action on the Service.
					</p>

					<hr></hr>

					<h6>
						<b class="clr-primary">II. </b>The Service
					</h6>

					<ul>
						<li>The “Service” means any website, mobile application, or Internet service under PUDOs control, whether partial or otherwise, in connection with providing PUDOs online platform that connects users with vehicle-sharing transportation providers in major cities. Each reservation a user makes with such vehicle-sharing transportation providers on the Service is a “Reservation,” and each ride taken through a Reservation is a “Ride.”</li>
						<li>By using the Service to make a Reservation for a Ride, you are electing to use a ridesharing transportation service.</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">III. </b>Eligibility to Use the Service
					</h6>

					<ul>
						<li>Children. No part of the Service is directed to persons under the age of 13. <b>IF YOU ARE UNDER 13 YEARS OF AGE, PLEASE DO NOT USE OR ACCESS THE SERVICE AT ANY TIME OR IN ANY MANNER.</b></li>
						<li>No one under the age of 18 is allowed to register with or use the Service without the consent of a parent or guardian. If you are under the age of 18, by registering for and using the Service, you warrant and represent that you have consent to do so from a parent or guardian. If you are a parent or guardian of a minor who has registered for or used the Service without your consent, please contact us at ridepudo@gmail.com.</li>
						<li>Agent of a Company, Entity, or Organization. If you are using the Service on behalf of a company, entity, or organization (collectively “Organization“), then you represent and warrant that you:
							<ol>
								<li>are an authorized representative of that Organization;</li>
								<li>have the authority to bind that Organization to these Terms; and</li>
								<li>agree to be bound by these Terms on behalf of that Organization.</li>
							</ol>
						</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">IV. </b>Your Account
					</h6>

					<ul>
						<li>You are responsible for your log-in credentials and for keeping your information accurate.</li>
						<li>You are responsible for any activity resulting from the use of your log-in credentials on the Service.</li>
						<li>You represent and warrant that the information you provide to the Company upon use of the Service and at all other times will be true, accurate, current, and complete.</li>
						<li>Your Log-In Credentials. To use the Service, you may need to log-in by providing a username, password, and cellular phone number. Your account is personal to you, and you may not share your account information with, or allow access to your account by, any third party. As you will be responsible for all activity that occurs under your access credentials (including, without limitation, the behavior of any other people that travel in your party), you agree to use reasonable efforts to prevent unauthorized access to or use of the Service and to preserve the confidentiality of your username and password, and any device that you use to access the Service.</li>
						<li>You agree to notify us immediately of any breach in secrecy of your log-in information. If you have any reason to believe that your account information has been compromised or that your account has been accessed by a third party, you agree to immediately notify the Company by e-mail to ridepudo@gmai.com. You will be solely responsible for the losses incurred by the Company and others due to any unauthorized use of your account.</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">V. </b>Payments and Billing
					</h6>
						
					<ul>
						<li>PUDO charges a fee (the “Fee“) for use of the Service. You will be charged when your Ride is complete, provided that we may pre-authorize and hold an estimated amount of the Fee on your card before the Ride begins. All Fees are non-refundable. Fees are exclusive of taxes and other government surcharges.</li>
						<li>Cancellation Policy. If you cancel a Reservation, we may charge you a Fee. Repeated cancellations may result in the suspension of your account, in PUDOs sole discretion.</li>
						<li>No-Show Policy. If you are not present at the time and place designated in your Reservation, we may charge you a Fee. Repeated “no-show” instances may result in the suspension of your account, in PUDOs sole discretion.</li>
						<li>Cleaning/Damage Fees. If the interior or exterior of your driver’s vehicle is damaged or dirtied as a result of intentional or negligent acts such as aggressive slamming of doors, vomiting, or pet accidents, an additional cleaning or damage Fee may be assessed and charged.</li>
						<li>PUDOs Credits and Promotional Codes. You may purchase credit (“PUDO Credit”) towards future Rides. Purchases of PUDOs Credit are non-refundable and may only be used with the Service. PUDO may offer promotional codes with varying features and rates that are redeemable for PUDO Credit. Any such promotional code is valid until its stated expiration date.</li>
					</ul>
						

					<hr></hr>

					<h6>
						<b class="clr-primary">VI. </b>Additional Guests
					</h6>
						
					<ul>
						<li>If you make a Reservation and multiple people are traveling in your party, you, as the account associated with the Reservation, are responsible for the conduct of everybody traveling in your party.</li>
						<li>When you make a Reservation, you must indicate how many people are travelling in your party. If you do not, we reserve the right to refuse service to additional guests or charge an additional Fee.</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">VII. </b>Communications
					</h6>
						
					<ul>
						<li>PUDO may communicate with you by email, text message or posting notice on the Service. You may request that we provide notice of security breaches in writing.</li>
						<li>You agree to receive email from us at the email address you provided to us for customer service-related purposes.</li>
						<li>Electronic Notices. By using the Service or providing Personal Information to us, you agree that we may communicate with you electronically regarding security, privacy, and administrative issues relating to your use of the Service. If we learn of a security system’s breach, we may attempt to notify you electronically by posting a notice on the Service or sending an email to you. You may have a legal right to receive this notice in writing. To receive free written notice of a security breach (or to withdraw your consent from receiving electronic notice), please write to us at ridepudo@gmail.com.</li>
						<li>SMS Text Messages. We may send you an SMS text message to the phone number you provide upon registering with the Service (i) when you register with the Service, (ii) when you make a Reservation, (iii) when your vehicle is approaching the designated pick-up location, (iv) when your vehicle is at the designated pick-up location, and (v) when you reset your password with the Service. Text message and data rates, as determined by your wireless carrier, may apply. By registering with the Service, you consent to receive these SMS text messages.</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">VIII. </b>PUDO’s Content Ownership and Use
					</h6>
						
					<ul>
						<li>PUDO owns or has rights to all of the content we make available through the Service, but you may use it as you use the Service. You cannot use our logo without our written permission.</li>
						<li>The term “content” or “contents” as used generally in these Terms shall mean any text, graphics, images, music, software (excluding the Service), audio, video, information or other materials.</li>
						<li>The contents of the Service include: designs, text, graphics, images, video, information, logos, button icons, software, audio files, computer code, and other PUDO content (collectively, “PUDO Content“). All PUDO Content and the compilation (meaning the collection, arrangement, and assembly) of all PUDO Content are the property of  PUDO or its licensors and are protected under copyright, trademark, and other laws.</li>
						<li>License to You. We authorize you, subject to these Terms, to access and use the Service and the PUDO Content solely to make Reservations. Any other use is expressly prohibited. This license is revocable at any time without notice and with or without cause. Unauthorized use of the PUDO Content may violate copyright, trademark, and applicable communications regulations and statutes and is strictly prohibited. You must preserve all copyright, trademarks, service marks, and other proprietary notices contained in the original PUDO Content on any copy you make of the PUDO Content.</li>
						<li>PUDO Marks. PUDO, the PUDO logo, and other PUDO logos and product and service names are or may be trademarks of PUDO (the “PUDO Marks“). Without our prior written permission, and except as solely enabled by any link as provided by us, you agree not to display or use in any manner the PUDO Marks.</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">IX. </b>Intellectual Property Rights and Your License to Use
					</h6>
						
					<ul>
						<li>You (or the people who allow you to use their content), own all of the content you post using the Service. However, we may use it for any purpose, including in our marketing materials. We may also modify your content to make it work better.</li>
						<li>It is very important that you have permission to use other people’s content, or they (or their parent or guardian) may be able to sue you for violating their legal rights.
							<ol class="list-style-lower-alpha">
								<li>PUDO Claims No Ownership. The Service may provide Users with the ability to post content (“User Content“). PUDO claims no ownership or control over User Content. You or a third-party licensor, as appropriate, retain all copyright, patent, and trademark rights to any of the content you post on or through the Service. You are responsible for protecting those rights.</li>
								<li>PUDOs Use of Posted Content on the Service. By posting User Content on or through the Service, and subject to PUDOs Privacy Policy, you grant PUDO a worldwide, non-exclusive, irrevocable, perpetual, royalty-free, transferable right to license, sublicense, use, view, copy, adapt, sell, transfer, modify, remove, publish, transmit, distribute, broadcast, stream, perform or publicly display your User Content for any purpose without compensation to you, including for the purpose of promoting PUDO and its services. While we will try our best to not use your User Content in a way that may be objectionable to you, you waive any rights you may have regarding your User Content being altered or manipulated in any way that may be objectionable to you. Please e-mail us at ridepudo@gmail.com if you believe your User Content is being used in an objectionable manner and we will do what we reasonably can to remedy such use of your User Content. The license granted in this paragraph will continue even after you stop using the Service. PUDO reserves the right to refuse to accept, post, display, or transmit any User Content at its sole discretion.</li>
								<li>You Acquire No Ownership in the Content of PUDO or Others. You understand and agree that you will not obtain as a result of your use of the Service, any right, title or interest in or to such content delivered, the Service or in any intellectual property rights (including, without limitation, any copyrights, patents, trademarks, trade secrets or other rights) in the content. PUDO alone (and its licensors, where applicable) owns all right, title and interest, including all related intellectual property rights, in and to the Service. The Company name, the Company logo, and the product names associated with the Service are trademarks of PUDO or third parties, and no right or license is granted to use them.</li>
								<li>You Must Have Rights to the Content You Post. You represent and warrant that: (i) you own the content posted by you on or through the Service or otherwise have the right to grant the license set forth in these Terms, (ii) the posting and use of your User Content on or through the Service does not violate the privacy rights, publicity rights, copyrights, contract rights, intellectual property rights, or any other rights of any person or entity, and (iii) the posting of User Content on the Service does not result in a breach of contract between you and a third party. You agree to pay for all royalties, fees, and any other monies owing to any person by reason of content you post on or through the Service. You also acknowledge and agree that your User Content is non-confidential and non-proprietary.</li>
								<li>Additional Licenses. Certain materials made available for download from or through the Service may be subject to additional or different license terms and conditions. The Service contains content from Users and other PUDO licensors. Except as provided within these Terms, you may not copy, modify, translate, publish, broadcast, transmit, distribute, perform, display, or sell any content appearing on or through the Service.</li>
							</ol>
						</li>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">X. </b>Copyright Policy
					</h6>

					<p>PUDO respects the intellectual property rights of others and expects its users to do the same. Tell us if you think a user has violated your copyright using the Service, or if you think someone incorrectly reported that you violated his or her copyright.</p>
						
					<ol>
						<li>The Digital Millennium Copyright Act of 1998 (the “DMCA“) provides recourse for copyright owners who believe that material appearing on the Internet infringes their rights under U.S. copyright law. If you believe in good faith that materials posted on the Service infringe your copyright, you (or your agent) may send PUDO a “Notification of Claimed Infringement” requesting that the material be removed, or access to it blocked. The notice must include the following information:
							<ul>
								<li>A physical or electronic signature of a person authorized to act on behalf of the owner of the works that have been allegedly infringed;</li>
								<li>Identification of the copyrighted work alleged to have been infringed (or if multiple copyrighted works located on the Service are covered by a single notification, a representative list of such works);</li>
								<li>Identification of the specific material alleged to be infringing or the subject of infringing activity, and information reasonably sufficient to allow PUDO to locate the material on the Service;</li>
								<li>Your full legal name, address, telephone number, and e-mail address (if available);</li>
								<li>A statement that you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law; and</li>
								<li>A statement that the information in the notification is accurate, and under penalty of perjury, that the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.</li>
							</ul>
						</li>
						<li>If you believe in good faith that a notice of copyright infringement has been wrongly filed against you, the DMCA permits you to send PUDO a counter-notice.</li>
						<li>Notices and counter-notices must meet the current statutory requirements imposed by the DMCA; see http://www.loc.gov/copyright/ for details. Notices and counter-notices with respect to the Service should be sent to PUDOs Designated Copyright agent Natalie Ngoc Nguyen 9900 Spectrum Drive Austin Texas 78717 or by phone 747-286-1830. Consult your legal advisor and see 17 U.S.C. § 512 before filing a notice or counter-notice as there are penalties for false claims under the DMCA.</li>
						<li>Upon receipt of such notice as described above, PUDO will take whatever action, in its sole discretion, it deems to be appropriate, including removal of the challenged material from the Service.</li>
					</ol>

					<hr></hr>

					<h6>
						<b class="clr-primary">XI. </b>Suggestions and Submissions
					</h6>

					<p>We appreciate your comments, but if you send us creative ideas, we can use them without compensating you.</p>

					<p>We appreciate hearing from our users and welcome your comments regarding the Service. Please be advised, however, that if you send us creative ideas, suggestions, inventions, enhancement requests, feedback, recommendations or materials (“Creative Ideas“), we shall:</p>

					<ol>
						<li>own, exclusively, all now known or later discovered rights to the Creative Ideas;</li>
						<li>not be subject to any obligation of confidentiality and shall not be liable for any use or disclosure of any Creative Ideas; and</li>
						<li>be entitled to unrestricted use of the Creative Ideas for any purpose whatsoever, commercial or otherwise, without compensation to you or any other person.</li>
					</ol>

					<hr></hr>

					<h6>
						<b class="clr-primary">XII. </b>Third-Party Content Disclaimers, Limitations, and Prohibitions
					</h6>
						
					<p>You are responsible for your actions when using and relying on the Service or content available on the Service.</p>

					<p>We do not represent or guarantee the truthfulness, accuracy, or reliability of content, posted by third parties (“Third-Party Content“). You accept that any reliance on material posted by other users or third-party service providers will be at your own risk. By using the Service you accept the risk that you might be exposed to content that is objectionable or otherwise inappropriate. PUDO does not endorse any, nor is it responsible for, Third-Party Content on the Service.</p>

					<p>Do not do bad things with the Service, try to break it, or steal our hard work.</p>

					<p>You agree to use the Service only for its intended purpose. You must use the Service in compliance with all privacy, data protection, intellectual property, and other applicable laws. The following uses of the Service are prohibited. You may not:</p>

					<ol>
						<li>attempt to interfere with, harm, reverse engineer, steal from, or gain unauthorized access to the Service, user accounts, or the technology and equipment supporting the Service;</li>
						<li>frame, mirror or link to the Service without permission;</li>
						<li>use data mining, robots, web spiders, viruses or worms or other data gathering devices on or through the Service, including any program which may make multiple server requests per second, or unduly burdens or hinders the operation or performance of the Service;</li>
						<li>post incomplete, false, or misleading information, impersonate another person, or misrepresent your affiliation with a person or entity;</li>
						<li>disclose personal information about another person, or post, send or store infringing, obscene, threatening, libelous or otherwise tortious material, including material that is harmful to children, violates the rights of third parties, or is intended to harass, abuse, or degrade another person;</li>
						<li>sell, transfer, or assign any of your rights to use the Service to a third party without our express written consent;</li>
						<li>post advertising or marketing links or content, including spam or otherwise duplicative and unsolicited messages, except as specifically allowed by these Terms;</li>
						<li>use the Service in an illegal way or to commit an illegal act in relation to the Service or that otherwise results in fines, penalties, and other liability to PUDO or others; or</li>
						<li>access the Service from a jurisdiction where it is illegal or unauthorized.</li>
					</ol>

					<hr></hr>

					<h6>
						<b class="clr-primary">XIII. </b>Consequences of Violating These Terms
					</h6>
					
					<p>If you do not act acceptably, we may prohibit your use of the Service.</p>

					<p>We will have the right to investigate and prosecute violations of the above to the fullest extent of the law. PUDO reserves the right to involve and cooperate with federal, state and local law enforcement authorities in prosecuting users to violate these Terms in a criminal manner.</p>

					<p>We reserve the right to suspend or terminate your account and prevent access to the Service for any reason, at our discretion. We reserve the right to refuse to provide the Service to you in the future.</p>

					<p>PUDO may review and remove any Third-Party Content at any time for any reason, including activity which, in its sole judgment: violates these Terms; violates applicable laws, rules, or regulations; is abusive, disruptive, offensive or illegal; or violates the rights of, or harms or threatens the safety of, users of the Service.</p>

					<p>You are responsible for any claims, fees, fines, penalties, and other liability incurred by us or others caused by or arising out of your breach of these Terms and your use of the Service.</p>

					<hr></hr>

					<h6>
						<b class="clr-primary">XIV. </b>PUDO’s Liability
					</h6>

					<p>We are not liable for the actions of users when they use the Service. We may also change the Service at any time and are not liable for how this may affect you. We do not guarantee the quality or accuracy of any content you view using the Service or other websites.</p><br>

					<p>Changes to the Service. We may change, suspend, or discontinue any aspect of the Service at any time, including hours of operation or availability of the Service or any feature, without notice or liability.</p><br>

					<p>User Disputes. We are not responsible for any disputes or disagreements between you and any third party you interact with using the Service. You assume all risk associated with dealing with third parties. You agree to resolve disputes directly with the other party. You release PUDO of all claims, demands, and damages in disputes among users of the Service. You also agree not to involve us in such disputes. Use caution and common sense when using the Service.</p><br>

					<p>Content Accuracy. We make no representations about accuracy, reliability, completeness, or timeliness of any contents of the Service. Similarly, we make no representations about accuracy, reliability, completeness, or timeliness of any data from a third-party service provider or the quality or nature of third-party products or services obtained through the Service. Use the Service at your own risk.</p><br>

					<p>Third-Party Websites and Promotions. The Service may include links to third-party websites and applications, including opportunities to purchase goods and services from, or participate in special contests, sweepstakes, and other promotions (“Promotions”) of our business partners, charities, sponsors or other third parties (“Third-Party Partners”). You are responsible for evaluating whether you want to access or use them. We are not responsible for and do not endorse any features, content, advertising, products, or other materials on other websites or applications. You assume all risk and we disclaim all liability arising from your use of them. We make no promises and disclaim all liability of specific results from the use of the Service.</p><br>

					<p>	By participating in a Promotion, you agree to the rules that govern that Promotion, which may contain specific requirements about how your Personal Information (as defined in PUDOs Privacy Policy) is used, including allowing the sponsor of the Promotion to use your name, voice and/or likeness in advertising or marketing associated with the Promotion.</p><br>

					<p>Released Parties Defined. “Released Parties” include PUDO and its affiliates, officers, directors, employees, agents, partners, and licensors.</p>

					<ul>
						<li><b>DISCLAIMER OF WARRANTIES</b></li>
						<p>You use the Service at your own risk. We make no warranties or guarantees.</p><br>
						<p>YOU EXPRESSLY UNDERSTAND AND AGREE THAT: (A) YOUR USE OF THE SERVICE IS AT YOUR SOLE RISK, AND THE SERVICE IS PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS AND THE RELEASED PARTIES EXPRESSLY DISCLAIM ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, WARRANTIES AS TO PRODUCTS OR SERVICES OFFERED BY BUSINESSES LISTED ON THE SERVICE, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT; (B) THE RELEASED PARTIES MAKE NO WARRANTY THAT (i) THE SERVICE WILL MEET YOUR REQUIREMENTS, (ii) THE SERVICE WILL BE UNINTERRUPTED, TIMELY, SECURE, OR ERROR-FREE, (iii) THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SERVICE WILL BE ACCURATE OR RELIABLE, (iv) THE QUALITY OF ANY GOODS OR SERVICE AVAILABLE ON THE SERVICE WILL MEET YOUR EXPECTATIONS, AND (v) ANY ERRORS IN THE SERVICE WILL BE CORRECTED; (C) THE SERVICE OR THE SERVER THAT MAKES THE SERVICE AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS; AND (D) ANY MATERIAL DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE SERVICE IS ACCESSED AT YOUR OWN DISCRETION AND RISK, AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR MOBILE DEVICE OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OR USE OF ANY SUCH MATERIAL. PUDO MAKES NO REPRESENTATION OR WARRANTY AS TO THE RELIABILITY, SAFETY, TIMELINESS, QUALITY, SUITABILITY OR AVAILABILITY OF ANY SERVICES OBTAINED FROM THIRD PARTIES THROUGH THE USE OF THE SERVICE. YOU ACKNOWLEDGE AND AGREE THAT THE ENTIRE RISK ARISING OUT OF YOUR USE OF THE SERVICE AND ANY THIRD-PARTY SERVICES REMAINS SOLELY WITH YOU, TO THE MAXIMUM EXTENT PERMITTED BY LAW.</p><br>
						<li><b>LIMITATION OF LIABILITY AND INDEMNIFICATION</b></li>
						<p>We are not liable for anything that happens to you that somehow may be connected to your use of the Service. If you use the Service in a way that causes us to be included in litigation, you agree to pay all legal fees and costs for Released Parties.</p><br>
						<p>YOU EXPRESSLY UNDERSTAND AND AGREE THAT THE RELEASED PARTIES SHALL NOT BE LIABLE TO YOU FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR EXEMPLARY DAMAGES, INCLUDING, BUT NOT LIMITED TO, DAMAGES FOR LOSS OF PROFITS, GOODWILL, USE, DATA OR OTHER TANGIBLE OR INTANGIBLE LOSSES (EVEN IF COMPANY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES), RESULTING FROM: (i) THE USE OR THE INABILITY TO USE THE SERVICE, INCLUDING DELAYS, DELIVERY FAILURES OR OTHER DAMAGE RELATING TO LIMITATIONS, DELAYS AND OTHER PROBLEMS INHERENT IN THE USE OF THE INTERNET AND ELECTRONIC COMMUNICATIONS; (ii) THE COST OF PROCUREMENT OF SUBSTITUTE GOODS AND SERVICES RESULTING FROM ANY GOODS, DATA, INFORMATION, OR SERVICES OBTAINED OR MESSAGES RECEIVED OR TRANSACTIONS ENTERED INTO THROUGH, FROM, OR AS A RESULT OF THE SERVICE; (iii) UNAUTHORIZED ACCESS TO OR ALTERATION OF YOUR TRANSMISSIONS OR DATA; (iv) STATEMENTS OR CONDUCT OF ANY USER OR THIRD PARTY ON THE SERVICE; (v) YOUR RELIANCE ON CONTENT MADE AVAILABLE BY US; OR (vi) ANY OTHER MATTER RELATING TO THE SERVICE. PUDO AND/OR ITS LICENSORS WILL NOT BE LIABLE FOR ANY LOSS, DAMAGE, OR INJURY WHICH MAY BE INCURRED BY YOU, INCLUDING BUT NOT LIMITED TO LOSS, DAMAGE, OR INJURY ARISING OUT OF, OR IN ANY WAY CONNECTED WITH THE SERVICE, INCLUDING BUT NOT LIMITED ANY LOSS, DAMAGE, OR INJURY RESULTING FROM ANY RELATIONSHIP OR TRANSACTION BETWEEN YOU AND ANY THIRD-PARTY SERVICE PROVIDER.</p><br>
						<p>PUDO MAY INTRODUCE YOU TO THIRD-PARTY TRANSPORTATION PROVIDERS TO PROVIDE YOU TRANSPORTATION, BUT PUDO DOES NOT ASSESS THE SUITABILITY, LEGALITY, OR ABILITY OF ANY THIRD-PARTY TRANSPORTATION PROVIDER AND YOU EXPRESSLY WAIVE AND RELEASE THE COMPANY FROM ANY AND ALL LIABILITY, CLAIMS, OR DAMAGES ARISING FROM OR IN ANY WAY RELATED TO THE THIRD-PARTY TRANSPORTATION PROVIDER. YOU ACKNOWLEDGE THAT PUDO DOES NOT MONITOR ANY THIRD-PARTY TRANSPORTATION PROVIDER’S ON-GOING COMPLIANCE WITH ANY AND ALL LICENSING AND/OR PERMITTING RULES AND REGULATIONS, AND PUDO WILL NOT BE RESPONSIBLE FOR ANY LIABILITY, CLAIMS, OR DAMAGES ARISING FROM OR IN ANY WAY RELATED TO A THIRD-PARTY TRANSPORTATION PROVIDER’S FAILURE TO MAINTAIN A CURRENT LICENSE AND/OR PERMIT. PUDO WILL NOT BE A PARTY TO DISPUTES OR NEGOTIATIONS OF DISPUTES BETWEEN YOU AND ANY THIRD-PARTY PROVIDERS. RESPONSIBILITY FOR THE DECISIONS YOU MAKE REGARDING PUDOs SERVICES RESTS SOLELY WITH YOU. PUDO WILL NOT ASSESS THE SUITABILITY, LEGALITY, OR ABILITY OF ANY SUCH THIRD PARTIES AND YOU EXPRESSLY WAIVE AND RELEASE THE COMPANY FROM ANY AND ALL LIABILITY, CLAIMS, CAUSES OF ACTION, OR DAMAGES ARISING FROM YOUR USE OF THE SERVICE, OR IN ANY WAY RELATED TO THE THIRD PARTIES INTRODUCED TO YOU BY THE SERVICE.</p><br>
						<p>THE QUALITY OF THE TRANSPORTATION SERVICES SCHEDULED THROUGH THE SERVICE IS ENTIRELY THE RESPONSIBILITY OF THE THIRD-PARTY PROVIDER WHO ULTIMATELY PROVIDES SUCH TRANSPORTATION SERVICES TO YOU. YOU UNDERSTAND THAT BY USING THE SERVICE, YOU MAY BE EXPOSED TO CONTENT THAT IS POTENTIALLY DANGEROUS, OFFENSIVE, HARMFUL TO MINORS, UNSAFE, OR OTHERWISE OBJECTIONABLE AND THAT YOU USE THE SERVICE AT YOUR OWN RISK.</p><br>
						<p>SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF CERTAIN WARRANTIES OR THE LIMITATION OR EXCLUSION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES. ACCORDINGLY, SOME OF THE ABOVE LIMITATIONS IN THIS PARAGRAPH MAY NOT APPLY TO YOU.</p><br>
						<p>TO THE FULLEST EXTENT POSSIBLE BY LAW, THE RELEASED PARTIES’ MAXIMUM LIABILITY ARISING OUT OF OR IN CONNECTION WITH THE SERVICE OR YOUR USE OF COMPANY CONTENT, REGARDLESS OF THE CAUSE OF ACTION (WHETHER IN CONTRACT, TORT, BREACH OF WARRANTY, OR OTHERWISE), WILL NOT EXCEED $100.</p><br>
						<p>You agree to defend, indemnify, and hold harmless the Released Parties from and against any claims, actions, or demands, including without limitation reasonable legal and accounting fees, alleging or resulting from (i) your use of or reliance on any Third-Party Content, (ii) your use of or reliance on any PUDO Content, (iii) your violation of any rights of any third party, including transportation service providers booked through the Service; or (iv) your breach of these Terms. We shall provide notice to you promptly of any such claim, suit, or proceeding.</p>
					</ul>

					<hr></hr>

					<h6>
						<b class="clr-primary">XV. </b>General Terms
					</h6>

					<p>These Terms constitute the entire agreement between you and PUDO concerning your use of the Service. Our failure to exercise or enforce any right or provision of these Terms shall not constitute a waiver of such right or provision. If any provision of these Terms is found by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties’ intentions as reflected in the provision, and the other provisions of these Terms remain in full force and effect. The section titles and annotations in these Terms are for convenience only and have no legal or contractual effect.</p>
					
					<hr></hr>

					<h6>
						<b class="clr-primary">XVI. </b>Arbitration, Class Waiver, and Waiver of Jury Trial
					</h6>

					<p>We are located in New York, so all disputes must be resolved there. We will use arbitration to resolve any problems, and you cannot join a class action lawsuit or obtain a jury trial for any disputes you have with us related to your use of the Service.</p>

					<p>These Terms and the relationship between you and PUDO shall be governed by the laws of the state of New York without regard to its conflict of law provisions. You and PUDO agree to submit to the personal and exclusive arbitration of any disputes relating to your use of the Service under the rules of the American Arbitration Association. Any such arbitration, to the extent necessary, shall be conducted in New York county in the state of New York. You covenant not to sue PUDO in any other forum.</p>

					<p>You also acknowledge and understand that, with respect to any dispute with the Released Parties arising out of or relating to your use of the Service or these Terms:</p>

					<p>YOU ARE GIVING UP YOUR RIGHT TO HAVE A TRIAL BY JURY;</p>

					<p>YOU ARE GIVING UP YOUR RIGHT TO SERVE AS A REPRESENTATIVE, AS A PRIVATE ATTORNEY GENERAL, OR IN ANY OTHER REPRESENTATIVE CAPACITY, OR TO PARTICIPATE AS A MEMBER OF A CLASS OF CLAIMANTS, IN ANY LAWSUIT INVOLVING ANY SUCH DISPUTE; AND</p>

					<p>YOU MUST FILE ANY CLAIM WITHIN ONE (1) YEAR AFTER SUCH CLAIM AROSE OR IT IS FOREVER BARRED.</p>

					<p>Contact Information<br>
					RIDE Pudo LLC.<br>
					ridepudo@gmail.com</p>
				</div>
	     	</div>
	    </div>
  	</div>
</div>
<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>



<script src="<?php echo base_url(); ?>rp_assets/custom_js/login.js?v=2.0"></script>
