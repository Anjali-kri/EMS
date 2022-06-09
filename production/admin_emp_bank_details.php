
<html lang="en">
<head>
  <?php
   session_start();
  $admin=$_SESSION['user_name'];
  if($admin=="")
  {
	  header('Location:login.php');
  }
   include "connection1.php";
  //include ("session_check_file.php");
  error_reporting(0);
  include("head1.php");
	$id=$_REQUEST['id'];
	$b_name=$_POST['b_name'];
	$b_add=$_POST['b_add'];
	$ifc=$_POST['ifc'];
	$a_holder=$_POST['a_holder'];
	$a_num=$_POST['a_num'];
	$other2=$_POST['other2'];
	if(isset($_POST['save']))
	{
	mysqli_query($con, "insert into emp_bank_detail values('$id','$b_name','$b_add','$ifc','$a_holder','$a_num','$other2')");
	header('Location:admin_emp_details.php');
	}
	
	
?>

</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
	 <div class="navbar nav_title" style="border: 0;"  7>
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
                  <h2>Employee Bank Details </h2>
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
				  <label>Bank Name*</label><br>
				  <input type="text" name="b_name" class="form-control" required>
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Bank Address*</label><br>
				  <input type="text" name="b_add" class="form-control" required>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>IFC code*</label><br>
				  <input type="text" name="ifc" class="form-control" required>
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Account holder name*</label><br>
				  <input type="text" name="a_holder" class="form-control" required>
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Account Number*</label><br>
				  <input type="number" name="a_num" class="form-control" required>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Other</label><br>
				  <input type="text" name="other2" class="form-control">
				  </div>
				  
				  </div><br><br>
				   <div class="row">
	   
					<div class="col-sm-12">
					<button name="save"  class="btn-info btn-lg btn-block"><i class="fa fa-save" style="color:white; font-size:25px"></i>&nbsp;&nbsp; Save </button>
					</div>
				</div>
			</div>
              </div>
            </div>
          </div>
		<!-- total payment -->  
		  
      
		
</form>

       
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
admin_emp_bank_details.php