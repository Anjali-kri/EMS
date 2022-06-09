
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
                  <h2>Create Account</h2>
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
				  <script>
				  function account(val)
				  {
					 
					 $.ajax
					 ({
						type:'POST',
						url:'getaccount.php',
						data:'a_type='+val,
						success:function(data)
						{
							$('#account_code').html(data)
						}
							
					 });
				  }
				  
				  </script>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Account Type <span class="required" >*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="accout_type" class="form-control" onblur="account(this.value);">
						<option value="Admin">Admin</option>
						<option value="SubAdmin">SubAdmin</option>
						</select>
                      </div>
                    </div>
					
					<div class="form-group" id="account_code" name="account_code">
                    </div>
				
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first123" required="required" class="form-control col-md-7 col-xs-12" name="name"  >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">User Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12" name="user" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">password*</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="pass" class="form-control col-md-7 col-xs-12" type="password" name="pass" required>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">conform password*</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="mpass" class="form-control col-md-7 col-xs-12" type="password" name="mpass" onblur="check()" required>
						<input type="checkbox" onclick="show();">show password
						<span id="pass_valid"></span>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email id*</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email" onblur="check_email()" required>
						<span id="email_valid"></span>
                      </div>
                    </div>
					
					<div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					  <button type="submit" class="btn btn-success" name="submit" ">Submit</button>
                        
						
						
                      </div>
					  
                    </div>
					<!-- permission  Assigned-->
					<fieldset>
				  <legend>Permission</legend>
				  
				  <div  class="row">
				  <div class="col-sm-3">
				  <input type="checkbox" name="Profile" class="permission" value="admin_profile.php">Profile
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="password" class="permission" value="admin_change_password.php">change password   
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="L_apply" class="permission" value="admin_apply_leave.php">Apply Leave
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="L_status" class="permission" value="admin_leave_status.php">Leave Status
				  </div>
				  </div><br>
				  <div  class="row">
				  <div class="col-sm-3">
				  <input type="checkbox" name="L_history" class="permission" value="admin_leave_history.php">Leave History
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="Adimn_leave" class="permission" value="admin_leave.php">Admin leave
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="sunAdmin_leave" class="permission" value="subadmin_leave.php">SubAdmin Leave
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="leave_type" class="permission" value="admin_leave_type.php">Leave Type
				  </div>
				  </div><br>
				  <div  class="row">
				  <div class="col-sm-3">
				  <input type="checkbox" name="show_leave_list" class="permission" value="admin_emp_leave_list.php">Show Leave list
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="leave_count" class="permission" value="admin_leave.php">Leave Count
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="Dept_type" class="permission" value="admin_add_department_list.php">Department Type
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="Post_type" class="permission" value="admin_add_post.php">Post Type
				  </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-3">
				  <input type="checkbox" name="Group_permission" class="permission" value="admin_group_priv.php">Group Permission
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="emp_details" class="permission" value="admin_emp_details.php">Employee Detail       
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="emp_monthly_salary" class="permission" value="admin_emp_sal_monthly.php">Employee Monthly Salary
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="finance_year" class="permission" value="admin_finance_Year.php"> Finance Year      
				  </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-3">
				  <input type="checkbox" name="search_emp_details" class="permission" value="admin_emp_search.php">Search Employee Details    
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="assign_project" class="permission" value="admin_assign_project.php">Assign Project
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="Project_list" class="permission" value="admin_project_list.php">Project List
				  </div>
				  <div class="col-sm-3">
				  <input type="checkbox" name="Master_update" class="permission" value="admin_update.php">Master Update
				  </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-3">
				  <input type="checkbox" name="master_salary_form" class="permission" value="admin_emp_sal_detail.php">Master Salary Form
				  </div>
				  <div class="col-sm-3">
				  <!--  project details -->
				  <input type="checkbox" name="master_project_detais" class="permission" value="admin_leave.php">Master project Detail
				  </div>
				  <div class="col-sm-3">
				  
				  </div>
				  <div class="col-sm-3">
				  
				  </div>
				  </div><br>
				  </fieldset>
				  <?php
					if(isset($_POST['submit']))
					{
					$ac_type=$_POST['accout_type'];
					$emp_id=$_POST['account_code'];
					echo "accout_type:".$ac_type;
					echo "account_code:".$emp_id;
					
					$name=$_POST['name'];
					$user=$_POST['user'];
					$pass=$_POST['pass'];
					$mpass=$_POST['mpass'];
					$email=$_POST['email'];
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
					echo
					mysqli_query($con,"insert into admin_account values('','$ac_type','$emp_id','$name')");
					
							  $sql="insert into admin_add values('$emp_id','$name','$user','$pass','$mpass','$email');";
							  $check=mysqli_query($con,$sql);
							  $sql1="insert into group_permission values('','$emp_id','$ac_type','$ac_type','$profile', '$password','$L_apply','$L_status','$L_history','logout.php','superadmin_leave.php','$Adimn_leave','$sunAdmin_leave','$leave_type','$show_leave_list','$show_leave_list','$Dept_type','$Post_type','$Group_permission','admin_add.php','$password','priv.php','$emp_details','$emp_monthly_salary','$finance_year','$search_emp_details','$assign_project','$Project_list','$Master_update','admin_emp_sal_detail.php')";
							  
							  //$sql1="insert into group_permission values('','$emp_id','$emp_id','$emp_id','admin_profile.php', 'admin_change_password.php','admin_apply_leave.php','admin_leave_status.php','admin_leave_history.php','logout.php','superadmin_leave.php','admin_leave.php','subadmin_leave.php','admin_leave_type.php','admin_show_leave.php','admin_emp_leave_list.php','admin_add_department_list.php','admin_add_post.php','admin_group_priv.php','admin_add.php','admin_change_password.php','priv.php','admin_emp_details.php','admin_emp_sal_monthly.php','admin_finance_Year.php','admin_emp_search.php','admin_assign_project.php','admin_project_list.php','admin_update.php','admin_emp_sal_detail.php')";
							  mysqli_query($con,$sql1);
							  mysqli_query($con,"insert into emp_permission values('','$emp_id','$emp_id')");
							  if($check)
							  {
								 ?>
								 <script>alert("data saved");</script>
								 <?php 
							  }
							  else
							  {
								  ?>
								 <script>alert("data failed");</script>
								 <?php
								}
							
					  
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
<script type="text/javascript">
						function show()
						{
							var x=document.getElementById("pass");
							var y=document.getElementById("mpass");
							if((x.type==="password")&&(y.type==="password"))
							{
								x.type="text";
								y.type="text";
							}
							else
							{
								x.type="password";
								y.type="password";
							}
						}
						function check()
						{
							
							var a=document.getElementById('pass').value;
							var b=document.getElementById('mpass').value;
							if(a!=b)
							{
							var elem=document.getElementById("pass_valid");
					elem.innerHTML="password mismatched!";
					elem.style.color="red";
					elem.style.fontSize="15";
					return false;
							}
							else
							{
								var elem=document.getElementById("pass_valid");
					elem.innerHTML="";
					return false;
							}
							
							
						}
						function check_email()
						{
							var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
							if(email.value.match(mailformat))
							{
								var elem=document.getElementById("email_valid");
					elem.innerHTML="";
					
					return false;		
							}
							else
							{
								var elem=document.getElementById("email_valid");
					elem.innerHTML="Enter valid email id!";
					elem.style.color="red";
					elem.style.fontSize="15";
					return false;	
							}
						}

			
						</script>
</html>
