<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
     
</head>

<body>
    <?php include('inc/header.php');

       $stmt8 = $conn->prepare("SELECT categories.title, service_data.description FROM service_data inner join categories on service_data.service_id = categories.id");
       $stmt8->execute(); 
       $service_data = $stmt8->fetchAll();
	   //print_r($service_data);
	/*   $i=0;
	  foreach($service_data as $service){
	 */
	?>
    <section class="dark-section">
        <div class="container-fluid">
            <div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="dark-service">
						<div class="service-info">
							<h3 class="display-3 fw-bold lh-base mt-5 pt-3">Website Development</h3>
							<p class="p40">By using cutting-edge technologies, our in-house team of developers delivers intuitive and highly agile websites. By keeping your vision in focus we bring out a digital transformation for your business that helps you further broaden your growth. We cover all types of web development solutions from creating plain text pages to complex web-based applications, social network applications, and electronic business applications.</p>
							<button class="btn_color_two"><a href="/website-development-services"> Learn More </a></button>
						</div>
						<div class="service-img">
							<img class="img-responsive services-img" src="/assets/images/services1.webp">
						</div>
					
					</div>
				</div>
            </div>
        </div>
    </section>
	
    <!----------light------->
	<section class="light-section">
        <div class="container-fluid">
            <div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="light-service colm-reverse">
						<div class="light-img">
							 <img class="img-responsive services-img p-0" src="/assets/images/services7.webp">
						</div>
						<div class="light-info">
							<h2 class="display-3 fw-bold color_two">Mobile App Development</h2>
							<p>With an industry-best approach to mobile application development, we bring together the best development and design practices to provide a full cycle of mobile app development for both, Android and IOS devices.
							</p>
							<div class="light-list">
								<ul>
									<li> 
										<a href="">Native Mobile App Development </a>
										<a href="">Hybrid Mobile App Development </a>
										<a href="">Wearable Application Development </a>
									</li>
									<li> 
										<a href="">Web Application Development </a>
									</li>
								</ul>
							</div>
							
							<button class="btn btn_color_one"><a href="/mobile-app-development-services"> Learn More </a></button>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
	
	
	<!-----dark--------->
    <section class="dark-section">
        <div class="container-fluid">
            <div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="dark-service">
						<div class="service-info">
							<h3 class="display-3 fw-bold lh-base">UI/UX Design</h3>
							<p>Our priority is always to create an aesthetic and robust design loaded with user-first values. We offer a wide range of UI/UX design services which includes:</p>
							
							<div class="dark-list">
								<ul>
									<li> 
										<a href="">Branding</a>
										<a href="">Mobile app UX and UI design services </a>
										<a href="">Cross-platform experiences design </a>
									</li>
									<li> 
										<a href="">UI and UX consulting </a>
										<a href="">Web design services </a>
										<a href="">Promotional designs </a>
									</li>
								</ul>
							</div>
							<button class="btn btn_color_two"><a href="/ui-and-ux-services"> Learn More </a></button>
						</div>
						<div class="service-img">
							<img class="img-responsive services-img" src="/assets/images/services6.webp">
						</div>
					
					</div>
				</div>
            </div>
        </div>
    </section>

    <!----------light------->
	<section class="light-section">
        <div class="container-fluid">
            <div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="light-service colm-reverse">
						<div class="light-img">
							 <img class="img-responsive services-img p-0" src="/assets/images/services5.webp">
						</div>
						<div class="light-info">
							<h2 class="display-3 fw-bold color_two">Ecommerce</h2>
							<p>Want to start an eCommerce store? Witness an expanded growth of your business with our customized eCommerce solutions. Our full-suite of eCommerce development services include:
							</p>
							<div class="light-list">
								<ul>
									<li> 
										<a href="">E-Commerce Web Development </a>
										<a href="">E-Commerce Strategy & Consulting </a>
										<a href="">E-Commerce App Development</a>
									</li>
									<li> 
										<a href="">E-Commerce Design </a>
									</li>
								</ul>
							</div>
							
							<button class="btn btn_color_one"><a href="/e-commerce-services"> Learn More </a></button>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
    <!-----dark--------->
    <section class="dark-section">
        <div class="container-fluid">
            <div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="dark-service">
						<div class="service-info">
							<h3 class="display-3 fw-bold lh-base">Digital Marketing</h3>
							<p>There is no doubt that in the contemporary digital world, almost all marketing is done on the internet. With our all in one, lead generative digital marketing services we help you stand out from all your competition</p>
							
							<div class="dark-list">
								<ul>
									<li> 
										<a href="">Content Creation</a>
										<a href="">App Store Optimization </a>
										<a href="">Search Engine Optimization </a>
									</li>
									<li> 
										<a href="">Social Media Marketing </a>
										<a href="">Search Engine Marketing </a>
									</li>
								</ul>
							</div>
							<button class="btn btn_color_two"><a href="/digital-marketing-services"> Learn More </a></button>
						</div>
						<div class="service-img">
							<img class="img-responsive services-img" src="/assets/images/services4.webp">
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
	<!----------light------->
	<section class="light-section">
        <div class="container-fluid">
            <div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="light-service colm-reverse">
						<div class="light-img">
							 <img class="img-responsive services-img p-0" src="/assets/images/services3.webp">
						</div>
						<div class="light-info">
							<h2 class="display-3 fw-bold color_two">Business Consultation</h2>
							<p>With our business consulting services we help you adapt and thrive in the dynamic markets of today. We work with you all through the way to navigate you overcome complex business challenges.
							</p>
							<div class="light-list">
								<ul>
									<li> 
										<a href="">Business strategy </a>
										<a href="">Risk management</a>
										<a href="">Organizational Management</a>
									</li>
									<li> 
										<a href="">Business Update and Reengineering </a>
									</li>
								</ul>
							</div>
							
							<button class="btn btn_color_one"><a href="/bussiness-consultation-services"> Learn More </a></button>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
    <!-----dark--------->
    <section class="dark-section">
        <div class="container-fluid">
            <div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="dark-service">
						<div class="service-info">
							<h3 class="display-3 fw-bold lh-base">Training and recruitment</h3>
							<p class="p40">By providing a substantial industrial environment we not only impart technological expertise to our candidates but also help them build an industrious approach. We prepare you for your journey and help you forge a better career skill set.</p>
							
							<button class="btn btn_color_two"><a href="/training-and-intership">Learn More</a></button>
						</div>
						<div class="service-img">
							<img class="img-responsive services-img" src="/assets/images/services2.webp">
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>

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

	
});

	</script>
	<!-- slider JS files -->
 <script>
	  AOS.init();	
	</script>    
  

	
</body>

</html>