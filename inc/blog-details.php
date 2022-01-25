<?php 
date_default_timezone_set("Asia/Kolkata");
include('inc/connection.php');
$conn = DB(); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
$page_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>
   <?php   $id = $_GET['title']; 
      // echo "SELECT * FROM blogs_data where slug='$id'";
               $stmt2 = $conn->prepare("SELECT * FROM blogs_data where slug='$id'");
               $stmt2->execute(); 
               $blogs_intenal = $stmt2->fetch();
               
			   $blog_comment = $conn->prepare("SELECT * FROM comment order by id asc");
				$blog_comment->execute(); 
				$blogs_comment = $blog_comment->fetchAll();
				
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $blogs_intenal['meta_title']; //echo $id; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="description" content="<?php echo trim(base64_decode($blogs_intenal['meta_desc'])); ?>">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/fixes.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive_col.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive_col_sm.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive_col_md.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/responsive_col_lg.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="/assets/css/carrousel.css"/>
	<link rel="icon" href="/assets/images/favicon.png" type="image/gif">
    <!-- preview-related stylesheets -->
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N7GJVDN');</script>
<!-- End Google Tag Manager -->
   <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61b96ea5df3f210019290547&product=inline-share-buttons" async="async"></script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7GJVDN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <header>
        <!-- Creating Nav Bar  -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img class="logo" src="/assets/images/logo.svg">
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link <?php if($page_name ==''){ echo'active'; }else{} ?>" href="/">Home </a></li>
                        <li class="nav-item"><a class="nav-link <?php if($page_name =='who-we-are'){ echo'active'; }else{} ?>" href="/who-we-are">who we are  </a></li>
                        <li class="nav-item"><a class="nav-link <?php if($page_name =='our-portfolio'){ echo'active'; }else{} ?>" href="/our-portfolio"> Portfolio</a></li>
						<li class="nav-item">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/our-services" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="/website-development-services">Website development</a>
								<a class="dropdown-item" href="/mobile-app-development-services">Mobile app development</a>
								<a class="dropdown-item" href="/ui-and-ux-design-services">UI/UX design</a>
								<a class="dropdown-item" href="/e-commerce-website-design-and-development-services">E-commerce</a>
								<a class="dropdown-item" href="/digital-marketing-services">Digital Marketing</a>
								<a class="dropdown-item" href="/bussiness-consultation-services">Business consultation</a>
								<a class="dropdown-item" href="/training-and-internship">Training and internship</a>
								</div>
						</li>
						<li class="nav-item"><a class="nav-link <?php if($page_name =='blog'){ echo'active'; }else{} ?>" href="/blog"> Blogs</a></li>
                        <li class="nav-item"><a class="nav-link <?php if($page_name =='contact-us'){ echo'active'; }else{} ?>" href="/contact-us"> Contact </a></li>
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
                                <li class="display-1 fw-bold"><a href="/who-we-are">About</a></li>
                                <li class="display-1 fw-bold " id="smenu"><a href="/our-services">Services</a></li>
								<li class="display-1 fw-bold " id="smenu"><a href="/our-portfolio">Portfolio</a></li>
								<li class="display-1 fw-bold " id="smenu"><a href="/career">Careers</a></li>
                                <li class="display-1 fw-bold"><a href="/contact-us">Get a quote</a></li>
                                <li class="display-1 fw-bold"><a href="/blog">Blog</a></li>
								
                            </ul>
							<div class="sm-menu" style="display:none;">
								<a class="dropdown-item" href="/website-development-services">Website development</a>
								<a class="dropdown-item" href="/mobile-app-development-services">Mobile app development</a>
								<a class="dropdown-item" href="/ui-and-ux-design-services">UI/UX design</a>
								<a class="dropdown-item" href="/e-commerce-website-design-and-development-services">E-commerce</a>
								<a class="dropdown-item" href="/digital-marketing-services">Digital Marketing</a>
								<a class="dropdown-item" href="/bussiness-consultation-services">Business consultation</a>
								<a class="dropdown-item" href="/training-and-intership">Training and internship</a>
							</div>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </header>
  
  
  <?php 
