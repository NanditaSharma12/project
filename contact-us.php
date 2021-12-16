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
                    <img class="img-responsive contact-img" src="assets/images/con-img.png">
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
                       <button type="button" class="btn btn_color_one" onclick="validateForm()">Submit</button>
                    </form>
				   </div>
                </div>
            </div>
        </div>
    </section>
   
     
    <?php include('inc/footer.php'); ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>


   <!---------  end------------>
   
       <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
	
	/*$(document).ready(function() {

$("#clickme").on("click",function(){
	
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var msg = $("#message").val();
	
	if(name ==''){
		
		$("#msg").text('Enter name ');
		$("#msg").css('display:block');
		
	}else{
	 var values = {"name":name,"email":email,"phone":phone,"message":msg,};
	console.log(values);
  $.ajax({
        url: "mail.php",
        type: "post",
        data: values ,
        success: function (response) {
	console.log(response);
           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    }); 
	}
});

	});*/
	
	 function validateForm() {
			var valid = true;
            if (isFormValid()) {
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

	
	function isFormValid() {
		
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
		
 /* let name = document.forms["myform"]["name"].value;
  let email = document.forms["myform"]["email"].value;
  let phone = document.forms["myform"]["phone"].value;
  let message = document.forms["myform"]["message"].value;
   
   if (name == "") {
    document.write("Name must be filled out");
    return false;
  }
   if (email == "") {
    alert("email must be filled out");
    return false;
  }
   if (phone == "") {
    alert("phone number must be filled out");
    return false;
  }
   if (message == "") {
    alert("message must be filled out");
    return false;
  }
}
 */
      /*  function validateContactForm() {
            var valid = true;

            $(".info").php("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("name").val();
            var userEmail = $("email").val();
            var phone = $("phone").val();
            var message = $("message").val();
            
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

            if (phone == "") {
                $("#subject-info").php("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (message == "") {
                $("#userMessage-info").php("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        } */
</script>


   
   
   
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