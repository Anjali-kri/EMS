
<?php
error_reporting(0);
 include_once('connection.php');
if (isset($_POST["save"]))
{
	
	$class=$_POST['class'];
	$section=$_POST['section'];
	
    $q="insert into classsection values('$class','$section')";
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
      <?php include"sidebar.php"?>
      <?php include"topnavigation.php"?>
	  
	  
	  <div class="right_col" role="main">
	      <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Student Information</h3>
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
                  <h2>Select Criteria</h2>
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
					<li><a class="print-link"><i class="fa fa-print"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div><!--end of page-->
				
				
				<div class="row">
				<form method="post">
		 <div class="col-sm-4">
		  <!--<input type="text" class="form-control">-->
		  
		  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"><h2>Class</h2></label><br><br>
                      <!--<div class="col-md-9 col-sm-9 col-xs-12">-->
                        <select class="select2_multiple form-control" style="padding:0px" name="class";> 
                          <option>Select</option>
                          <option  value="A">1</option>
                          <option  value="2">2</option>
                          <option  value="3">3</option>
                          <option  value="4">4</option>
                          <option  value="5">5</option>
                          <option  value="6">6</option>
						  <option  value="7">7</option>
						  <option  value="8">8</option>
                        </select>
                     <!-- </div>-->
                    </div>

		  </div>
		  
		  
		  <div class="row">
		 <div class="col-sm-4">
		 
		 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"><h2>Section</h2></label><br><br>
                      <!--<div class="col-md-9 col-sm-9 col-xs-12">-->
                        <select class="select2_multiple form-control" style="padding:0px" name="section";> 
                          <option>Select</option>
                          <option  value="A">A</option>
                          <option  value="B">B</option>
                          <option  value="C">C</option>
                          <option  value="D">D</option>
                          <option  value="E">E</option>
                          <option  value="F">F</option>
                        </select>
                     <!-- </div>-->
                    </div>

		  </div>
		  </div>
		  </div>
		  <input type="submit"value="save" name="save" class=" btn btn-primary">
		  </form>
		  </div>

			<div class="x_panel">
                <div class="x_title">
                  <h2>Guardian Report( To Get Data Enter Addmission no.)</h2>
				  
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
                  <input type="text" class="form-control" placeholder="Enter Addno...." name="search">
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
                        <th>Addno.</th>
                        <th>F-name</th>
						<th>fat-name</th>
						<th>fat-occ</th>
						<th>fat-ph</th>
						<th>mot-name</th>
						<th>mot-occ</th>
						<th>mot-ph</th>
						<th>Address</th>
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
		<td><?php echo $rs['addno'];?></td>
		<td><?php echo $rs['fname'];?></td>
		<td><?php echo $rs2['faname'];?></td>
		<td><?php echo $rs2['faoccu'];?></td>
		<td><?php echo $rs['mobileno'];?></td>
		<td><?php echo $rs2['mothname'];?></td>
		<td><?php echo $rs2['mothoccu'];?></td>
		<td><?php echo $rs2['mothphone'];?></td>
		<td><?php echo $rs2['permenentadd'];?></td>
		</tr>
	<?php
	}
	?>				 		 
          </table>
           </div>
           </div>
               <div class="x_panel">
                <div class="x_title">
                  <h2>Student Report (To Get Data Enter Addmission no.)</h2>
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
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
				<form method="post">
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
                        <th>roll</th>
						 <th>class</th>
						  <th>section</th>
                        <th>F-name</th>
						<th>l_name</th>
						<th>dob</th>
						<th>religion</th>
						<th>categories</th>
						<th>mobileno.</th>
						<th>email</th>
						<th>Adddate</th>
						<th>gender</th>   
						<th>hostel</th>
					     <th>routelist</th>
						<th>roomno.</th>
                      </tr>
					 </thead>
					 
					  <?php
$search=$_POST['search'];
$sql5="select * from studentdetail where addno='$search'";
$r5=mysqli_query($con,$sql5);


	while($rs5=mysqli_fetch_assoc($r5))
	{
     	
	
		
		?>
		<tr>
		
		<td><?php echo $rs5['roll'];?></td>
		<td><?php echo $rs5['class'];?></td>
		<td><?php echo $rs5['section'];?></td>
		<td><?php echo $rs5['fname'];?></td>
		<td><?php echo $rs5['lname'];?></td>
		<td><?php echo $rs5['dob'];?></td>
		<td><?php echo $rs5['religion'];?></td>
		<td><?php echo $rs5['categories'];?></td>
		<td><?php echo $rs5['mobileno'];?></td>
		<td><?php echo $rs5['email'];?></td>
		<td><?php echo $rs5['adddate'];?></td>
		<td><?php echo $rs5['gender'];?></td>
		<td><?php echo $rs5['hostel'];?></td>
		<td><?php echo $rs5['routelist'];?></td>
		<td><?php echo $rs5['roomno'];?></td>

	<?php
	}
	?>				  
					 </table>
					 </div>
					 </div>
					 </div>
                  </div>	
                  </div>				
                <div class="x_panel">
                <div class="x_title">
                  <h2>Bank Report (To Get Data Enter Addmission no.)</h2>
				  
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
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <span class="input-group-btn">
                  </span>
                </div>
              </div>
            </div>
          </div>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>bankaccount</th>
						<th>bankname</th>
						<th>ifsc</th>
                        <th>nationalid</th>
						<th>localid</th>
						<th>previous-schooldetail</th>
						</tr>
					 </thead>
					  <?php
					  $sql7="select * from bankdetail where addno='$search'";
                      $r7=mysqli_query($con,$sql7);
					while($rs7=mysqli_fetch_assoc($r7)) 
					{	
					?>
	               	<tr>
					
					<td><?php echo $rs7['bankaccount'];?></td>
					<td><?php echo $rs7['bankname'];?></td>
					<td><?php echo $rs7['ifsc'];?></td>
					<td><?php echo $rs7['nationalid'];?></td>
					<td><?php echo $rs7['localid'];?></td>
					<td><?php echo $rs7['previous-schooldetail'];?></td>
<?php
	}
	?>				  
						</table>
						</div>
						</div>
						
						
						
      <!-- page content -->
      

<?php include"footer.php"?>
      </div>
      <!-- /page content -->
    </div>
  </div>
<?php include"scriptfile.php"?>
</body>
</html>
