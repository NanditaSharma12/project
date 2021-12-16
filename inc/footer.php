<!DOCTYPE html>
<html lang="en">

<head>
   
	<style> 
	.error {
            color: #ff0000;
			float: left;
        }
		
	.success {
			color: green;
			float: left;
	    }
	</style>
   
</head>

<body>

<footer class="mt-4 position-relative" data-aos="fade-up" data-aos-duration="1500">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="http://localhost/mastersassets/js/start.js" type="text/javascript"></script>
	<script src="http://localhost/mastersassets/js/jquery.min.js" />
	<script src="http://localhost/mastersassets/js/jquery.royalslider.min.js" />
	
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="http://localhost/mastersassets/js/general.js"></script>

   <!---------  end------------>
   
   <script>
		$(document).ready(function () {
   
	$("#smenu").click(function(){
	  $(".sm-menu").toggle();
	});


const cards = document.querySelectorAll(".card");
cards.forEach((c) => {
  c.addEventListener("click", () => {
    removeactive();
    c.classList.add("active");
  });
});

function removeactive() {
  cards.forEach((c) => {
    c.classList.remove("active");
  });
}


});
</script>
	<script>
		AOS.init();	
	</script>
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
						<form class="contact_form fw-bold text-center color_two" action="#" method="post" name="myform">
					<p id="msg" style="display:none;"></p>
                        <h3 class="">Send queries <span class="color_one">today!</span></h3>
						<div class="form-group m-2 required">
						<span class="success"></span>
						</div>
                        <div class="form-group m-2 required">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name" name="name"  />
							<span class="error"></span>
                        </div>
                        <div class="form-group m-2 required">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="email" name="email" required />
							<span class="error"></span>
                        </div>
                        <div class="form-group m-2 required">
                            <label for="phone">Phone*</label>
                            <input type="text" class="form-control" id="phone" name="phone" />
							<span class="error"></span>
                        </div>
                        <div class="form-group m-2 required">
                            <label for="message">Message*</label>
                            <textarea class="form-control" id="message" name="message" required></textarea>
							<span class="error"></span>
                        </div>
						 <!--<input type="button" value="Submit" id="clickme" onclick="validateForm()"/>-->
                       <button type="button" class="btn btn_color_one" onclick="valForm()">Submit</button>
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
                            <p>Plot no 163, Sector 82
							</br> JlPL, Mohali, INDIA</p>
                       
                </div>
				<div class="col-12 col-md-2 col-lg-2 col-xl-2">
					<h6 class="color_one">Menu</h6>
					<ul>
						<li> <a href="http://localhost/masters//home.php">Home</a></li>
						<li> <a href="http://localhost/masters//portfolio.php">Portfolio</a></li>
						<li> <a href="http://localhost/masters//services.php">Our Services</a></li>
						<li> <a href="http://localhost/masters//blog.php">Our Blogs</a></li>
						<li> <a href="http://localhost/masters//career.php">Careers</a></li>
						<li> <a href="http://localhost/masters//contact-us.php">Get a Quote</a></li>
						<li> <a href="http://localhost/masters//contact-us.php">Contact</a></li>
					</ul>
                </div>
                <div class="col-12 col-md-3 col-lg-3 col-xl-3 color_two">
					<h6 class="color_one">Services</h6>
					<ul>
						<li> <a href="http://localhost/masters//web-d.php">Web Developments</a></li>
						<li> <a href="http://localhost/masters//mobile_app_development.php">Mobile App Development</a> </li>
						<li> <a href="http://localhost/masters//ui-ux.php">UI/UX Design</a></li>
						<li> <a href="http://localhost/masters//e-commerce.php">E-commerce</a></li>
						<li> <a href="http://localhost/masters//digital-marketing.php">Digital Marketing</a></li>
						<li> <a href="http://localhost/masters//bussiness_consultation.php">Business Consultation</a></li>
						<li> <a href="http://localhost/masters//training.php">Training and Internship</a></li>
					</ul>
				</div>
				<div class="col-12 col-md-2 col-lg-2 col-xl-2">
					<h6 class="color_one">About</h6>
					<ul>
						<li> <a href="http://localhost/masters/who-we-are.php">Who We Are</a></li>
						<li> <a href="http://localhost/masters/who-we-are.php#ourvision">Our Vision</a></li>
						<li> <a href="http://localhost/masters/who-we-are.php#ourvalue">Our Value</a></li>
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
					<div class="col-md-12"><p>© Copyright 2021 <b>Master Infotech</b> | All Rights Reserved.</p></div>
				</div>
			</div>
		</div>
		
		
		   <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		   
		   <script type="text/javascript">
		   function valForm() {
			var valid = true;
            if (isFormVal()) {
				var name = $("#name").val();
				var email = $("#email").val();
				var phone = $("#phone").val();
				var msg = $("#message").val();
				var values = {"name":name,"email":email,"phone":phone,"message":msg,};
				console.log(values);
				$.ajax({
				url: "mail.php",
				type: "post",
				data: values ,
				success: function (response) {
			    $(".success").html("Thank you for your enquiry. We will revert you soon.");
				valid = false;
				},
				error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
				console.log(res);				
                
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
		
    </footer>
   
</body>
</html>