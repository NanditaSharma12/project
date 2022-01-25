<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/infotech/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> 
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/fixes.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col_sm.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col_md.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/responsive_col_lg.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link rel="icon" href="/assets/images/favicon.png" type="image/gif">
	<link rel="stylesheet" href="/assets/css/carrousel.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- preview-related stylesheets -->
   
   
   
   
   
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
					<div id="portfolio" <?php if($i%2==0){ } else{?> class="colm-reverse" <?php } ?>>
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
	


    </script>
	
</body>

</html>
	