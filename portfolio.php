<!DOCTYPE html>
<html lang="en">

<head>
    
   
   
   
   
</head>

<body>
<?php include('inc/header.php'); 
 $stmt8 = $conn->prepare("SELECT * FROM portfolio order by id asc limit 4");
 $stmt8->execute(); 
 $portfolio = $stmt8->fetchAll();
?>

<?php $i=0; foreach($portfolio  as $port){ ?>	
    <!-----Section 1--------->
     <section class="<?php if($i%2==0){ echo'p-section2'; } else{ echo'p-section1'; } ?>" style="<?php if($i%2==0){ echo'background-image: url(assets/images/web.png)'; } else{ echo'background-image: url(assets/images/bg5.png)'; } ?>;">
        <div class="container">
            <div class="row">
				<div class="col-sm-12 col-lg-12">
					<div id="portfolio" <?php if($i%2==0){ ?> class="colm-reverse" <?php } else{ } ?>>
					<?php if($i%2==0){ ?>	<div class="port-img " data-aos="fade-left"  data-aos-duration="1500">
							<img class="img-responsive" src="<?php echo str_replace('../','',$port['image']); ?>">
						</div>
						 <?php } else{ } ?>
					
						<div class="port-info align-center " data-aos="fade-right"  data-aos-duration="1500">
							<h2><?php echo $port['title'] ?></h2>
							<p class="text-left"><?php echo $port['description']; ?></p>
							<button class="btn btn_color_one"><a href="<?php echo $port['link'];?>">Visit Site</a></button>
						</div>
						<?php if($i%2==1){ ?>	<div class="port-img " data-aos="fade-left"  data-aos-duration="1500">
							<img class="img-responsive" src="<?php echo str_replace('../','',$port['image']); ?>">
						</div>
						 <?php } else{ } ?>
					</div>
				</div>
            </div>
    </section>
	<?php $i++; }?>

	

           <section>
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
		  </section>
                                                             
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


        });

AOS.init();


    </script>
	
</body>

</html>
	