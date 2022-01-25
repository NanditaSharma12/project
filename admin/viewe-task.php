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
 try  
 {  
	include('../inc/connection.php');
	$conn = DB();  
 $stmt = $conn->query("SELECT * FROM task where assign_to = $user_id  ");
 $data = $stmt->fetchAll(PDO::FETCH_OBJ);
 
 $stmt1 = $conn->query("SELECT count(*) as total FROM task where assign_to = $user_id");
 $data1 = $stmt1->fetch();
 
  }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }

 ?> 
<!DOCTYPE html>
<html class="loading" lang="en">
<head>
<?php include('tags.php'); ?>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
	 <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://themeselection.com/demo/chameleon-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-switch.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/chat-application.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

	<style>
		
	
	</style>
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-danger" data-col="2-columns">

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
            <h3 class="content-header-title">All Task List</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                  </li>
                  
                  <li class="breadcrumb-item active">Task List
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Header footer section start -->


<!-- Card bg options section start -->
<section id="card-bg-options">
	<div class="row">
		<div class="col-12 mt-3 mb-1">
			<h4 class="text-uppercase"></h4>
			<p>Cards include their own variant classes for quickly changing the
				<code>background-color</code> and
				<code>border-color</code> of a card.
				<strong>Darker colors require the use of</strong>
				<code>.text-white</code>.</p>
		</div>
	</div>

	<div class="row">
	<?php $i=0; foreach($data as $task): ?>
		<div class="col-xl-3 col-md-6 col-sm-12">
		
			<div class="card  <?php if($task->status == 1) {echo"box-shadow-0 bg-danger";} elseif($task->status == 2){echo"box-shadow-0 bg-info";}elseif($task->status == 3){echo"box-shadow-0 bg-gradient-y-warning";}elseif($task->status == 4){echo"box-shadow-0 bg-gradient-x-primary";} ?>">
			
				<div class="card-content collapse show">
					<div class="card-body" style="height:250px;">
						<h4 class="card-title "> <?php echo $task->task; ?></h4>
						
						<p class="card-text">Date
							<code><?php echo date('d-M-Y',strtotime($task->date)); ?> </code> </p>
						<p class="card-text"><?php echo $task->content; ?> </p>
						<a href="<?php echo $task->images; ?>" >image</a>
					</div>
				</div>
				<div class="form-group col-md-6 mb-2">
                                  
								<select id="status" name="service_id" class="form-control" onchange="work(<?php echo $task->id; ?>,this)" selected="">
			                          <option selected="" disabled="">Work Status</option>
                                      <option value="1">Working</option>
                                      <option value="2">Pending</option>
                                      <option value="3">Done</option>
                                      <option value="4">Approved</option>
		                         </select>
				 </div>
			</div>
		</div>
		<?php $i++; endforeach; ?>
		
	</div>
</section>
<!-- // Card bg options section end -->
     </div>
      </div>
    </div>
    <!-- END: Content-->

    <!--footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2019  © Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com/" target="_blank">MasterInfotech</a></span>
      
      </div>
    </footer-->
    
    <?php include('begin-footer.php'); ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
   <script type="text/javascript">
   function work(ids,data) {

	var abc = data.value;
	var values = {"status": abc,"id":ids};
	//console.log(values);
	$.ajax({
				url: "update_status.php",
				type: "post",
				data: values ,
				success: function (response) {
					if(response ==1){
					//console.log( $badge );
						//<? $badge-1; ?>
					window.location.href="http://localhost/infotech/admin/viewe-task.php";
					}
			    
				valid = false;
				},
				error: function(jqXHR, textStatus, errorThrown) {
             // alert("Your form fields are validated. Now you can implement insert logic");
			}
			});
	};
   
   </script>
</body>
</html>