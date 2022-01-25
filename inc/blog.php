<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Blogs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7GJVDN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include('inc/header.php');
include('inc/queries.php');


$stmtlate = $conn->prepare("SELECT * FROM blogs_data order by id desc limit 1");
$stmtlate->execute(); 
$blogs_datalate = $stmtlate->fetch();

$stmtlate2 = $conn->prepare("SELECT * FROM blogs_data order by id asc limit 2");
$stmtlate2->execute(); 
$blogs_datalate2 = $stmtlate2->fetchAll();
?>
    <!-----Section 1--------->
    <section id="blog">
        <div class="container">
            <div class="row top-post">
			<?php 
				    $id = $blogs_datalate['cat']; 
				   $stmt_catx = $conn->prepare("SELECT cat FROM blogs_cat where id ='$id'");
				   $stmt_catx->execute(); 
				   $blog_catxx = $stmt_catx->fetch();
					?>
				<div class="col-md-8 top-post-left" data-aos="fade-left" data-aos-duration="1500">
					<div class="post post-thumb">
						<a class="post-img" href="/blog/<?php echo $blogs_datalate['slug']; ?>"><img src="<?php echo str_replace('../','',$blogs_datalate['image']); ?>" alt="<?php echo str_replace('-',' ',$blogs_datalate['slug']); ?>"  title="<?php echo str_replace('-',' ',$blogs_datalate['slug']); ?>"  ></a>
						<div class="post-body">
							<div class="post-category">
								<a href="what-is-ui-ux-design.php"><?php echo $blog_catxx['cat']; ?></a>
							</div>
							<h1 class="post-title title-lg"><a href="/blog/<?php echo $blogs_datalate['slug']; ?>"><?php echo $blogs_datalate['title']; ?></a></h1>
							<ul class="post-meta">
							<li><a href="#"><?php echo $blogs_datalate['added_by']; ?></a></li>
								<li><?php $yrdata= strtotime($blogs_datalate['add_date']);
    											echo date('M-Y', $yrdata); ?> </li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 top-post-right" data-aos="fade-left" data-aos-duration="1500">
				<?php foreach($blogs_datalate2 as $blogs){ 
				    $id = $blogs['cat']; 
				   $stmt_cat = $conn->prepare("SELECT cat FROM blogs_cat where id ='$id'");
				   $stmt_cat->execute(); 
				   $blog_catx = $stmt_cat->fetch();
					?>
					<div class="post post-thumb">
						<a class="post-img" href="/blog/<?php echo $blogs['slug']; ?>"><img src="<?php echo str_replace('../','',$blogs['image']); ?>" alt="<?php echo str_replace('-',' ',$blogs['slug']); ?>"  title="<?php echo str_replace('-',' ',$blogs['slug']); ?>" ></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#"><?php echo $blog_catx['cat']; ?></a>
							</div>
							<h1 class="post-title"><a href="/blog/<?php echo $blogs['slug']; ?>"><?php echo $blogs['title']; ?></a></h1>
							<ul class="post-meta">
								<li><a href="#"><?php echo $blogs['added_by']; ?></a></li>
								<li><?php $yrdata= strtotime($blogs['add_date']);
    											echo date('M-Y', $yrdata); ?> </li>
							</ul>
						</div>
					</div>
					 <?php } ?>
					
				</div>
			</div>
        </div>
    </section>
    
	<div class="blog-list">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Recent <span class="color_one">posts</span></h2>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
				<?php foreach($blogs_data as $blogs){ 
				    $id = $blogs['cat']; 
				   $stmt_cat = $conn->prepare("SELECT cat FROM blogs_cat where id ='$id'");
				   $stmt_cat->execute(); 
				   $blog_catx = $stmt_cat->fetch();
					?>
					<div class="col-md-6">
						<div class="post" data-aos="fade-up" data-aos-duration="1500">
							<a class="post-img" href="/blog/<?php echo $blogs['slug']; ?>"><img src="<?php echo str_replace('../','',$blogs['image']); ?>" alt="<?php echo str_replace('-',' ',$blogs['slug']); ?>"  title="<?php echo str_replace('-',' ',$blogs['slug']); ?>"  ></a>
							<div class="post-body">
								<div class="post-category">
									<a href="#"><?php echo $blog_catx['cat']; ?></a>
								</div>
								<h1 class="post-title"><a href="/blog/<?php echo $blogs['slug']; ?>"><?php echo $blogs['title']; ?></a></h1>
								<ul class="post-meta">
									<li><a href="#"><?php echo $blogs['added_by']; ?></a></li>
									<li><?php $yrdata= strtotime($blogs['add_date']);
    											echo date('M-Y', $yrdata); ?> </li>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
					
				

					<!-- <div class="col-md-6">
						<div class="post">
							<a class="post-img" href="#"><img src="assets/images/blogs/blog-first.jpg" alt="" ></a>
							<div class="post-body">
								<div class="post-category">
									<a href="#">Technology</a>
								</div>
								<h3 class="post-title"><a href="#">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
								<ul class="post-meta">
									<li><a href="#">John Doe</a></li>
									<li>28 October 2021</li>
								</ul>
							</div>
						</div>
					</div> -->
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
	<!-- slider JS files -->
    
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

<!-- $(".case-study-box .case_study").hover(function() {
 
  $(".btn_color_one a").css({"display": "block"})
}); -->
