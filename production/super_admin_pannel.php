
<html lang="en">
<head>
  <?php
  error_reporting(0);
 include("head1.php");
  include "connection1.php" ;
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
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Account Type <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="accout_type" class="form-control">
						<option value="SuperAdmin">SuperAdmin</option>
						</select>
                      </div>
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
					<?php
					if(isset($_POST['submit']))
					{
					$emp_id=$_POST['accout_type'];
					$name=$_POST['name'];
					$user=$_POST['user'];
					$pass=$_POST['pass'];
					$mpass=$_POST['mpass'];
					$email=$_POST['email'];
					$type=mysqli_query($con,"select * from admin_add where reg_no='$emp_id' ");
					$total_type=mysqli_num_rows($type);
					if($total_type>0)
							{
								?><script>alert("Data exist in database");
								window.location="login.php";
								</script><?php
								
							}
					else
							{
							  $sql="insert into admin_add values('$emp_id','$name','$user','$pass','$mpass','$email');";
							  $check=mysqli_query($con,$sql);
							  $sql1="insert into group_permission values('','SuperAdmin','SuperAdmin','SuperAdmin','admin_profile.php', 'admin_change_password.php','admin_apply_leave.php','admin_leave_status.php','admin_leave_history.php','logout.php','superadmin_leave.php','admin_leave.php','subadmin_leave.php','admin_leave_type.php','admin_show_leave.php','admin_emp_leave_list.php','admin_add_department_list.php','admin_add_post.php','admin_group_priv.php','admin_add.php','admin_change_password.php','priv.php','admin_emp_details.php','admin_emp_sal_monthly.php','admin_finance_Year.php','admin_emp_search.php','admin_assign_project.php','admin_project_list.php','admin_update.php','admin_emp_sal_detail.php')";
							  mysqli_query($con,$sql1);
							  mysqli_query($con,"insert into emp_permission values('','SuperAdmin','SuperAdmin')");
							  if($check)
							  {
								 ?>
								 <script>window.location.href="login.php";</script>
								 <?php 
							  }
							  else
							  {
								  ?>
								 <script>alert("data failed");</script>
								 <?php
								}
							}
					  
					}
				  
					
					?>
					<div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					  <button type="submit" class="btn btn-success" name="submit" ">Submit</button>
                        
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
                      </div>
                    </div>

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
