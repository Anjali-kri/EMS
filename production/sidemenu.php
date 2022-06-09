      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
          </div>
          <div class="clearfix"></div>
          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="mount.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Mount Carmel School</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
			  <!--employee menu -->
			     <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				  <?php
				  if($fetch['profile']=='admin_profile.php')
				  {
					?>
					<li><a href="admin_profile.php"> profile</a></li>
					<?php
				  }
				   if($fetch['change_pass']=='admin_change_password.php')
				  {
					 ?> <li><a href="admin_change_password.php">change password</a>
                    </li>
					<?php 
				  }
				   if($fetch['apply_leave']=='admin_apply_leave.php')
				  {
					?><li><a href="admin_apply_leave.php">Apply Leave</a>
                    </li>
					<?php  
				  }
				   if($fetch['leave_status']=='admin_leave_status.php')
				  {
					 ?>
					 <li><a href="admin_leave_status.php">Leave Status </a>
                    </li>
					 <?php 
				  }
				   if($fetch['leave_history']=='admin_leave_history.php')
				  {
					?>
          <li><a href="emp_details.php">employee Details </a> </li>
          <li><a href="emp_show_sal.php">Employee months Salary </a> </li>
					<li><a href="admin_leave_history.php">Leave History </a>
                    </li>
					<?php  
				  }
				   if($fetch['signout']=='logout.php')
				  {
					 ?>
					 <li><a href="logout.php">sign out </a>
                    </li>
					 <?php 
				  }
					
					?>

				  
					</ul>
                </li>
				
				
				
			
				
				<li><a><i class="fa fa-gear"></i> Setting<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				  <?php
				  if($fetch['create_user']=='admin_add.php')
				  {
					?>
					  <li><a href="admin_add.php">Create User</a>
                    </li>
					<?php  
				  }
				  ?>
				  <?php
				  if($fetch['change_pass']=='admin_change_password.php')
				  {
					?>
					  <li><a href="admin_change_password.php">Change Password</a>
                    </li>
					<?php  
				  }
				  ?>
				  <?php
				  if($fetch['priv']=='priv.php')
				  {
					?>
					  <li><a href="priv.php">permission</a>
                    </li>
					<?php  
				  }
				  ?>
				   <?php
				  if($fetch['group_permission']=='admin_group_priv.php')
				  {
					?>
					  <li><a href="admin_group_priv.php"> Group permission </a>
                    </li>
					<?php  
				  }
				  ?>
				  
                  </ul>
                </li>
				
			
			  
			  
			  
			  <!-- close employee menu -->
        <!--
                <li><a><i class="fa fa-home"></i> Student addmission <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
					
                    <li><a href="studentadmission.php">student admision</a>
                    </li>
                    <!--<li><a href="photoupload2.php">photoupload2</a>
                    </li>-->
                    <!--
					<li><a href="photoupload.php">photoupload</a>
                    </li>
					<li><a href="studentdetail.php"> studentdetail</a>
                    </li>
					<li><a href="studentcategories.php">Student Categories</a>
                    </li>
					<li><a href="readd.php">readmission</a>
                    </li>
					<li><a href="addreport.php">addreport</a>
                    </li>
					<li><a href="viewtotalstudent.php">viewtotalstudent</a>
                    </li>
					<li><a href="saveclasssec.php">saveclasssec</a>
                    </li>
                  </ul>
                </li>
                 <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Fee details<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
					<li><a href=" adminfeepanel.php">adminfeepanel</a>
                    </li>
					<li><a href="fee_collection.php">fee_collection</a>
                    </li>
                  </ul>
                </li>
				
				
				<ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Hostel details<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
					
					<li><a href="admingender.php">admingender</a>
                    </li>
					<li><a href="adminblock.php">adminblock</a>
                    </li>
					<li><a href="adminbedid.php">adminbedid</a>
                    </li>

					<li><a href="mealadd.php">mealadd</a>
                    </li>
					<li><a href="seatallocate.php">seatallocate</a>
                    </li>
					<li><a href="adminhostelfee.php">adminhostelfee</a>
                    </li>
					
					
					
                    </li>
                  </ul>
				  </ul>
				  <ul class="nav side-menu">
				  <li><a><i class="fa fa-edit"></i> Library <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="book_details.php">Book Detail</a>
                    </li>
                    <li><a href="Issue_book.php">Issue book_details</a>
                    </li>
                    <li><a href="return_book_details.php">Return book_details</a>
                    </li>
                    <li><a href="NewRegistraion.php">New Registration</a>
                    </li>
					
					<li><a href="book_available.php">Book Avability </a>
                    </li>
					<li><a href="book_permission.php">Master Fine </a>
                    </li>
					<li><a href="book_update.php">Update Book </a>
                    </li>
                    <!-- <li><a href="form_upload.html">Form Upload</a>
                    </li>
                    <li><a href="form_buttons.html">Form Buttons</a>
                    </li>
					-->
          <!--
                  </ul>
                </li>
				</ul>
                </li>
				<ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i>Inventory<span class="fa fa-chevron-down"></span></a> 
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Addissueitem.php">Add Issue item</a> 
                    </li>
                    <li><a href="Additemstock.php">Add item stock</a> 
                    </li>
                     <li><a href="Additem.php">Add item</a> 
                    </li>
					</li>
                     <li><a href="Additemcategory.php">Add Item category</a> 
                    </li>
					</li>
                     <li><a href="Additemstore.php">Add Item store</a> 
                    </li>
					</li>
                     <li><a href="Additemsupplier.php">Add Item supplier</a> 
					 
                    </li>
                  </ul>
                </li>
				
				<ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i>Examination<span class="fa fa-chevron-down"></span></a> 
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Examination_form.php">Examination_Form</a> 
                    </li>   
                    </li>
                  </ul>
                </li>
				
				<ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i>Transport Management<span class="fa fa-chevron-down"></span></a> 
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="bus_information.php">Bus Information</a> 
                    </li>   
                    </li>
					<li><a href="driver_information.php">Driver Information</a> 
                    </li>   
                    </li>
					<li><a href="bus_maintenance.php">Bus Maintenance</a> 
                    </li>   
                    </li>
					<li><a href="bus_routes.php">Bus Routes</a> 
                    </li>   
                    </li>
					<li><a href="bus_routes_records.php">Bus Routes Records</a> 
                    </li>   
                    </li>
					<li><a href="user_information.php">User Information</a> 
                    </li>   
                    </li>
                  </ul>
                </li>
				
				
				
                <!-- <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a> -->
                  <ul class="nav child_menu" style="display: none">
                   <!-- <li><a href="form.html">General Form</a> -->
                    </li>
                   <!-- <li><a href="form_advanced.html">Advanced Components</a> -->
                    </li>
                   <!-- <li><a href="form_validation.html">Form Validation</a> -->
                    </li>
                   <!-- <li><a href="form_wizards.html">Form Wizard</a> -->
                    </li>
                   <!-- <li><a href="form_upload.html">Form Upload</a> -->
                    </li>
                  <!--  <li><a href="form_buttons.html">Form Buttons</a> -->
                    </li>
                  </ul>
                </li>
               <!-- <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a> -->
                  <ul class="nav child_menu" style="display: none">
                   <!-- <li><a href="general_elements.html">General Elements</a> -->
                    </li>
                  <!--  <li><a href="media_gallery.html">Media Gallery</a> -->
                    </li>
                  <!--  <li><a href="typography.html">Typography</a> -->
                    </li>
                  <!--  <li><a href="icons.html">Icons</a> -->
                    </li>
                  <!--  <li><a href="glyphicons.html">Glyphicons</a> -->
                    </li>
                 <!--   <li><a href="widgets.html">Widgets</a> -->
                    </li>
                  <!--  <li><a href="invoice.html">Invoice</a> -->
                    </li>
                  <!--  <li><a href="inbox.html">Inbox</a> -->
                    </li>
                  <!--  <li><a href="calender.html">Calender</a> -->
                    </li>
                  </ul>
                </li>
               <!-- <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a> -->
                  <ul class="nav child_menu" style="display: none">
                  <!--  <li><a href="tables.html">Tables</a> -->
                    </li>
                  <!--  <li><a href="tables_dynamic.html">Table Dynamic</a> -->
                    </li>
                  </ul>
                </li>
               <!-- <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a> -->
                 
                </li>
              </ul>
				
				
				
				
				
				
				
				
				
               <!-- <li><a><i class="fa fa-edit"></i> Student  <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="form.html">General Form</a>
                    </li>
                    <li><a href="form_advanced.html">Advanced Components</a>
                    </li>
                    <li><a href="form_validation.html">Form Validation</a>
                    </li>
                    <li><a href="form_wizards.html">Form Wizard</a>
                    </li>
                    <li><a href="form_upload.html">Form Upload</a>
                    </li>
                    <li><a href="form_buttons.html">Form Buttons</a>
                    </li>
                  </ul>
                </li>-->
               <!-- <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="general_elements.html">General Elements</a>
                    </li>
                    <li><a href="media_gallery.html">Media Gallery</a>
                    </li>
                    <li><a href="typography.html">Typography</a>
                    </li>
                    <li><a href="icons.html">Icons</a>
                    </li>
                    <li><a href="glyphicons.html">Glyphicons</a>
                    </li>
                    <li><a href="widgets.html">Widgets</a>
                    </li>
                    <li><a href="invoice.html">Invoice</a>
                    </li>
                    <li><a href="inbox.html">Inbox</a>
                    </li>
                    <li><a href="calender.html">Calender</a>
                    </li>
                  </ul>
                </li>-->
                <!--<li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="tables.html">Tables</a>
                    </li>
                    <li><a href="tables_dynamic.html">Table Dynamic</a>
                    </li>
                  </ul>
                </li>-->
                <!--<li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="chartjs.html">Chart JS</a>
                    </li>
                    <li><a href="chartjs2.html">Chart JS2</a>
                    </li>
                    <li><a href="morisjs.html">Moris JS</a>
                    </li>
                    <li><a href="echarts.html">ECharts </a>
                    </li>
                    <li><a href="other_charts.html">Other Charts </a>
                    </li>
                  </ul>
                </li>-->
              </ul>
            </div>
            <div class="menu_section">
             <!-- <h3>Live On</h3>-->
             <!-- <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="e_commerce.html">E-commerce</a>
                    </li>
                    <li><a href="projects.html">Projects</a>
                    </li>
                    <li><a href="project_detail.html">Project Detail</a>
                    </li>
                    <li><a href="contacts.html">Contacts</a>
                    </li>
                    <li><a href="profile.html">Profile</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="page_404.html">404 Error</a>
                    </li>
                    <li><a href="page_500.html">500 Error</a>
                    </li>
                    <li><a href="plain_page.html">Plain Page</a>
                    </li>
                    <li><a href="login.html">Login Page</a>
                    </li>
                    <li><a href="pricing_tables.html">Pricing Tables</a>
                    </li>

                  </ul>
                </li>
                <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                </li>
              </ul>-->
        -->
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>