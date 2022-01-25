<style> 
	.error {
            color: #ff0000;
			float: left;
        }
		
	.success {
			color: green;
			float: left;
	    }
		
	.g_error {
            color: #ff0000;
			
        }
		
	.g_success {
			color: green;
			
	    }
</style>
	<footer class="mt-4 position-relative" data-aos="" data-aos-duration="">
		<div class="container">
            <div class="row">
                <div class="col-12 mt-5" data-aos="fade-right"  data-aos-duration="1000">
                    <h2 class="fs-1 fw-bold color_two">Contact us</h2>
                    <h4 class="fs-4 mb-4 fw-bold color_two">You’ve got <span class="color_one">questions,</span> we’ve got <span class="color_one">answers!</span></h4>
                </div>
			</div>
		</div>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12 mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27451.004602257817!2d76.72316176676743!3d30.679707284821717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f9553614a8061%3A0x32c8210eb2db83e4!2sMaster%20Infotech!5e0!3m2!1sen!2sin!4v1635225591969!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                 <?php 
				 if($page_name !='contact-us.php'){
				 $contactstmt = $conn->prepare("SELECT * FROM contact_us_content order by id desc limit 1");$contactstmt->execute(); $contact_us = $contactstmt->fetch();?>
						<form class="contact_form fw-bold text-center color_two" action="/mail.php" method="post">
                        <h3 class="">Send queries <span class="color_one">today!</span></h3>
						<div class="form-group m-2 required"><span class="success"></span></div>
                        <div class="form-group m-2 required">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name" name="name" required />
							<span class="error"></span>
                        </div>
                        <div class="form-group m-2 required">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="email" name="email" required />
							<span class="error"></span>
                        </div>
                        <div class="form-group m-2">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" />
							<span class="error"></span>
                        </div>
                        <div class="form-group m-2 required">
                            <label for="message">Message*</label>
                            <textarea class="form-control" id="message" name="message" required></textarea>
							<span class="error"></span>
                        </div>
                        <button type="button" name="sendmail" onclick="valForm()" class="btn btn_color_one mt-4 mb-4">Submit</button>
                    </form>
					<?php }else{}?>
                </div>
            </div>
		</div>	

		<div class="container">	
            <div class="row mt-4 ptb56">
                <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                            <h6 class="color_one">Contact</h6>
                            <p><?php echo $contact_us['phone']; ?> <br> <?php echo $contact_us['email']; ?></p>
							
							<h6 class="color_one">Address</h6>
                            <p>Plot no 163, Sector 82,
							</br> JLPL, Mohali, Punjab 160055.</p>
                       
                </div> 
				<div class="col-12 col-md-2 col-lg-2 col-xl-2">
					<h6 class="color_one">Menu</h6>
					<ul>
						<li> <a href="/home">Home</a></li>
						<li> <a href="/our-portfolio">Portfolio</a></li>
						<li> <a href="/our-services">Our Services</a></li>
						<li> <a href="/blog">Our Blogs</a></li>
						<li> <a href="http://localhost/infotech/career.php">Careers</a></li>
						<li> <a href="/contact-us">Get a Quote</a></li>
						<li> <a href="/contact-us">Contact</a></li>
					</ul>
                </div>
                <div class="col-12 col-md-3 col-lg-3 col-xl-3 color_two">
					<h6 class="color_one">Services</h6>
					<ul>
				<li> <a href="/website-development-services">Web Developments</a></li>
						<li> <a href="/mobile-app-development-services">Mobile App Development</a> </li>
						<li> <a href="/ui-and-ux-design-services">UI/UX Design</a></li>
						<li> <a href="/e-commerce-website-design-and-development-services">E-commerce</a></li>
						<li> <a href="/digital-marketing-services">Digital Marketing</a></li>
						<li> <a href="/bussiness-consultation-services">Business Consultation</a></li>
						<li> <a href="/training-and-internship">Training and Internship</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-2 col-lg-2 col-xl-2">
					<h6 class="color_one">About</h6>
					<ul>
						<li> <a href="/who-we-are">Who We Are</a></li>
						<li> <a href="/who-we-are#ourvision">Our Vision</a></li>
						<li> <a href="/who-we-are#ourvalue">Our Value</a></li>
						<!--<li> <a href="/activity">Our Activities</a></li>-->
					</ul>
				</div>
                <div class="col-12 col-md-2 col-lg-2 col-xl-2">
					<h6 class="color_one">Follow us </h6>
					<div class="d-flex justify-content-between icons mb-2 sicons-wd" >
						<a href="https://www.facebook.com/masterinfotech/" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter" title="Twitter" target="_blank"></i></a>
						<a href="https://www.instagram.com/masterinfotechofficial/" target="_blank"><i class="fa fa-instagram" title="Instagram"></i></a>
					</div>
					<div class="d-flex justify-content-between icons sicons-wd" target="_blank">
						<a href="https://www.linkedin.com/company/master-infotechofficial/" target="_blank"><i class="fa fa-linkedin" title="linkedin"></i></a>
						<a href="https://www.behance.net/ab941400?tracking_source=search_users_recommended%7Cmaster%20infotech" target="_blank"><i class="fa fa-behance" title="Behance"></i></a>
						<a href="https://dribbble.com/MasterInfotechOfficial" target="_blank"><i class="fa fa-dribbble" title="dribbble"></i></a>
				   
					</div>
                </div>
            </div>
        </div>
        <div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12"><p>© Copyright 2021-22. <b><a href="/"> 	Master Infotech </a></b> | All Rights Reserved.</p></div>
				</div>
			</div>
		</div>
    </footer>
   
	<!--<div class="popup-btn" onclick="style.display='block'">
		<a href="/contact-us"> Get a Quote </a>
	</div>-->
	
	<a href="#" class="open-popup" data-id="popup_2" data-animation="scale"> Get a quote</a>
	
	<div id="popup_2" class="popup">
			<div class="popup-overlay"></div>
			<div class="popup-content">
		
				<a href="#" class="close-popup" data-id="popup_2" data-animation="scale">&times;</a>

				<div class="form">
					<div class="popup-contacts">
					  
						<strong class="title"><span>Contact Us</span></strong>
					  
					  <ul class="popup-contact-list">
						<li>
						  <span class="contact-label">Phone</span>
						  <a class="phone" href="tel:16465712054">+91 74000 18000</a>
						</li>
						<li>
						  <span class="contact-label">Email</span>
						  <a class="email" href="mailto:info@masterinfotech.com">info@masterinfotech.com </a>
						</li>
						<li class="hide-mobile">
						  <span class="contact-label">Address</span>
						  <address>Plot no 163, Sector 82, <br> JLPL, Mohali, Punjab 160055.</address>
						</li>
					  </ul>
					</div>
				
