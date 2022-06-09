
<html lang="en">
<head>
  <?php
  error_reporting(0);
  session_start();
  $admin=$_SESSION['user_name'];
 
  if($admin=="")
  {
	  header('Location:login.php');
  }
  
  include("head1.php");
    include "connection1.php";
	//include "session_check_file.php";
	$post123=$_REQUEST['id'];
	
	?>
	<style>
	span
	{
		font-size:15px;
	}
	
	</style>
	<script>
				  $(document).ready(function(){
					  $(".home").click(function(){
						  $(".home1").toggle(1500);
					  });
				  });
				   $(document).ready(function(){
					  $(".web").click(function(){
						  $(".web1").toggle(1500);
					  });
				  });
				   $(document).ready(function(){
					  $(".settings").click(function(){
						  $(".settings1").toggle(1500);
					  });
				  });
				  $(document).ready(function(){
					  $(".leave").click(function(){
						  $(".leave1").toggle(1500);
					  });
				  });
				  $(document).ready(function(){
					  $(".employee").click(function(){
						  $(".employee1").toggle(1500);
					  });
				  });
				   $(document).ready(function(){
					  $(".other").click(function(){
						  $(".other1").toggle(1500);
					  });
				  });
				  function check_post(val)
				  {
					  //alert(val);
					   $.ajax
						({
						type:"POST",
						url:"get_post.php",
						data:'emp='+val,
						success:function(data)
							{
							$('#post').html(data)
							}
						});
					  
				  }
				  </script>
				  <style>
				  #grad {
                     background-image: linear-gradient(#b3b3ff, #ffe6ff);
					 color:black;
					 font-weight:bold;
                        }
						checkbox
						{
							font-size:50%;
						}
				  .home1
				  {
					  display:none;
				  }
				  .web1
				  {
					  display:none;
				  }
				  .settings1
				  {
					  display:none;
				  }
				  .leave1
				  {
					  display:none;
				  }
				  .employee1
				  {
					  display:none;
				  }
				  .other1
				  {
					  display:none;
				  }
				  p
				  {
					  text-align:center;
				  }
				  .permission
				  {
					  background-color: #cc6600;
				  }
				    .permission:hover
					{
						background-color:#2eb82e;
					}
				  </style>
				  
	
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container" >
	 <div class="navbar nav_title" style="border: 0;" >
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SMS</span></a>
			</br>
			<div class="clearfix"></div>
          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Admin</h2>
            </div>
          </div>
		  <div class="page-header">
		  </div>
		  <?php include "sidemenu_admin_login.php";?>
		  </div>
