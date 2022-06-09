
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
	$result=mysqli_query($con, "select * from admin_dept_type");
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
				   <label>Department </label>
				   <select name="dept" class="form-control" onchange="check_post(this.value)">
				   <option>choose</option>
				   <?Php
				   while($fetch=mysqli_fetch_assoc($result))
				   {
					   ?>
					   <option value="<?php echo $fetch['dept_short_name']; ?>" ><?php echo $fetch['department name']; ?> </option>
					   <?php
				   }
				   ?>
				   </select>
				   </div>
				   <div class="col-sm-4">
				   <label>Post </label>
				   <select name="post" id="post" class="form-control">
				   </select>
				   <span id="abc"></span>
				    </div>
					<div class="col-sm-4">
					</div>
				  </div><br><br>
				  <div class="row">
				  <div class="col-sm-4">
				  <?php
				  $user=$_POST['user'];
				 
					 
				  if(isset($_POST['save']))
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
					  $result_post=mysqli_query($con,"select * from admin_post where department='$dept' and post='$post' ");
				      $fetch_post=mysqli_fetch_assoc($result_post);
				      $post_code=$fetch_post['post_code'];
					  echo "post_code :".$post_code;
					 $result_total=mysqli_query($con,"select * from group_permission where dept='$dept' and post='$post'");
					  $f_total=mysqli_num_rows($result_total);
					  if($f_total>0)
					  {
						 ?><script>alert("permission already assigned")</script><?php 
					  }
					  else
					  {
						$sql="insert into group_permission (post_code,dept,post,profile,change_pass,apply_leave,leave_status,leave_history,signout,super_admin,admin,sub_admin,leave_type,show_leave_type,leave_count,dept_type,post_type,group_permission,create_user,change_password,permission,emp_details,emp_month_sal,finance_year,search_emp_details,assign_project,project_list,master_update,master_salary_form) values('$post_code','$dept','$post','$profile','$change_pass','$leave_apply','$leave_status','$leave_history','$sign_out','$super_admin','$Admin','$sub_admin','$leave_type','$Show_leave_type','$leave_count','$dept_type','$post_type','$group_permission','$create_user','$change_pass','$permission','$emp_detail','$emp_m_salary','$fin_year','$search_detail','$assign_proj','$project_list','$master_update','$master_salary_form')";
					  $result=mysqli_query($con,$sql);  
					  }
					  
					 
					 
				  }
				  ?>
				   <label class="home btn-info btn-block btn-lg permission"><p>Home</p></label><br>
				   <div class="wall home1" style="border:1px solid gray;padding:5px" id="grad">
				  <input type="checkbox" name="profile" value="admin_profile.php"><span style="color:btn-info;">Profile</span><br>
				   <input type="checkbox" name="password" value="admin_change_password.php"><span>Change Passowrd</span><br>
				   <input type="checkbox" name="leave_apply" value="admin_apply_leave.php"><span>Apply Leave</span><br>
				   <input type="checkbox" name="leave_status" value="admin_leave_status.php"><span>Leave Status</span><br>
				   <input type="checkbox" name="leave_history" value="admin_leave_history.php"><span>Leave History</span><br>
				   <input type="checkbox" name="sign_out" value="logout.php"><span>Sign out</span><br>
				   
				   </div>
				   </div>
				   <div class="col-sm-4">
				    <label  class="leave btn-info btn-block btn-lg permission"><p>Leave</p></label><br>
					 <div class="wall leave1" style="border:1px solid gray;padding:5px" id="grad">
				   <input type="checkbox" name="super_admin" value="superadmin_leave.php"><span>Super Admin</span><br>
				   <input type="checkbox" name="Admin" value="admin_leave.php"><span>Admin</span><br>
				   <input type="checkbox" name="sub_admin" value="subadmin_leave.php"><span>SubAdmin</span><br>
				   <input type="checkbox" name="leave_type" value="admin_leave_type.php"><span>Leave Type</span><br>
				   <input type="checkbox" name="Show_leave_type" value="admin_show_leave.php"><span>Show Leave List</span><br>
				   <input type="checkbox" name="leave_count" value="admin_emp_leave_list.php"><span>Leave Count</span><br>
				   
				   </div>
				   </div>
				   <div class="col-sm-4">
				  <label  class="settings btn-info btn-block btn-lg permission"><p>Settings</p></label><br>
					 <div class="wall settings1" style="border:1px solid gray;padding:5px" id="grad">
					 
				   <input type="checkbox" name="create_user" value="admin_add.php"> <span>Create User</span><br>
				   <input type="checkbox" name="change_pass" value="admin_change_password.php"><span >Change Password</span><br>
				   <input type="checkbox" name="permission" value="priv.php"><span>Permission</span><br>
				   <input type="checkbox" name="group_permission" value="admin_group_priv.php"><span>Group Permission</span><br>
				   </div>
				   </div>
				  </div><br>
				  <!--second line menu    -->
				   <div class="row">
				  <div class="col-sm-4">
				   <label class="employee btn-info btn-block btn-lg permission"><p>Employee </p></label><br>
				   <div class="wall employee1" style="border:1px solid gray;padding:5px" id="grad">
				  <input type="checkbox" name="emp_detail" value="admin_emp_details.php"><span style="color:btn-info;">Employee Details</span><br>
				   
					 
				   <input type="checkbox" name="emp_m_salary" value="admin_emp_sal_monthly.php"><span>Employee monthly Salary</span><br>
				   <input type="checkbox" name="fin_year" value="admin_finance_Year.php"><span>finance Year</span><br>
				   <input type="checkbox" name="search_detail" value="admin_emp_search.php"><span>Search Employee Details</span><br>
				   <input type="checkbox" name="assign_proj" value="admin_assign_project.php"><span>Assign Project</span><br>
				   <input type="checkbox" name="project_list" value="admin_project_list.php"><span>Project List</span><br>
				   <input type="checkbox" name="master_update" value="admin_update.php"><span>Master Update</span><br>
				   <input type="checkbox" name="master_salary_form" value="admin_emp_sal_detail.php"><span>Master salery form</span><br>
				   </div>
				   </div>
				   <div class="col-sm-4">
				    <label  class="web btn-info btn-block btn-lg permission"><p>Department</p></label><br>
					 <div class="wall web1" style="border:1px solid gray;padding:5px" id="grad">
				   <input type="checkbox" name="dept_type" value="admin_add_department_list.php"><span>Department Type</span><br>
				   <input type="checkbox" name="post_type" value="admin_add_post.php"><span>Post Type</span><br>
				    
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
				  <button name="save" class="btn-info btn-block btn-lg"><i class="fa fa-save" style="color:white; font-size:25px"></i>&nbsp;&nbsp;&nbsp;<b style="font-size:25px">Save</b></button>
				  </div>
				  </div>
				  </form>
				  

				  <div>
				 
				  </div>
				</div>
              </div>
            </div>
          </div>
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
				  <form method="POST">
				   <div class="row">
				 <div class="col-sm-2">
				 </div>
				  <div class="col-sm-8">
				  <table class=" table table-responsive table-striped table-hover">
				  <tr>
				  <th>Post_Code</th>
				  <th>Department</th>
				  <th>Post</th>
				  <th >Action</th>
				  
				  </tr>
				  <?php
				  $result_pre=mysqli_query($con, "select * from  group_permission  order by id desc");
				  
				  while($fetch_pre=mysqli_fetch_assoc($result_pre))
				  {
				  ?>
				  <tr>
				  <td><?php echo $fetch_pre['post_code']; ?></td>
				  <td><?php echo $fetch_pre['dept']; ?></td>
				  <td><?php echo $fetch_pre['post']; ?></td>
				  <td><a href="get_edit_permission.php?id=<?php echo $fetch_pre['post_code']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="getdeletepost.php?id=<?php echo $fetch_pre['post_code']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				  </tr>
				  <?php
				  }
				  ?>
				  </table>
				 </div>
				 <div class="col-sm-2">
				 </div>
					</div>
				  </form>
				  

				  <div>
				 
				  </div>
				</div>
              </div>
            </div>
          </div>
		  <div style="margin-top:1500px;"></div>
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
admin_group_priv.php