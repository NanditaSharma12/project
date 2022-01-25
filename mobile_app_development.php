<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mobile App Development</title>
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
		$stmt8 = $conn->prepare("SELECT categories.title,categories.id as cid, service_data.description FROM service_data inner join categories on service_data.service_id = categories.id where categories.id = 2");
        $stmt8->execute(); 
        $service_data = $stmt8->fetch();
	    $cid = $service_data['cid'];
		$tsmt = $conn->prepare("select * from inner_service_data where service_id = $cid");
		$tsmt->execute();
		$inner_data = $tsmt->fetchAll();
	?>
    <!-----Section 1--------->
     <section class="section1-mobile">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="mobile-app-develop mob-block">
						<div class="mobi-info pr20"  data-aos="fade-left" data-aos-duration="1500">
							 <h1 class="display-3 fw-bold lh-base color_two"><?php echo $service_data['title']; ?></h1>
							<p><?php echo $service_data['description']; ?></p>
							<!--ul class="list-unstyled">
								<li> <i class="fas fa-check-circle"></i> Native and Hybrid app development </li>
								<li> <i class="fas fa-check-circle"></i> Customized app development solution for IOS and Android </li>
								<li> <i class="fas fa-check-circle"></i> Mobile application UI/UX design</li>
								<li> <i class="fas fa-check-circle"></i> IoT application development</li>
								<li> <i class="fas fa-check-circle"></i> Maintenance and support </li>
								<li> <i class="fas fa-check-circle"></i> Rigorous testing and Q&A before delivery</li>
								<li> <i class="fas fa-check-circle"></i> Rapid development using Agile Methodology</li>
							</ul-->
						</div>
						<div class="mobi-img" data-aos="fade-right" data-aos-duration="1500">
							<img class="img-responsive" src="/assets/images/mobappimg.jpg">
						</div>
					</div>
                </div>
                
            </div>
        </div>
    </section>
    <!----------section1------->
    <?php 
		  
		  $i=1;
		  foreach($inner_data as $data){?>
		  <?php  if($i%2==1){ ?>
     <!-----Section 2--------->
     <section class="section<?php echo $i; ?>-mobile">
        <div class="container">
            <div class="row">
				<div class="mobile-app-develop colm-reverse">
					<div class="mobi-img pr20" data-aos="flip-left" data-aos-duration="1500">
						<img class="img-responsive" src="<?php echo $data['image'];?>">
					</div>
					<div class="mobi-info pl20" data-aos="fade-right" data-aos-duration="1500">
						 <h2><?php echo $data['title'];?></h2>
						<p><?php echo $data['description'];?></p>
						<ul class="icons">
						   <li class="m-app-icons"><img src="../uploads/apple-black-logo.webp"></li>
							<li class="m-app-icons"><img class="img-responsive" src="../uploads/android.webp"></li>
						</ul>
					</div>
					
				</div>
            </div>
        </div>
    </section>
    <!----------section2------->
  <?php }else{ ?>
    <!-----Section 3--------->
     <section class="section<?php echo $i; ?>-mobile">
        <div class="container">
            <div class="row">
                <div class="mobile-app-develop mob-block">
					<div class="mobi-info pr20" data-aos="fade-left" data-aos-duration="1500">
						 <h2><?php echo $data['title'];?></h2>
						<p><?php echo $data['description'];?></p>
						<ul class="icons">
							<li class="m-app-icons"><img src="../uploads/windows.webp"></li>
						   <li class="m-app-icons"><img src="../uploads/apple-black-logo.webp"></li>
						   <li class="m-app-icons"><img class="img-responsive" src="../uploads/android.webp"></li>
						</ul>
					</div>
					<div class="mobi-img pl20" data-aos="flip-right" data-aos-duration="1500">
						<img class="img-responsive" src="<?php echo $data['image'];?>">
					</div>
				</div>
            </div>
        </div>
    </section>
    <!----------section3------->
 <?php }?>
			
				<?php $i++; } ?>
    <!-----Section 4--------->
   
    <!----------section4------->
                              
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

	
</body>

</html>