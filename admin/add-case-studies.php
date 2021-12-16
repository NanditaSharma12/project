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

        header("location:https://masterinfotech.com/admin/manage-blogs.php");   

		

		  

	}  

		

	

	if(isset($_POST['save'])){

		if( empty($_POST["description1"]))  

		{  

			 $message = '<label>All fields are required</label>';  

		}  

	   else{  

		$imagex=$_FILES['logo']['name']; 

		$imageArrx=explode('.',$imagex); //first index is file name and second index file type

		$rand=rand(10000,99999);

		$newImageNamex=$imageArrx[0].$rand.'.'.$imageArrx[1];

		$uploadPathx="../uploads/".$newImageNamex;

		$isUploadedx=move_uploaded_file($_FILES["logo"]["tmp_name"],$uploadPathx);

			if($isUploadedx){

				$logo = $uploadPathx;

			}

		$imagemain_image=$_FILES['main_image']['name']; 

		$imageArrmain_image=explode('.',$imagemain_image); //first index is file name and second index file type

		$rand1=rand(10000,99999);

		$newImageNamexmain_image=$imageArrmain_image[0].$rand1.'.'.$imageArrmain_image[1];

		$uploadPathxmain_image="../uploads/".$newImageNamexmain_image;

		$isUploadedxmain_image=move_uploaded_file($_FILES["main_image"]["tmp_name"],$uploadPathxmain_image);

			if($isUploadedxmain_image){

				$main_image = $uploadPathxmain_image;

			}

		$imagepo_image=$_FILES['po_image']['name']; 

		$imageArrpo_image=explode('.',$imagepo_image); //first index is file name and second index file type

		$rand2=rand(10000,99999);

		$newImagepo_image=$imageArrpo_image[0].$rand2.'.'.$imageArrpo_image[1];

		$uploadPathxnewImagepo_image="../uploads/".$newImagepo_image;

		$isUploadedxpo_image=move_uploaded_file($_FILES["po_image"]["tmp_name"],$uploadPathxnewImagepo_image);

			if($isUploadedxpo_image){

				$po_image = $uploadPathxnewImagepo_image;

			}

		$imageaigo_image=$_FILES['aigo_image']['name']; 

		$imageArraigo_image=explode('.',$imageaigo_image); //first index is file name and second index file type

		$rand3=rand(10000,99999);

		$newImageaigo_image=$imageArraigo_image[0].$rand3.'.'.$imageArraigo_image[1];

		$uploadPathxnewImageaigo_image="../uploads/".$newImageaigo_image;

		$isUploadedxaigo_image=move_uploaded_file($_FILES["aigo_image"]["tmp_name"],$uploadPathxnewImageaigo_image);

			if($isUploadedxaigo_image){

				$aigo_image = $uploadPathxnewImageaigo_image;

			}

		$imagestrategy_image=$_FILES['strategy_image']['name']; 

		$imageArrstrategy_image=explode('.',$imagestrategy_image); //first index is file name and second index file type

		$rand4=rand(10000,99999);

		$newImagestrategy_image=$imageArrstrategy_image[0].$rand4.'.'.$imageArrstrategy_image[1];

		$uploadPathxnewImagestrategy_image="../uploads/".$newImagestrategy_image;

		$isUploadedxstrategy_image=move_uploaded_file($_FILES["strategy_image"]["tmp_name"],$uploadPathxnewImagestrategy_image);

			if($isUploadedxstrategy_image){

				$strategy_image = $uploadPathxnewImagestrategy_image;

			}

		$style_fo_imagexx=$_FILES['style_fo_image']['name']; 

		$imagestyle_fo_image=explode('.',$style_fo_imagexx); //first index is file name and second index file type

		$rand5=rand(10000,99999);

		$newstyle_fo_image=$imagestyle_fo_image[0].$rand5.'.'.$imagestyle_fo_image[1];

		$uploadPathxnewnewstyle_fo_image="../uploads/".$newstyle_fo_image;

		$isUploadedxstyle_fo_image=move_uploaded_file($_FILES["style_fo_image"]["tmp_name"],$uploadPathxnewnewstyle_fo_image);

			if($isUploadedxstyle_fo_image){

				$style_fo_image = $uploadPathxnewnewstyle_fo_image;

			}

		$style_co_sch_imagexx=$_FILES['style_co_sch_image']['name']; 

		$imagestyle_co_sch_image=explode('.',$style_co_sch_imagexx); //first index is file name and second index file type

		$rand6=rand(10000,99999);

		$newstyle_co_sch_image=$imagestyle_co_sch_image[0].$rand6.'.'.$imagestyle_co_sch_image[1];

		$uploadPathxstyle_co_sch_image="../uploads/".$newstyle_co_sch_image;

		$isUploadedxstyle_co_sch_image=move_uploaded_file($_FILES["style_co_sch_image"]["tmp_name"],$uploadPathxstyle_co_sch_image);

			if($isUploadedxstyle_co_sch_image){

				$style_co_sch_image = $uploadPathxstyle_co_sch_image;

			}

		$style_style_sitemap_image=$_FILES['style_sitemap_image']['name']; 

		$imagestyle_style_sitemap_image=explode('.',$style_style_sitemap_image); //first index is file name and second index file type

		$rand7=rand(10000,99999);

		$newstyle_style_sitemap_image=$imagestyle_style_sitemap_image[0].$rand7.'.'.$imagestyle_style_sitemap_image[1];

		$uploadPathxstyle_style_sitemap_image="../uploads/".$newstyle_style_sitemap_image;

		$isUploadedxstyle_sitemap_image=move_uploaded_file($_FILES["style_sitemap_image"]["tmp_name"],$uploadPathxstyle_style_sitemap_image);

			if($isUploadedxstyle_sitemap_image){

				$style_sitemap_image = $uploadPathxstyle_style_sitemap_image;

			}

		  	

		$style_screen_image=$_FILES['screen_image']['name']; 

		$imagestyle_screen_image=explode('.',$style_screen_image); //first index is file name and second index file type

		$rand8=rand(10000,99999);

		$newstyle_screen_image=$imagestyle_screen_image[0].$rand8.'.'.$imagestyle_screen_image[1];

		$uploadPathxscreen_image="../uploads/".$newstyle_screen_image ;

		$isUploadedxscreen_image=move_uploaded_file($_FILES["screen_image"]["tmp_name"],$uploadPathxscreen_image);

			if($isUploadedxscreen_image){

				$screen_image = $uploadPathxscreen_image;

			}

		  	

		  	

		$style_paper_image=$_FILES['paper_image']['name']; 

		$imagestyle_paper_image=explode('.',$style_paper_image); //first index is file name and second index file type

		$rand9=rand(10000,99999);

		$newstyle_paper_image=$imagestyle_paper_image[0].$rand9.'.'.$imagestyle_paper_image[1];

		$uploadPathxpaper_image="../uploads/".$newstyle_paper_image ;

		$isUploadedxpaper_image=move_uploaded_file($_FILES["paper_image"]["tmp_name"],$uploadPathxpaper_image);

			if($isUploadedxpaper_image){

				$paper_image = $uploadPathxpaper_image;

			}

		  	

			

			$description1 = $_POST['description1'];

		  	 $po_description = $_POST['po_description'];

		  	 $aigo_sh_description = $_POST['aigo_sh_description'];

		  	 $aigo_main_description = $_POST['aigo_main_description'];

		  	 $strategy_description = $_POST['strategy_description'];

		  	 $style_description = $_POST['style_description'];

		  	 

				$data = [

					'logo' => $logo,

					'main_image' => $main_image,

					'description1' => $description1,

					'po_image' => $po_image,

					'po_description' => $po_description,

					'aigo_image' => $aigo_image,

					'aigo_sh_description' => $aigo_sh_description,

					'aigo_main_description' => $aigo_main_description,

					'strategy_image' => $strategy_image,

					'strategy_description' => $strategy_description,

					'style_fo_image' => $style_fo_image,

					'style_co_sch_image' => $style_co_sch_image,

					'style_sitemap_image' => $style_sitemap_image,

					'style_description' => $style_description,

					'screen_image' => $screen_image,

					'paper_image' => $paper_image,

						];

                       

						

		$sql = "INSERT INTO `case_study`(`logo`, `main_image`, `description1`, `po_image`, `po_description`, `aigo_image`, 

		`aigo_sh_description`, `aigo_main_description`, `strategy_image`, `strategy_description`, `style_fo_image`, `style_co_sch_image`,

		 `style_sitemap_image`, `style_description`, `screen_image`, `paper_image`) VALUES (:logo, :main_image, :description1, :po_image, :po_description, :aigo_image, 

		 :aigo_sh_description, :aigo_main_description, :strategy_image, :strategy_description, :style_fo_image, :style_co_sch_image,

		 :style_sitemap_image, :style_description, :screen_image, :paper_image)";

	$conn->prepare($sql)->execute($data);



	$case_id = $conn->lastInsertId();

//$case_id =1;

	$role = $_POST['role'];

	$countcc=count($role);

	 

	

	for($i=0;$i<$countcc;$i++){

		 $role_imagex=$_FILES['role_image']['name'][$i];

		$imagerole_image[$i]=explode('.',$role_imagex); //first index is file name and second index file type

		$rand=rand(10000,99999);

		 $newrole_image[$i]=$imagerole_image[$i][0].$rand.'.'.$imagerole_image[$i][1];

		

		$uploadPathrole_image[$i]="../uploads/".$newrole_image[$i] ;

		$isUploadedrole_image[$i]=move_uploaded_file($_FILES["role_image"]["tmp_name"][$i],$uploadPathrole_image[$i]);

			if($isUploadedrole_image[$i]){

				$role_image[$i] = $uploadPathrole_image[$i];

			}



		  $sqlx = "INSERT INTO `roles`(`title`, `image`, `case_id`) VALUES ('$role[$i]','$role_image[$i]','$case_id')";

			$conn->prepare($sqlx)->execute();

		

		}

		

		 $pc_content = $_POST['pc_content'];

		

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

			

	$sql = "INSERT INTO `problem_challenges`(`case_id`, `image`, `description`) VALUES ('$case_id','$pc_image[$x]','$pc_content[$x]')";

		$conn->prepare($sql)->execute();



		}	

	

		$pro_imagex=$_FILES['pro_image']['name'];

		$countpro_image=count($pro_imagex);

	for($y=0;$y<$countpro_image;$y++){

		  	

		$image_pro_imagex[$y]=explode('.',$pro_imagex[$y]); //first index is file name and second index file type

		$rand113=rand(10000,99999);

		$new_image_pro_imagex[$y]=$image_pro_imagex[$y][0].$rand113.'.'.$image_pro_imagex[$y][1];

		$uploadPathpro_image[$y]="../uploads/".$new_image_pro_imagex[$y] ;

		$isUploadpro_image[$y]=move_uploaded_file($_FILES["pro_image"]["tmp_name"][$y],$uploadPathpro_image[$y]);

			if($isUploadpro_image[$y]){

				$pro_image[$y] = $uploadPathpro_image[$y];

			}

		$sql = "INSERT INTO `project_imaags`(`case_id`, `image`) VALUES ('$case_id','$pro_image[$y]')";

		$conn->prepare($sql)->execute();

	

			}	

			

	}

		header("location:https://masterinfotech.com/admin/manage-case-studies.php"); 

	}

 }  

 catch(PDOException $error)  

 {  

      $message = $error->getMessage();  

 }







 $stmt = $conn->query("SELECT * FROM blogs_cat order by id desc ");

 $data = $stmt->fetchAll();



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

