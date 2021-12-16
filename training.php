<!DOCTYPE html>
<html lang="en">

<head>
    
    <style>
    </style>
</head>

<body>
   <?php include('inc/header.php');   ?>
    <!------section 1 start--------->
    <section class="training-sec">
        <div class="container-fluid">
            <div class="row flex-column-reverse  flex-md-row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="training">
                        <div class="training-text pr20">
                            <h1 class="display-3 fw-bold color_two">Training and Internship</h1>
                            <p>Do you know what is the best way to start your career? It is, getting the right kind of training. Whether you are a fresh graduate seeking training opportunities or a student looking for an internship Master Infotech is the right place for you. We believe in giving the right environment to your talents in order to sharpen them further. At Master Infotech give high importance to the passion inside you and make sure it is given the right direction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="training-img">
                        <img class="img-responsive tra-img" src="http://localhost/masters/assets/images/training/1.webp">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!------section 1 end----------->
    <!------section 2 start--------->
    <section class="training-sec2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="trning-and-internship">
                        <div class="trning">
                            <div class="trning_img">
                                <img class="img-responsive t-i-img" src="http://localhost/masters/assets/images/training/2.webp">
                            </div>
                            <div class="trning_text">
                                <h3>Training</h3>
                                <p>Jumpstart your career with ourworld-class standards to
                                    furtherforge your future.</p>
                                <button class=" btn_service btn_white_blue"><a href="http://localhost/masters/application.php">Apply Now</a></button>
                            </div>
                        </div>
                        <div class="Internship">
                            <div class="intern_img">
                                <img class="img-responsive t-i-img1" src="http://localhost/masters/assets/images/training/3.webp">
                            </div>
                            <div class="trning_text">
                                <h3>Internship </h3>
                                <p class="trn-intern-para">Your fresh spark and passion is important to us. We consider
                                    it our responsibility to sharpen your talent.</p>
                                <button class=" btn_service btn_color_two"><a href="http://localhost/masters/application.php">Apply Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------section 2 end--------->
    <!-------section 3 start--------->
    <section class="training-sec3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="work-4">
                        <ul class="work-culture">
                            <li>
                                <div class="work-info">
                                    <img class="culture-img img-responsive" src="http://localhost/masters/assets/images/training/4.webp">
                                    <h6 class="color_two">Work-life balance</h6>
                                    <p>Coffee breaks, exercise sessions, knowledge
                                        sharing session and much more to kill
                                        the work stress.</p>
                                </div>
                            </li>
                            <li>
                                <div class="work-info">
                                    <img class="culture-img img-responsive" src="http://localhost/masters/assets/images/training/5.webp">
                                    <h6 class="color_two">Activities</h6>
                                    <p>Small and curious activities to
                                        regain your freshness. Fancy a
                                        tic-tac-toe match? </p>
                                </div>
                            </li>
                            <li>
                                <div class="work-info">
                                    <img class="culture-img img-responsive" src="http://localhost/masters/assets/images/training/6.webp">
                                    <h6 class="color_two">Gifts</h6>
                                    <p>We make sure you never run out
                                        of memories and MOMENTOS!</p>
                                </div>
                            </li>
                            <li>
                                <div class="work-info">
                                    <img class="culture-img img-responsive" src="http://localhost/masters/assets/images/training/7.webp">
                                    <h6 class="color_two">Social Events</h6>
                                    <p>A hill station retreat, bicycle race, or
                                        festival celebrations we have dozens
                                        of monthly and quarterly social events.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="w-culture">
                        <h3 class="display-3">Work Culture</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------section 3 end--------->
    <!-----section 4 start---->
    <section class="training-sec4">
        <div class="container">
            <div class="row">
                <h3 class="display-3 fw-bold life-at text-center">Life at Master Infotech</h3>
                <div class="col-12">
                    <div class="about-us">
                        <div class="about-us-text">
                            <h3>ABOUT US</h3>
                            <p>Our modus operandi (way of operating)
                                is exploring contemporary ways of
                                establishing better client relationships. </p>
                        </div>
                        <div class="about-us-img">

                                <img class="img-responisive about-img" src="http://localhost/masters/assets/images/training/about.webp" />
                           
                            <div class="about-overlay-text">
                                <h3 class="overlay-heading">About us</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="workspace">
                        <div class="workspace-img">
                            <img class="img-responsive w-s-img" src="http://localhost/masters/assets/images/training/workspace.webp">
                            <div class="about-overlay-text">
                                <h3 class="overlay-heading">Workspace</h3>
                            </div>
                        </div>
                        <div class="workspace-text animated slideInleft">
                            <h3>WORKSPACE</h3>
                            <p>Have a Look at our workspace</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------section 4 end--------->
    <?php include('inc/footer.php'); ?>
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    
    <!---------  end------------>
    <script>
    $(document).ready(function() {

        $("#smenu").click(function() {
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
    <!-- slider JS files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/carrousel.js"></script>
    <script>
    $(function() {
        $('#dg-container').carrousel({
            current: 0,
            autoplay: true,
            interval: 3000
        });
    });
    </script>
</body>

</html>