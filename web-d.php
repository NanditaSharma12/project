<!DOCTYPE html>
<html lang="en">

<head>
    
    <style>
        



    </style>
</head>

<body>
   <?php include('inc/header.php');
   
        $stmt8 = $conn->prepare("SELECT categories.title,categories.id as cid, service_data.description FROM service_data inner join categories on service_data.service_id = categories.id where categories.id = 1");
        $stmt8->execute(); 
        $service_data = $stmt8->fetch();
	    $cid = $service_data['cid'];
		$tsmt = $conn->prepare("select * from inner_service_data where service_id = $cid");
		$tsmt->execute();
		$inner_data = $tsmt->fetchAll();
		
		
   ?>

 <!-----Section 1--------->
    <section class="section1-mobile web-d-sec1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="web-develop">
						<div class="web-dev-info pr20" data-aos="fade-left" data-aos-duration="1500">
							 <h2 class="display-3 fw-bold color_two"><?php echo $service_data['title']; ?></h2>
							<p><?php echo $service_data['description']; ?></p>
							
						</div>
						<div class="web-dev-img" data-aos="fade-right" data-aos-duration="1500">
							<img class="img-responsive" src="http://localhost/masters//assets/images/web-d.webp">
						</div>
					</div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- <section class="web-d-sec1 h-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="w-d-text">
                        <h1 class="page-main-title color_two display-3 fw-bold">Website Development</h1>
                        <p class="web-text color_two">By using cutting-edge technologies, our in-house team of developers delivers intuitive and highly agile websites. By keeping your vision in focus we bring out a digital transformation for your business that helps you further broaden your growth. We cover all types of web development solutions from creating plain text pages to complex web-based applications, social network applications, and electronic business applications.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="w-d-img">
                        <img class="img-responsive web-d-img" src="assets/images/web-d.png">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!----------section1------->
    <!-----Section 2--------->
    <section class="web-d-sec2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type1" data-aos="flip-left" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h3 class="sec-title color_one">php development</h3>
                            <p class="web-text color_two">PHP development comes with a wide range of opportunities
                                and we leave no stones unturned in delivering full-spectrum,
                                feature-rich, and fast PHP development solutions to our
                                clients encoded with vigorous integrations. </p>
                        </div>
                        <img class="img-responsive img-web1" src="assets/images/php.png">
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type" data-aos="flip-right" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h3 class="sec-title color_one">html 5 develpoment</h3>
                            <p class="web-text color_two">We deliver the most innovative and cross-platform HTML
                                development which is not only high performing but also runs
                                across all browsers and screens. With Master Infotech HTML
                                solutions experience high reliability and security.</p>
                        </div>
                        <img class="img-responsive img-web" src="assets/images/html.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------section2------->
    <!-----Section 3--------->
    <section class="web-d-sec3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type1" data-aos="flip-left" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h3 class="sec-title color_one">node js development</h3>
                            <p class="web-text color_two">We provide flexible and robust Node Js development solutions. Our
                                expert developers ensure the product is embedded with agile
                                methodology, customizable according to requirements.</p>
                        </div>
                        <img class="img-responsive img-web1" src="assets/images/node-js (3).png">
                    </div>
                </div>
                 <div class="col-lg-2"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type" data-aos="flip-right" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h3 class="sec-title color_one">python development</h3>
                            <p class="web-text color_two">At Master Infotech we deliver powerful end-to-end Python
                                Development. We recommend Python for its simple, yet
                                elegant syntax.</p>
                        </div>
                        <img class="img-responsive img-web" src="assets/images/python.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------section3------->
    <!-----Section 4--------->
    <section class="web-d-sec4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type1" data-aos="flip-left" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h3 class="sec-title color_one">dotnet development</h3>
                            <p class="web-text color_two">.NET is an ecosystem and framework designed by Microsoft and
                                used extensively for easy desktop and web application
                                development. We make use of all the implementations of the .NET
                                platform (NET Framework, .NET Core, Xamarin, and UWP). to deliver
                                a fully inventive and responsive web portal and applications.</p>
                        </div>
                        <img class="img-responsive img-web1" src="assets/images/dotnet.png">
                    </div>
                </div>
                 <div class="col-lg-2"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                    <div class="web-d-type" data-aos="flip-right" data-aos-duration="1500">
                        <div class="type-of-development">
                            <h3 class="sec-title color_one">java development</h3>
                            <p class="web-text color_two">Trusted by millions of developers, JAVA is highly efficient for scalable
                                and agile websites and applications. Master Infotech uses and fully
                                integrates with the ever-evolving technologies of JAVA to bring
                                about adaptive and upscale JAVA development solutions. </p>
                        </div>
                        <img class="img-responsive img-web" src="assets/images/java.png">
                    </div>
                </div>
            </div>
        </div>
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

	 <script>
	  AOS.init();	
	  </script>
</body>

</html>