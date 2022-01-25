<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/infotech/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> 
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/fixes.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col_sm.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col_md.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col_lg.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link rel="icon" href="http://localhost/infotech/assets/images/favicon.png" type="image/gif">
	<link rel="stylesheet" href="http://localhost/infotech/assets/css/carrousel.css"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
   
    <!-- preview-related stylesheets -->
   
   <style> 
	.error, .p_error {
            color: #ff0000;
			float: left;
        }
		
	.intl-tel-input.separate-dial-code .selected-flag {
		background:none;
	}
	.intl-tel-input{
		display:block;
	}
	.intl-tel-input.separate-dial-code .selected-dial-code {
		padding-left:0px;
	}
	
	.intl-tel-input .flag-container {
    position: absolute;
    top: 30px;
    bottom: 0;
    padding: 1px;
	}
 

	</style>
</head>

<body>
<?php include('inc/header.php'); 

$contactstmt = $conn->prepare("SELECT * FROM contact_us_content order by id desc limit 1");
$contactstmt->execute(); 
$contact_us = $contactstmt->fetch();
?>

    <!-----Section 1--------->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-7 col-xl-7" data-aos="fade-left" data-aos-duration="1500">
                    <h1 class="display-3 fw-bold">Talk to <span class="color_one">us!</span></h1>
                    <h4>You've got<span class="color_one"> questions,</span> we've got <span class="color_one">answers.</span> </h4>
                    <p><strong>It all starts with communication!</strong>
                        From basic questions to complex compliance inquiries,
                        Our experienced professionals are always there to help.
                        <span>We look forward to hearing from you.</span></p>
                </div>
                <div class="col-12 col-md-12 col-lg-5 col-xl-5" data-aos="fade-right" data-aos-duration="1500">
                    <img class="img-responsive contact-img" src="assets/images/con-img.webp">
                </div>
            </div>
        </div>
    </section>
	
    <section class="contact-details">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5 col-xl-5">
                    <div class="info"  data-aos="fade-left" data-aos-duration="1500">
						<h3>Get in touch!</h3>
						<div class="info-list" data-aos="fade-right" data-aos-duration="1500">
							<h4>Phone</h4>
							<p><?php echo $contact_us['phone']; ?></p>
						</div>
						<div class="info-list" data-aos="fade-right" data-aos-duration="1500">
							<h4>Email</h4>
							<p><?php echo $contact_us['email']; ?></p>
						</div>
						<div class="info-list" data-aos="fade-right" data-aos-duration="1500">
							<h4>WhatsApp/ SMS</h4>
							<p><?php echo $contact_us['sms']; ?></p>
						</div>
						
						<div class="info-list" data-aos="fade-right" data-aos-duration="1500">
							<h4>Address</h4>
							<p><?php echo $contact_us['address']; ?></p>
						</div>
						<div class="info-list" data-aos="fade-right" data-aos-duration="1500">
							<h4>Social Media</h4>
							<p>
								<ul>
                                <?php $data = json_decode($contact_us['social_data']);
										for($i=0; $i< count($data); $i++){ ?>
									<li><a href="<?php echo $data[$i]->link; ?>"><i class="<?php echo $data[$i]->icon; ?>"></i></a></li>
                                    <?php } ?>
									</ul>
							</p>
						</div>
					</div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                   <div class="query-form"  data-aos="fade-right" data-aos-duration="1500">
					<form class="contact_form fw-bold text-center color_two" action="/mail" method="post">
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
                        <div class="form-group m-2 required">
                            <label for="phone">Phone</label>
							<input type="tel" class="phone form-control " id="phone" name="phone" required />
							<span class="p_error"></span>
					    </div>
                        <div class="form-group m-2 required">
                            <label for="message">Project Description.*</label>
                            <textarea class="form-control" id="message" name="message" required></textarea>
							<span class="error"></span>
                        </div>
                        <button type="button" id="btnSubmit" name="sendmail" onclick="validateForm()" class="btn btn_color_one">Submit</button>
                    </form>
				   </div>
                </div>
            </div>
        </div>
    </section>
   
     
    <?php include('inc/footer.php'); ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>

<script type="text/javascript">
var telInput = $("#phone");
  

// initialise plugin
telInput.intlTelInput({

  allowExtensions: true,
  formatOnDisplay: true,
  autoFormat: true,
  autoHideDialCode: true,
  autoPlaceholder: true,
  defaultCountry: "auto",
  ipinfoToken: "yolo",

  nationalMode: false,
  numberType: "MOBILE",
  //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
 // preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
  preventInvalidNumbers: true,
  separateDialCode: true,
  initialCountry: "in",
  geoIpLookup: function(callback) {
  $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    var countryCode = (resp && resp.country) ? resp.country : "";
    callback(countryCode);
  });
},
   utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
});


</script>
  
 
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
	
	function validateForm() {
			var valid = true;
            if (isFormValid()) {
				var name = $("#name").val();
				var email = $("#email").val();
				var mob = $("#phone").val();
				var code = $(".selected-flag").attr('title');
				code = code.replace(/[^\d+-]/g,'');
				var phone = code + "-" + mob;
				//console.log(code);
				var msg = $("#message").val();
				var values = {"name":name,"email":email,"phone":phone,"message":msg};
			
				$.ajax({
				url: "mail.php",
				type: "post",
				data: values ,
				success: function (response) {
			   // console.log(response);
				//$(".success").html("Thank you for your enquiry. We will revert you soon.");
				 window.location.href= "thankyou.php";
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

	function isFormValid() {
		
		//Initially default values;
            errorMessage = "";
            $(".error").html("");
			$(".p_error").html("");
            var isValid = true;
            var regName = /^[a-zA-Z ]+$/;
			var regemail=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			//var regphn = /^\d$/;

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
			 if ($(".phone").val() == "") {
				 
                $(".p_error").html("Please Enter  phone number")  				
                isValid = false;
				
            }
			/*else {

                if (!regphn.test($("phone").val())) {
                    $(".p_error").html("Please enter number only")
                    isValid = false;
                }
			}*/
			
			 if ($("#message").val() == "") {
                $("#message").siblings(".error").html("Please Enter  message")                
                isValid = false;
            }
		 return isValid;
	}
	
	
      /*  function validateContactForm() {
            var valid = true;

            $(".info").php("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").php("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").php("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").php("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").php("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").php("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        } */
</script>



	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="http://localhost/infotech/assets/js/start.js" type="text/javascript"></script>
	<script src="http://localhost/infotech/assets/js/jquery.min.js" />
	<script src="http://localhost/infotech/assets/js/jquery.royalslider.min.js" />
	
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="http://localhost/infotech/assets/js/general.js"></script>

   <!---------  end------------>
   
   
   
   
   
   <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 2000px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
   <script>
$(document).ready(function () {
   
	$("#smenu").click(function(){
	  $(".sm-menu").toggle();
	});
	
	$(".hovermenu").hover(
		function(){
					$(".bgmenuhover").show();
			});	
	$(".innermenu").hover(
		function(){
					$(".bgmenuhover").show();
			},
			function(){
					$(".bgmenuhover").hide();
			}
			);

   $(".abc").hover(function(){
		$(".bgmenuhover").hide();
	}); 
	 $(".navbar").hover(function(){
		$(".bgmenuhover").hide();
	});
/*
$(".contact-info").hover(function(){
 $(".bgmenuhover").hide();
});	  */

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
	<!-- slider JS files -->
      <script>
	  AOS.init();	
	  </script>
  
</body>

</html>