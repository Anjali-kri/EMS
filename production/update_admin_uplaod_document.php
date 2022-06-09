<?php
include "connection1.php";
error_reporting(0);
session_start();
$admin=$_SESSION['user_name'];
 
  if($admin=="")
  {
	  header('Location:login.php');
  }
  


?>
<html lang="en">
<head>
  <?php
  include("head1.php");
  include "connection1.php";
  ?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
	<form method="POST" action="update_documents.php">
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
                  <h2>Update Employee Upload Documents </h2>
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
				  <label> Employee Id.</label>
				  </div>
				  <div class="col-sm-4">
				 <input type="text" name="reg" class="form-control">
				  </div>
				  <div class="col-sm-6">
				  
				  </div>
				  </div><br>
				   <div class="row">
						<div class="col-sm-12">
						<?php $reg=$_POST['reg']; ?>
						
						<button name="search"  class="btn-info btn-lg btn-block"><i class="fa fa-Search" style="color:red; font-size:25px"></i>&nbsp;&nbsp; Search</button> 
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
