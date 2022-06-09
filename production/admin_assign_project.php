
<html lang="en">
<head>
  <?php
  session_start();
  $admin=$_SESSION['user_name'];
 
  if($admin=="")
  {
	  header('Location:login.php');
  }
  error_reporting(0);
  include("head1.php");
    include "connection1.php";
	include "session_check_file.php";
$emp_Id=$_POST['emp_Id'];
$dept=$_POST['dept'];
$p_name=$_POST['p_name'];
$role=$_POST['role'];
$other=$_POST['other'];

if(isset($_POST['save']))
{
	$check=mysqli_query($con,"insert into project_assign values('$emp_Id','$dept','$p_name','$role','$other')");
	if($check)
	{
	echo "Data Saved successfully";	
	}
	else
	{
	echo "Data Save failed ";	
	}
}
	
?>

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
                  <h2>Assinging Project </h2>
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
				   <script>
				   function get_assign_project(val)
				   {
					 $.ajax
					 ({
						 type:"POST",
						 url:"get_assign_project.php",
						 data:"emp="+val,
						 success:function(data)
						 {
							 
							 $('#dept').val(data);
						 }
					 });
					 
				   }
				   </script>
				  <div class="col-sm-3">
				  <label>Emp id*</label><br>
				  <input type="text" name="emp_Id" class="form-control" id="emp_Id" required  onblur="get_assign_project(this.value)" >
				  </div>
				  <div class="col-sm-1">
				 <br> <span id="s"></span>
				</div>
				  <div class="col-sm-3">
				 <label>post</label><br>
				 <input type="text" name="dept" class="form-control" id="dept" required readonly>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				   
				  </div>
				  
				  </div><br>
				  </div>
              </div>
            </div>
          </div>
		  
		  
		  <!--dlskalfksa -->
		     <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Project Details </h2>
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
				  <div class="col-sm-3">
				  <label>project Id</label><br>
				  <input type="text" name="p_name" class="form-control" id="p_name" >
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Role</label><br>
				  <input type="text" name="role" class="form-control" id="role" >
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Other</label><br>
				  <input type="other" name="other" class="form-control" id="other" >
				  </div>
				  
				  </div><br>
				  <br>
				   <button name="save"  class="btn-info btn-lg btn-block"><i class="fa fa-save" style="color:white; font-size:25px"></i>&nbsp;&nbsp; Save </button>
					<br>
				  </div>
              </div>
            </div>
          </div>

<!--- aklfklkal -->
	    
		<!-- total payment -->  
		  
      
		
</form>

       
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
