<!DOCTYPE html>
<html lang="en">

<head>
    
   
</head>

<body>
<?php include('inc/header.php'); ?>
    <!-----Section 1--------->
     <section class="section-p">
        <div class="container">
            <div class="row">
				<div class="col-sm-12 col-lg-12">
					<div id="portfolio">
						<div class="port-img pr20" data-aos="fade-left"  data-aos-duration="1500">
							<img class="img-responsive" src="assets/images/p-1.png">
						</div>
						<div class="port-info align-center pl20" data-aos="fade-right"  data-aos-duration="1500">
							<h2>ACCELPRO</h2>
							<p class="text-left">Founded in July, 2011, AccelPro is a Fast Growing Indian Product Company into
								Secure Remote Access Products and Services with Innovative Approach,
								Having 100+ Enterprises and Telcos using AccelPro Secure Access Products to
								Secure their Networks. AccelPro addresses much needed requirement for Fast &
								Easy Secure Access solution, delivers next generation of Secure Access Products
								which helps Organizations of all sizes to Securely Access their Corporate
								Applications and Network Resources from Anymachine and Anywhere.</p>
							<button class="btn btn_color_one"><a href="case-study.php">Case study</a></button>
						</div>
					</div>
				</div>
            </div>
    </section>

	
    <section class="p-section1">
        <div class="container">
            <div class="row">
				<div class="col-sm-12 col-lg-12">
					<div id="portfolio" class="colm-reverse">
						<div class="port-info align-center pr20" data-aos="fade-left"  data-aos-duration="1500">
							<h2>The Car Club</h2>
							<p class="text-left">The Car Club is the last destination for premier exclusive and interesting luxury cars for you, established in the year 2001 and successfully serving the industry of pre-owned luxury cars. We are committed to delivering the very best quality vehicles at the most prominent competitive costs. Our business ideology is to deliver what we commit on time.</p>
							<button class="btn btn_color_one"><a href="case-study2.php">Case study</a></button>
						</div>
						<div class="port-img pl20" data-aos="fade-right"  data-aos-duration="1500">
							<img class="img-responsive" src="assets/images/carclub-img.png">
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
    <section class="p-section2">
        <div class="container">
            <div class="row">
				<div class="col-sm-12 col-lg-12">
					<div id="portfolio">
						<div class="port-img pr20"  data-aos="fade-left"  data-aos-duration="1500">
							<img class="img-responsive" src="assets/images/p-3.png">
						</div>
						<div class="port-info align-center pl20"  data-aos="fade-right"  data-aos-duration="1500">
							<h2>Ludhiana Heights</h2>
							<p class="text-left">Ludhiana Heights is a project inspired by the Prime Minister's "Housing for All" initiative. With rising job opportunities in formal and informal sectors in
                        Ludhiana, a crucial part of overall urban economy growth will be new kinds of
                        premium housing projects.</p>
							<button class="btn btn_color_one"><a href="#">Case study</a></button>
						</div>
					</div>
				</div>
            </div>
    </section>


    <section class="p-section3">
        <div class="container">      
            <div class="row">
				<div class="col-sm-12 col-lg-12">
					<div id="portfolio" class="colm-reverse">
						<div class="port-info align-center pr20"  data-aos="fade-left"  data-aos-duration="1500">
							<h2>OZZY</h2>
							<p class="text-left">Ozzy is an Indian multinational restaurant aggregator and
                                food delivery company. Ozzy provides information,
                                menus and user-reviews of restaurants as well as food
                                delivery options from partner restaurants in select cities.</p>
							<button class="btn btn_color_one"><a href="#">Case study</a></button>
						</div>
						<div class="port-img pl20"  data-aos="fade-right"  data-aos-duration="1500">
							<img class="img-responsive" src="assets/images/p-4.png">
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
	<section class="p-section1">
        <div class="container">
            <div class="row">
				<div class="col-sm-12 col-lg-12">
					<div id="portfolio">
						<div class="port-img pr20" data-aos="fade-left"  data-aos-duration="1500">
							<img class="img-responsive" src="assets/images/p-5.png">
						</div>
						<div class="port-info align-center pl20" data-aos="fade-right"  data-aos-duration="1500">
							<h2>LIME</h2>
							<p class="text-left">Lime is one of the foremost trucking companies, delivering the plethora of
                        transport services to its esteemed consumers across Malawi. We are the
                        “best-in-class and cost-effective transporter” as defined by our customers and
                        serving this industry for many years. </p>
							<button class="btn btn_color_one"><a href="case-study2.php">Case study</a></button>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
           <section>
			  <div class="container">
				  <div class="row">
					  <div class="col-sm-2">
						  
					  </div>
					   <div class="col-sm-8">
						  <hr class="m-app-buttom-hr color_one">
					  </div>
					   <div class="col-sm-2">
						  
					  </div>
				  </div>
			  </div>
		  </section>
                                                             
		  <?php include('inc/footer.php'); ?>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
	

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


        });

AOS.init();


    </script>
	
</body>

</html>
	