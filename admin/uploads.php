<?php  



 session_start();  



 if(isset($_SESSION["name"]))  

 {  

    $username = $_SESSION['name'];

 

 }  

 else  

 {  

      header("location:signin.php");  

 }  

 $message = ""; 



 try  

 {  

	include('../inc/connection.php');

	$conn = DB(); 

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  
  if(isset($_POST['save'])){

	  if(empty($_POST["cat"]) || empty($_FILES['image']['name']))  
		{  
		 $message = '<label>All fields are required</label>';  
		}  
	  else{  
	   $cat = $_POST["cat"];
	    $count = count($_FILES['image']['name']);
	   
	  for($i=0;$i<$count;$i++){
		 $role_imagex=$_FILES['image']['name'][$i];
		 $imagerole_image[$i]=explode('.',$role_imagex); //first index is file name and second index file type
         $rand=rand(10000,99999);
         $newrole_image[$i]=$imagerole_image[$i][0].$rand.'.'.$imagerole_image[$i][1];
         $uploadPathrole_image[$i]="../uploads/".$newrole_image[$i] ;
         $isUploadedrole_image[$i]=move_uploaded_file($_FILES["image"]["tmp_name"][$i],$uploadPathrole_image[$i]);
      if($isUploadedrole_image[$i]){
         $image[$i] = $uploadPathrole_image[$i];
      }
		 $sqlx = "INSERT INTO `uploads`(`cat`, `image`) VALUES ('$cat','$image[$i]')";
		$conn->prepare($sqlx)->execute();
		}
			}
		header("location:https://masterinfotech.com/admin/uploads.php"); 
	}
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }

 ?> 

<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

  <!-- BEGIN: Head-->

  

<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/form-layout-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 06:30:57 GMT -->

<head>

  <?php include('tags.php'); ?>

    <link rel="apple-touch-image" href="app-assets/images/ico/apple-image-120.png">

    <link rel="shortcut image" type="image/x-image" href="https://themeselection.com/demo/chameleon-admin-template/app-assets/images/ico/favimage.ico">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">



    <!-- BEGIN: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-switch.min.css">

    <!-- END: Vendor CSS-->


<?php 	
 $conn1 = DB(); 
 $stmtside = $conn1->query("SELECT name FROM section order by id asc ");
 $dataside = $stmtside->fetchAll();

$stmtsidebar = $conn1->query("SELECT role_id FROM admin where name='$username'"); 

$datasidebar = $stmtsidebar->fetch();
$role_id = $datasidebar['role_id'];
?>
    <!-- BEGIN: Theme CSS-->

    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">

    <!-- END: Theme CSS-->



    <!-- BEGIN: Page CSS-->

    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">

    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">

    <!-- END: Page CSS-->



    <!-- BEGIN: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- END: Custom CSS-->



  </head>

  <!-- END: Head-->



  <!-- BEGIN: Body-->

  <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">



   

    <!-- BEGIN: Header-->

 <?php include('profile.php'); ?>

    <!-- END: Header-->



	<?php include('sidebar.php'); ?>



    <!-- BEGIN: Content-->

    <div class="app-content content">

      <div class="content-wrapper">

        <div class="content-wrapper-before"></div>

        <div class="content-header row">

          <div class="content-header-left col-md-4 col-12 mb-2">

            <h3 class="content-header-title">Uploads</h3>

          </div>

          <div class="content-header-right col-md-8 col-12">

            <div class="breadcrumbs-top float-md-right">

              <div class="breadcrumb-wrapper mr-1">

                <ol class="breadcrumb">

                  <li class="breadcrumb-item"><a href="https://masterinfotech.com/admin/index.php">Home</a>

                  </li>

                  

                  <li class="breadcrumb-item active"><a href="https://masterinfotech.com/admin/Uploads.php">Uploads</a>

                  </li>

                </ol>

              </div>

            </div>

          </div>

        </div>

        <div class="content-body"><!-- Basic form layout section start -->

<section id="basic-form-layouts">





	<div class="row match-height">

		

		<div class="col-md-12">

			<div class="card">

			

				<div class="card-content collapse show">

					<div class="card-body">

<?php 

	

	

	if(isset($_GET['id'])){ 

		$id = $_GET['id'];

		$stmt = $conn->prepare("SELECT * FROM home_slider WHERE id=?");

		$stmt->execute([$id]); 

		$title = $stmt->fetch();

?>

	<form class="form" method="post" action="" enctype="multipart/form-data">

							<div class="form-body">

										<div class="form-group col-md-6 mb-2">

                                          <label for="complaintinput1">Select Blog Title</label>

									     <select id="projectinput7" name="b_id" class="form-control">

			                                <option value="0" selected="" disabled="">Select blog category</option>

                                            <?php foreach($datablog as $blog){ ?>
			                                <option value="<?php echo $blog['id']; ?>" <?php if($who['id']== $blog['id']){ echo'selected'; }else{} ?>><?php echo $blog['title']; ?></option>
											<?php } ?>
                                            
			                           

			                             </select>

                                        </div>	

								<div class="form-group">

									<label for="complaintinput2">Upload logo and Design Images		</label>

									<input type="file" id="complaintinput2" class="form-control round"  placeholder="Slider image" multiple name="image[]">

									<img src="<?php echo $title['image']; ?>" height="70px" width="50px"/>

								</div>



							</div>



							<div class="form-actions">

								<button type="button" class="btn btn-danger mr-1">

									<i class="fa fa-times"></i> Cancel

								</button>

								<button type="submit" class="btn btn-primary" name="update">

									<i class="fa fa-check"></i> Update

								</button>

							</div>

						</form>





<?php }else{ ?>



	<form class="form"  method="post" action="" enctype="multipart/form-data">

							<div class="form-body">
								<div class="row">
								<div class="form-group col-md-6 mb-2">

                                          <label for="complaintinput1">Select Image Categories</label>

									     <select id="projectinput7" name="cat" class="form-control round">
											<option value="0" selected="" disabled="">Select Image Categories</option>
											<option value="1">Logos & Designs</option>
											<option value="2">Another Material</option>
											</select>

                                        </div>	
								<div class="form-group col-md-6 mb-2">

									<label for="complaintinput2">Upload logo and Design Images</label>

									<input type="file" id="complaintinput2" class="form-control round" placeholder="title image" multiple name="image[]">

								</div>

								</div>

							</div>



							<div class="form-actions">

								<button type="button" class="btn btn-danger mr-1">

									<i class="fa fa-times"></i> Cancel

								</button>

								<button type="submit" class="btn btn-primary" name="save">

									<i class="fa fa-check"></i> Save

								</button>

							</div>

						</form>



<?php } ?>

					

					</div>

				</div>

			</div>

		</div>

	</div>





</section>
  <!-- END: Body-->



<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/form-layout-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 06:30:57 GMT -->

</html>