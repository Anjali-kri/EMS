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
				  <style>
				  .html{
					  font-size:30px
				  }
				  </style>
				  <div class="row">
				  <div class="col-sm-2" >
				 <label >Workshop Id:</label>
				  </div>
				  <div class="col-sm-3">
				  <input type="text" name="id" class="form-control" style="border-radius:6px">
				  </div>
				  <div class="col-sm-7">
				  </div>
				  </div><br><br>
				  <div class="row">
				  <div class="col-sm-12">
				  <label>1. What is the full form of HTML</label>
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-6">
				  <input type="radio" name="1" class="html" value="HyperText Markup Language">HyperText Markup Language
				  </div>
				  <div class="col-sm-6">
				  <input type="radio" name="1" class="html" value="HyperText Modal Language">HyperText Modal Language
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-6">
				  <input type="radio" name="1" class="html" value="HyperTransmission  Markup Language">HyperTransmission  Markup Language
				  </div>
				  <div class="col-sm-6">
				  <input type="radio" name="1" class="html" value="HyperTransmission Modal Language">HyperTransmission Modal Language
				  </div>
				  </div><br>
				  
				  <div class="row">
				  <div class="col-sm-12">
				  <label>2. What is the full form of CSS</label>
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-6">
				  <input type="radio" name="2" class="html" value="HyperText Markup Language">HyperText Markup Language
				  </div>
				  <div class="col-sm-6">
				  <input type="radio" name="2" class="html" value="HyperText Modal Language">HyperText Modal Language
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-6">
				  <input type="radio" name="2" class="html" value="css">css
				  </div>
				  <div class="col-sm-6">
				  <input type="radio" name="2" class="html" value="HyperTransmission Modal Language">HyperTransmission Modal Language
				  </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-12">
				  <label>3. What is the full form of CSS</label>
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-6">
				  <input type="radio" name="3" class="html" value="css">css
				  </div>
				  <div class="col-sm-6">
				  <input type="radio" name="3" class="html" value="HyperText Modal Language">HyperText Modal Language
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-6">
				  <input type="radio" name="3" class="html" value="HyperTransmission  Markup Language">HyperTransmission  Markup Language
				  </div>
				  <div class="col-sm-6">
				  <input type="radio" name="3" class="html" value="HyperTransmission Modal Language">HyperTransmission Modal Language
				  </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-12">
				  <label>4. What is the full form of CSS</label>
				  </div>
				  </div>
				  <div class="row bg-info " >
				  <div class="col-sm-6">
				  <input type="radio" name="4" class="html" value="HyperText Markup Language">HyperText Markup Language
				  </div>
				  <div class="col-sm-6">
				  <input type="radio" name="4" class="html" value="HyperText Modal Language">HyperText Modal Language
				  </div>
				  </div>
				  <div class="row bg-success">
				  <div class="col-sm-6">
				  <input type="radio" name="4" class="html" value="HyperTransmission  Markup Language">HyperTransmission  Markup Language
				  </div>
				  <div class="col-sm-6">
				  <input type="radio" name="4" class="html" value="css">css
				  </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-12">
				  <label>5. Review</label>
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-6">
				  <input type="radio" name="5" class="html" value="Excellent">Excellent
				  </div>
				  <div class="col-sm-6">
				  <input type="radio" name="5" class="html" value="Very Good">Very Good
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-6">
				  <input type="radio" name="5" class="html" value="Good">Good
				  </div>
				  <div class="col-sm-6">
				  <input type="radio" name="5" class="html" value="Average">Average
				  </div>
				  </div><br>
				   <div class="row">
				   <div class="col-sm-8">
				   </div>
				  <div class="col-sm-4">
				  <button class="btn-info btn-lg" name="save"> Save</button>
				  </div>
				  </div>
				  <?php
				  if(isset($_POST['save']))
				  {
				  $a=$_POST['1'];
				  $b=$_POST['2'];
				  $c=$_POST['3'];
				  $d=$_POST['4'];
				  $e=$_POST['5'];
				  $count=0;
				  if(($a)=="HyperText Markup Language")
				  {
					 ++$count; 
				  }
				  if(($b)=="css")
				  {
					 ++$count; 
				  }
				  if(($c)=="css")
				  {
					 ++$count; 
				  }
				  if(($d)=="css")
				  {
					 ++$count; 
				  }
				  if(($e)=="css")
				  {
					 ++$count; 
				  }
				  echo "total number is :".$count;
					  
				  }
				  ?>
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