<?php
include("header.php");
$total="hello";
?>
      <!-- page content -->
      <div class="right_col" role="main">
	  <form method="POST">
	   <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Assign Permission</h2>
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
				  <form method="POST">
				 
				  <div class="row">
				  <div class="col-sm-4">
				  <?php
				  $user=$_POST['user'];
				 
					 
				  if(isset($_POST['update']))
				  {
					  $dept=$_POST['dept'];
					  $post=$_POST['post'];
					  $profile=$_POST['profile'];
					  $password=$_POST['password'];
					  $leave_apply=$_POST['leave_apply'];
					  $leave_status=$_POST['leave_status'];
					  $leave_history=$_POST['leave_history'];
					  $sign_out=$_POST['sign_out'];
					  $super_admin=$_POST['super_admin'];
					  $Admin=$_POST['Admin'];
					  $sub_admin=$_POST['sub_admin'];
					  $leave_type=$_POST['leave_type'];
					  $Show_leave_type=$_POST['Show_leave_type'];
					  $leave_count=$_POST['leave_count'];
					  $create_user=$_POST['create_user'];
					  $change_pass=$_POST['change_pass'];
					  $permission=$_POST['permission'];
					  $group_permission=$_POST['group_permission'];
					  $emp_detail=$_POST['emp_detail'];
					  $emp_m_salary=$_POST['emp_m_salary'];
					  $fin_year=$_POST['fin_year'];
					  $search_detail=$_POST['search_detail'];
					  $assign_proj=$_POST['assign_proj'];
					  $project_list=$_POST['project_list'];
					  $master_update=$_POST['master_update'];
					  $master_salary_form=$_POST['master_salary_form'];
					  $dept_type=$_POST['dept_type'];
					  $post_type=$_POST['post_type']; 
					  $sql1="update group_permission set profile='$profile',change_pass='$change_pass',apply_leave='$leave_apply',leave_status='$leave_status',leave_history='$leave_history',signout='$sign_out',super_admin='$super_admin',admin='$Admin',sub_admin='$sub_admin',leave_type='$leave_type',show_leave_type='$Show_leave_type',leave_count='$leave_count',dept_type='$dept_type',post_type='$post_type',group_permission='$group_permission',create_user='$create_user',change_password='$change_pass',permission='$permission',emp_details='$emp_detail',emp_month_sal='$emp_m_salary',finance_year='$fin_year',search_emp_details='$search_detail',assign_project='$assign_proj',project_list='$project_list',master_update='$master_update',master_salary_form='$master_salary_form' where post_code='$post123' ";
					  mysqli_query($con,$sql1);
						?> <script>window.location="admin_group_priv.php";</script><?php
					
				  }
				  
				  $result_po=mysqli_query($con, "select * from group_permission where post_code='$post123'");
				  $fetch_po=mysqli_fetch_assoc($result_po);
				  
				  ?>
				   <label class="home btn-info btn-block btn-lg permission"><p>Home</p></label><br>
				   <div class="wall home1" style="border:1px solid gray;padding:5px" id="grad">
				   <?php
				   if($fetch_po['profile']=="admin_profile.php")
				   {
					   ?><input type="checkbox" checked name="profile" value="admin_profile.php"><span style="color:btn-info;" >Profile</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="profile" value="admin_profile.php"><span style="color:btn-info;" >Profile</span><br> <?php
				   }
				    if($fetch_po['change_pass']=="admin_change_password.php")
				   {
					   ?><input type="checkbox" checked name="password" value="admin_change_password.php"><span>Change Passowrd</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox"  name="password" value="admin_change_password.php"><span>Change Passowrd</span><br> <?php
				   }
				   if($fetch_po['apply_leave']=="admin_apply_leave.php")
				   {
					   ?><input type="checkbox" checked name="leave_apply" value="admin_apply_leave.php"><span>Apply Leave</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="leave_apply" value="admin_apply_leave.php"><span>Apply Leave</span><br> <?php
				   }
				    if($fetch_po['leave_status']=="admin_leave_status.php")
				   {
					   ?><input type="checkbox" checked name="leave_status" value="admin_leave_status.php"><span>Leave Status</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="leave_status" value="admin_leave_status.php"><span>Leave Status</span><br> <?php
				   }
				   
				   if($fetch_po['leave_history']=="admin_leave_history.php")
				   {
					   ?><input type="checkbox" checked name="leave_history" value="admin_leave_history.php"><span>Leave History</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="leave_history" value="admin_leave_history.php"><span>Leave History</span><br> <?php
				   }
				   if($fetch_po['signout']=="logout.php")
				   {
					   ?><input type="checkbox" checked name="sign_out" value="logout.php"><span>Sign out</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="sign_out" value="logout.php"><span>Sign out</span><br> <?php
				   }
				   ?>
				  
				   
				   
				   
				   
				   
				   
				   </div>
				   </div>
				   <div class="col-sm-4">
				    <label  class="leave btn-info btn-block btn-lg permission"><p>Leave</p></label><br>
					 <div class="wall leave1" style="border:1px solid gray;padding:5px" id="grad">
					 <?php 
					 if($fetch_po['super_admin']=="superadmin_leave.php")
				   {
					   ?><input type="checkbox" checked  name="super_admin" value="superadmin_leave.php"><span>Super Admin</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="super_admin" value="superadmin_leave.php"><span>Super Admin</span><br> <?php
				   }
				   if($fetch_po['admin']=="admin_leave.php")
				   {
					   ?><input type="checkbox" checked name="Admin" value="admin_leave.php"><span>Admin</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="Admin" value="admin_leave.php"><span>Admin</span><br> <?php
				   }
				   if($fetch_po['sub_admin']=="subadmin_leave.php")
				   {
					   ?><input type="checkbox" checked name="sub_admin" value="subadmin_leave.php"><span>SubAdmin</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="sub_admin" value="subadmin_leave.php"><span>SubAdmin</span><br> <?php
				   }
				    if($fetch_po['leave_type']=="admin_leave_type.php")
				   {
					   ?><input type="checkbox" checked name="leave_type" value="admin_leave_type.php"><span>Leave Type</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="leave_type" value="admin_leave_type.php"><span>Leave Type</span><br> <?php
				   }
				   if($fetch_po['show_leave_type']=="admin_show_leave.php")
				   {
					   ?><input type="checkbox" checked name="Show_leave_type" value="admin_show_leave.php"><span>Show Leave List</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="Show_leave_type" value="admin_show_leave.php"><span>Show Leave List</span><br><?php
				   }
				   if($fetch_po['leave_count']=="admin_emp_leave_list.php")
				   {
					   ?><input type="checkbox" checked name="leave_count" value="admin_emp_leave_list.php"><span>Leave Count</span><br> <?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="leave_count" value="admin_emp_leave_list.php"><span>Leave Count</span><br><?php
				   }
					 
					 ?>
				   
				   
				   
				   
				   
				   
				   
				   </div>
				   </div>
				   <div class="col-sm-4">
				  <label  class="settings btn-info btn-block btn-lg permission"><p>Settings</p></label><br>
					 <div class="wall settings1" style="border:1px solid gray;padding:5px" id="grad">
					 <?php
					 if($fetch_po['create_user']=="admin_add.php")
				   {
					   ?><input type="checkbox" checked name="create_user" value="admin_add.php"> <span>Create User</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="create_user" value="admin_add.php"> <span>Create User</span><br><?php
				   }
				    if($fetch_po['change_password']=="admin_change_password.php")
				   {
					   ?><input type="checkbox" checked name="change_pass" value="admin_change_password.php"><span >Change Password</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="change_pass" value="admin_change_password.php"><span >Change Password</span><br><?php
				   }
				    if($fetch_po['permission']=="priv.php")
				   {
					   ?><input type="checkbox" checked name="permission" value="priv.php"><span>Permission</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="permission" value="priv.php"><span>Permission</span><br><?php
				   }
				   if($fetch_po['group_permission']=="admin_group_priv.php")
				   {
					   ?><input type="checkbox" checked name="group_permission" value="admin_group_priv.php"><span>Group Permission</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="group_permission" value="admin_group_priv.php"><span>Group Permission</span><br><?php
				   }
					 ?>
				   
				   
				   
				   
				   </div>
				   </div>
				  </div><br>
				  <!--second line menu    -->
				   <div class="row">
				  <div class="col-sm-4">
				   <label class="employee btn-info btn-block btn-lg permission"><p>Employee </p></label><br>
				   <div class="wall employee1" style="border:1px solid gray;padding:5px" id="grad">
				   <?php
					if($fetch_po['emp_details']=="admin_emp_details.php")
				   {
					   ?><input type="checkbox" checked name="emp_detail" value="admin_emp_details.php"><span style="color:btn-info;">Employee Details</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="emp_detail" value="admin_emp_details.php"><span style="color:btn-info;">Employee Details</span><br><?php
				   }
				   if($fetch_po['emp_month_sal']=="admin_emp_sal_monthly.php")
				   {
					   ?><input type="checkbox" checked name="emp_m_salary" value="admin_emp_sal_monthly.php"><span>Employee monthly Salary</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="emp_m_salary" value="admin_emp_sal_monthly.php"><span>Employee monthly Salary</span><br><?php
				   }
				   if($fetch_po['finance_year']=="admin_finance_Year.php")
				   {
					   ?><input type="checkbox" checked name="fin_year" value="admin_finance_Year.php"><span>finance Year</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="fin_year" value="admin_finance_Year.php"><span>finance Year</span><br><?php
				   }
				   if($fetch_po['search_emp_details']=="admin_emp_search.php")
				   {
					   ?><input type="checkbox" checked name="search_detail" value="admin_emp_search.php"><span>Search Employee Details</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="search_detail" value="admin_emp_search.php"><span>Search Employee Details</span><br><?php
				   }
				   if($fetch_po['assign_project']=="admin_assign_project.php")
				   {
					   ?><input type="checkbox" checked name="assign_proj" value="admin_assign_project.php"><span>Assign Project</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="assign_proj" value="admin_assign_project.php"><span>Assign Project</span><br><?php
				   }
				   if($fetch_po['project_list']=="admin_project_list.php")
				   {
					   ?><input type="checkbox" checked name="project_list" value="admin_project_list.php"><span>Project List</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="project_list" value="admin_project_list.php"><span>Project List</span><br><?php
				   }
				   if($fetch_po['master_update']=="admin_update.php")
				   {
					   ?><input type="checkbox" checked name="master_update" value="admin_update.php"><span>Master Update</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="master_update" value="admin_update.php"><span>Master Update</span><br><?php
				   }
				   if($fetch_po['master_salary_form']=="admin_emp_sal_detail.php")
				   {
					   ?><input type="checkbox" checked name="master_salary_form" value="admin_emp_sal_detail.php"><span>Master salery form</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="master_salary_form" value="admin_emp_sal_detail.php"><span>Master salery form</span><br><?php
				   }
				   
				   ?>
				  
				   
					 
				  
				   
				   
				   
				   
				   
				   
				   </div>
				   </div>
				   <div class="col-sm-4">
				    <label  class="web btn-info btn-block btn-lg permission"><p>Department</p></label><br>
					 <div class="wall web1" style="border:1px solid gray;padding:5px" id="grad">
					 <?php
					 if($fetch_po['dept_type']=="admin_add_department_list.php")
				   {
					   ?><input type="checkbox" checked name="dept_type" value="admin_add_department_list.php"><span>Department Type</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="dept_type" value="admin_add_department_list.php"><span>Department Type</span><br><?php
				   }
				   if($fetch_po['post_type']=="admin_add_post.php")
				   {
					   ?><input type="checkbox" checked name="post_type" value="admin_add_post.php"><span>Post Type</span><br><?php
				   }
				   else
				   {
					   ?><input type="checkbox" name="post_type" value="admin_add_post.php"><span>Post Type</span><br><?php
				   }
					 ?>
				   
				   
				    
				   </div>
				   </div>
				   <div class="col-sm-4">
				  <label  class="other btn-info btn-block btn-lg permission"><p>other</p></label><br>
					 <div class="wall other1" style="border:1px solid gray;padding:5px" id="grad">
				   <input type="checkbox" name="abc" value="admin_add.php"> <span>abc</span><br>
				   
				   </div>
				   </div>
				  </div><br>
				 <!--   second line end  -->
				  <div class="row">
				  <div class="col-sm-12">
				  <button name="update" class="btn-info btn-block btn-lg"><i class="fa fa-save" style="color:white; font-size:25px"></i>&nbsp;&nbsp;&nbsp;<b style="font-size:25px">Update</b></button>
				  </div>
				  </div>
				  </form>
				  

				  <div>
				 
				  </div>
				</div>
              </div>
            </div>
          </div>
		    
		  <!--dlskalfksa -->
		 
<!--- aklfklkal -->
	   <!-- total payment -->  
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
get_edit_permission.php