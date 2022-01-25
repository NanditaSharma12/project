<?php  

 session_start();  

 if(isset($_SESSION["name"]))  
 {  
    $username = $_SESSION['name'];
 $user_id = $_SESSION['user_id'];
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
    if(isset($_POST['update'])){
		if(empty($_POST["cat"]))  
		{  
			 $message = '<label>All fields are required</label>';  
		}  
		else  
		{  
			$imagex=$_FILES['image']['name']; 
			
            $id = $_POST['id'];
            $cat = $_POST['cat'];
            $add_date = $_POST['date'];
            $added_by = $_POST['added_by'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            if(!empty($imagex))    {
                $imageArrx=explode('.',$imagex); //first index is file name and second index file type
                $rand=rand(10000,99999);
                $newImageNamex=$imageArrx[0].$rand.'.'.$imageArrx[1];
                $uploadPathx="../uploads/".$newImageNamex;
                $isUploadedx=move_uploaded_file($_FILES["image"]["tmp_name"],$uploadPathx);
                    if($isUploadedx){
                        $image1 = $uploadPathx;
                    }
					$data = [
						'cat' => $cat,
						'add_date' => $add_date,
						'added_by' => $added_by,
						'title' => $title,
						'image' => $image1,
						'description' => $description,
						'id' => $id,
							];
						   
					   $sql = "UPDATE blogs_data SET  cat=:cat,add_date=:add_date,added_by=:added_by,title=:title,image=:image,description=:description WHERE id=:id";
					   $conn->prepare($sql)->execute($data);
				}
				else{
					$data = [
						'cat' => $cat,
						'add_date' => $add_date,
						'added_by' => $added_by,
						'title' => $title,
						'description' => $description,
						'id' => $id,
							];
						   
					   $sql = "UPDATE blogs_data SET  cat=:cat,add_date=:add_date,added_by=:added_by,title=:title,description=:description WHERE id=:id";
					   $conn->prepare($sql)->execute($data);
				}
            
		}			 
        header("location:http://localhost/master/admin/manage-blogs.php");   
		
		  
	}  
		
	
	if(isset($_POST['save'])){
		if( empty($_POST["name_id"]))  
		{  
			 $message = '<label>All fields are required</label>';  
		}  
	   else{  
		$pro_id = $_POST['pro_id'];
	    $pc_content = $_POST['pc_content'];
		$name_id = $_POST['name_id'];
		$date = $_POST['date'];
		$task = $_POST['task'];
		$countxs=count($pc_content);
		
		
	for($x=0;$x<$countxs;$x++){
		$pc_imagex=$_FILES['pc_image']['name'][$x];
	 	$imagepc_image[$x]=explode('.',$pc_imagex); //first index is file name and second index file type
		$rand17=rand(10000,99999);
		$newpc_image[$x]=$imagepc_image[$x][0].$rand17.'.'.$imagepc_image[$x][1];
	    $uploadPathpc_image[$x]="../uploads/".$newpc_image[$x] ;
		$isUploadpc_image[$x]=move_uploaded_file($_FILES["pc_image"]["tmp_name"][$x],$uploadPathpc_image[$x]);
			if($isUploadpc_image[$x]){
				$pc_image[$x] = $uploadPathpc_image[$x];
			}
		//	$images[$x] = implode(',',$pc_image[$x]);
	$sql = "INSERT INTO `task`(`project`,`assign_to`, `assign_by`, `task`, `images`, `content`,date) VALUES ('$pro_id[$x]','$name_id[$x]','$user_id','$task[$x]','$pc_image[$x]','$pc_content[$x]','$date[$x]')";
		$conn->prepare($sql)->execute();

		}	
	
	}
		//header("location:http://localhost/master/admin/manage-case-studies.php"); 
	}
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }



 $stmt = $conn->query("SELECT * FROM admin where name !='Admin' order by id desc ");
 $data = $stmt->fetchAll(PDO::FETCH_OBJ);
 
 $stmtpro = $conn->query("SELECT * FROM projects order by id desc ");
 $project = $stmtpro->fetchAll(PDO::FETCH_OBJ);

 ?> 

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/form-layout-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 06:30:57 GMT -->
<head>
  <?php include('tags.php'); ?>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://themeselection.com/demo/chameleon-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-switch.min.css">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/editors/tinymce/tinymce.min.css">
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
    <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
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
            <h3 class="content-header-title">Assign Task</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="http://localhost/infotech/admin/index.php">Home</a>
                  </li>
                  
                  <li class="breadcrumb-item active"><a href="http://localhost/infotech/admin/add-case-studies.php">Add Case Studies / portfolio</a>
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

	<form class="form"  method="post" action="" enctype="multipart/form-data">
							
							<div class="form-group">
								
							    <div id="appenddatapcx" class="row">
								<div class="form-group col-md-4 mb-2">
                                          <label for="complaintinput1">Project Name</label>
									     <select id="projectinput7" name="pro_id[]" class="form-control">
			                                <option value="0"  disabled="">Select Project</option>
                                            <?php   foreach ($project as $pro) { ?>
			                                <option value="<?php echo $pro->id; ?>" ><?php echo $pro->name; ?></option>
                                            <?php } ?>
			                                
			                             </select>
                                        </div>	
										<div class="form-group col-md-4 mb-2">
                                          <label for="complaintinput1">Assign to</label>
									     <select id="projectinput7" name="name_id[]" class="form-control">
			                                <option value="0"  disabled="">Assign to</option>
                                            <?php   foreach ($data as $row) { ?>
			                                <option value="<?php echo $row->id; ?>" ><?php echo $row->name; ?></option>
                                            <?php } ?>
			                                
			                             </select>
                                        </div>	
										<div class="form-group col-md-4 mb-2">
                                         <label for="complaintinput1">Date</label>
                                           <input type="date" id="complaintinput1" class="form-control round"  placeholder="company name" name="date[]">
                                        </div>	
										<div class="form-group col-md-3 mb-2">
                                         <label for="complaintinput1">Task Name</label>
                                           <input type="text" id="complaintinput1" class="form-control round"  placeholder="company name" name="task[]">
                                        </div>	
                                        <div class="form-group col-md-3 mb-2">
                                         <label for="complaintinput1">Image</label>
                                           <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" multiple name="pc_image[]">
                                        </div>	
                                        <div class="form-group col-md-6 mb-2">
                                         <label for="complaintinput1">Description</label>
                                         <textarea  id="ckeditextaerea2" name="pc_content[]"  class="ckeditor-color"> </textarea>
                                        </div>
                                
                                </div>  

                                <button class="appenddatapc btn btn-primary" type="button">Add More</button>	

							<br><br>
								
							<div class="form-actions">
								<button type="button" class="btn btn-danger mr-1">
									<i class="fa fa-times"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary" name="save">
									<i class="fa fa-check"></i> Save
								</button>
							</div>
						</form>
		
					</div>
				</div>
			</div>
		</div>
	</div>


</section>

<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close" href="#"><i class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-primary box-shadow-3" href="#" id="customizer-toggle-setting"><i class="ft-settings font-medium-3 spinner white"></i></a><div class="customizer-content p-2">
	<h5 class="mt-1 mb-1 text-bold-500">Navbar Color Options</h5>
	<div class="navbar-color-options clearfix">
		<div class="gradient-colors mb-1 clearfix">
			<div class="bg-gradient-x-purple-blue navbar-color-option" data-bg="bg-gradient-x-purple-blue" title="bg-gradient-x-purple-blue"></div>
			<div class="bg-gradient-x-purple-red navbar-color-option" data-bg="bg-gradient-x-purple-red" title="bg-gradient-x-purple-red"></div>
			<div class="bg-gradient-x-blue-green navbar-color-option" data-bg="bg-gradient-x-blue-green" title="bg-gradient-x-blue-green"></div>
			<div class="bg-gradient-x-orange-yellow navbar-color-option" data-bg="bg-gradient-x-orange-yellow" title="bg-gradient-x-orange-yellow"></div>
			<div class="bg-gradient-x-blue-cyan navbar-color-option" data-bg="bg-gradient-x-blue-cyan" title="bg-gradient-x-blue-cyan"></div>
			<div class="bg-gradient-x-red-pink navbar-color-option" data-bg="bg-gradient-x-red-pink" title="bg-gradient-x-red-pink"></div>
		</div>
		<div class="solid-colors clearfix">
			<div class="bg-primary navbar-color-option" data-bg="bg-primary" title="primary"></div>
			<div class="bg-success navbar-color-option" data-bg="bg-success" title="success"></div>
			<div class="bg-info navbar-color-option" data-bg="bg-info" title="info"></div>
			<div class="bg-warning navbar-color-option" data-bg="bg-warning" title="warning"></div>
			<div class="bg-danger navbar-color-option" data-bg="bg-danger" title="danger"></div>
			<div class="bg-blue navbar-color-option" data-bg="bg-blue" title="blue"></div>
		</div>
	</div>

	<hr>

	<h5 class="my-1 text-bold-500">Layout Options</h5>
	<div class="row">
		<div class="col-12">
			<div class="d-inline-block custom-control custom-radio mb-1 col-4">
				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="default-layout" checked>
				<label class="custom-control-label" for="default-layout">Default</label>
			</div>
			<div class="d-inline-block custom-control custom-radio mb-1 col-4">
				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="fixed-layout">
				<label class="custom-control-label" for="fixed-layout">Fixed</label>
			</div>
			<div class="d-inline-block custom-control custom-radio mb-1 col-4">
				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="static-layout">
				<label class="custom-control-label" for="static-layout">Static</label>
			</div>
			<div class="d-inline-block custom-control custom-radio mb-1">
				<input type="radio" class="custom-control-input bg-primary" name="layouts" id="boxed-layout">
				<label class="custom-control-label" for="boxed-layout">Boxed</label>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="d-inline-block custom-control custom-checkbox mb-1">
				<input type="checkbox" class="custom-control-input bg-primary" name="right-side-icons" id="right-side-icons">
				<label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
			</div>
		</div>
	</div>

	<hr>

	<h5 class="mt-1 mb-1 text-bold-500">Sidebar menu Background</h5>
	
	<div class="row sidebar-color-options ml-0">
		<label for="sidebar-color-option" class="card-title font-medium-2 mr-2">White Mode</label>
		<div class="text-center mb-1">
			<input type="checkbox" id="sidebar-color-option" class="switchery" data-size="xs"/>
		</div>
		<label for="sidebar-color-option" class="card-title font-medium-2 ml-2">Dark Mode</label>
	</div>

	<hr>

	<label for="collapsed-sidebar" class="font-medium-2">Menu Collapse</label>
	<div class="float-right">
		<input type="checkbox" id="collapsed-sidebar" class="switchery" data-size="xs"/>
	</div>
	
	<hr>

	<!--Sidebar Background Image Starts-->
	<h5 class="mt-1 mb-1 text-bold-500">Sidebar Background Image</h5>
	<div class="cz-bg-image row">
		<div class="col mb-3">
			<img src="app-assets/images/backgrounds/04.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
		</div>
		<div class="col mb-3">
			<img src="app-assets/images/backgrounds/01.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
		</div>
		<div class="col mb-3">
			<img src="app-assets/images/backgrounds/02.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
		</div>
		<div class="col mb-3">
			<img src="app-assets/images/backgrounds/05.jpg" class="rounded sidiebar-bg-img" width="50" height="100" alt="background image">
		</div>
	</div>
	<!--Sidebar Background Image Ends-->

	<!--Sidebar BG Image Toggle Starts-->
	<div class="sidebar-image-visibility">
		<div class="row ml-0">
			<label for="toggle-sidebar-bg-img" class="card-title font-medium-2 mr-2">Hide Image</label>
			<div class="text-center mb-1">
				<input type="checkbox" id="toggle-sidebar-bg-img" class="switchery" data-size="xs" checked/>
			</div>
			<label for="toggle-sidebar-bg-img" class="card-title font-medium-2 ml-2">Show Image</label>
		</div>
	</div>
	<!--Sidebar BG Image Toggle Ends-->

	<hr>

	<div class="row mb-2">
		<!-- <div class="col">
			<a href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" class="btn btn-danger btn-block box-shadow-1" target="_blank">Buy Now</a>
		</div> -->
		<div class="col">
			
		</div>
	</div>
	<div class="text-center">
		<button id="twitter" class="btn btn-social-icon btn-twitter sharrre mr-1"><i class="la la-twitter"></i></button>
		<button id="facebook" class="btn btn-social-icon btn-facebook sharrre mr-1"><i class="la la-facebook"></i></button>
		<button id="google" class="btn btn-social-icon btn-google sharrre"><i class="la la-google"></i></button>
	</div>
</div>
    </div>
    <!-- End: Customizer-->


	<?php include('begin-footer.php'); ?>


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/editors/editor-ckeditor.min.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

<script>
    $('.ckeditor-color').each(function () {
        CKEDITOR.replace($(this).prop('id'));
    });
</script>
<script>
$(document).ready(function(){

var x = 2; 
var max_fields = 5;
    $(".appenddatapc").on("click",function (e) {
		e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            var editorId = 'editor_' +x;
		$("#appenddatapcx").append('<div class="form-group col-md-4 mb-2"><label for="complaintinput1">Select project</label>	<select id="projectinput7" name="pro_id[]" class="form-control"><option value="0" selected="" disabled="">Select project</option> <?php   foreach ($project as $pro) { ?><option value="<?php echo $pro->id; ?>"><?php echo $pro->name; ?></option><?php } ?> </select></div><div class="form-group col-md-4 mb-2"><label for="complaintinput1">Select Blog Category</label>	<select id="projectinput7" name="name_id[]" class="form-control"><option value="0" selected="" disabled="">Select blog category</option> <?php   foreach ($data as $row) { ?><option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option><?php } ?> </select></div>	<div class="form-group col-md-4 mb-2"> <label for="complaintinput1">Date</label>                                           <input type="date" id="complaintinput1" class="form-control round"  placeholder="company name" name="date[]">                                        </div>											<div class="form-group col-md-3 mb-2">                                        <label for="complaintinput1">Task Name</label>                                           <input type="text" id="complaintinput1" class="form-control round"  placeholder="company name" name="task[]">                                        </div>	<div class="form-group col-md-3 mb-2"> <label for="complaintinput1">Image</label>  <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" multiple name="pc_image[]">    </div>	<div class="form-group col-md-6 mb-2">  <label for="complaintinput1">Description</label> <textarea  id="'+editorId+'" name="pc_content[]" cols="30" rows="15" class="ckeditor-color"> </textarea> </div>');
  
		CKEDITOR.replace(editorId, { height: 200 });
        }
});
});


</script>
  </body>
  <!-- END: Body-->

<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/form-layout-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 06:30:57 GMT -->
</html> 