<?php 	
 $conn1 = DB(); 
 $stmtside = $conn1->query("SELECT name FROM section order by id asc ");
 $dataside = $stmtside->fetchAll();

$stmtsidebar = $conn1->query("SELECT role_id FROM admin where name='$username'"); 

$datasidebar = $stmtsidebar->fetch();
$role_id = $datasidebar['role_id'];
?>

   

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

            <h3 class="content-header-title">Add Case Studies / portfolio</h3>

          </div>

          <div class="content-header-right col-md-8 col-12">

            <div class="breadcrumbs-top float-md-right">

              <div class="breadcrumb-wrapper mr-1">

                <ol class="breadcrumb">

                  <li class="breadcrumb-item"><a href="https://masterinfotech.com/admin/index.php">Home</a>

                  </li>

                  

                  <li class="breadcrumb-item active"><a href="https://masterinfotech.com/admin/add-case-studies.php">Add Case Studies / portfolio</a>

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

		$stmt = $conn->prepare("SELECT * FROM blogs_data WHERE id=?");

		$stmt->execute([$id]); 

		$service = $stmt->fetch();

     

?>

	<form class="form"  method="post" action="" enctype="multipart/form-data">

							<div class="form-body">

                            <div class="form-group">

									

                                    <div class="row">

                                        <div class="form-group col-md-6 mb-2">

                                          <label for="complaintinput1">Select Blog Category</label>

									     <select id="projectinput7" name="cat" class="form-control">

			                                <option value="0" selected="" disabled="">Select blog category</option>

                                            <?php   foreach ($data as $row) { ?>

			                                <option value="<?php echo $row['id']; ?>" <?php if($service['id'] == $row['id']){ echo'selected'; }else{} ?> ><?php echo $row['cat']; ?></option>

                                            <?php } ?>

			                                

			                             </select>

                                        </div>	

                                        <div class="form-group col-md-6 mb-2">

                                             <label for="complaintinput1">date</label>

                                             <input type="date" id="complaintinput1" class="form-control round"  placeholder="company name" name="date" value="<?php echo $service['add_date']; ?>">

                                        </div>	

                                    </div>  

								</div>

                                <div class="form-body">

                                <div class="form-group">

									<label for="complaintinput1">added By</label>

									<input type="text" id="complaintinput1" class="form-control round"  placeholder="company name" name="added_by" value="<?php echo $service['added_by']; ?>">

								</div>

                                <div class="form-group">

									<label for="complaintinput1">Blog Title</label>

									<input type="text" id="complaintinput1" class="form-control round"  placeholder="company name" name="title" value="<?php echo $service['title']; ?>">

								</div>

								<div class="form-group">

									<label for="complaintinput1">Blog Main Image</label>

									<input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="image">

									<img src="<?php echo $service['image']; ?>" height="70px" width="50px"/>

                                </div>

                                <div class="form-group">

									<label for="complaintinput1">Description</label>

                                    <textarea name="description" id="ckeditextaerea" cols="30" rows="15" class="ckeditor-color">

                                    <?php echo $service['description']; ?>

							</textarea>

                            <input type="hidden" name="id" value="<?php echo $id ?>"/>

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

                                <div class="form-group">

									

                                    <div class="row">

                                    <div class="form-group col-md-4 mb-2">

                                             <label for="complaintinput1">Logo</label>

                                             <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="logo">

                                    </div>

                                    <div class="form-group col-md-4 mb-2">

                                             <label for="complaintinput1">Image</label>

                                             <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="main_image">

                                    </div>

                                     <div class="form-group col-md-4 mb-2">

								    	<label for="complaintinput5">Description</label>

								    	<textarea id="complaintinput5" rows="5" class="form-control round" name="description1" placeholder="details"></textarea>

								    </div>

                                    

                                    </div>  

								</div>

                                <div class="form-group">

									

                                    <div class="row">

                                    <div class="form-group col-md-6 mb-2">

                                             <label for="complaintinput1">Project overview Image</label>

                                             <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="po_image">

                                    </div>

                                    

                                     <div class="form-group col-md-6 mb-2">

								    

                                         <label for="complaintinput1">Description</label>

                                         <textarea id="complaintinput5" rows="5" class="form-control round" name="po_description" placeholder="details"></textarea>

                                    </div>

                                

                                </div>  



                            

								    </div>

                                    <div id="appenddata" class="row">

										

                                        <div class="form-group col-md-6 mb-2">

                                         <label for="complaintinput1">Role Title</label>

                                           <input type="text" id="complaintinput1" class="form-control round"  placeholder="company name" name="role[]">

                                        </div>	

                                        <div class="form-group col-md-6 mb-2">

                                         <label for="complaintinput1">Image</label>

                                         <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" multiple name="role_image[]">

                                        </div>

                                

                                </div>  



                                <button class="appendbtn btn btn-primary" type="button">Add Roles</button>

                                   

							</div>

							<br>

							<div class="form-group">

									

                                    <div class="row">

                                    <div class="form-group col-md-6 mb-2">

                                             <label for="complaintinput1">Aims And Goals</label>

                                             <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="aigo_image">

                                    </div>

                                    

                                     <div class="form-group col-md-6 mb-2">

								    

                                         <label for="complaintinput1">Short Description</label>

                                         <textarea id="complaintinput5" rows="5" class="form-control round" name="aigo_sh_description" placeholder="details"></textarea>

                                    </div>

                                

                                </div>  

								<div class="form-group">

									<label for="complaintinput1">Main Description</label>

                                    <textarea name="aigo_main_description" id="ckeditextaerea1" cols="30" rows="15" class="ckeditor-color">

								

							        </textarea>

                        	    </div>	

								<div class="form-group">

									<label for="complaintinput1"> Problems & Challenges</label>

                                </div>	

							    <div id="appenddatapcx" class="row">

										

                                        <div class="form-group col-md-6 mb-2">

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

							<div class="form-group">

									<label for="complaintinput1"> Strategy</label>

                                </div>	

								<div class="row">

                                    <div class="form-group col-md-6 mb-2">

                                             <label for="complaintinput1">Strategy image</label>

                                             <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="strategy_image">

                                    </div>

                                    

                                     <div class="form-group col-md-6 mb-2">

								    

                                         <label for="complaintinput1">Strategy Description</label>

                                         <textarea id="complaintinput5" rows="5" class="form-control round" name="strategy_description" placeholder="details"></textarea>

                                    </div>

                                

                                </div>

								

								

								<div class="form-group">

									<label for="complaintinput1"> Style and Design Guide</label>

                                </div>	

								<div id="appenddatastylexxx" class="row">

										

                                        <div class="form-group col-md-4 mb-2">

                                         <label for="complaintinput1">Font Family Image</label>

                                         <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="style_fo_image">

                                        </div>

										

                                        <div class="form-group col-md-4 mb-2">

                                         <label for="complaintinput1">Color Scheme Image</label>

                                         <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="style_co_sch_image">

                                        </div>

										

                                        <div class="form-group col-md-4 mb-2">

                                         <label for="complaintinput1">Site Map And Grid View Image</label>

                                         <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="style_sitemap_image">

                                        </div>

									

                                </div>  

								<div class="form-group">

								<div class="form-group col-md-6 mb-2">

                                         <label for="complaintinput1">Description</label>

										 <textarea id="complaintinput5" rows="5" class="form-control round" name="style_description" placeholder="details"></textarea>

                                        </div>

									</div>





									<div id="appenddataimage" class="row">

										

                                        <div class="form-group col-md-6 mb-2">

                                         <label for="complaintinput1">Project Image</label>

                                         <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" multiple name="pro_image[]">

                                        </div>



									</div>

									<button class="appendbtnproject btn btn-primary" type="button">Add project Images</button>	



									<br><br>

							<div class="form-group">

									<label for="complaintinput1"> Add Screens And paper Images</label>

                                </div>	

									<div class="form-group row">

									<div class="form-group col-md-6 mb-2">

                                         <label for="complaintinput1">Screen Image</label>

                                         <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="screen_image">

                                        </div>

										<div class="form-group col-md-6 mb-2">

                                         <label for="complaintinput1">paper Image Image</label>

                                         <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="paper_image">

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



