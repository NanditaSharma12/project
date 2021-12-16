<!DOCTYPE html>
<html lang="en">

<head>
  
   <style>


   </style>
</head>

<body>
  <?php include('inc/header.php');   ?>
    <!-----Section 1--------->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
					<div class="thank_you">
						<div class="border">
							<div class="inner-cutout"> 
								<h1 class="knockout">Thank you <br> for contacting us!</h1>
							</div>
						</div>
						<p>We’ve received your message and will get back to you within <span>24 hours. </span></p>
						<p>Meanwhile, you can explore us further on social media:</p>
						<div class="social-media-icons" >
							<a href="https://www.facebook.com/masterinfotech/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter" title="Twitter" target="_blank"></i></a>
							<a href="https://www.instagram.com/masterinfotechofficial/" target="_blank"><i class="fa fa-instagram" title="Instagram"></i></a>
							<a href="https://www.linkedin.com/company/master-infotechofficial/" target="_blank"><i class="fa fa-linkedin" title="linkedin"></i></a>
							<a href="https://www.behance.net/ab941400?tracking_source=search_users_recommended%7Cmaster%20infotech" target="_blank"><i class="fa fa-behance" title="Behance"></i></a>
							<a href="https://dribbble.com/MasterInfotechOfficial" target="_blank"><i class="fa fa-dribbble" title="dribbble"></i></a>
						</div>
					</div>
                </div> 
            </div>
        </div>
    </section>
	
   
     
   
	

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
	<!-- slider JS files -->
    
   
  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/carrousel.js"></script>
   
</body>

</html>