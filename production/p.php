<?php
error_reporting(0);
$con=mysqli_connect('localhost','root','','power');
if (isset($_POST["save"]))
{

	$m1=$_POST['m1'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$depart=$_POST['depart'];
	$doj=$_POST['doj'];
	$mobile=$_POST['mobile'];
	$add=$_POST['add'];
	$dalloted=$_POST['dalloted'];

	

    $q="insert into inventory values ('$m1','$fname','$lname','$depart','$doj','$mobile','$add','$dalloted')";
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
              <h3>WELCOME TO IMS</h3>
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
                  <h2>Device Wise...</h2>
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
		 <label>Emp no.</label>
		  <input type="text" class="form-control" name="m1" >
		  </div>
		  <div class="col-sm-4">
		  <label>first name</label>
		   <input type="text" class="form-control" name="fname">
		  </div>
		   <div class="col-sm-4">
		  <label>last name</label>
		   <input type="text" class="form-control" name="lname">
		  </div>
		  </div>
		  <div class="row">
		  <div class="col-sm-4">
		   <label>Department</label>
		   <input type="text" class="form-control" name="depart">
		  </div>
		  <div class="col-sm-4">
		   <label>D-O-J</label>
		   <input type="text" class="form-control" name="doj"  value="<?php echo date('d-m-Y'); ?>" readonly>
		  </div>
		  <div class="col-sm-4">
		  <label>mobile</label>
		   <input type="text" class="form-control" name="mobile">
		  </div>
		  </div>
		  <div class="row">
		   <div class="col-sm-4">
		   <label>Address</label>
		   <input type="text" class="form-control" name="add">
		  </div>
		   <div class="col-sm-4">
		   <label>Device Alloted</label>
		   <input type="text" class="form-control" name="dalloted">
		  </div> <br><br>
		  <div class="row">
		  <div class="col-sm-4"></div>
		  <div class="col-sm-4">
		  <input type="submit" value="save" name="save" class="btn btn-primary">
		  </form>
     </div>		
	 </div>
	 </div>
	 </div>
	 
	 
	 <div class="x_panel">
                <div class="x_title">
                  <h2>Devicewise Report( To Get Data Enter emp no.)</h2>
				  
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
                   <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                 <div class="clearfix"></div>
                </div>
	
                <div class="x_content">
				<div class="page-title">
            <div class="title_left">
              <h3>Get List</h3>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
				<form method="post">
                  <input type="text" class="form-control" placeholder="Enter Empno...." name="search">
                  <span class="input-group-btn">    
                  </span>
				</form>
                </div>
              </div>
            </div>
          </div>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>empno</th>
                        <th>F-name</th>
						<th>L-name</th>
						<th>Department</th>
						<th>Date-of-join</th>
						<th>Device alloted</th>
						<th>Address</th>
                      </tr>
					 </thead>
					 
				 					   <?php
					   error_reporting(0);
$search=$_POST['search'];
$sql7="select * from inventory where empno='$search'";
$r7=mysqli_query($con,$sql7);

echo $activities;
		echo $development;
		echo $addfee;
					 
	while($rs7=mysqli_fetch_assoc($r7))	
	{
     	
					 
	?>
		<tr>
		<td><?php echo $rs7['empno'];?></td>
	    <td><?php echo $rs7['firstname'];?></td>
        <td><?php echo $rs7['lname'];?></td>
		<td><?php echo $rs7['depart'];?></td>
		<td><?php echo $rs7['doj'];?></td>
		<td><?php echo $rs7['dalloted'];?></td>
		<td><?php echo $rs7['address'];?></td>
	
				 
<?php
	}
	?>		
			
</table>
					 </div>
					 </div>

</div>
</div>			



<div class="x_panel">
                <div class="x_title">
                  <h2>Emp wise Report( To Get Data Enter emp name)</h2>
				  
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
                   <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                 <div class="clearfix"></div>
                </div>
	
                <div class="x_content">
				<div class="page-title">
            <div class="title_left">
              <h3>Get List</h3>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
				<form method="post">
                  <input type="text" class="form-control" placeholder="Enter Empname...." name="search">
                  <span class="input-group-btn">    
                  </span>
				</form>
                </div>
              </div>
            </div>
          </div>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Emp name</th>
						<th>Emp id</th>
						<th>Device Alloted</th>
                        <th>Department</th>
						</tr>
					 </thead>
					 				 					   <?php
					   error_reporting(0);
$search=$_POST['search'];
$sql8="select * from inventory where firstname='$search'";
$r8=mysqli_query($con,$sql8);

echo $activities;
		echo $development;
		echo $addfee;
					 
	while($rs8=mysqli_fetch_assoc($r8))	
	{
     
					 
	?>
		<tr>
		<td><?php echo $rs8['firstname'];?></td>
	    <td><?php echo $rs8['empno'];?></td>
        <td><?php echo $rs8['dalloted'];?></td>
		<td><?php echo $rs8['depart'];?></td>
		
				 
<?php
	}
	?>		
					 
					 
					 
					 
					 
					 
</table>
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
