<!DOCTYPE html>
<html lang="en">

<<head>

</head>

<body>
   <?php include('inc/header.php');
include('inc/queries.php');
   ?>
    <!-----Section 1--------->
    <section class="section1 page-section position-relative">
		<div id="background">
			<p id="bg-text">TRUST</p>
		</div>
        <div class="container">
            <div class="row d-md-none d-block">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <img class="img-fluid block-img fancy_border" src="http://localhost/masters/assets/images/master1.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 dev-tech">
					<div class="baner">
						<div class="baner-info"  data-aos="fade-left"  data-aos-duration="1000">
							<h3 class="display-3 fw-bold lh-base color_two">Developing Technologies and <br><span class="color_one"> Trust</span></h3>
							<p class="color_two"><?php echo $tech_content['description']; ?></p>
							<button class=" btn_color_one"><a href="http://localhost/masters/who-we-are.php">learn more</a></button>
						</div>
						<div class="baner-img d-md-block d-none"  data-aos="fade-right"  data-aos-duration="1000">
							<img class="img-fluid block-img" src="http://localhost/masters/assets/images/triangle.webp">
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
    <!-----Section 2---->
    <section class="section2 page-section h-100 hide" style="display:none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="digi-experience" data-aos="slide-right"  data-aos-duration="1000">
					<div class="position-relative" data-aos="slide-right"  data-aos-duration="1000">
						<h2 class=" fw-bold text-white">Enhancing </br> your </br><span class="color_one"> Digital </br> Experience </span> with our extensive IT services</h2>
						<h4 class="section_main_title">SERVICES</h4>
						<div class="line"></div>
					</div>
				
					<div class="card-container">
						<!--  Panel-1  -->
                        <?php
                        $i =1;
                        foreach($categories as $data){?>
						<div class="card <?php if($i==1){ echo'active webdev'; }else{} ?>">
							<div class="card-details">
								<div class="font-img">
									<img src="<?php echo str_replace('../','',$data['icon']); ?>">
								</div>
								<h3><?php echo $data['title']; ?></h3> 
								<div class="info text-center" >
									<p class="panel-para"><?php echo $data['description']; ?></p>
									<button class=" btn_service btn_color_two">
                                    <?php if($data['title'] == 'Website Development'){?>
                                        <a href="http://localhost/masters//web-d.php">Learn More</a></button>
                                   <?php  }elseif($data['title'] == 'Mobile App Development'){?>
                                    <a href="http://localhost/masters//mobile_app_development.php">Learn More</a></button>
                                    <?php  }elseif($data['title'] == 'UI/UX Design'){?>
                                    <a href="http://localhost/masters//ui-ux.php">Learn More</a></button>
                                     <?php  }elseif($data['title'] == 'DIGITAL MARKETING'){?>
                                    <a href="http://localhost/masters//digital-marketing.php">Learn More</a></button>
                                    <?php }elseif($data['title'] == 'Ecommerce'){?>
                                    <a href="http://localhost/masters//e-commerce.php">Learn More</a></button>
                                    <?php } ?> 
                                    
								</div>
							</div>
						</div>
                    <?php $i++; } ?>
						
					</div>
					
					
					</div>
                </div>
            </div>
        </div>
    </section>
    <!-----Section 3---->
    <section class="section3 page-section h-100 position-relative">
		<div id="s-background">
			<p id="s-bg-text">Services</p>
		</div>
        <div class="container">
             <!--<div class="row">
                <div class="col-12" data-aos="slide-right"  data-aos-duration="1000">
                    <h4 class="display-3 lh-base ptb56 fw-bold color_two">Fostering your <span class="color_one">needs</span></h4>
                </div>
            </div>
           <div class="row services_other">
				<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <div class="services_inside mr40 aos-init aos-animate" data-aos="flip-right" data-aos-duration="1000">
							<div>
								<h2 class="display-3 fw-bold text-white"><span class="color_one">Enhancing  your  Digital  Experience  with our extensive IT services</span></h2>  
							</div>
						</a>
                    </div>
                </div>
				<div class="col-12 col-sm-12 col-md-5 col-lg-5  col-xl-5">
                    <div class="services_inside mr40 aos-init aos-animate" data-aos="flip-right" data-aos-duration="1000">
							<a href="/digital-marketing">
							<img src="assets/images/web-development.png">
							<div>
								<h5 class="mb-2">Website Development</h5>
								<p>With our best web development services, we bring you a responsive website design that not just attracts traffic but also a higher base of customers. </p>
								<i class="fal fa-arrow-right"></i>
							</div>
						</a>
                    </div>
                </div>
			</div>-->
			<div class="row services_other">
				<ul>
				<li>
                    <div class="services_inside  aos-init aos-animate" data-aos="flip-right" data-aos-duration="1000">
							<div>
								<h2 class="display-3 fw-bold color_two">Enhancing  your  <span class="color_one">Digital  Experience </span> with our extensive IT services</h2>  
							</div>
						</a>
                    </div>
                </li>
				<li>
                    <div class="services_inside  aos-init aos-animate" data-aos="flip-right" data-aos-duration="1000">
							<a href="http://localhost/masters//web-d.php">
							<img src="http://localhost/masters/assets/images/web-development.png">
							<div>
								<h5 class="mb-2">Website Development</h5>
								<p>With our best web development services, we bring you a responsive website design that not just attracts traffic but also a higher base of customers. </p>
								<i class="fal fa-arrow-right"></i>
							</div>
						</a>
                    </div>
                </li>
				<li>
                    <div class="services_inside  aos-init aos-animate" data-aos="flip-right" data-aos-duration="1000">
							<a href="http://localhost/masters//mobile_app_development.php">
							<img src="http://localhost/masters/assets/images/mobile-development.png">
							<div>
								<h5 class="mb-2">Mobile App Development</h5>
								<p>With our superior Mobile App Design and Development services, we bring you a customized app with seamless usability, with our user friendly application you witness a magnified rise in the growth of your business </p>
								<i class="fal fa-arrow-right"></i>
							</div>
						</a>
                    </div>
                </li>
				<li>
                    <div class="services_inside  aos-init aos-animate" data-aos="flip-right" data-aos-duration="1000">
							<a href="http://localhost/masters//ui-ux.php">
							<img src="http://localhost/masters/assets/images/ux.png">
							<div>
								<h5 class="mb-2">UI/UX Design</h5>
								<p>Our UI/UX services empower you to attain much higher user retention. When it comes to our design process we are extra focused on modern aesthetic values. </p>
								<i class="fal fa-arrow-right"></i>
							</div>
						</a>
                    </div>
                </li>
				<li>
                    <div class="services_inside  aos-init aos-animate" data-aos="flip-right" data-aos-duration="1000">
							<a href="http://localhost/masters//e-commerce.php">
							<img src="http://localhost/masters/assets/images/ecommerce.png">
							<div>
								<h5 class="mb-2">Ecommerce</h5>
								<p>Our state-of-the-art ECommerce Website Development practice enables you to witness an expansion of your Ecommerce platform like never before, with an even higher graph of sales. </p>
								<i class="fal fa-arrow-right"></i>
							</div>
						</a>
                    </div>
                </li>
				
			
			
			
            <?php foreach($foster_needs as $datax){ ?>
                <li>
                    <div class="services_inside " data-aos="flip-right"  data-aos-duration="1000">
                    <?php if($datax['title'] == 'Digital Marketing'){?>
                                    <a href="http://localhost/masters//digital-marketing.php">
										<img src="http://localhost/masters/assets/images/digital-campaign.png" >
										<div>
											<h5 class="mb-2"><?php echo $datax['title']; ?></h5>
											<p><?php echo $datax['description']; ?></p>
											<i class="fal fa-arrow-right"></i>
										</div>
									</a>
                                    <?php  }elseif($datax['title'] == 'Business Consultation'){?>
                                    <a href="http://localhost/masters//bussiness_consultation.php"> 
										<img src="http://localhost/masters/assets/images/teamwork.png" />
										<div>
											<h5 class="mb-2"><?php echo $datax['title']; ?></h5>
											<p><?php echo $datax['description']; ?></p>
											<i class="fal fa-arrow-right"></i>
										</div>
									</a>
                                     <?php  }elseif($datax['title'] == 'Training and internship'){?>
                                    <a href="http://localhost/masters//training.php">
										<img src="http://localhost/masters/assets/images/online-learning.png" />
										<div>
											<h5 class="mb-2"><?php echo $datax['title']; ?></h5>
											<p><?php echo $datax['description']; ?></p>
											<i class="fal fa-arrow-right"></i>
										</div>
									</a>
                                    <?php } ?>  
					
                    </div>
                </li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </section>

	
	
	
	<section class="banner-slider-parent">
        <div class="container-fluid">
            <div class="row align-items-center banner-row">
                <div class="col-md-4">
                    <div class="slider-left" data-aos="slide-right"  data-aos-duration="1000">
                        <h1>
                            Four <span class="red-color"> D</span><span class="lower-case"> s</span><br> of our<br> work<br> Process!
                        </h1>
						<div class="m-hide">
                        <div class="d-flex">
                            <h3>0</h3>
                            <!-- Slider -->
                            <div class="swiper numbers">
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide"><h3>1</h3></div>
                                    <div class="swiper-slide"><h3>2</h3></div>
                                    <div class="swiper-slide"><h3>3</h3></div>
                                    <div class="swiper-slide"><h3>4</h3></div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination d-flex m-hide">
                            <div class="slider-previous slider-pagi-icon red-color">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="slider-next slider-pagi-icon">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
						</div>
						<div class="d-hide">
							<div class="d-flex">
								<div class="d-flex">
									<h3>0</h3>
									<!-- Slider -->
									<div class="swiper numbers">
										<div class="swiper-wrapper">
											<!-- Slides -->
											<div class="swiper-slide"><h3>1</h3></div>
											<div class="swiper-slide"><h3>2</h3></div>
											<div class="swiper-slide"><h3>3</h3></div>
											<div class="swiper-slide"><h3>4</h3></div>
										</div>
									</div>
								
								</div>
								<div class="slider-pagination d-flex">
									<div class="slider-previous slider-pagi-icon red-color">
										<i class="fas fa-chevron-left"></i>
									</div>
									<div class="slider-next slider-pagi-icon">
										<i class="fas fa-chevron-right"></i>
									</div>
								</div>
							</div>
						</div>
						
                    </div>
                </div>
                <div class="col-md-4 m-align-left">
                     <!-- Slider -->
                    <div class="swiper details" data-aos="slide-up"  data-aos-duration="1000">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php foreach($home_slider as $slider){ ?>
                            <div class="swiper-slide">
                                <div class="slider-center">
                                    <h2>
                                        <?php echo $slider['title']; ?>
                                    </h2>
                                    <p>
                                    <?php echo $slider['description']; ?>
                                    </p>
                                </div>
                            </div> <?php } ?>
                       
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 m-align-right">
                    <div class="slider-right" data-aos="slide-up"  data-aos-duration="1000">
                        <img src="http://localhost/masters/assets/images/project/slider-border.png" alt="" class="border-slide">
                        <!-- Slider -->
                        <div class="swiper slide-images">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <?php foreach($home_slider as $slider){ ?>
                                <div class="swiper-slide"> 
                                    <div class="slide-img">
                                         <img src="<?php echo str_replace('../','',$slider['image']); ?>" alt="img">
                                    </div>
                                </div>
                                <?php } ?>
                             
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	
	
	
    <!-----Section 5---->
    <section class="section5 page-section choose-best h-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<div class="baner">
						<div class="baner-info" data-aos="fade-left"  data-aos-duration="1000">
							<h2 class="display-5 fw-bold color_two">CHOOSE THE BEST  <br> <span class="color_one">IT SOLUTION</span>  PROVIDER! </h2> 
							<h5>Our <span>PASSION</span> Makes us the <span> BEST</span></h5> 
							<p class="color_two"><?php echo $choose_best['description']; ?></p>
						</div>
						<div class="baner-img" data-aos="fade-right"  data-aos-duration="1000">
							<img class="img-fluid" src="http://localhost/masters/assets/images/person.webp">
						</div>
					</div>
                 

                   <!--  <p class="mt-4 fs-6 color_two"></p> -->
                </div>
                <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                    <img class="img-fluid" src="assets/images/person.png">
                </div> -->
            </div>
        </div>
    </section>  
    <!-----Section 6---->
    <section class="section6 page-section h-100 position-relative">
		<div id="o-background">
			<p id="o-bg-text">PORTFOLIO</p>
		</div>
        
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-left""  data-aos-duration="1000">
                    <h4 class="display-3 fw-bold">OUR <span class="color_one">SUCCESS</span><br>STORIES</h4>
                    <p class="mt-4 fs-5">We let our <span class="color_one">work speak</span> for us.</p>
                    
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                    <div class="bg_red" data-aos="fade-right"  data-aos-duration="1000">
                        <button class="mt-5 btn_color_two"><a href="http://localhost/masters//portfolio.php">View All Projects</a></button>
                    </div>
                </div>
			</div>
						<div class="portfolio_sec">	
                            <?php foreach($portfolio  as $port){ ?>	
							<div class="wrapper" data-aos="flip-left"  data-aos-duration="1000">		
								<div class="card"><a href="http://localhost/masters//portfolio.php"><img src="<?php echo str_replace('../','',$port['image']); ?>"/ ><i class="fal fa-arrow-right"></i></a></div>	
							</div>	
                            <?php } ?>
								
						</div>

		
            </div>
        </div>
    </section>
	
    <!-----Section 7---->
    <section class="section7 page-section position-relative h-100" data-aos="slide-up"  data-aos-duration="1000">
		<div id="q-background">
			<p id="q-bg-text">QUALITY</p>
		</div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
					<div class="baner">
						<div class="baner-info" data-aos="fade-right"  data-aos-duration="1000">
							 <h4 class="display-3 fw-bold color_two">QUALITY <br><span class="color_one"> ASSURANCE</span></h4>
							<p class="color_two"><?php echo $quality_content    ['description']; ?></p>
							<!-- <button class=" btn_color_one"><a href="#">learn more</a></button> -->
						</div>
						<div class="baner-img" data-aos="fade-left"  data-aos-duration="1000">
							 <img class="img-fluid" src="http://localhost/masters/assets/images/quality_img.webp" alt="QUALITY ASSURANCE">
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
    <!-----Section 8---->
    <section class="section8 page-section h-100 position-relative">
        <div id="c-background">
			<p id="c-bg-text">CASE STUDY</p>
		</div>
        <div class="container mb-5">
            <div class="row mb-5">
                <div class="col-12">
                    <h4 class="case-study-main display-3 fw-bold">CASE STUDY</h4>
                    <p class="fs-5">How we <span class="color_one">made it happen.</span></p>
                </div>
            </div>
			
			
			<div CLASS="row">
				<div class="col-md-12">
					<div class="case-study-box">
						<div class="case_study" data-aos="zoom-in"  data-aos-duration="1500" onclick="location.href='http://localhost/masters//case-study.php';" style="cursor: pointer;">
							<img src="http://localhost/masters/assets/images/case-study/case-acc.webp" alt="">
							<div class="case-over">
								<h3>ACCELPRO</h3>
								 <p>AccelPro is a Fast Growing Indian Product Company that provides Secure Remote Access Products and Services with an Innovative Approach. Founded with a Mission to deliver Secure Access Products, meeting Customer Expectations in terms of Product Technology, Ease of Use,.....</p>
								
								 <button class=" btn_white_blue"><a href="http://localhost/masters//case-study.php">Learn More</a></button>
							</div>
						</div>
						<div class="case_study" data-aos="zoom-in"  data-aos-duration="1500" onclick="location.href='http://localhost/masters//case-study2.php';" style="cursor: pointer;">
							<img src="http://localhost/masters/assets/images/case-study/case-tcc.webp" alt="">
							<div class="case-over">
								<h3>The car club</h3>
								<p>The Car Club is the last destination for premier exclusive and interesting luxury cars for you, established in the year 2001.... </p>
								<button class=" btn_white_blue"><a href="http://localhost/masters//case-study2.php">Learn More</a></button> 
							</div>
						</div>
						<div class="case_study" data-aos="zoom-in"  data-aos-duration="1500">
							<img src="http://localhost/masters/assets/images/case-study/case-lh.webp" alt="">
							<div class="case-over">
								<h3>ludhiana heights</h3>
								 <p></p>
								<button class=" btn_white_blue"><a href="http://localhost/masters//case-study2.php">Learn More</a></button> 
							</div>
						</div>
						<div class="case_study" data-aos="zoom-in"  data-aos-duration="1500">
							<img src="http://localhost/masters/assets/images/case-study/case-wg.webp" alt="">
							<div class="case-over">
								<h3>watergate</h3>
								<p></p>
								<button class=" btn_white_blue"><a href="http://localhost/masters//case-study2.php">Learn Morew</a></button> 
							</div>
						</div>
						<div class="case_study" data-aos="zoom-in"  data-aos-duration="1500">
							<img src="http://localhost/masters/assets/images/case-study/case-oz.webp" alt="">
							<div class="case-over">
								<h3>ozzy</h3>
								<p></p>
								<button class=" btn_white_blue"><a href="http://localhost/masters//case-study2.php">Learn More</a></button> 
							</div>
						</div>
						<div class="case_study" data-aos="zoom-in"  data-aos-duration="1500">
							<img src="http://localhost/masters/assets/images/case-study/case-fd.webp" alt="">
							<div class="case-over">
								<h3>freedeals.com</h3>
								<p></p>
								<button class=" btn_white_blue"><a href="http://localhost/masters//case-study2.php">Learn More</a></button> 
							</div>
						</div>
						
				
					</div>
				</div>
			</div>
			
            </div>
        </div>
    </section>
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


$(".card").hover( 
    function() {
         $(this).addClass("active").siblings().removeClass("active");  
    }
);
	
});
    



	</script>
	<!-- slider JS files -->
    <script>
        $(document).ready(function () {


            $("#smenu").click(function(){
	  $(".sm-menu").toggle();
	});


        });



    </script>
   
  <script src="http://localhost/masters//assets/js/jquery.min.js"></script>
     <!--script src="/assets/js/carrousel.js"></script>
    <script >
        $(function () {
            $('#dg-container').carrousel({
                current: 0,
                autoplay: true,
                interval: 3000
            });
        });
		AOS.init();
    </script--> 

	
</body>

</html>
