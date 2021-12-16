<!DOCTYPE html>
<html lang="en">

<head>
    

</head>

<body>
       <?php include('inc/header.php'); 
		$stmt8 = $conn->prepare("SELECT categories.title,categories.id as cid, service_data.description FROM service_data inner join categories on service_data.service_id = categories.id where categories.id = 6");
        $stmt8->execute(); 
        $service_data = $stmt8->fetch();
	    $cid = $service_data['cid'];
		$tsmt = $conn->prepare("select * from inner_service_data where service_id = $cid");
		$tsmt->execute();
		$inner_data = $tsmt->fetchAll();
	?>
	
    <section class="digital-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="digital-mark">
                        <div class="digital-info align-center" data-aos="fade-left" data-aos-duration="1500">
                            <h2 class="display-3"><?php echo $service_data['title']; ?></h2>
                           
                            <p><?php echo $service_data['description']; ?></p>
                        </div>
                        <div class="digital-img" data-aos="fade-right" data-aos-duration="1500">
                            <img src="http://localhost/masters/assets/images/digital-marketing/webdevelopment.webp" class="img-responsive ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="digital-bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="digital-mark">
                        <?php foreach($inner_data as $data){ ?>
                        <div class="digital-box" data-aos="flip-left" data-aos-duration="1500">
                            <div class="digitalbox-img">
                                <img src="<?php echo $data['image'];?>" class="img-responsive" alt="img">
                            </div>
                            <h5 class="card-title"><?php echo $data['title'];?></h5>
                            <p class="card-text"><?php echo $data['description'];?></p>

                        </div>
						<?php } ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
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
	 <script>
	  AOS.init();	
	</script> 
	<!-- slider JS files -->
    
   
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