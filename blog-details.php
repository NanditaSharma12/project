<?php   $id = str_replace('-',' ',$_GET['title']); ?><!DOCTYPE html>
<html lang="en">



<body>
  <?php include('inc/header.php');
include('inc/queries.php');
  ?>
    <!-----Section 1--------->
    <section id="blog-detail">
        <?php   $id = $_GET['title']; 
      // echo "SELECT * FROM blogs_data where slug='$id'";
               $stmt2 = $conn->prepare("SELECT * FROM blogs_data where slug='$id'");
               $stmt2->execute(); 
               $blogs_intenal = $stmt2->fetch();
               
        ?>
        <div class="container">
            <div class="row top-post">
				<div class="breadcrum"><a href="/blog">Blog</a> / <a href="http://localhost/masters//blog/<?php echo $blogs_intenal['slug']; ?>" class="active"><?php echo $blogs_intenal['title']; ?></a> </div>
				<div class="col-md-12 top-post-left">
					<div class="post post-thumb">
						<a class="post-img" href="/blog/<?php echo $blogs_datalate['slug']; ?>"><img src="/<?php echo str_replace('../','',$blogs_intenal['image']); ?>" alt="<?php echo str_replace('-',' ',$id); ?>"  title="<?php echo str_replace('-',' ',$id); ?>" ></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">Lifestyle</a>
							</div>
							<h3 class="post-title title-lg"><a href="http://localhost/masters//blog/<?php echo $blogs_intenal['slug']; ?>"><?php echo $blogs_intenal['title']; ?></a></h3>
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
                        <?php echo $blogs_intenal['description']; ?>
                        </div>
						
						<div class="content">
							<h1>Frequently Asked Questions</h1>
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

	

   <!---------  end------------>
   
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

<!-- $(".case-study-box .case_study").hover(function() {
 
  $(".btn_color_one a").css({"display": "block"})
}); -->
