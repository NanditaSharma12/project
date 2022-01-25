<!DOCTYPE html>
<html lang="en">

<head>
    <title>Career</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> 
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/fixes.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive_col.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive_col_sm.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive_col_md.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/responsive_col_lg.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link rel="icon" href="/assets/images/favicon.png" type="image/gif">
	<link rel="stylesheet" href="/assets/css/carrousel.css"/>
    <!-- preview-related stylesheets -->
   <style>
       
   </style>
</head>

<body>
<?php include('inc/header.php');

$stmt4 = $conn->prepare("SELECT * FROM jobs");
$stmt4->execute(); 
$jobs = $stmt4->fetchAll();
?>
    <!-----Section 1--------->
   <section class="section-career" style="background-image: url(assets/images/case-study/casestudybg.png);">
       <div class="container">
           <div class="row mt-5 pt-5">
            <h1 class="display-3 fw-bold color_one" data-aos="fade-right" data-aos-duration="1500">Together <span class="color_two"> we Grow</span></h1>
               <div class="col-12 col-md-12 col-lg-7 col-xl-7 mt-5"  data-aos="fade-left"  data-aos-duration="1500">
                   <img class="img-responsive career-img" src="/assets/images/careers1.webp">
               </div>
               <div class="col-12 col-md-12 col-lg-5 col-xl-5 career-text"  data-aos="fade-right"  data-aos-duration="1500">
                   <p>There are jobs, and then there are <strong>CAREERS!</strong>  Work with us to explore new boundaries of your career growth.</p>
					<button class="btn btn_color_one"><a href="application.php">Join Our Team</a></button>
               </div>
           </div>
       </div>
   </section>

    <section class="section-career1">
       <div class="container">
           <div class="row pt-5">
               <div class="col-12 col-md-12 col-lg-5 col-xl-5"  data-aos="fade-left"  data-aos-duration="1500">
                 <h2 class="display-5 fw-bold color_two">We have the
                right place for <span class="color_one">your talent!</span></h2>
             
                   <p class="">We’re always eager to meet fresh new talents, check
                        out our open positions to push your career to
                        new heights.</p>
                      
               </div>
                 <div class="col-12 col-md-12 col-lg-7 col-xl-7"  data-aos="fade-right"  data-aos-duration="1500">
                   <img class="img-responsive career-img" src="/assets/images/careers2.webp">
               </div>
           </div>
       </div>
   </section>
   
   <section class="section-career2 mt-5"  data-aos="slide-up"  data-aos-duration="1500">
       <div class="container">
           <div class="row">
				<div class="col-12 col-md-12 col-lg-12 col-xl-12">
					<h2 class="display-3 fw-bold color_two"> <span class="color_one">We are </span><br> looking for </h2>
				</div>
			 <?php foreach($jobs as $job){?>
				<div class="col-12 col-md-6 col-lg-4 col-xl-4">
					<div class="looking" data-aos="fade-up" data-aos-duration="1500">
						<h3 class="looking-heading"><?php echo $job['title']; ?></h3>
						<p>Experience : <?php echo $job['experience']; ?> </p>
						<h6 class="pt-2"><?php echo $job['area']; ?></h6>
						<button class="btn btn_color_one_sm"><a href="http://localhost/infotech/career-details.php/job/<?php echo str_replace(' ','-',strtolower($job['title'])); ?>">Apply Now</a></button>
					</div>
				</div>
      <?php } ?>
			
			   
           </div>
       </div>
   </section>


  <section class="section-career3" data-aos="fade-right" data-aos-duration="1500">
      <div class="container pb-5">
          <div class="row pt-5">
            <h2 class="display-3 fw-bold color_two"><span class="color_one">Employees </span> Benefits</h2>
			<h5>We've got you covered!</h5>
              <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                  <div  class="benefits" data-aos="fade-left" data-aos-duration="1500">
                      <h2 class="benefit-numbers col-sm-none">01</h2>
                      <h2 class="color_two benefit-name fw-bold">Group<br> Insurance</h2>
                  </div>
                  <div  class="benefits" data-aos="fade-right" data-aos-duration="1500">
                      <h2 class="benefit-numbers col-sm-none">02</h2>
                      <h2 class="color_two benefit-name fw-bold">Generous Paid<br> Time Off</h2>
                </div>
                 
              </div>
              <div class="row">
              <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                   <div  class="benefits" data-aos="fade-left" data-aos-duration="1500">
                      <h2 class="benefit-numbers col-sm-none">03</h2>
                      <h2 class="color_two benefit-name fw-bold">26 Week <br>Maternity Leave</h2>
                   </div>
                    <div  class="benefits" data-aos="fade-right" data-aos-duration="1500">
                      <h2 class="benefit-numbers col-sm-none">04</h2>
                      <h2 class="color_two benefit-name  fw-bold ">On-site Free<br>Health Check UP</h2>
                   </div>
              </div>
          </div>
         
      </div>
  </section>
    <div class="container">
	  <div class="row">
		  <div class="col-sm-2"> </div>
		   <div class="col-sm-8">
			  <hr class="m-app-buttom-hr color_one">
		  </div>
		   <div class="col-sm-2"> </div>
	  </div>
	</div>
    <?php include('inc/footer.php'); ?>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="assets/js/start.js" type="text/javascript"></script>
	<script src="assets/js/jquery.min.js" />
	<script src="assets/js/jquery.royalslider.min.js" />
	
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="assets/js/general.js"></script>

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

AOS.init();	
});




	</script>
	<!-- slider JS files -->
    
   
  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/carrousel.js"></script>
    <script >
        $(function () {
            $('#dg-container').carrousel({
                current: 0,
                autoplay: true,
                interval: 3000
            });
        });
		
    </script>

	
</body>

</html>