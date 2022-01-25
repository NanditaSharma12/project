<!DOCTYPE html>
<html lang="en">

<head>
    <title>UI/UX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="icon" href="/assets/images/favicon.png" type="image/gif">
    <link rel="stylesheet" href="/assets/css/carrousel.css" />
    <!-- preview-related stylesheets -->

</head>

<body>
    <?php include('inc/header.php'); 
		$stmt8 = $conn->prepare("SELECT categories.title,categories.id as cid, service_data.description FROM service_data inner join categories on service_data.service_id = categories.id where categories.id = 3");
        $stmt8->execute(); 
        $service_data = $stmt8->fetch();
	    $cid = $service_data['cid'];
		$tsmt = $conn->prepare("select * from inner_service_data where service_id = $cid");
		$tsmt->execute();
		$inner_data = $tsmt->fetchAll();
	?>
	
	
	<section class="user-interface">
		<div class="container">
            <div class="row">
                <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="user-box">
						<div class="info"  data-aos="fade-left" data-aos-duration="1500">
							<h1 class="display-3 fw-bold"><?php echo $service_data['title']; ?></h1>
							<p><?php echo $service_data['description']; ?></p>
						</div>
						<div class="info-img" data-aos="fade-right" data-aos-duration="1500">
							<img src="/assets/images/uiux/mobilephone.webp" alt="mobile img">
						</div>
					</div>
				</div>
            </div>
        </div>
	</section>
	
	
	<section class="user-range diagonal"  data-aos="fade-up" data-aos-duration="1500">
		<div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<h2> We offer a wide range of UI/UX design services which includes:</h2>
					<div class="range-box">
					<?php foreach($inner_data as $data){ ?>
						<div class="range-info" data-aos="flip-left" data-aos-duration="1500">
							<div class="info">
								<img src="<?php echo $data['image'];?>" class="img-responsive" alt="img">
								<h5><?php echo $data['title'];?></h5>
								<p><?php echo $data['description'];?></p>
							</div>
						</div>
					<?php } ?>
					
					</div>
				</div>
            </div>
        </div>
	</section>
	

   
		
		
		<section class="design-process" data-aos="fade-up" data-aos-duration="1500">
			<div class="container">
				<div class="row">
					<div class="col col-md-12 col-lg-12">
						<h2 class="display-3 fw-bold color_one">Our Design Process</h2>
						<div class="box-top">
							<div class="box-top-left" data-aos="fade-left" data-aos-duration="1500">
								<h1>01</h1>
								<div class="box-overlay">
									<h3>Research</h3>
									<p>Understanding needs and vision, through series of meetings to figure out a basic plan for an efficient solution</p>
								</div>
							</div>
							<div class="box-top-right" data-aos="fade-right" data-aos-duration="1500">
								<img src="assets/images/uiux/dot2.webp" class="img-responsive ux4img" alt="img">
							</div>
						</div>
						<div class="col coldotted">
							<img src="assets/images/uiux/dottedline2.png" class="img-responsive " alt="img">
						</div>
						<div class="box-bottom colm-reverse">
						  <div class="box-bt-left" data-aos="fade-left" data-aos-duration="1500">
							<img src="assets/images/uiux/dot4.webp" class="img-responsive ux4img" alt="img">
						  </div>
							<div class="box-top-left" data-aos="fade-right" data-aos-duration="1500">
								<h1>02</h1>
								<div class="box-overlay">
									<h3>Moodboards</h3>
									<p>A collection of ideas, fonts, colors, and themes of the project and arrangement of a basic concept.</p>
								</div>
							</div>
						</div>
						<div class="col coldotted">
							<img src="assets/images/uiux/dottedline1.png" class="img-responsive " alt="img">
						</div>
						<div class="box-top">
							<div class="box-top-left" data-aos="fade-left" data-aos-duration="1500">
								<h1>03</h1>
								<div class="box-overlay">
									<h3>Storyboarding</h3>
									<p>Defining the final use cases in accordance with the user’s experience and interaction with the product.</p>
								</div>
							</div>
							<div class="box-top-right" data-aos="fade-right" data-aos-duration="1500">
								<img src="assets/images/uiux/do3.webp" class="img-responsive ux4img" alt="img">
							</div>
						</div>
						<div class="col coldotted">
							<img src="assets/images/uiux/dottedline2.png" class="img-responsive " alt="img">
						</div>
						<div class="box-bottom colm-reverse">
						  <div class="box-bt-left" data-aos="fade-left" data-aos-duration="1500">
							<img src="assets/images/uiux/dot6.webp" class="img-responsive ux4img" alt="img">
						  </div>
							<div class="box-top-left" data-aos="fade-right" data-aos-duration="1500">
								<h1>04</h1>
								<div class="box-overlay">
									<h3>Sketching</h3>
									<p>Pencil sketches to decide on the overall feel and layout of the design. Sketches of different screens under various scenarios.</p>
								</div>

							</div>
						</div>
						<div class="col coldotted">
							<img src="assets/images/uiux/dottedline1.png" class="img-responsive " alt="img">
						</div>
						<div class="box-top">
							<div class="box-top-left" data-aos="fade-left" data-aos-duration="1500">
								<h1>05</h1>
								<div class="box-overlay">
									<h3>Wireframes</h3>
									<p>A design to take you through the product without color, pictures, and fonts with designation click-on actions.</p>
								</div>

							</div>
							<div class="box-top-right" data-aos="fade-right" data-aos-duration="1500">
								<img src="assets/images/uiux/dot1.webp" class="img-responsive ux4img" alt="img">
							</div>
						</div>
						<div class="col coldotted">
							<img src="assets/images/uiux/dottedline2.png" class="img-responsive " alt="img">
						</div>
						<div class="box-bottom colm-reverse">
						  <div class="box-bt-left" data-aos="fade-left" data-aos-duration="1500">
							<img src="assets/images/uiux/dot5.webp" class="img-responsive ux4img" alt="img">
						  </div>
							<div class="box-top-left" data-aos="fade-right" data-aos-duration="1500">
								<h1>06</h1>
								<div class="box-overlay">
									<h3>Visual Design</h3>
									<p>A final design of the product with finalized visual design elements.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
		<section class="tech-stack" data-aos="fade-up" data-aos-duration="1500">
			<div class="container">
				<div class="row">
					<div class="col-12 ">
                        <h1 class="display-3 fw-bold text-center color_two">Our Tech Stack</h1>
                    </div>
					<div class="col-12 ">
                        <div class="tech-stack-logo">
							
								<span data-aos="zoom-in" data-aos-duration="1500"><img src="assets/images/uiux/01.webp" class="img-responsive icons" alt="img"></span>
							
								<span data-aos="zoom-in" data-aos-duration="1500"><img src="assets/images/uiux/02.webp" class="img-responsive icons" alt="img"></span>
							
								<span data-aos="zoom-in" data-aos-duration="1500"><img src="assets/images/uiux/03.webp" class="img-responsive icons" alt="img"></span>
							
								<span data-aos="zoom-in" data-aos-duration="1500"><img src="assets/images/uiux/04.webp" class="img-responsive icons" alt="img"></span>
							
								<span data-aos="zoom-in" data-aos-duration="1500"><img src="assets/images/uiux/05.webp" class="img-responsive icons" alt="img"></span>
							
								<span data-aos="zoom-in" data-aos-duration="1500"><img src="assets/images/uiux/06.webp" class="img-responsive icons" alt="img"></span>
							
								<span data-aos="zoom-in" data-aos-duration="1500"><img src="assets/images/uiux/07.webp" class="img-responsive icons" alt="img"></span>
							
								<span data-aos="zoom-in" data-aos-duration="1500"><img src="assets/images/uiux/08.webp" class="img-responsive icons" alt="img"></span>
							
								<span data-aos="zoom-in" data-aos-duration="1500"><img src="assets/images/uiux/09.webp" class="img-responsive icons" alt="img"></span>
							
								<span data-aos="zoom-in" data-aos-duration="1500"><img src="assets/images/uiux/10.webp" class="img-responsive icons" alt="img"></span>
						</div>
                    </div>
				
				</div>
			</div>
		
		</section>
            
		<div class="container">
			<div class="row">
				<div class="uxhr"></div>
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

	
</body>

</html>