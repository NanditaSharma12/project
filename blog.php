<!DOCTYPE html>
<html lang="en">



<body>
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
						<a class="post-img" href="http://localhost/masters//blog/<?php echo $blogs_datalate['slug']; ?>"><img src="<?php echo str_replace('../','',$blogs_datalate['image']); ?>" alt="<?php echo str_replace('-',' ',$blogs_datalate['slug']); ?>"  title="<?php echo str_replace('-',' ',$blogs_datalate['slug']); ?>"  ></a>
						<div class="post-body">
							<div class="post-category">
								<a href="what-is-ui-ux-design.php"><?php echo $blog_catxx['cat']; ?></a>
							</div>
							<h3 class="post-title title-lg"><a href="http://localhost/masters//blog/<?php echo $blogs_datalate['slug']; ?>"><?php echo $blogs_datalate['title']; ?></a></h3>
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
						<a class="post-img" href="http://localhost/masters//blog/<?php echo $blogs['slug']; ?>"><img src="<?php echo str_replace('../','',$blogs['image']); ?>" alt="<?php echo str_replace('-',' ',$blogs['slug']); ?>"  title="<?php echo str_replace('-',' ',$blogs['slug']); ?>" ></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#"><?php echo $blog_catx['cat']; ?></a>
							</div>
							<h3 class="post-title"><a href="http://localhost/masters//blog/<?php echo $blogs['slug']; ?>"><?php echo $blogs['title']; ?></a></h3>
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
							<a class="post-img" href="http://localhost/masters//blog/<?php echo $blogs['slug']; ?>"><img src="<?php echo str_replace('../','',$blogs['image']); ?>" alt="<?php echo str_replace('-',' ',$blogs['slug']); ?>"  title="<?php echo str_replace('-',' ',$blogs['slug']); ?>"  ></a>
							<div class="post-body">
								<div class="post-category">
									<a href="#"><?php echo $blog_catx['cat']; ?></a>
								</div>
								<h3 class="post-title"><a href="http://localhost/masters//blog/<?php echo $blogs['slug']; ?>"><?php echo $blogs['title']; ?></a></h3>
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
    

	
    

	
</body>

</html>

<!-- $(".case-study-box .case_study").hover(function() {
 
  $(".btn_color_one a").css({"display": "block"})
}); -->
