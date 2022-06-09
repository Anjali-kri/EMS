
<?php
error_reporting(0);
 include_once('connection.php');
if (isset($_POST["save"]))
{
	$addno=$_POST['addno'];
	$class=$_POST['class'];
	$section=$_POST['section'];
    $q="select into studentclass values('$addno','$class','$section')";
$r=mysqli_query($con,$q);
if(mysqli_affected_rows($con)<0)
{
	echo"<script>alert('Sorry Error Occured');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
      <?php include"topnavigation.php"?>
	  <!--start of page-->
	  
	  <div class="right_col" role="main">
	      <div class="">
          <div class="page-title">
            <div class="title_left">
              <h2>Student Information</h2>
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
                  <h2>Select criteria</h2>
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
				<form method="post">
		 <div class="col-sm-3">
		  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">class</label><br><br>
                      <!--<div class="col-md-9 col-sm-9 col-xs-12">-->
                        <select class="select2_multiple form-control" style="padding:0px" name="class"> 
                          <option>Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select>
                     <!-- </div>-->
                    </div>
		  </div>
		  <div class="col-sm-3">
		   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Section</label><br><br>
                      <!--<div class="col-md-9 col-sm-9 col-xs-12">-->
                        <select class="select2_multiple form-control" style="padding:0px" name="section"> 
                          <option>Select</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                        </select>
                      <!--</div>-->
					  </div>
					  </div>
                 <div class="col-sm-6">   
					
				</div>	
					
				</diV>	
					
					<br><br>
		
            <input type="submit"value="view" name="view">			

</form>			
		   
                        </div>
</div>
</div>
	
	            <div class="row">		
				<div class="x_panel">
                <div class="x_title">
                  <h2>Details....</h2>
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
              <h3>categories</h3>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
				<form method="post">
                  <input type="text" class="form-control" placeholder="Search for class/sec..." name="search">
                  <span class="input-group-btn">
                           <!-- <button class="btn btn-default" type="submit">Go!</button>-->
                  </span>
				</form>
                </div>
              </div>
            </div>
          </div>
				
                  <!--<p class="text-muted font-13 m-b-30">
                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                  </p>-->
				  
				  
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
					  
					  
					  <th>#</th>
                        <th>Admission no.</th>
                        <th>First name</th>
						<th> class</th>
						<th> DOB</th>
						<th>Gen </th>
						<th>Father</th>
						<th> Category</th>
						<th>mobile_no.</th>
		         </tr>		   	   
                    </thead>

					
					
					<?php
					$search=$_POST['search'];
					
					
$sql="select * from studentdetail where addno='$search'";
$r=mysqli_query($con,$sql);
$sql2="select * from guardiandetail where addno='$search'";
$r2=mysqli_query($con,$sql2);
$sql3="select * from bankdetail where addno='$search'";
$r3=mysqli_query($con,$sql3);
$sql4="select * from studentcategory where categories='$search'";
$r4=mysqli_query($con,$sql4);


	while($rs=mysqli_fetch_assoc($r))
	{
     	$rs2=mysqli_fetch_assoc($r2);
		$rs3=mysqli_fetch_assoc($r3);
		$rs4=mysqli_fetch_assoc($r4);
		
	
	
		
		?>
		<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $rs['addno'];?></td>
		<td><?php echo $rs['fname'];?></td>
		<td><?php echo $rs['class'];?></td>
		<td><?php echo $rs['dob'];?></td>
		<td><?php echo $rs['gender'];?></td>
		<td><?php echo $rs2['faname'];?></td>
		<td><?php echo $rs['categories'];?></td>
		<td><?php echo $rs['mobileno'];?></td>
		
		
		
		
		</tr>
	<?php
	}
	?>
					
					
					
					
					
					
					
					
					
					
</table>
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