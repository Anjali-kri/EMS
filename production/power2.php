<?php
error_reporting(0);
$con=mysqli_connect('localhost','root','','power');
if (isset($_POST["save"]))
{
	$devices=$_POST['devices'];
	$model=$_POST['model'];
	$device_sino=$_POST['device_sino'];
	$amcwarrenty=$_POST['amcwarrenty'];
	$warrentyexpiry=$_POST['warrentyexpiry'];
	$department=$_POST['department'];
	$ipdetail=$_POST['ipdetail'];
	$p_o_i=$_POST['p_o_i'];
	$p_p_o_i=$_POST['p_p_o_i'];
	
	echo $device,$D_SINO,$warrenty,$expiry,$ipdetails,$poi,$pre_poi;
    $q="insert into inventory values ('$devices','$model','$device_sino','$amcwarrenty','$warrentyexpiry','$department','$ipdetail','$p_o_i','$p_p_o_i')";
    $r=mysqli_query($con,$q);
if(mysqli_affected_rows($con)>0)
{
	echo"data save";
}
else
{
	echo"not save";
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>
</head>
<body class="nav-md">
<form method="post">
  <div class="container body">
    <div class="main_container">
      <?php include"topnavigation.php"?>
      <!-- page content -->
	 
	   <div class="right_col" role="main">
	      <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Information About Devices</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
               
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
		  
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" >
              <div class="x_title">
                  <h2>Details....</h2>
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
                </div><!--end of page-->
				
				
			
		<div class="row">
		 <div class="col-sm-4">
		 <label>Types Of Devices</label>
		  <input type="text" class="form-control" name="devices">
		  </div>
		  <div class="col-sm-4">
		  <label>Make& Model</label>
		   <input type="text" class="form-control" name="model">
		  </div>
		   <div class="col-sm-4">
		  <label>Devices_SI NO</label>
		   <input type="text" class="form-control" name="device_sino">
		  </div>
		  </div>
		  <div class="row">
		  <div class="col-sm-4">
		   <label>AMC Warrenty</label>
		   <input type="text" class="form-control" name="amcwarrenty">
		  </div>
		  <div class="col-sm-4">
		   <label>AMC/WarrentyExpirydate</label>
		   <input type="text" class="form-control" name="warrentyexpiry">
		  </div>
		  <div class="col-sm-4">
		  <label>Department</label>
		   <input type="text" class="form-control" name="department">
		  </div>
		  </div>
		  <div class="row">
		   <div class="col-sm-4">
		   <label>IP details/Net connection</label>
		   <input type="text" class="form-control" name="ipdetail">
		  </div>
		   <div class="col-sm-4">
		   <label>Place Of installation</label>
		   <input type="text" class="form-control" name="p_o_i">
		  </div>  
		  <div class="col-sm-4">
		  <label>Previous place of installation</label>
		   <input type="text" class="form-control" name="p_p_o_i">
		  </div>
		  <input type="submit" value="save" name="save">
		  </form>
     </div>		

	 </div>
			

	 </div>

	 
	 
	 
	 </div>
<?php include"footer.php"?>
      </div>
      <!-- /page content -->
    </div>
  </div>

<?php include"scriptfile.php"?>

</body>
</html>
