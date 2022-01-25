<!DOCTYPE html>
<html lang="en">

<head>
    <title>Case Study</title>
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
$stmtlate = $conn->prepare("SELECT * FROM case_study order by id desc limit 1");
$stmtlate->execute(); 
$case_study = $stmtlate->fetch();

?>
	
    <!-----Section 1--------->
    <section class="case-study-top">
       <div class="container">
           <div class="row mt-5 pt-5">
               <div class="col-12 col-md-12 col-lg-5 col-xl-5 cs-top-text">
                   <img class="top-logo" src="<?php echo str_replace('../','',$case_study['logo']);  ?>">
                   <p><?php echo $case_study['description1'];  ?></p>
               </div>
               <div class="col-12 col-md-12 col-lg-7 col-xl-7">
                   <img class="img-responsive case-study-img" src="<?php echo str_replace('../','',$case_study['main_image']);  ?>">
               </div>
           </div>
       </div>
   </section>
   <!----------section 1 end--------------->
   <section class="case-study-2 bg-blue">
       <div class="container">
           <div class="row">
				<div class="col-12 col-md-12 col-lg-12">
					<h2 class="display-3 fw-bold">Project Overview</h2>
				</div>
				
               <div class="col-12 col-md-7 col-lg-7 col-xl-7 info">
                  <h3 class="text-white">Description</h3>
                  <p><?php echo $case_study['po_description'];  ?></p>
               </div>
               <div class="col-12 col-md-5 col-lg-5 col-xl-5 role_icons p-5">
                  <h3>Roles</h3>
                   <ul class="">
					   <?php
					    $cid = $case_study['id'];  
					
					    $stmtlateroles = $conn->prepare("SELECT * FROM roles where case_id = '$cid'order by id asc limit 5");
						$stmtlateroles->execute(); 
						$case_study_roles = $stmtlateroles->fetchAll(); 
						foreach($case_study_roles as $roles){ ?>
							<li><img src="<?php echo str_replace('../','',$roles['image']);  ?>" alt="search"><span><?php echo $roles['title'];  ?></span></li>
                       	<?php } ?>
                       </ul>
                    
               </div>
           </div>
           <div class="row">
               <div class="col-12 p-0">
                   <img class="img-responsive sec2-cs-img" src="<?php echo str_replace('../','',$case_study['po_image']);  ?>">
               </div>
           </div>
       </div>
   </section>

	<section class="case-study-3" style="background-image: url(assets/images/case-study/casestudy2.png);">
       <div class="container">
           <div class="row">
               <div class="col-12 col-md-6 col-lg-6 col-xl-6 pr-5">
                   <h2 class="color_two fw-bold display-3">Aims and Goals</h2>
                   <p><?php echo $case_study['aigo_sh_description'];  ?></p>
               </div>
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
				<div class="aim-goal d-flex">
					<img src="<?php echo str_replace('../','',$case_study['aigo_image']);  ?>" alt="">
					<div class="aim-list">
						<ul>
						<?php echo $case_study['aigo_main_description'];  ?>
						</ul>
					</div>
                 </div>
               </div>
           </div>
       </div>
	</section>
	
	
	
	<section class=" bg-blue">
       <div class="container">
           <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 pr-5">
                   <h3 class="fw-bold display-3 text-white">Problems & Challenges</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
				<?php
					    $cidx = $case_study['id'];  
					
					    $stmtlatepc = $conn->prepare("SELECT * FROM problem_challenges where case_id = '$cidx'order by id asc limit 5");
						$stmtlatepc->execute(); 
						$case_study_pc = $stmtlatepc->fetchAll();
						$x =0; 
						foreach($case_study_pc as $pc){ ?>
				<div class="row <?php if($x % 2 ==1){ echo'pro'; } else{ echo'sol'; }?>">
					<?php if($x % 2 !=1){ ?>
				<div class="col-12 col-md-12 col-lg-6 col-xl-6">
						<div class="<?php if($x % 2 ==1){ echo'pro-img'; } else{ echo'pro-img'; }?>">
							<img src="<?php echo str_replace('../','',$pc['image']);  ?>" alt="">
						</div>
					</div>
					<?php } else{}?>
					<div class="col-12 col-md-12 col-lg-6 col-xl-6">
						
						<div class="pro-list">
						<?php echo $pc['description'];  ?>
						</div>
					</div>
					<?php if($x % 2 ==1){ ?>
					<div class="col-12 col-md-12 col-lg-6 col-xl-6">
						<div class="sol-img">
						<img src="<?php echo str_replace('../','',$pc['image']);  ?>" alt="">
						</div>
					</div>
					<?php } ?>
                </div>
				<?php $x++; }?>

				
               </div>
           </div>
       </div>
	</section>
	
	<section class="strategy" style="background-image: url(assets/images/case-study/casestudybg.png);">
       <div class="container">
           <div class="row">
               <div class="col-12 col-md-12 col-lg-6 col-xl-6 pr-5">
                   <h2 class="color_two fw-bold display-3">Strategy </h2>
                   <p class="lh-lg"><?php echo $case_study['strategy_description'];  ?></p>
               </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-6">
				<div class="">
					<img src="<?php echo str_replace('../','',$case_study['strategy_image']);  ?>" alt="">
					
                 </div>
               </div>
           </div>
       </div>
	</section>
	<section class="styl-design bg-blue">
       <div class="container">
           <div class="row">
				<div class="col-12 col-md-12 col-lg-12 col-xl-12 pr-5">
                   <h2 class="text-white fw-bold display-3">Style and Design Guide </h2>
				</div>
				<div class="col-12 col-md-6 col-lg-6 col-xl-6 pr-5">
                   <div class="info">
						<!-- <h3>Font Family</h3> -->
						<img src="<?php echo str_replace('../','',$case_study['style_fo_image']);  ?>" alt="">
					</div>
				</div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-6">
					<div class="info">
						<!-- <h3>Color Scheme</h3> -->
						<img src="<?php echo str_replace('../','',$case_study['style_co_sch_image']);  ?>" alt="">
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-12 col-xl-12">
					<div class="info">
						<!-- <h3>Grid view</h3> -->
						<img src="assets/images/case-study/gridview.png" alt="">
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-12 col-xl-12">
					<div class="info">
						<!-- <h3>Grid view</h3> -->
						<img src="<?php echo str_replace('../','',$case_study['style_sitemap_image']);  ?>" alt="">
					</div>
				</div>
           </div>
       </div>
	</section>
	<section class="result">
       <div class="container">
           <div class="row">
				<div class="col-12 col-md-12 col-lg-12 col-xl-12 pr-5">
                   <h2 class="color_two fw-bold display-3">Style and Design Guide </h2>
				</div>
				<div class="col-12 col-md-12 col-lg-12 col-xl-12 ">
                   <div class="info">
						<p> <?php echo $case_study['style_description'];  ?></p>
						<img src="<?php echo str_replace('../','',$case_study['logo']);  ?>" alt="">
					</div>
				</div>
               
           </div>
       </div>
		
		<div class="bg-grey">
			<div class="container">
				<ul>
				<?php
					    $cidxx = $case_study['id'];  
					
					    $stmtproject_imaags = $conn->prepare("SELECT * FROM project_imaags where case_id = '$cidxx'order by id asc limit 6");
						$stmtproject_imaags->execute(); 
						$project_imaags = $stmtproject_imaags->fetchAll();
						$x =0; 
						foreach($project_imaags as $project){ ?>
					<li> 
						<img src="<?php echo str_replace('../','',$project['image']);  ?>" alt="">
						<p><?php echo $project['title'];  ?></p>
					</li>
					<?php } ?>
				
				</ul>
			</div>
		</div>
		<div class="full-bg"><img src="<?php echo str_replace('../','',$case_study['screen_image']);  ?>" alt=""></div>
	</section>
	
	<section class="bg-blue">
       <div class="container">
           <div class="row">
				<div class="col-12 col-md-12 col-lg-12 col-xl-12 typo">
					<img src="<?php echo str_replace('../','',$case_study['logo']);  ?>" alt="">
				</div>
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
					<img src="<?php echo str_replace('../','',$case_study['paper_image']);  ?>" class="img-fluid" alt="">
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