<!-- // Basic form layout section end -->

        </div>

      </div>

    </div>

    <!-- END: Content-->





    <!-- BEGIN: Customizer-->

    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close" href="#"><i class="ft-x font-medium-3"></i></a><div class="customizer-content p-2">

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

	<!-- <div class="sidebar-color-options clearfix">

		<div class="bg-black sidebar-color-option" data-sidebar="menu-dark" title="black"></div>

		<div class="bg-white sidebar-color-option" data-sidebar="menu-light" title="white"></div>

	</div> -->

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



    $(".appendbtn").on("click",function () {

		$("#appenddata").append('   <div class="form-group col-md-6 mb-2">   <label for="complaintinput1">Role Title</label>  <input type="text" id="complaintinput1" class="form-control round"  placeholder="company name" name="role[]">  </div>	<div class="form-group col-md-6 mb-2">  <label for="complaintinput1">Image</label> <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="role_image[]"> </div>	');

});



    $(".appendbtnproject").on("click",function () {

		$("#appenddataimage").append('  <div class="form-group col-md-6 mb-2">  <label for="complaintinput1">Project Image</label>   <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="pro_image[]">  </div>	');

});

var x = 2; 

var max_fields = 5;

    $(".appenddatapc").on("click",function (e) {

		e.preventDefault();

        if(x < max_fields){ //max input box allowed

            x++; //text box increment

            var editorId = 'editor_' +x;

		$("#appenddatapcx").append('<div class="form-group col-md-6 mb-2"> <label for="complaintinput1">Image</label>  <input type="file" id="complaintinput1" class="form-control round"  placeholder="company name" name="pc_image[]">    </div>	<div class="form-group col-md-6 mb-2">  <label for="complaintinput1">Description</label> <textarea  id="'+editorId+'" name="pc_content[]" cols="30" rows="15" class="ckeditor-color"> </textarea> </div>');

  

		CKEDITOR.replace(editorId, { height: 200 });

        }

});

});





</script>

  </body>

  <!-- END: Body-->



<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/form-layout-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 06:30:57 GMT -->

</html> 