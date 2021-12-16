<!DOCTYPE html>
<html lang="en">

<head>
   
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
							 <h2 class="display-3 fw-bold lh-base color_two"><?php echo $service_data['title']; ?></h2>
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
							<img class="img-responsive" src="http://localhost/masters//assets/images/mobappimg.webp">
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
						 <h3><?php echo $data['title'];?></h3>
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
						 <h3><?php echo $data['title'];?></h3>
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