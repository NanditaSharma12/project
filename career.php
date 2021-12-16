<!DOCTYPE html>
<html lang="en">

<head>
   
</head>

<body>
<?php include('inc/header.php');

$stmt4 = $conn->prepare("SELECT * FROM jobs");
$stmt4->execute(); 
$jobs = $stmt4->fetchAll();
?>
    <!-----Section 1--------->
   <section class="section-career" style="background-image: url(http://localhost/masters/assets/images/case-study/casestudybg.png);">
       <div class="container">
           <div class="row mt-5 pt-5">
            <h1 class="display-3 fw-bold color_one" data-aos="fade-right" data-aos-duration="1500">Together <span class="color_two"> we Grow</span></h1>
               <div class="col-12 col-md-12 col-lg-7 col-xl-7 mt-5"  data-aos="fade-left"  data-aos-duration="1500">
                   <img class="img-responsive career-img" src="http://localhost/masters//assets/images/careers1.webp">
               </div>
               <div class="col-12 col-md-12 col-lg-5 col-xl-5 career-text"  data-aos="fade-right"  data-aos-duration="1500">
                   <p>There are jobs, and then there are <strong>CAREERS!</strong>  Work with us to explore new boundaries of your career growth.</p>
					<button class="btn btn_color_one"><a href="http://localhost/masters/application.php">Join Our Team</a></button>
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
                   <img class="img-responsive career-img" src="http://localhost/masters//assets/images/careers2.webp">
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
						<button class="btn btn_color_one_sm"><a href="http://localhost/masters//career-details/job/<?php echo str_replace(' ','-',strtolower($job['title'])); ?>">Apply Now</a></button>
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