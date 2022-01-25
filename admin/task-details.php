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
 
 $stmt1 = $conn->query("SELECT count(*) as total FROM task");
 $data1 = $stmt1->fetch();
 

 $stmt_pro = $conn->query("select projects.name as pro_name,task.id,task.task,task.images,task.content, admin.name as worker from task inner join projects on task.project = projects.id inner join admin on admin.id = task.assign_to where assign_by = $user_id");
 $projects = $stmt_pro->fetchAll();

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
        </div>
        <div class="content-body"><!-- Revenue, Hit Rate & Deals -->

<!-- Emails Products & Avg Deals -->
<div class="row">
    <div class="col-md-12 col-lg-8">
        <div class="card">
            <div class="card-header p-1">
                <h4 class="card-title float-left">Projects - <span class="blue-grey lighten-2 font-small-3 mb-0"><?php echo date('d-M-Y'); ?></span></h4>
               
            </div>
            <div class="card-content collapse show">
                <div class="card-footer text-center p-1">
                    <div class="row">
                        <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                            <p class="blue-grey lighten-2 mb-0">Tasks</p>
                            <p class="font-medium-5 text-bold-400"><?php echo $data1['total']; ?></p>
                        </div>
                        <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                            <p class="blue-grey lighten-2 mb-0">Completed</p>
                            <p class="font-medium-5 text-bold-400">58%</p>
                        </div>
                        <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                            <p class="blue-grey lighten-2 mb-0">Pending</p>
                            <p class="font-medium-5 text-bold-400">42%</p>
                        </div>
                        <div class="col-md-3 col-12 text-center">
                            <p class="blue-grey lighten-2 mb-0">Version</p>
                            <p class="font-medium-5 text-bold-400">4.5</p>
                        </div>
                    </div>
                    <hr>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <div class="card pull-up border-top-info border-top-3 rounded-0">
            <div class="card-header">
                <h4 class="card-title">New Projects <span class="badge badge-pill badge-info float-right m-0">5+</span></h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body p-1">
                    <h4 class="font-large-1 text-bold-400">18.5% <i class="ft-users float-right"></i></h4>
                </div>
                <div class="card-footer p-1">
                    <span class="text-muted"><i class="la la-arrow-circle-o-up info"></i> 23.67% increase</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Emails Products & Avg Deals -->
<!-- Chat and Recent Projects -->
<div class="row match-height">
    <div class="col-xl-12 col-lg-6 col-md-12">
        <h5 class="card-title text-bold-700 my-2">Recent Projects</h5><a href="http://localhost/infotech/admin/task-section.php"><button class="btn btn-primary" type="button">Assign Task</button></a>
        <div class="card" style="">            
            <div class="card-content">
                <div id="recent-projects" class="media-list position-relative">
                    <div class="table-responsive">
                        <table class="table table-padded table-xl mb-0" id="recent-project-table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Project Name</th>
                                    <th class="border-top-0">Assigned to</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php 
							
							foreach($projects as $proj): ?>
                                <tr>
                                    <td class="text-truncate align-middle">
                                       <?php echo $proj['pro_name']; ?>
                                    </td>
                                    <td class="text-truncate">
                                        <ul class="list-unstyled users-list m-0">
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-info"><?php echo $proj['worker']; ?></span>
                                            </li>
                                        </ul>
                                    </td>
                                   
                                    <td>
                                        <div class="form-group">
										<a href="task-status.php?tid=<?php echo $proj['id']; ?>">
										<button type="button" class="btn btn-outline-info btn-min-width mr-1 mb-1">Info</button></a>
									</div>
                                    </td>
                                </tr>     
						<?php endforeach; ?>								
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Products sell and New Orders -->
<!-- Total earning & Recent Sales  -->
<div class="row mt-1">
   <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Chat</h4>
                <a class="heading-elements-toggle">
		  <i class="la la-ellipsis-v font-medium-3"></i>
		</a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li>
                            <a data-action="reload">
				<i class="ft-rotate-cw"></i>
			  </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body chat-application">
                    <div class="chats height-300 ps ps--active-y">
                        <div class="chats">
                            <div class="chat">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>How can we help? We're here for you!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>Hey Jacob, Could you please help me to find it out?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>Absolutely!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>I am looking for the best Angular admin template.</p>
                                        <p>It should be Bootstrap 4 compatible.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>Crest admin is the responsive Angular 5 bootstrap 4 admin template.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>Looks clean and fresh UI.</p>
                                    </div>
                                    <div class="chat-content">
                                        <p>It's perfect for my next project.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>Thanks a lot!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>How can I purchase it?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>From Wrapbootstrap.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>I will purchase it for sure.</p>
                                    </div>
                                    <div class="chat-content">
                                        <p>Thanks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat">
                                <div class="chat-avatar">
                                    <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
					<img src="app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar">
				  </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-content">
                                        <p>Great!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 300px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 101px;"></div></div></div>
                    <form class="chat-app-input mt-1 row">
                        <div class="col-12">
                            <fieldset>
                                <div class="input-group position-relative has-icon-left">
                                    <div class="form-control-position">
                                        <span id="basic-addon3"><i class="ft-image"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Send message" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">Send</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Total earning & Recent Sales  -->
        </div>
      </div>
    </div>
    <!-- END: Content-->



    <!--footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2019  © Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com/" target="_blank">Masterinfotech</a></span>
       
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
    <script src="app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.min.js" type="text/javascript"></script>
    <!-- END: Page JS-->

  
  <!-- END: Body-->

<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Dec 2021 04:26:17 GMT -->
<div class="chartist-tooltip" style="top: 377px; left: 482px;"></div><div class="chartist-tooltip" style="top: 1225px; left: 282px;"><span class="chartist-tooltip-value">8000</span></div><div class="chartist-tooltip" style="top: 1409px; left: 425px;"></div></body></html>