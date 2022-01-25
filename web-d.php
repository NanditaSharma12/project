<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website Development</title>
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
    <link rel="stylesheet" href="/assets/css/carrousel.css" />
    <link rel="icon" href="/assets/images/favicon.png" type="image/gif">
    <!-- preview-related stylesheets -->
    <style>
        



    </style>
</head>

<body>
   <?php include('inc/header.php');
   
        $stmt8 = $conn->prepare("SELECT categories.title,categories.id as cid, service_data.description FROM service_data inner join categories on service_data.service_id = categories.id where categories.id = 1");
        $stmt8->execute(); 
        $service_data = $stmt8->fetch();
	    $cid = $service_data['cid'];
		$tsmt = $conn->prepare("select * from inner_service_data where service_id = $cid");
		$tsmt->execute();
		$inner_data = $tsmt->fetchAll();
		
		
   ?>

 <!-----Section 1--------->
    <section class="section1-mobile web-d-sec1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="web-develop">
						<div class="web-dev-info pr20" data-aos="fade-left" data-aos-duration="1500">
							 <h1 class="display-3 fw-bold color_two"><?php echo $service_data['title']; ?></h1>
							<p><?php echo $service_data['description']; ?></p>
							
						</div>
						<div class="web-dev-img" data-aos="fade-right" data-aos-duration="1500">
							<img class="img-responsive" src="/assets/images/web-d.webp">
						</div>
					</div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- <section class="web-d-sec1 h-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="w-d-text">
                        <h1 class="page-main-title color_two display-3 fw-bold">Website Development</h1>
                        <p class="web-text color_two">By using cutting-edge technologies, our in-house team of developers delivers intuitive and highly agile websites. By keeping your vision in focus we bring out a digital transformation for your business that helps you further broaden your growth. We cover all types of web development solutions from creating plain text pages to complex web-based applications, social network applications, and electronic business applications.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="w-d-img">
                        <img class="img-responsive web-d-img" src="assets/images/web-d.png">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!----------section1------->
    <!-----Section 2--------->
    <section class="web-d-sec2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type1" data-aos="flip-left" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h2 class="sec-title color_one">php development</h2>
                            <p class="web-text color_two">PHP development comes with a wide range of opportunities
                                and we leave no stones unturned in delivering full-spectrum,
                                feature-rich, and fast PHP development solutions to our
                                clients encoded with vigorous integrations. </p>
                        </div>
                        <img class="img-responsive img-web1" src="assets/images/php.webp">
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type" data-aos="flip-right" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h2 class="sec-title color_one">html 5 develpoment</h2>
                            <p class="web-text color_two">We deliver the most innovative and cross-platform HTML
                                development which is not only high performing but also runs
                                across all browsers and screens. With Master Infotech HTML
                                solutions experience high reliability and security.</p>
                        </div>
                        <img class="img-responsive img-web" src="assets/images/html.webp">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------section2------->
    <!-----Section 3--------->
    <section class="web-d-sec3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type1" data-aos="flip-left" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h2 class="sec-title color_one">node js development</h2>
                            <p class="web-text color_two">We provide flexible and robust Node Js development solutions. Our
                                expert developers ensure the product is embedded with agile
                                methodology, customizable according to requirements.</p>
                        </div>
                        <img class="img-responsive img-web1" src="assets/images/node-js (3).webp">
                    </div>
                </div>
                 <div class="col-lg-2"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type" data-aos="flip-right" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h2 class="sec-title color_one">python development</h2>
                            <p class="web-text color_two">At Master Infotech we deliver powerful end-to-end Python
                                Development. We recommend Python for its simple, yet
                                elegant syntax.</p>
                        </div>
                        <img class="img-responsive img-web" src="assets/images/python.webp">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------section3------->
    <!-----Section 4--------->
    <section class="web-d-sec4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type1" data-aos="flip-left" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h2 class="sec-title color_one">dotnet development</h2>
                            <p class="web-text color_two">.NET is an ecosystem and framework designed by Microsoft and
                                used extensively for easy desktop and web application
                                development. We make use of all the implementations of the .NET
                                platform (NET Framework, .NET Core, Xamarin, and UWP). to deliver
                                a fully inventive and responsive web portal and applications.</p>
                        </div>
                        <img class="img-responsive img-web1" src="assets/images/dotnet.webp">
                    </div>
                </div>
                 <div class="col-lg-2"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type" data-aos="flip-right" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h2 class="sec-title color_one">java development</h2>
                            <p class="web-text color_two">Trusted by millions of developers, JAVA is highly efficient for scalable
                                and agile websites and applications. Master Infotech uses and fully
                                integrates with the ever-evolving technologies of JAVA to bring
                                about adaptive and upscale JAVA development solutions. </p>
                        </div>
                        <img class="img-responsive img-web" src="assets/images/java.webp">
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

	
});




	</script>
	<!-- slider JS files -->
    <script>
	  AOS.init();	
	  </script>
   
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

	 <script>
	  AOS.init();	
	  </script>
</body>

</html>