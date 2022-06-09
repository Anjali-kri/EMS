
<html lang="en">
<head>
  <?php
  error_reporting(0);
 include("head1.php");
  include "connection1.php" ;
  session_start();
  $admin=$_SESSION['user_name'];
  
  if($admin=="")
  {
	  header('Location:login.php');
  }
  ?>
  
</head>
<body >
  <div class="container body">
    <div >
      
	 <div class="top_nav">
        <div class="nav_menu">
          <nav class="" role="navigation">
            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				
                  <img src="images/img.jpg" alt=""><span style="font-size:15px;padding-right:15px">welcome,&nbsp; <?php echo $user?></span>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="admin_profile.php">  Profile</a>
                  </li>
                  <li>
                    <a href="admin_change_password.php">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>
              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image">
                      <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a href="inbox.html">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- page content -->
      <div class="right_col" role="main" style="padding-top:150px;padding-right:200px;padding-left:200px;">
	      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Update Permission</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
				  
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
					<!-- permission  Assigned-->
					<fieldset>
				  <legend>Permission</legend>
				  <?php
				  $post_code=$_REQUEST['id'];
				  $result12=mysqli_query($con,"select * from group_permission where post_code='$post_code'");
				  $fetch12=mysqli_fetch_assoc($result12);
				 
				  
				  ?>
				  <div  class="row">
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['profile']=='admin_profile.php')
				  {
				  ?>
				  <input type="checkbox" name="Profile" class="permission" value="admin_profile.php" checked>Profile
				  <?php
				  }
				  else
				  {
					  ?>
					 <input type="checkbox" name="Profile" class="permission" value="admin_profile.php" checked>Profile 
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['change_pass']=='admin_change_password.php')
				  {
				  ?>
				  <input type="checkbox" name="password" class="permission" value="admin_change_password.php" checked>change password 
					<?php
				  }
				  else
				  {
					?>
				  <input type="checkbox" name="password" class="permission" value="admin_change_password.php">change password 
					<?php  
				  }
					?>
				  </div>
				  <div class="col-sm-3">
				   <?php
				  if($fetch12['apply_leave']=='admin_apply_leave.php')
				  {
				  ?>
				  <input type="checkbox" name="L_apply" class="permission" value="admin_apply_leave.php" checked>Apply Leave
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="L_apply" class="permission" value="admin_apply_leave.php">Apply Leave
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['leave_status']=='admin_leave_status.php')
				  {
				  ?>
				  <input type="checkbox" name="L_status" class="permission" value="admin_leave_status.php" checked>Leave Status
				  <?php
				  }
				  else
				  {
					?>
					<input type="checkbox" name="L_status" class="permission" value="admin_leave_status.php">Leave Status
					<?php  
				  }
				  ?>
				  </div>
				  </div><br>
				  <div  class="row">
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['leave_history']=='admin_leave_history.php')
				  {
				  ?>
				  <input type="checkbox" name="L_history" class="permission" value="admin_leave_history.php" checked>Leave History
				  <?php
				  }
				  else
				  {
					  ?>
					   <input type="checkbox" name="L_history" class="permission" value="admin_leave_history.php">Leave History
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['admin']=='admin_leave.php')
				  {
				  ?>
				  <input type="checkbox" name="Adimn_leave" class="permission" value="admin_leave.php" checked>Admin leave
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="Adimn_leave" class="permission" value="admin_leave.php">Admin leave
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['sub_admin']=='subadmin_leave.php')
				  {
				  ?>
				  <input type="checkbox" name="sunAdmin_leave" class="permission" value="subadmin_leave.php" checked>SubAdmin Leave
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="sunAdmin_leave" class="permission" value="subadmin_leave.php">SubAdmin Leave
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['leave_type']=='admin_leave_type.php')
				  {
				  ?>
				  <input type="checkbox" name="leave_type" class="permission" value="admin_leave_type.php" checked>Leave Type
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="leave_type" class="permission" value="admin_leave_type.php">Leave Type
					  <?php
				  }
				  ?>
				  </div>
				  </div><br>
				  <div  class="row">
				  <div class="col-sm-3">
				   <?php
				  if($fetch12['show_leave_type']=='admin_emp_leave_list.php')
				  {
				  ?>
				  <input type="checkbox" name="show_leave_list" class="permission" value="admin_emp_leave_list.php" checked>Show Leave list
				 <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="show_leave_list" class="permission" value="admin_emp_leave_list.php">Show Leave list
					  <?php
				  }
				 ?>
				 </div>
				  <div class="col-sm-3">
					<?php
				  if($fetch12['leave_count']=='admin_leave.php')
				  {
				  ?>
				  <input type="checkbox" name="leave_count" class="permission" value="admin_leave.php" checked>Leave Count
				  <?php
				  }
				  else
				  {
					?>
				  <input type="checkbox" name="leave_count" class="permission" value="admin_leave.php">Leave Count
				  <?php  
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['dept_type']=='admin_add_department_list.php')
				  {
				  ?>
				  <input type="checkbox" name="Dept_type" class="permission" value="admin_add_department_list.php" checked>Department Type
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="Dept_type" class="permission" value="admin_add_department_list.php">Department Type
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['post_type']=='admin_add_post.php')
				  {
				  ?>
				  <input type="checkbox" name="Post_type" class="permission" value="admin_add_post.php" checked>Post Type
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="Post_type" class="permission" value="admin_add_post.php">Post Type
					  <?php
				  }
				  ?>
				  </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['group_permission']=='admin_group_priv.php')
				  {
				  ?>
				  <input type="checkbox" name="Group_permission" class="permission" value="admin_group_priv.php" checked>Group Permission
				  <?php
				  }
				  else
				  {
					 ?>
					 <input type="checkbox" name="Group_permission" class="permission" value="admin_group_priv.php">Group Permission
					 <?php 
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['emp_details']=='admin_emp_details.php')
				  {
				  ?>
				  <input type="checkbox" name="emp_details" class="permission" value="admin_emp_details.php" checked>Employee Detail  
					<?php
				  }
				  else
				  {
					  ?>
					 <input type="checkbox" name="emp_details" class="permission" value="admin_emp_details.php">Employee Detail   
					  <?php
				  }
					?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['	emp_month_sal']=='admin_emp_sal_monthly.php')
				  {
				  ?>
				  <input type="checkbox" name="emp_monthly_salary" class="permission" value="admin_emp_sal_monthly.php" checked>Employee Monthly Salary
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="emp_monthly_salary" class="permission" value="admin_emp_sal_monthly.php">Employee Monthly Salary
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['finance_year']=='admin_finance_Year.php')
				  {
				  ?>
				  <input type="checkbox" name="finance_year" class="permission" value="admin_finance_Year.php" checked> Finance Year      
				  <?php
				  }
				  else
				  {
					  ?>
					<input type="checkbox" name="finance_year" class="permission" value="admin_finance_Year.php"> Finance Year 
						<?php
				  }
				  ?>
				  </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['search_emp_details']=='admin_emp_search.php')
				  {
				  ?>
				  <input type="checkbox" name="search_emp_details" class="permission" value="admin_emp_search.php" checked>Search Employee Details    
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="search_emp_details" class="permission" value="admin_emp_search.php">Search Employee Details 
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['assign_project']=='admin_assign_project.php')
				  {
				  ?>
				  <input type="checkbox" name="assign_project" class="permission" value="admin_assign_project.php" checked>Assign Project
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="assign_project" class="permission" value="admin_assign_project.php">Assign Project
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['project_list']=='admin_project_list.php')
				  {
				  ?>
				  <input type="checkbox" name="Project_list" class="permission" value="admin_project_list.php" checked>Project List
				  <?php
				  }
				  else
				  {
					  ?>
					   <input type="checkbox" name="Project_list" class="permission" value="admin_project_list.php">Project List
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				   <?php
				  if($fetch12['master_update']=='admin_update.php')
				  {
				  ?>
				  <input type="checkbox" name="Master_update" class="permission" value="admin_update.php" checked>Master Update
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="Master_update" class="permission" value="admin_update.php">Master Update
					  <?php
				  }
				  ?>
				  </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-3">
				  <?php
				  if($fetch12['master_salary_form']=='admin_emp_sal_detail.php')
				  {
				  ?>
				  <input type="checkbox" name="master_salary_form" class="permission" value="admin_emp_sal_detail.php" checked>Master Salary Form
				  <?php
				  }
				  else
				  {
					  ?>
					  <input type="checkbox" name="master_salary_form" class="permission" value="admin_emp_sal_detail.php">Master Salary Form
					  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-3">
				  <!--  project details -->
				  <input type="checkbox" name="master_project_detais" class="permission" value="admin_leave.php" checked>Master project Detail
				  </div>
				  <div class="col-sm-3">
				  
				  </div>
				  <div class="col-sm-3">
				  <br><br>
				  <button class="btn btn-success" name="update">Update permission</button>
				  </div>
				  </div><br>
				  </fieldset>
				  <?php
					if(isset($_POST['update']))
					{
					$profile=$_POST['Profile'];
					$password=$_POST['password'];
					$L_apply=$_POST['L_apply'];
					$L_status=$_POST['L_status'];
					$L_history=$_POST['L_history'];
					$Adimn_leave=$_POST['Adimn_leave'];
					$sunAdmin_leave=$_POST['sunAdmin_leave'];
					$leave_type=$_POST['leave_type'];
					$show_leave_list=$_POST['show_leave_list'];
					$leave_count=$_POST['leave_count'];
					$Dept_type=$_POST['Dept_type'];
					$Post_type=$_POST['Post_type'];
					$Group_permission=$_POST['Group_permission'];
					$emp_details=$_POST['emp_details'];
					$emp_monthly_salary=$_POST['emp_monthly_salary'];
					$finance_year=$_POST['finance_year'];
					$search_emp_details=$_POST['search_emp_details'];
					$assign_project=$_POST['assign_project'];
					$Project_list=$_POST['Project_list'];
					$Master_update=$_POST['Master_update'];
					$master_salary_form=$_POST['master_salary_form'];
					$master_project_detais=$_POST['master_project_detais'];
					$sql="update group_permission set profile='$profile', change_pass='$password',apply_leave='$L_apply',leave_status='$L_status',leave_history='$L_history',admin='$Adimn_leave',sub_admin='$sunAdmin_leave',leave_type='$leave_type',show_leave_type='$show_leave_list',leave_count='$leave_count',dept_type='$Dept_type',post_type='$Post_type',group_permission='$Group_permission',emp_details='$emp_details',emp_month_sal='$emp_monthly_salary',finance_year='$finance_year',search_emp_details='$search_emp_details',assign_project='$assign_project',project_list='$Project_list',master_update='$Master_update',master_salary_form='$master_salary_form' where post_code='$post_code'";
					mysqli_query($con,$sql);
					?>
					<script>
					window.location.href="admin_profile.php";
					</script>
					<?php
					}
					?>

                  </form>
				  
				  	
                </div>
             
              </div>
            </div>
          </div>

        
       
</div>
		<?php
		include("footer.php");
		?>
    </div>
  </div>

<?php
include("script.php");
?>
</body>
</html>