include('inc/queries.php');
  ?>
  
   <?php
  $msg='';
	if(isset($_POST['bsubmit'])){
	$name = $_POST["author"];
	$email = $_POST["email"];
	$website = $_POST["url"];
	$comment = $_POST["comment"];
	$date = time();
	$sqlcomment = $conn->prepare("INSERT INTO comment (name,email,website,comment,date)VALUES ('$name','$email','$website','$comment','$date')");
    $qlcmnt = $sqlcomment->execute();
	if ($qlcmnt) {
        $msg = "New record has been added successfully !";
     } else {
        $msg =  "Not Inserted";
     }
     mysqli_close($conn);	
}  

  ?>
    <!-----Section 1--------->
    <section id="blog-detail">
      
        <div class="container">
            <div class="row top-post">
				<div class="breadcrum"><a href="/blog">Blog</a> / <a href="/blog/<?php echo $blogs_intenal['slug']; ?>" class="active"><?php echo $blogs_intenal['title']; ?></a> </div>
				<div class="col-md-12 top-post-left">
					<div class="post post-thumb">
						<a class="post-img" href="javascript:void(0);"><img src="/<?php echo str_replace('../','',$blogs_intenal['image']); ?>" alt="<?php echo str_replace('-',' ',$id); ?>"  title="<?php echo str_replace('-',' ',$id); ?>" ></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">Lifestyle</a>
							</div>
							<h1 class="post-title title-lg"><a href="/blog/<?php echo $blogs_intenal['slug']; ?>"><?php echo $blogs_intenal['title']; ?></a></h1>
							<ul class="post-meta">
								<li><a href="author.php"><?php echo $blogs_intenal['added_by']; ?></a></li>
								<li><?php $yrdata= strtotime($blogs_intenal['add_date']);
    											echo date('M-Y', $yrdata); ?> </li>
							</ul>
						</div>
					</div>
				</div>
				  
			</div>
        </div>
    </section>
   
   
   
	<div class="blog-detail">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					    <div  class="">
                        <?php echo htmlspecialchars_decode($blogs_intenal['description']); ?>
                        </div>
						
						<div class="content">
							<h2>Frequently Asked Questions</h2>
  <?php    $fid = $blogs_intenal['id']; 
		   $stmt23 = $conn->prepare("SELECT * FROM faq where b_id='$fid'");
           $stmt23->execute(); 
           $blogs_faq = $stmt23->fetch();
		   $data = json_decode($blogs_faq['content3']);
		   

										for($i=0; $i< count($data); $i++){ 
  ?>
							<div>
							  <input type="checkbox" id="question<?php echo $i; ?>" name="q"  class="questions">
							  <div class="plus">+</div>
							  <label for="question<?php echo $i; ?>" class="question"><?php echo $data[$i]->title; ?></label>
							  <div class="answers">
								<p><?php echo $data[$i]->description; ?></p>
							  </div>
							</div>
										<?php } ?>
							
							
						</div> 
						
						
						<div class="share-links">
							<h3>SHARE THIS POST</h3>
							 <div class="sharethis-inline-share-buttons"></div>
							<!--a href="https://www.facebook.com/masterinfotech/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter" title="Twitter" target="_blank"></i></a>
							<a href="https://www.instagram.com/masterinfotechofficial/" target="_blank"><i class="fa fa-instagram" title="Instagram"></i></a>
							<a href="https://www.linkedin.com/company/master-infotechofficial/" target="_blank"><i class="fa fa-linkedin" title="linkedin"></i></a>
							<a href="https://www.behance.net/ab941400?tracking_source=search_users_recommended%7Cmaster%20infotech" target="_blank"><i class="fa fa-behance" title="Behance"></i></a>
							<a href="https://dribbble.com/MasterInfotechOfficial" target="_blank"><i class="fa fa-dribbble" title="dribbble"></i></a-->
						</div>
						<div id="comments" class="comments-area">
                              
                              <h3> COMMENTS </h3>
							   <?php 
							  $i=1;
							  foreach($blogs_comment as $b_comment){ 
										
								?>
                              
                              <!-- .commentlist -->
                              <ol class="commentlist">
                                <li class="comment even thread-even depth-1">
									<article class="comment">
										<header class="comment-meta comment-author vcard">
											<img alt="" src="/assets/images/comment.jpg" class="avatar" height="75" width="75">
											<cite class="fn"><a href="#" rel="external nofollow" class="url"><?php echo $b_comment['name']; ?></a></cite>
											<span class="comment-date"><?php echo date('j-M- Y, H:i A', $b_comment['date']);?>
												<span class="comment-edit-link"><a href="#">Edit</a></span>
											</span>
										</header>
										
										<section class="comment-content comment">
										  <p><?php echo $b_comment['comment']; ?></p>
										  </section>
									   
										<div class="reply">
											<a class="comment-reply-link" href="#">Reply <span>↓</span></a>
										</div>
									</article>
                                   <?php if(!empty($b_comment['reply'])) { ?>
									<ol class="children">
										<li class="comment odd alt depth-2 bypostauthor">
											<article class="comment">
												<header class="comment-meta comment-author vcard">
													<img alt="" src="/assets/images/comment1.jpg" class="avatar photo" height="75" width="75">
													<cite class="fn"><a href="#" rel="external nofollow" class="url">Master Infotech</a> <i>- Site Author</i></cite>
													<span class="comment-date">time:- </span>
												</header>
												
												<section class="comment-content comment">
												  <p><?php echo $b_comment['reply']; ?></p>
												</section>
												
											</article>
											
                                      
                                        </li>
                                    </ol>
                                   <?php } ?>
                                </li>
                                                              
                            </ol>
							 <?php $i++; } ?>
                              <!-- .commentlist -->
                              
                              
                              <!-- #respond --> 
                            <div id="respond">
                              
                                <h3 id="reply-title">LEAVE A COMMENT </h3>
                                
                                <!-- .commentform -->
                                <form action="" method="post" id="commentform" class="validate-form">
                                <?php if(isset($msg)){   
								echo "<p style='color:green;'>$msg</p>";
								}?>
								  
									<div class="left">
										<p class="comment-form-author">
											<label for="author">Name <span class="required" aria-required="true">*</span></label>
											<input id="author" name="author" type="text" size="30" aria-required="true" class="required" required>
										</p>
										  
										<p class="comment-form-email">
											<label for="email">Email <span class="required" aria-required="true">*</span></label>
											<input id="email" name="email" type="text" size="30" aria-required="true" class="required email" required>
										</p>
										  
										<p class="comment-form-url">
											<label for="url">Website</label>
											<input id="url" name="url" type="text" size="30" required>
										</p>
									</div>
									<div class="right">
										<p class="comment-form-comment">
										<label for="comment">Comment</label>
										<textarea id="comment" name="comment" rows="8" aria-required="true" class="required" required></textarea>
									  </p>
									</div>
									<p class="form-submit">
										<input type="submit" name="bsubmit" id="submit" class="button primary" value="Post Comment">
									</p>
                                  
								  
								  
                                </form>
                                <!-- .commentform -->
                                
                            </div>
                              <!-- #respond --> 
                              
                        </div>
						
						
						
						
						
						
				</div>
                <?php include('inc/blog-categories.php'); ?>
			</div>
		</div>
	</div>
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
    <script src="/assets/js/start.js" type="text/javascript"></script>
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/jquery.royalslider.min.js"></script>
	
 
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
	  AOS.init();	
	</script>  
