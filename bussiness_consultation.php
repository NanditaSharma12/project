<!DOCTYPE html>
<html lang="en">

<head>
   
</head>

<body>
      <?php include('inc/header.php'); 
		$stmt8 = $conn->prepare("SELECT categories.title,categories.id as cid, service_data.description,service_data.image as img FROM service_data inner join categories on service_data.service_id = categories.id where categories.id = 7");
        $stmt8->execute(); 
        $service_data = $stmt8->fetch();
	    $cid = $service_data['cid'];
		$tsmt = $conn->prepare("select * from inner_service_data where service_id = $cid");
		$tsmt->execute();
		$inner_data = $tsmt->fetchAll();
	?>
    <!-----Section 1--------->
	
    <section class="section1-bussiness-c h-100">
        <div class="container-fluid">
            <div class="row  mt-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="center-text">
                        <h1 class="display-3 fw-bold color_two"><?php echo $service_data['title']; ?></h1>
                        <p><?php echo $service_data['description']; ?></p>
                    </div>
                </div>
                <div class="col-12  col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
                    <div class="">
                        <img class="img-responsive" src="<?php echo $service_data['img']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------secvtion2----------->
    <section class="section2-bussiness-c">
        <div class="container-fluid">
		  <?php 
		  
		  $i=1;
		  foreach($inner_data as $data){?>
		  <?php  if($i%2==1){ ?>
            <div class="row">
				<div class="business-consultation colm-reverse">
					<div class="busi-img">
						<img class="img-responsive" src="<?php echo $data['image'];?>">
					</div>
					<div class="busi-info align-center">
						<h3><?php echo $data['title'];?></h3>
                        <p><?php echo $data['description'];?></p>
					</div>
				</div>
            </div>
		  <?php } else{?> 
		  
			<div class="row">
				<div class="business-consultation">
					<div class="busi-info align-center">
						<h3><?php echo $data['title'];?></h3>
                        <p><?php echo $data['description'];?></p>
					</div>
					<div class="busi-img">
						<img class="img-responsive" src="<?php echo $data['image'];?>">
					</div>
				</div>
            </div>
		  <?php }?>
			
				<?php $i++; } ?>
		
    </section>
	
    <div class="container">
        <div class="row">
            <div class="col-sm-2"> </div>
            <div class="col-sm-8">
                <hr class="m-app-buttom-hr color_one">
            </div>
            <div class="col-sm-2"> </div>
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



function removeactive() {
  cards.forEach((c) => {
    c.classList.remove("active");
  });
}

	
});




	</script>
	<!-- slider JS files -->


	
</body>

</html>