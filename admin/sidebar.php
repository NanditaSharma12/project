    

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	

  <!-- BEGIN: Main Menu-->

  <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="app-assets/images/backgrounds/02.jpg">

    <div class="navbar-header">

      <ul class="nav navbar-nav flex-row">

        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="app-assets/images/logo/logo.png"/>

           <!--  <h3 class="brand-text">Chameleon</h3> --></a></li>

        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="fa fa-times"></i></a></li>

      </ul>

    </div>

  

  

  

  

    <div class="navigation-background"></div>

    <div class="main-menu-content">
 <?php if($role_id == 2){?> 
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class=" nav-item"><a href="https://masterinfotech.com/admin/index.php"><img src="app-assets/images/icons/dashboard.png" alt="dashboard" /><span class="menu-title" data-i18n="">Dashboard</span></a> </li>
  



        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/phone-call.png" alt="" /><span class="menu-title" data-i18n="">Contact Us</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Contact Page Details</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-contact-details.php">Add Details</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-contact-details.php">Manage Details</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Contact Us Queries</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/query-list.php">Queries list</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

    

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/career.png" alt="" /><span class="menu-title" data-i18n="">Career</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Jobs</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-jobs.php">Add Jobs</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-jobs.php">Manage Jobs</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Job Queries</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/job-query.php">Job Queries List</a>

                </li>

              </ul>

            </li>

          </ul>

        </li>
 <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/dashboard.png" alt="" /><span class="menu-title" data-i18n="">Marketing Material </span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Marketing Material </a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/designs.php">Logo & Designs</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/branding-material.php">Branding material</a>

                </li>

              </ul>

            </li>  
		 </ul>
	</li>
      </ul>

 
 <?php } elseif($role_id == 3){?>
   
     <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class=" nav-item"><a href="https://masterinfotech.com/admin/index.php"><img src="app-assets/images/icons/dashboard.png" alt="dashboard" /><span class="menu-title" data-i18n="">Dashboard</span></a> </li>
  

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/online.png" alt="" /><span class="menu-title" data-i18n="">Blogs</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Categories</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-blog-cat.php">Add Categories</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-blog-cat.php">Manage Categories</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Manage Blogs</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/add-blogs.php">Add Blogs</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-blogs.php">Manage Blogs</a>

                </li>

              </ul>

            </li> 
 <li><a class="menu-item" href="#">Manage FAQ's</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/add-faq.php">Add Blogs</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-faq.php">Manage Blogs</a>

                </li>

              </ul>

            </li> 
          </ul>

        </li>

      </ul>

   
   <?php }else{ ?>
     <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class=" nav-item"><a href="https://masterinfotech.com/admin/index.php"><img src="app-assets/images/icons/dashboard.png" alt="dashboard" /><span class="menu-title" data-i18n="">Dashboard</span></a> </li>
  

        <li class="nav-item"><a href="#"><img src="app-assets/images/icons/support.png" alt="" /><span class="menu-title" data-i18n="">Services</span></a>

          <ul class="menu-content">



                <li><a class="menu-item" href="https://masterinfotech.com/admin/add-services.php">Add Service</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-services.php">Manage Services</a>

                </li>

				<li><a class="menu-item" href="https://masterinfotech.com/admin/add-services-inner.php">Add Services Inner</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-services-inner.php">Manage Services Inner</a>

                </li>

          </ul>

        </li>



        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/home.png" alt="" /><span class="menu-title" data-i18n="">Home</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Sliders</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-sliders.php">Add Slider</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-sliders.php">Manage Sliders</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Developing Technologies Content</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-developing.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-developing.php">Manage Content</a>

                </li>

              </ul>

            </li>  

         

            <li><a class="menu-item" href="#">Choose the best</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-choose-best.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-choose-best.php">Manage Content</a>

                </li>

              </ul>

            </li>  

           

            <li><a class="menu-item" href="#">Quality assurance</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-quality.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-quality.php">Manage Content</a>

                </li>

              </ul>

            </li>  

          </ul>

          

        </li>   

        

        



        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/phone-call.png" alt="" /><span class="menu-title" data-i18n="">Contact Us</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Contact Page Details</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-contact-details.php">Add Details</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-contact-details.php">Manage Details</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Contact Us Queries</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/query-list.php">Queries list</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

    

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/career.png" alt="" /><span class="menu-title" data-i18n="">Career</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Jobs</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-jobs.php">Add Jobs</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-jobs.php">Manage Jobs</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Job Queries</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/job-query.php">Job Queries List</a>

                </li>

              </ul>

            </li>

          </ul>

        </li>

    

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/online.png" alt="" /><span class="menu-title" data-i18n="">Blogs</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Categories</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-blog-cat.php">Add Categories</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-blog-cat.php">Manage Categories</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Manage Blogs</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/add-blogs.php">Add Blogs</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-blogs.php">Manage Blogs</a>

                </li>

              </ul>

            </li> 
<li><a class="menu-item" href="#">Manage FAQ's</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/add-faq.php">Add Blogs</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-faq.php">Manage Blogs</a>

                </li>

              </ul>

            </li> 
          </ul>

        </li>

      <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/portfolio.png" alt="" /><span class="menu-title" data-i18n="">Portfolio</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Portfolio</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-portfolio.php">Add Portfolio</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-portfolio.php">Manage Portfolio</a>

                </li>

              </ul>

            </li>  

           </ul>

          </li>

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/user.png" alt="" /><span class="menu-title" data-i18n="">Who We Are</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Content</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-who-we-are.php">Add Content</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-who-we-are.php">Manage Content</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

    

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/case-study.png" alt="" /><span class="menu-title" data-i18n="">Case Studies</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Case Studies</a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-case-studies.php">Add Case Studies</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-case-studies.php">Manage Case Studies</a>

                </li>

              </ul>

            </li> 

          </ul>

        </li>

        <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/phone-call.png" alt="" /><span class="menu-title" data-i18n="">Roles & Permissions</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Manage Sections </a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/add-sections.php">Add Sections</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-sections.php">Manage Sections</a>

                </li>

              </ul>

            </li>  

            <li><a class="menu-item" href="#">Manage Roles</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/add-roles.php">Add Roles</a>

                </li>
                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-roles.php">Manage Roles</a>

                </li>

              </ul>

            </li> 
            <li><a class="menu-item" href="#">Manage Permissions</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/add-permission.php">Add Permission</a>

                </li>
                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-permission.php">Manage Permission</a>

                </li>

              </ul>

            </li> 

            <li><a class="menu-item" href="#">Manage Users</a>

              <ul class="menu-content">

                <li><a class="menu-item" href="https://masterinfotech.com/admin/add-users.php">Add Users</a>

                </li>
                <li><a class="menu-item" href="https://masterinfotech.com/admin/manage-users.php">Manage Users</a>

                </li>

              </ul>

            </li> 
			
          </ul>

        </li> 

    <li class=" nav-item"><a href="#"><img src="app-assets/images/icons/dashboard.png" alt="" /><span class="menu-title" data-i18n="">Marketing Material </span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="#">Marketing Material </a>

              <ul class="menu-content">

              <li><a class="menu-item" href="https://masterinfotech.com/admin/uploads.php">Uploads</a>

                </li>
              <li><a class="menu-item" href="https://masterinfotech.com/admin/designs.php">Logo & Designs</a>

                </li>

                <li><a class="menu-item" href="https://masterinfotech.com/admin/branding-material.php">Branding material</a>

                </li>

              </ul>

            </li>  
		 </ul>
	</li>
        

      </ul>

   <?php } ?>
    
    </div>

  </div>

  <!-- END: Main Menu-->