<script>
   
// jQuery extend functions for popup
(function($) {
  $.fn.openPopup = function( settings ) {
    var elem = $(this);
    // Establish our default settings
    var settings = $.extend({
      anim: 'fade'
    }, settings);
    elem.show();
    elem.find('.popup-content').addClass(settings.anim+'In');
  }
  
  $.fn.closePopup = function( settings ) {
    var elem = $(this);
    // Establish our default settings
    var settings = $.extend({
      anim: 'fade'
    }, settings);
    elem.find('.popup-content').removeClass(settings.anim+'In').addClass(settings.anim+'Out');
    
    setTimeout(function(){
        elem.hide();
        elem.find('.popup-content').removeClass(settings.anim+'Out')
      }, 500);
  }
    
}(jQuery));

// Click functions for popup
$('.open-popup').click(function(){

  $('#'+$(this).data('id')).openPopup({
    anim: (!$(this).attr('data-animation') || $(this).data('animation') == null) ? 'fade' : $(this).data('animation')
  });
 
});
$('.close-popup').click(function(){
  $('#'+$(this).data('id')).closePopup({
    anim: (!$(this).attr('data-animation') || $(this).data('animation') == null) ? 'fade' : $(this).data('animation')
  });
});

// To open/close the popup at any functions call the below
// $('#popup_default').openPopup();
// $('#popup_default').closePopup();
   </script>	
</body>
</html>