<?php
	//function quote(){
		//$msg='';
		
		//if(isset($_POST['quote'])){	
		
		/*	echo"<script>if(val_quote()){
			$(document).ready(function() {
				$(':input[type='submit']').prop('disabled', true);
			});
			}
				</script>"; */
		
	/*		$g_name = $g_cname = $g_email = $g_number = $g_message ="";
			$g_name = $_POST['g_name'];
			$g_cname = $_POST['g_cname'];
			$g_email= $_POST['g_email'];
			$g_number= $_POST['g_number'];
			$g_message= $_POST['g_message'];
			
			/* $data_records = [
			'name' => $g_name,
			'company' => $g_cname,
			'email' => $g_email,
			'phone' => $g_number,
			'project' => $g_message,
            ];        
		$g_sql = "INSERT INTO get_quote (name,company,email,phone,project) VALUES (:g_name,:g_cname,:g_email,:g_number,:g_message)";
		$conn->prepare($g_sql)->execute($data_records); */
		/*	
			 $g_sql = $conn->prepare("INSERT INTO get_quote (name,company,email,phone,project) VALUES ('$g_name','$g_cname','$g_email','$g_number','$g_message')");
			$g_ql = $g_sql->execute();
			
			//echo'<script>window.location.href="thankyou.php";</script>'; 
			//echo'<script>}</script>';
		}
		*/                                                      
		//}
