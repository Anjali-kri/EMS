<?php
include "connection1.php";
error_reporting(0);
session_start();
$admin=$_SESSION['user_name'];
 
  if($admin=="")
  {
	  header('Location:login.php');
  }
  if(isset($_POST['search']))
  {
	  $empId=$_POST['reg'];
	
  $result=mysqli_query($con, "select * from emp_upload_photo where emp_id='$empId'");
  $row=mysqli_num_rows($result);
  $fetch_d=mysqli_fetch_assoc($result);
 
 }


?>
<html lang="en">
<head>
  <?php
  include("head1.php");
  include "connection1.php";
  include "session_check_file.php";
  ?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
	<form method="POST">
	 <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>SMS</span></a>
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
?>
      <!-- page content -->
      <div class="right_col" role="main">
	   <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Update Employee</h2>
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
				  <div class="row">
				  <div class="col-sm-2">
				  <label>Update Profile</label>
				  </div>
				  <div class="col-sm-4">
				 <select name="profile"  class="form-control">
				 <option value="Update_Employee_Details">Update Employee Details</option>
				  <option value="Update_Employee_Salary">Update Employee Salary</option>
				   <option value="Update_Employee_Documents">Update Employee Documents</option>
				 </select>
				  </div>
				 
				  <?php
				  $check=$_POST['profile'];
				  
				
				  if((isset($_POST['search']))&&($check=="Update_Employee_Details"))
				  {  
					?>
					<script>
					window.location='update_admin_emp_detail.php';
					</script>
					<?php
				  }
				  else if((isset($_POST['search']))&&($check=="Update_Employee_Salary"))
				  {
					 ?>
					<script>
					window.location='update_admin_emp_sal.php';
					</script>
					<?php   
				  }
				  else if((isset($_POST['search']))&&($check=="Update_Employee_Documents"))
				  {
					  ?>
					<script>
					window.location='update_admin_uplaod_document.php';
					</script>
					<?php  
				  }
				  
				  ?>
				  <div class="col-sm-6">
				  </div>
				  </div><br>
				   <div class="row">
						<div class="col-sm-12">
						<button type="submit" name="search"  class="btn-info btn-lg btn-block"><i class="fa fa-Search" style="color:white; font-size:25px"></i>&nbsp;&nbsp; Search </button>
					</div>
					</div>
					</div>
              </div>
            </div>
          </div>
            </div>
			</form>
			 </div>
</div>
<div style="margin-top:1500px;"></div>
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
