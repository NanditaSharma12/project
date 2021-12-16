<!DOCTYPE html>
<html lang="en">

<head>
 <title>Master Infotech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/masters/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> 
    <link rel="stylesheet" type="text/css" href="http://localhost/masters/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/masters/assets/css/fixes.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/masters/assets/css/responsive_col.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/masters/assets/css/responsive_col_sm.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/masters/assets/css/responsive_col_md.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/masters/assets/css/responsive_col_lg.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="http://localhost/masters/assets/css/carrousel.css"/>
	<link rel="icon" href="http://localhost/masters/assets/images/favicon.png" type="image/gif">
    <!-- preview-related stylesheets -->
    
</head>

<body>
    <?php include('inc/header.php');

       $stmt8 = $conn->prepare("SELECT categories.title, service_data.description FROM service_data inner join categories on service_data.service_id = categories.id");
       $stmt8->execute(); 
       $service_data = $stmt8->fetchAll();
	   //print_r($service_data);
	  $i=0;
	  foreach($service_data as $service){
	
	?>
    <?php

if($service['title'] =='Website Development'){
	 $image = 'http://localhost/masters//assets/images/services1.png';
	$ink = 'http://localhost/masters//web-d.php';
}elseif($service['title'] =='Mobile App Development'){
	$image = 'http://localhost/masters//assets/images/services7.png';
	$ink = 'http://localhost/masters//mobile_app_development.php';
}
elseif($service['title'] =='UI/UX Design'){
	$image = 'http://localhost/masters//assets/images/services6.png';
	$ink = 'http://localhost/masters//ui-ux.php';
}
elseif($service['title'] =='Ecommerce'){
	$image = 'http://localhost/masters//assets/images/services5.png';
	$ink = 'http://localhost/masters//e-commerce.php';
}
elseif($service['title'] =='Digital Marketing'){
	$image = 'http://localhost/masters//assets/images/services4.png';
	$ink = 'http://localhost/masters//digital-marketing.php';
}
elseif($service['title'] =='Business Consultation'){
	$image = 'http://localhost/masters//assets/images/services3.png';
	$ink = 'http://localhost/masters//bussiness_consultation.php';
}
elseif($service['title'] =='Training and internship'){
	$image = 'http://localhost/masters//assets/images/services2.png';
	$ink = 'http://localhost/masters//training.php';
}

	if($i % 2 ==0){ 
	
	?>
	<!-----dark--------->
    <section class="dark-section  <?php echo $i;?>">
        <div class="container-fluid">
            <div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="dark-service">
						<div class="service-info">
							<h3 class="display-3 fw-bold lh-base mt-5 pt-3"><?php echo $service['title']; ?></h3>
							<p class="p40"><?php echo $service['description']; ?></p>
							<button class="btn_color_two"><a href="<?php echo $ink; ?>"> Learn More </a></button>
						</div>
						<div class="service-img">
							<img class="img-responsive services-img" src="<?php echo $image; ?>">
						</div>
					
					</div>
				</div>
            </div>
        </div>
    </section>
	<?php }else{ ?> 
	 <!----------light------->
	<section class="light-section">
        <div class="container-fluid">
            <div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="light-service colm-reverse">
						<div class="light-img">
							 <img class="img-responsive services-img p-0" src="<?php echo $image; ?>">
						</div>
						<div class="light-info">
							<h2 class="display-3 fw-bold color_two"><?php echo $service['title']; ?></h2>
							<p><?php echo $service['description']; ?></p>
							
							<button class="btn btn_color_one"><a href="<?php echo $ink; ?>"> Learn More </a></button>
						</div>
					</div>
				</div>
            </div>
        </div>
    </section>
	
	
	<?php }?>
	  <?php $i++; } ?>
    <!----------light------->
	
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