?>
					
					<div class="popup-form">
					  
						<strong class="form-title">Request Consultation</strong>
						<div class="Get-Started-Popup">
						<form method="post" action="gmail.php" id="g_form">
							<span class="g_success"></span>
								<div class="popup-input">
									<input id="g_name" type="text" name="g_name"  placeholder="Full Name*" value="" >
									<span class="g_error"></span>
								</div>
								<div class="popup-input">
									<input id="g_cname" type="text" name="g_cname"  placeholder="Company Name*" value="" >
									<span class="g_error"></span>
								</div>
								<div class="popup-input">
									<input id="g_email" type="email" name="g_email"  placeholder="Work Email*" value="" >
									<span class="g_error"></span>
								</div>
								<div class="popup-input">
									<input id="g_number" type="number" name="g_number"  placeholder="Phone Number*" value="" >
									<span class="g_error"></span>
								</div>
								<div class="popup-input">
									<textarea id="g_message"  name="g_message" placeholder="Project Details"></textarea>
									<span class="g_error"></span>
								</div>
								<div class="popup-input">
									<!--<button class=" btn_color_one" type="submit" name="getquote">Send Request</button>-->
									<button class="btn btn_color_one mt-4 mb-4" style="height:50px; width:200px;" onclick="val_quote()" type="button" name="quote">Submit</button>
									
								</div>
						</form>

					</div>
				</div>
				
	 <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript">

		function val_quote() {
				//console.log('i am here');
			 var g_valid = true;
			// console.log(isval_quote());
            if (isval_quote() == true) {
			    var gname = $("#g_name").val();
				var gcname = $("#g_cname").val();
				var gemail = $("#g_email").val();
				var gphone = $("#g_number").val();
				var gmsg = $("#g_message").val();
				var gvalues = {"g_name":gname,"g_cname":gcname,"g_email":gemail,"g_number":gphone,"g_message":gmsg};
				$.ajax({
				url: "gmail.php",
				type: "post",
				data: gvalues ,
				success: function (response) {
					
				if(response == 'success'){
					console.log('i am here');
				$(".g_success").html("Thank you for your enquiry. We will revert you soon.");	
				$(function() {
						$('#popup_2').delay(2000).fadeOut();
				});
				g_valid = false;
				}
			    
				},
				error: function(jqXHR, textStatus, errorThrown) {
        
			}
			});
			document.getElementById("g_form").reset();  			
			}	 		
		} 
	
		function isval_quote() {	
		
		//Initially default values;
            errorMessage = "";
            $(".g_error").html("");
            var g_isValid = true;
            var reg_Name = /^[a-zA-Z ]+$/;
			var reg_email=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			var reg_phn = /^\d{10}$/;

            //Validate First name
            if ($("#g_name").val() == "") {
                $("#g_name").siblings(".g_error").html("Please Enter Name")                
                g_isValid = false;
            }
            else {

                if (!reg_Name.test($("#g_name").val())) {
                    $("#g_name").siblings(".g_error").html("Please Enter Valid Name")
                    g_isValid = false;
                }

            }
			if ($("#g_cname").val() == "") {
                $("#g_cname").siblings(".g_error").html("Please Enter Company Name")                
                g_isValid = false;
            }
			
			 if ($("#g_email").val() == "") {
                $("#g_email").siblings(".g_error").html("Please Enter email ")                
                g_isValid = false;
            }
			else {

                if (!reg_email.test($("#g_email").val())) {
                    $("#g_email").siblings(".g_error").html("Please Enter Valid email")
                    g_isValid = false;
                }
			}
			 if ($("#g_number").val() == "") {
                $("#g_number").siblings(".g_error").html("Please Enter  phone number")                
                g_isValid = false;
            }
			else {

                if (!reg_phn.test($("#g_number").val())) {
                    $("#g_number").siblings(".g_error").html("Please valid phone number")
                    g_isValid = false;
                }
			}
			
			 if ($("#g_message").val() == "") {
                $("#g_message").siblings(".g_error").html("Please Enter  message")                
                g_isValid = false;
            }
			 //alert("Your form fields are validated. Now you can implement insert logic");
		 return g_isValid;
		 
	}
	

	function valForm() {
			var valid = true;
            if (isFormVal()) {
				var name = $("#name").val();
				var email = $("#email").val();
				var phone = $("#phone").val();
				var msg = $("#message").val();
				var values = {"name":name,"email":email,"phone":phone,"message":msg,};
			
				$.ajax({
				url: "mail.php",
				type: "post",
				data: values ,
				success: function (response) {
				window.location.href= "thankyou.php";	
			    //$(".success").html("Thank you for your enquiry. We will revert you soon.");
				valid = false;
				},
				error: function(jqXHR, textStatus, errorThrown) {
                
             // alert("Your form fields are validated. Now you can implement insert logic");
			}
			}); 
			}
	 }

	
	function isFormVal() {
		
		//Initially default values;
            errorMessage = "";
            $(".error").html("");
            var isValid = true;
            var regName = /^[a-zA-Z ]+$/;
			var regemail=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			var regphn = /^\d{10}$/;

            //Validate First name
            if ($("#name").val() == "") {
                $("#name").siblings(".error").html("Please Enter Name")                
                isValid = false;
            }
            else {

                if (!regName.test($("#name").val())) {
                    $("#name").siblings(".error").html("Please Enter Valid Name")
                    isValid = false;
                }

            }
			
			 if ($("#email").val() == "") {
                $("#email").siblings(".error").html("Please Enter email ")                
                isValid = false;
            }
			else {

                if (!regemail.test($("#email").val())) {
                    $("#email").siblings(".error").html("Please Enter Valid email")
                    isValid = false;
                }
			}
			 if ($("#phone").val() == "") {
                $("#phone").siblings(".error").html("Please Enter  phone number")                
                isValid = false;
            }
			else {

                if (!regphn.test($("#phone").val())) {
                    $("#phone").siblings(".error").html("Please valid phone number")
                    isValid = false;
                }
			}
			
			 if ($("#message").val() == "") {
                $("#message").siblings(".error").html("Please Enter  message")                
                isValid = false;
            }
		 return isValid;
	}
	
	
</script>
	
	
	<script>
   
// jQuery extend functions for popup
(function($) {
  $.fn.openPopup = function( settings ) {
    var elem = $(this);
    // Establish our default settings
    var settings = $.extend({
      anim: 'fade'
    }, settings);
    elem.show();
    elem.find('.popup-content').addClass(settings.anim+'In');
  }
  
  $.fn.closePopup = function( settings ) {
    var elem = $(this);
    // Establish our default settings
    var settings = $.extend({
      anim: 'fade'
    }, settings);
    elem.find('.popup-content').removeClass(settings.anim+'In').addClass(settings.anim+'Out');
    
    setTimeout(function(){
        elem.hide();
        elem.find('.popup-content').removeClass(settings.anim+'Out')
      }, 500);
  }
    
}(jQuery));


   </script>