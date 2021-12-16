<!DOCTYPE html>
<html lang="en">

<head>

   
   <style> 
	.error {
            color: #ff0000;
			float: left;
        }
		
	.success {
			color: green;
			float: left;
	    }
	</style>
   
</head>

<body>
<?php include('inc/header.php');?>
<?php  

	   $id = str_replace('-',' ',$_GET['job']); 
       $stmt2 = $conn->prepare("SELECT * FROM jobs where title='$id'");
       $stmt2->execute(); 
       $jobs = $stmt2->fetch();
	   $msg='';    
	   $message=''; 
	 if(isset($_POST['submit'])){
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$link = $_POST["link"];
	$file_attach=$_FILES['file_attach']['name']; 
	$extension = end(explode(".", $file_attach));
	$allowedExts = array(
  "pdf", 
  "doc", 
  "docx"
	); 

	$allowedMimeTypes = array( 
  'application/msword',
  'application/pdf'
	);
if (!( in_array($extension, $allowedExts ))) {
  $msg = 'Invalid format, Please upload doc/pdf Format';
}
else{
	$imageArrx=explode('.',$file_attach); //first index is file name and second index file type

                $rand=rand(10000,99999);

                $newImageNamex=$imageArrx[0].$rand.'.'.$imageArrx[1];

                $uploadPathx="forms/".$newImageNamex;

                $isUploadedx=move_uploaded_file($_FILES["file_attach"]["tmp_name"],$uploadPathx);

                    if($isUploadedx){

                        $linkapplication = "https://www.masterinfotech.com/".$uploadPathx;

                    }
	 $job = $_POST["job"];
	 $toEmail = "harinder@masterinfotech.com";	 
	 $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
	 $content = "<html><body><p> Username:- $name</p><br> <p> Email:- $email</p><br> <p> Phone:- $phone</p><br><p> Portfolio-Link:- $link</p><br><p> Aplication-Link:- $linkapplication</p></html></body>";
	 
	
	$subject = "Job Application Form";
	$headers .= "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $headers)) {
	    $message = "Your contact information is received successfully.";
        $conn1 = DB();
		$sql = $conn1->prepare("INSERT INTO applied (job_id,name,email,phone,plink,cv) VALUES ('$job','$name','$email','$phone','$link','$linkapplication')");
		$sql->execute($data_record);

	}
}
} 
?>
    <!-----Section 1--------->
        <!-----Section 1--------->
     <section class="section-app-form">
        <div class="container">
           <h1 class="display-3 fw-bold m-5 text-center">Application Form:<span class="color_one">  <?php echo $jobs['title'];?></span></h1>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<div class="apply-desc">
                    <h3>Job Description</h3>
					<?php echo $jobs['description'];?>
					</div>
                </div>
               
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pl-5">
				<div id="apply-form">
                    <h3>Apply Now</h3>
                    
                   <form id="contact-form" action="" method="post" enctype="multipart/form-data">
                   <?php if(!empty($msg)){ ?> <p style="color:red;"> <?php echo $msg; ?></p> <?php }elseif(!empty($message)){?><p style="color:green;"> <?php echo $message; ?></p>  <?php }else{}?>
						<div class="form-group m-2 required">
						<span class="success"></span>
						</div>
						<div class="form-group">
							<h6>Name</h6>
							<input type="text" class="form-control" id="name" name="name">
							<span class="error"></span>
						</div>
						<div class="form-group">
							<h6>E-mail</h6>
							<input type="email" class="form-control" id="email" name="email">
							<span class="error"></span>
						</div>
						<div class="form-group">
							<h6>Phone Number</h6>
							<input type="text" class="form-control " id="phone" name="phone">
							<span class="error"></span>
						</div>
						<div class="form-group">
							<h6>Portfolio Link</h6>
							<input type="text" class="form-control " id="link" name="link">
							<span class="error"></span>
						</div>
						<div class="form-group">
							<h6>Upload CV</h6>
							  <input type="file" id="cv" name="file_attach" class="form-control" placeholder="Choose file"/>
						<input type="hidden" class="form-control " id="job" name="job" value="<?php echo $jobs['id']; ?>">
						<span class="error"></span>
						</div>
						<div class="text-center">
							<button class="btn btn_color_one mt-5" type="button" id="submit" name="submit" value="submit" onclick="validateForm()"
							style="width:100%"> Submit form</button>
						</div>
					</form>
				</div>
                </div>
            </div>
        </div>
    </section>
    <!----------section1------->

      
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
   
   <script type="text/javascript">
   
   $(document).ready(function() {

$("#clickme").on("click",function(){
	
	var name = $("#name").val();
	var email = $("#email").val();
	var phone = $("#phone").val();
	var link = $("#link").val();
	var job = $("#job").val();
	
	if(name ==''){
		
		$("#msg").text('Enter name ');
		$("#msg").css('display:block');
		
	}else{
	 var values = {"name":name,"email":email,"phone":phone,"link":link,"job":job,};
	console.log(values);
  $.ajax({
        url: "mail.php",
        type: "post",
        data: values ,
        success: function (response) {
	console.log(response);
           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    }); 
	}
});

	});
	
   
	 function validateForm() {
			
			// alert("Your form fields are validated. Now you can implement insert logic");
			var valid = true;
            if (isFormValid()) {
				var name = $("#name").val();
				var email = $("#email").val();
				var phone = $("#phone").val();
				var link = $("#link").val();
				var job = $("#job").val();
				var values = {"name":name,"email":email,"phone":phone,"link":link,"job":job,};
					console.log(values);
					$.ajax({
						url: "mail.php",
						type: "post",
						data: values ,
						success: function (response) {
							$(".success").html("Thank you for applying. We will revert you soon.")                
							valid = false;
						// You will get response from your PHP page (what you echo or print)
						},
					error: function(jqXHR, textStatus, errorThrown) {
						console.log(textStatus, errorThrown);
					}
					}); 
					
             
			}
	 }

	
	function isFormValid() {
		
		//Initially default values;
            errorMessage = "";
            $(".error").html("");
            var isValid = true;
            var regName = /^[a-zA-Z ]+$/
			var regemail=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			var regphn = /^\d{10}$/;
			var reglink =  /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
			//var VALID_TYPES = /^\.(doc|DOC|pdf|PDF|docx|DOCX)$/;
            //Validate First name
            if ($("#name").val() == "") {
                $("#name").siblings(".error").html("Please enter Name")                
                isValid = false;
            }
            else {

                if (!regName.test($("#name").val())) {
                    $("#name").siblings(".error").html("Please enter Valid Name")
                    isValid = false;
                }

            }
			
			 if ($("#email").val() == "") {
                $("#email").siblings(".error").html("Please enter email ")                
                isValid = false;
            }
			else {

                if (!regemail.test($("#email").val())) {
                    $("#email").siblings(".error").html("Please enter Valid email")
                    isValid = false;
                }
			}
			 if ($("#phone").val() == "") {
                $("#phone").siblings(".error").html("Please enter  phone number")                
                isValid = false;
            }
			else {

                if (!regphn.test($("#phone").val())) {
                    $("#phone").siblings(".error").html("Please enter valid phone number")
                    isValid = false;
                }
			}
			
			 if ($("#link").val() == "") {
                $("#link").siblings(".error").html("Please enter URL")                
                isValid = false;
            }
			else{
                if (!reglink.test($("#link").val())) {
                    $("#link").siblings(".error").html("Please enter valid URL")
                    isValid = false;
                }
			}
			if ($("#cv").val() == "") {
                $("#cv").siblings(".error").html("Please upload your CV")                
                isValid = false;
            }
			/*else {

                if (!reglink.test($("#cv").val())) {
                    $("#cv").siblings(".error").html("Please upload pdf , doc , docx files only")
                    isValid = false;
                }
			}*/
				
		 return isValid;
			}



		
	
   
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

   
  <script src="http://localhost/masters//assets//assets/js/jquery.min.js"></script>
    <script src="http://localhost/masters//assets//assets/js/carrousel.js"></script>
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