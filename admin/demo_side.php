 <?php
	
	include('../inc/connection.php');
	$conn = DB();  
	
	$stmt = $conn->query("SELECT * FROM permission order by id desc ");
	$data = $stmt->fetchAll();
	
	// $s_data = $conn->query("SELECT * FROM section order by id ");
	// $sidedata = $s_data->fetchAll(PDO::FETCH_OBJ);
	
 ?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .main-menu.menu-light .navigation>li ul 
  {
    font-size: .94rem;
    margin: -9px;
    padding: 0;
  }
  </style>

  <!-- BEGIN: Main Menu-->

  <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="app-assets/images/backgrounds/02.jpg">

    <div class="navbar-header">

      <ul class="nav navbar-nav flex-row">

        <li class="nav-item mr-auto"><a class="navbar-brand" href="http://localhost/infotech/admin/index.php"><img class="brand-logo" alt="Chameleon admin logo" src="app-assets/images/logo/logo.png"/>

           <!--  <h3 class="brand-text">Chameleon</h3> --></a></li>

        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="fa fa-times"></i></a></li>

      </ul>

    </div>  <div class="navigation-background"></div>

    <div class="main-menu-content">
    <ul class="navigation navigation-main " id="main-menu-navigation" data-menu="menu-navigation">

      <li class=" nav-item"><a href="http://localhost/infotech/admin/index.php"><img src="app-assets/images/icons/dashboard.png" alt="dashboard" /><span class="menu-title" data-i18n="">Dashboard</span></a> </li>
    <li class=" nav-item "><a href="http://localhost/infotech/admin/index.php"><img src="app-assets/images/icons/website_content.png" alt="dashboard" /><span class="menu-title" data-i18n="">Website Content</span></a> 
   
     <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

       <!-- <li class=" nav-item"><a href="http://localhost/infotech/admin/index.php"><img src="app-assets/images/icons/dashboard.png" alt="dashboard" /><span class="menu-title" data-i18n="">Dashboard</span></a> </li>-->
  
   <?php   foreach ($data as $row) { 
							   $rid = $row['user_id'];
							  $stmt1 = $conn->query("SELECT name FROM admin where id =$rid");

								$data1 = $stmt1->fetch();
								
								$pid = $row['section'];
							
							  $stmt2 = $conn->query("SELECT name FROM section where id in ($pid)");

								$section = $stmt2->fetchAll();
								
								$nm =array();
								for($i=0; $i<count($section);$i++){
									$nm[] = $section[$i]['name'];
								}
								
  
	// <?php   foreach ($sidedata as $side) { 
	?>
        <li class="nav-item"><a href="#"><img src="<?php// echo $side->icon; ?>" alt="" /><span class="menu-title" data-i18n=""><?php echo implode($nm); ?></span></a>

          <!--ul class="menu-content">



                <li><a class="menu-item" href="http://localhost/infotech/admin/add-services.php">Add Service</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-services.php">Manage Services</a>

                </li>

				<li><a class="menu-item" href="http://localhost/infotech/admin/add-services-inner.php">Add Services Inner</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-services-inner.php">Manage Services Inner</a>

                </li>

          </ul-->

        </li>

	<?php } ?>

        <!--li class=" nav-item"><a href="#"><img src="app-assets/images/icons/home.png" alt="" /><span class="menu-title" data-i18n="">Home</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Sliders</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-sliders.php">Add Slider</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/manage-sliders.php">Manage Sliders</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Developing Technologies Content</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-developing.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-developing.php">Manage Content</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Choose the best</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-choose-best.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-choose-best.php">Manage Content</a>

                </li>

              </ul>

            </li>  

           

            <li><a class="menu-item" href="#">Quality assurance</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-quality.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-quality.php">Manage Content</a>

                </li>

              </ul>

            </li>  

          </ul>

        </li>   

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/phone-call.png" alt="" /><span class="menu-title" data-i18n="">Contact Us</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Contact Page Details</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-contact-details.php">Add Details</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-contact-details.php">Manage Details</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Contact Us Queries</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/query-list.php">Queries list</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

    

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/career.png" alt="" /><span class="menu-title" data-i18n="">Career</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Jobs</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-jobs.php">Add Jobs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-jobs.php">Manage Jobs</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Job Queries</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/job-query.php">Job Queries List</a>

                </li>

              </ul>

            </li>

          </ul>

        </li>

    

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/online.png" alt="" /><span class="menu-title" data-i18n="">Blogs</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Categories</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-blog-cat.php">Add Categories</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-blog-cat.php">Manage Categories</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Manage Blogs</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-blogs.php">Add Blogs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-blogs.php">Manage Blogs</a>

                </li>

              </ul>

            </li> 
