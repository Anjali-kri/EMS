  <?php
  session_start();
  $admin=$_SESSION['user_name'];
  $emp_id=$_SESSION['emp_code'];
  $reslut=mysqli_query($con, "select * from emp_permission where empid='$emp_id' ");
  $fetch12=mysqli_fetch_assoc($reslut);
  $post_code=$fetch12['post_code'];
  $reslut11=mysqli_query($con, "select * from group_permission where post_code='$post_code' ");
  $fetch=mysqli_fetch_assoc($reslut11);
  $result_emp=mysqli_query($con,"select * from emp_leave where L1_status='0'");
  $result_L1=mysqli_query($con,"select * from emp_leave where L1_status='1'");
  $result_L2=mysqli_query($con,"select * from emp_leave where L1_status='2'");
  $total_emp=mysqli_num_rows($result_emp);
  $total_l1=mysqli_num_rows($result_L1);
  $total_l2=mysqli_num_rows($result_L2);
  
  ?>
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" >
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
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
				
				
				<li><a><i class="fa fa-globe"></i> Leave Management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
					<?php
					 if($fetch['super_admin']=='superadmin_leave.php')
				  {
					?>
					<li><a href="superadmin_leave.php">Super Admin Leave &nbsp;&nbsp;&nbsp;<span class="badge" style="color:white"><?php echo $total_l2; ?></span></a>
                    </li>
					<?php  
				  }
				   if($fetch['admin']=='admin_leave.php')
				  {
					?>
					<li><a href="admin_leave.php">Admin Leave  &nbsp;&nbsp;&nbsp;<span class="badge" style="color:white"><?php echo $total_l1; ?></span></a>
                    </li>
					<?php  
				  }
				   if($fetch['sub_admin']=='subadmin_leave.php')
				  {
					 ?><li><a href="subadmin_leave.php">SubAdmin Leave  &nbsp;&nbsp;&nbsp;<span class="badge" style="color:white"><?php echo $total_emp; ?></span></a>
                    </li><?php 
				  }
				    if($fetch['leave_type']=='admin_leave_type.php')
				  {
					 ?>
					 <li><a href="admin_leave_type.php">Leave Type</a>
                    </li>
					 <?php 
				  }
				   if($fetch['show_leave_type']=='admin_emp_leave_list.php')
				  {
					 ?>
					 <li><a href="admin_show_leave.php"> show Leave list</a>
                    </li>
					 <?php 
				  }
				   if($fetch['leave_count']=='admin_leave.php')
				  {
					?>
					<li><a href="admin_emp_leave_list.php"> Leave Count </a>
                    </li>
					<?php  
				  }
				   if($fetch['profile']=='admin_profile.php')
				  {
					  
				  }
				   if($fetch['profile']=='admin_profile.php')
				  {
					  
				  }
					?>
				</ul>
                </li>
				<!--
				<li><a><i class="fa fa-globe"></i> web <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				  
					 <li><a href="admin_career.php">career</a>
                    </li>
					<li><a href="admin_contact.php">contects</a>
                    </li>
					</ul>
                </li>
				-->
				<li><a><i class="fa fa-globe"></i> Department <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				  <?php
				  if($fetch['dept_type']=='admin_add_department_list.php')
				  {
					?>
					<li><a href="admin_add_department_list.php">Department Type</a>
                    </li>
					<?php  
				  }
				  if($fetch['post_type']=='admin_add_post.php')
				  {
					?> <li><a href="admin_add_post.php">Post Type</a>
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
				 <li><a><i class="fa fa-user"></i> Employee <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
				  <?php
				  if($fetch['emp_details']=='admin_emp_details.php')
				  {
					?>
					 <li><a href="admin_emp_details.php">Employee Details</a>
                    </li>
					<?php  
				  }
				  ?>
					<!--  <li><a href="admin_emp_sal.php">Employee Salary</a>
                    </li> -->
				  <?php
				  if($fetch['emp_month_sal']=='admin_emp_sal_monthly.php')
				  {
					?>
					 <li><a href="admin_emp_sal_monthly.php">Employee monthly Salary</a>
                    </li>
					<?php  
				  }
				  ?>
				  <?php
				  if($fetch['finance_year']=='admin_finance_Year.php')
				  {
					?>
					 <li><a href="admin_finance_Year.php">Finance Yeary </a>
                    </li>
					<?php  
				  }
				  ?>
				  <?php
				  if($fetch['search_emp_details']=='admin_emp_search.php')
				  {
					?>
					 <li><a href="admin_emp_search.php">Search Employee Details </a>
                    </li>
					<?php  
				  }
				  ?>
				  <?php
				  if($fetch['assign_project']=='admin_assign_project.php')
				  {
					?>
					 <li><a href="admin_assign_project.php">Assigned Project </a>
                    </li>
					<?php  
				  }
				  ?>
				  <?php
				  if($fetch['project_list']=='admin_project_list.php')
				  {
					?>
					 <li><a href="admin_project_list.php">Project List </a>
                    </li>
					<?php  
				  }
				  ?>
				  <?php
				  if($fetch['master_update']=='admin_update.php')
				  {
					?>
					 <li><a href="admin_update.php">Master Update </a>
                    </li>
					<?php  
				  }
				  ?>
				  <?php
				  if($fetch['master_salary_form']=='admin_emp_sal_detail.php')
				  {
					?>
					<li><a href="admin_emp_sal_detail.php"> Master Salary form</a>
                    </li>
					<?php  
				  }
				  ?>
				   <li><a href="admin_project_details.php">Master Project Details </a>
                    </li>
				 </ul>
                </li>
				<!--integrated module without  permission -->

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
				</ul>
				<ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i>Examination<span class="fa fa-chevron-down"></span></a> 
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="Examination_form.php">Examination_Form</a> 
                    </li>   
                    </li>
                  </ul>
                </ul>
				
				
				
				
				
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
				</ul>
				
				-->
				<!--closed -->
				
				
            </div>
          </div>