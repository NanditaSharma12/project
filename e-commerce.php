<!DOCTYPE html>
<html lang="en">

<head>
   
  
</head>

<body>
    <?php include('inc/header.php'); 
		$stmt8 = $conn->prepare("SELECT categories.title,categories.id as cid, service_data.description FROM service_data inner join categories on service_data.service_id = categories.id where categories.id = 4");
        $stmt8->execute(); 
        $service_data = $stmt8->fetch();
	    $cid = $service_data['cid'];
		$tsmt = $conn->prepare("select * from inner_service_data where service_id = $cid");
		$tsmt->execute();
		$inner_data = $tsmt->fetchAll();
	?>
    <!-----Section 1--------->
    <section class="ecomm-sec1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6  col-xl-6 ecomm-text">
                   <div class="ecomm-info" data-aos="fade-right" data-aos-duration="1500">
						<h2 class="display-3 fw-bold color_two"><?php echo $service_data['title']; ?></h2>
						<p><?php echo $service_data['description']; ?></p>
					</div>
					<div class="ecomm-info-img" data-aos="fade-left" data-aos-duration="1500">
						<img class="img-responsive" src="assets/images/ecomm.png">
					</div>
				</div>
            </div>
        </div>
    </section>
<?php 
		  
		  $i=1;
		  foreach($inner_data as $data){?>
		  <?php  if($i%2==1){ ?>
    <section class="ecomm-sec<?php echo $i; ?>">
        <div class="container">
            <div class="row">
                <div class="col-12 first-sec-ecomm" data-aos="fade-right" data-aos-duration="1500">
                    <img class="img-responsive ecomm-img1 ft-right" src="<?php echo $data['image'];?>">
                    <div class="ecomm_circle text-center">
                        <h4 class="ecomm_sec_header color_one mt-3"><?php echo $data['title'];?></h4>
                        <p><?php echo $data['description'];?></p>
                        </div>
                </div>
            </div>
            </div>
			
			
				<div class="col-12 hidden_ecomm1">
					<h4 class="ecomm_sec_header color_one"><?php echo $data['title'];?></h4>
					<p><?php echo $data['description'];?></p>
				</div>
			
    </section>
		  <?php }else{ ?>
     <section class="ecomm-sec<?php echo $i; ?>">
        <div class="container">
            <div class="row">
                <div class="col-12 second-sec-ecomm" data-aos="fade-left" data-aos-duration="1500">
                    <img class="img-responsive ecomm-img1" src="<?php echo $data['image'];?>">
                    <div class="ecomm_circle2 text-center">
                        <h4 class="ecomm_sec_header color_one mt-3"><?php echo $data['title'];?></h4>
                        <p><?php echo $data['description'];?></p>
                    </div>
                </div>
            </div>
             </div>
            <div class="col-12 hidden_ecomm">
                <h4 class="ecomm_sec_header color_one"><?php echo $data['title'];?></h4>
                        <p><?php echo $data['description'];?></p>
            </div>
       
    </section>
  <?php }?>
			
				<?php $i++; } ?>

      
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
   
 

	
</body>

</html>