<li><a class="menu-item" href="#">Manage FAQ's</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-faq.php">Add Blogs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-faq.php">Manage Blogs</a>

                </li>

              </ul>

            </li> 
          </ul>

        </li>

      <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/portfolio.png" alt="" /><span class="menu-title" data-i18n="">Portfolio</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Portfolio</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-portfolio.php">Add Portfolio</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-portfolio.php">Manage Portfolio</a>

                </li>

              </ul>

            </li>  

           </ul>

          </li>

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/user.png" alt="" /><span class="menu-title" data-i18n="">Who We Are</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Content</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-who-we-are.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-who-we-are.php">Manage Content</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

    

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/case-study.png" alt="" /><span class="menu-title" data-i18n="">Case Studies</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Case Studies</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-case-studies.php">Add Case Studies</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-case-studies.php">Manage Case Studies</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/phone-call.png" alt="" /><span class="menu-title" data-i18n="">Roles & Permissions</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Sections </a>

              <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/add-sections.php">Add Sections</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-sections.php">Manage Sections</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Manage Roles</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-roles.php">Add Roles</a>

                </li>
                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-roles.php">Manage Roles</a>

                </li>

              </ul>

            </li> 
            <li><a class="menu-item" href="#">Manage Permissions</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-permission.php">Add Permission</a>

                </li>
                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-permission.php">Manage Permission</a>

                </li>

              </ul>

            </li> 

            <li><a class="menu-item" href="#">Manage Users</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="http://localhost/infotech/admin/add-users.php">Add Users</a>

                </li>
                <li><a class="menu-item" href="http://localhost/infotech/admin/manage-users.php">Manage Users</a>

                </li>

              </ul>

            </li> 
			
          </ul>

        </li> 

   
	        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/online.png" alt="" /><span class="menu-title" data-i18n="">Manage Projects</span></a>
              <ul class="menu-content">
			  <li><a class="menu-item" href="https://www.masterinfotech.com/admin/manage-projects.php">All Projects</a>
                </li>
              <li><a class="menu-item" href="https://www.masterinfotech.com/admin/add-projects.php">Add Projects</a>
                </li>
              </ul>
            
        </li>  
       
  <li class=" nav-item"><a href="https://www.masterinfotech.com/admin/comment.php"><img src="app-assets/images/icons/comment.jpg" alt="" /><span class="menu-title" data-i18n="">Comments </span></a>

</li>

<li class=" nav-item"><a href="https://www.masterinfotech.com/admin/enquiries.php"><img src="app-assets/images/icons/inquiry.png" alt="" /><span class="menu-title" data-i18n="">Enquiries</span></a>

</li-->
      </ul>

   <!--?php } ?-->
      </ul>
  
  </li>
    </ul>

    <ul class="navigation navigation-main left_align" id="main-menu-navigation" data-menu="menu-navigation">
   
    <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/dashboard.png" alt="" /><span class="menu-title" data-i18n="">Marketing Material </span></a>
       <ul class="menu-content">

              <li><a class="menu-item" href="http://localhost/infotech/admin/uploads.php">Uploads</a>

                </li>
              <li><a class="menu-item" href="http://localhost/infotech/admin/designs.php">Logo & Designs</a>

                </li>

                <li><a class="menu-item" href="http://localhost/infotech/admin/branding-material.php">Branding material</a>

                </li>

        </ul>

            
	</li>
    <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/online.png" alt="" /><span class="menu-title" data-i18n="">Task Section</span></a>
         
         <ul class="menu-content">
   <li><a class="menu-item" href="http://localhost/infotech/admin/task-details.php">All Task Details</a>
           </li>
         <li><a class="menu-item" href="http://localhost/infotech/admin/task-section.php">Assign Task</a>
           </li>
           <li><a class="menu-item" href="http://localhost/infotech/admin/viewe-task.php">My Task<span class="badge badge badge-pill badge-danger float-right mr-2"><?php //echo $data1['total']; ?></span></a>
           </li>
         </ul>
       
   </li>  
    </ul>
   </div>
  </div>

  <!-- END: Main Menu-->