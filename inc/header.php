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

<?php 
include('inc/connection.php');
$conn = DB(); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
$page_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>

   <header>
        <!-- Creating Nav Bar  -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img class="logo" src="http://localhost/masters//assets/images/logo.png">
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link <?php if($page_name =='index.php'){ echo'active'; }else{} ?>" href="http://localhost/masters/index.php">Home </a></li>
                        <li class="nav-item"><a class="nav-link <?php if($page_name =='who-we-are.php'){ echo'active'; }else{} ?>" href="http://localhost/masters//who-we-are.php">who we are  </a></li>
                        <li class="nav-item"><a class="nav-link <?php if($page_name =='portfolio.php'){ echo'active'; }else{} ?>" href="http://localhost/masters/portfolio.php"> Portfolio</a></li>
						<li class="nav-item">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="http://localhost/masters/services.php" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="http://localhost/masters/web-d.php">Website development</a>
								<a class="dropdown-item" href="http://localhost/masters/mobile_app_development.php">Mobile app development</a>
								<a class="dropdown-item" href="http://localhost/masters/ui-ux.php">UI/UX design</a>
								<a class="dropdown-item" href="http://localhost/masters/e-commerce.php">E-commerce</a>
								<a class="dropdown-item" href="http://localhost/masters/digital-marketing.php">Digital Marketing</a>
								<a class="dropdown-item" href="http://localhost/masters/bussiness_consultation.php">Business consultation</a>
								<a class="dropdown-item" href="http://localhost/masters/training.php">Training and internship</a>
								</div>
						</li>
                        <!--li class="nav-item"><a class="nav-link <?php //if($page_name =='career.php'){ echo'active'; }else{} ?>" href="/career"> Careers</a></li-->
						<li class="nav-item"><a class="nav-link <?php if($page_name =='blog.php'){ echo'active'; }else{} ?>" href="http://localhost/masters/blog.php"> Blogs</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($page_name =='contact-us.php'){ echo'active'; }else{} ?>" href="http://localhost/masters/contact-us.php"> Contact </a></li>
                    </ul>
                </div>
                <div class="top_button">
                    <div class="button_container" id="toggle">
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                    </div>
                    <div class="overlay" id="overlay">
                        <nav class="overlay-menu">
                            <ul>
                                <li class="display-1 fw-bold"><a href="/">Home</a></li>
                                <li class="display-1 fw-bold"><a href="who-we-are.php">About</a></li>
                                <li class="display-1 fw-bold " id="smenu"><a href="#">Services</a></li>
								<li class="display-1 fw-bold " id="smenu"><a href="http://localhost/masters//portfolio.php">Portfolio</a></li>
								<li class="display-1 fw-bold " id="smenu"><a href="http://localhost/masters//career.php">Careers</a></li>
                                <li class="display-1 fw-bold"><a href="http://localhost/masters//contact-us.php">Get a quote</a></li>
                                <li class="display-1 fw-bold"><a href="http://localhost/masters//blog.php">Blog</a></li>
								
                            </ul>
							<div class="sm-menu" style="display:none;">
								<a class="dropdown-item" href="http://localhost/masters//web-d.php">Website development</a>
								<a class="dropdown-item" href="http://localhost/masters//mobile_app_development.php">Mobile app development</a>
								<a class="dropdown-item" href="http://localhost/masters//ui-ux.php">UI/UX design</a>
								<a class="dropdown-item" href="http://localhost/masters//e-commerce.php">E-commerce</a>
								<a class="dropdown-item" href="http://localhost/masters//digital-marketing.php">Digital Marketing</a>
								<a class="dropdown-item" href="http://localhost/masters//bussiness_consultation.php">Business consultation</a>
								<a class="dropdown-item" href="http://localhost/masters//training.php">Training and internship</a>
							</div>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </header>
  