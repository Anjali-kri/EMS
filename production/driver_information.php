<?php
include_once('connection.php');
session_start();
$admin=$_SESSION['user_name'];
if(isset($_POST['insert']))
{

	$drivername=$_POST['drivername'];
	$driverid=$_POST['driverid'];
	$email=$_POST['email'];
	$drivercontact=$_POST['drivercontact'];
	$bloodgroup=$_POST['bloodgroup'];
	$age=$_POST['age'];
	$doj=$_POST['doj'];
	$experience=$_POST['experience'];
    $address=$_POST['address'];
	$city=$_POST['city'];
	$licensenumber=$_POST['licensenumber'];
    $licensevalidupto=$_POST['licensevalidupto'];
	$license=$_POST['license'];		
	$q="insert into driverinformation(drivername,driverid,email,drivercontact,bloodgroup,age,doj,experience,address,city,licensenumber,licensevalidupto,license)values('$drivername','$driverid','$email','$drivercontact','$bloodgroup','$age','$doj','$experience','$address','$city','$licensenumber','$licensevalidupto','$license')";
	
$r=mysqli_query($con,$q);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php include"heder.php"?>
</head>
<body class="nav-md">
  <div class="container body">
  <div class="main_container">
  <?php include"sidebar.php"?> 
  <?php include"footer.php"?> 
  
          <!-- page content -->
		  <div class="right_col" role="main">			
		  <div class="">
          <div class="page-title">
          <div class="title_left">
          </div>
		  </div>
		  
			<div class="clearfix">
			</div>
			
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
            <div class="x_title">
            <h2 style="color:#0077b3"><b>DRIVER INFORMATION</b></h2>
			 
				  <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="print-link"><i class="fa fa-print"></i></a>
                  </li>
				  <li><a class="copy-link"><i class="fa fa-copy"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>				 
                </ul>
			
			<div class="clearfix">
			</div>
            </div>
			
			   <div class="x_content">
		
			   <form id="demo-form2" data-parsley-validate  method="post">
			   <div class="row">
			   <div class="col-sm-4">
               <div class="form-group">
               <label class="control-label col-md-4 col-sm-4 col-xs-12" for="drivername">Driver Name<span class="required">*</span>
               </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="drivername" name="drivername" required="required" class="form-control col-md-7 col-xs-12">
               </div>
               </div>
			   </div>
               	
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="driverid">Driver Id<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="driverid" name="driverid" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
		    </div>
          		 
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="email">Email<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
		    </div>
			</div>
			
			
			<div class="row"> 
	        <div class="col-sm-4">
			<div class="form-group"><br>
                      <label for="drivercontact" class="control-label col-md-4 col-sm-4 col-xs-12">DriverContact</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="text" class="form-control col-md-7 col-xs-12"  name="drivercontact">
                      </div>
                    </div>
					</div>
				
					
			
	        <div class="col-sm-4">
			<div class="form-group"><br>
                      <label for="bloodgroup" class="control-label col-md-4 col-sm-4 col-xs-12">BloodGroup</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="text" class="form-control col-md-7 col-xs-12"  name="bloodgroup">
                      </div>
                    </div>
					</div>
				
				<div class="col-sm-4">
				<div class="form-group"><br>
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="age">Age<span class="required"></span>
                </label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                <input type="text" id="age" name="age" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
				</div>
				</div>
				
				
					
	<div class="row">
	<div class="col-sm-4">
	<div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12">DateOfJoining<span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
    <input type="date" id="doj" name="doj" required="required" class="form-control col-md-7 col-xs-12">
	</select>
    </div>
    </div>
    </div>
	
					
		  <div class="col-sm-4">
		  <div class="form-group"><br>
          <label class="control-label col-md-4 col-sm-4 col-xs-12">Experience<span class="required"></span></label>
          <div class="col-md-10 col-sm-10 col-xs-12">
          <input type="text" id="experience" name="experience" required="required" class="form-control col-md-7 col-xs-12">
          </div>
          </div>
		  </div>
		  
					
	<div class="col-sm-4">
    <div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="address">Address<span class="required">*</span>
    </label>
    <div class="col-md-10 col-sm-10 col-xs-12">
    <input type="text" id="address" name="address" required="required" class="form-control col-md-7 col-xs-12">
    </div>
    </div>
	</div>
	</div>
	
	                  <div class="row">
	                  <div class="col-sm-4">
	                  <div class="form-group"><br>
                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="city">City<span class="required">*</span>
                      </label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
                      <input type="text" id="city" name="city" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                      </div>
					  </div>
					
					<div class="col-sm-4">
					<div class="form-group"><br>
                   <label class="control-label col-md-4 col-sm-4 col-xs-12" for="licensenumber">LicenseNumber<span class="required">*</span>
                   </label>
                   <div class="col-md-10 col-sm-10 col-xs-12">
                   <input type="text" id="licensenumber" name="licensenumber" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    </div>
	                </div>
					
					
					
				   <div class="col-sm-4">
				   <div class="form-group"><br>
                   <label class="control-label col-md-4 col-sm-4 col-xs-12" for="licensevalidupto">LicenseValidUpto<span class="required">*</span>
                   </label>
                   <div class="col-md-10 col-sm-10 col-xs-12">
                   <input type="text" id="licensevalidupto" name="licensevalidupto" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    </div>
	                </div>
                    
					
					  <div class="row">
	                  <div class="col-sm-4">
	                  <div class="form-group"><br>
                      <label for="license" class="control-label col-md-3 col-sm-3 col-xs-12">License</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="file" name="license">
                      </div>
                      </div>
					  </div>
	                  </div>
	
            <div class="ln_solid"></div>
            <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">    
            <button type="submit" style="border-radius:10px;background-color: #00b3b3"  class="btn btn-success" name="insert">Insert Record</button>
			<button type="submit" style="border-radius:10px;background-color: #00b3b3" class="btn btn-primary" name="update">Update</button>		
            <button type="submit" style="border-radius:10px;background-color: #00b3b3"  class="btn btn-success" name="delete">Delete</button>
			<button type="submit" style="border-radius:10px;background-color:#5c8a8a" class="btn btn-primary" name="cancel">Cancel</button>
            </div>
		    </form>
            </div>
            </div>
            </div>
            </div>
            </div>
			</div>
			
			
			
			<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
            <div class="x_title">
            <h2 style="color:#0077b3"><b>DRIVER INFORMATION LIST</b></h2>
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
		    </li>
            <li><a class="print-link"><i class="fa fa-print"></i></a>
            </li>
		    <li><a class="copy-link"><i class="fa fa-copy"></i></a>
            </li>
            <li><a href="#"><i class="fa fa-close"></i></a>
            </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <p class="text-muted font-13 m-b-30">
            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p>
				  
  <form id="demo-form2" data-parsley-validate  method="post">
  <div class="row">
	<div class="col-sm-4">     
	<div class="form-group">
    <label class="control-label col-md-4 col-sm-4 col-xs-12">SelectDriverName<span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
	 <?php 
		  $r=mysqli_query($con,"select * from driverinformation");
		  ?>
          <select class="form-control" name="drivername">
		  <option>---Select---</option>
		  <?php
		  while($row=mysqli_fetch_assoc($r))
		  {
		  ?>
		  <option value="<?php echo $row['drivername']?>"><?php echo $row['drivername']?></option>
		  <?php
		  }
		  ?>     	
    </select><br>
    </div>
    </div>
	</div>
	
    
	     <div class="row">		 
         <div class="col-lg-2"><br>		   
         <div class="input-group">
		 <form method="post">
         <span class="input-group-btn">
		 <input class="btn btn-primary" style="border-radius:10px;background-color: #00b3b3" type="submit" value="Go" name="go">
         </span>		 		 
          </form>		 
          </div>
          </div>
          </div>
		  </div>
		 	 
				  
                      <table id="datatable-buttons" class="table table-striped table-bordered table-responsive">
                      <thead>
                      <tr style="background-color:#00cccc;color:white">
                        <th><b>Driver Name</b></th>
                        <th><b>Driver Id</b></th>
                        <th><b>DriverContact</b></th>                          
						<th><b>Age</b></th>
						<th><b>DOJ</b></th>
                        <th><b>Experience</b></th>
						<th><b>Address</b></th>   
						<th><b>City</b></th>                        
						<th><b>LicenseNo.</b></th>
						<th><b>LicenseValid</b></th>
                        <th><b>License</b></th>
						<th><b>Id</b></th>
						<th><b>Action</b></th>
						<th><b>Action</b></th>
                    </tr>
                    </thead>

<?php
include "connection.php";
error_reporting(0);
$search=$_POST['drivername'];
if(($search=="")&&(!isset($_POST['go'])))
{	
$sql="select * from driverinformation ";					  
$r=mysqli_query($con,$sql);	
while($rows=mysqli_fetch_assoc($r))
{		
?>
<tr>
<td><?php echo $rows['drivername'];?></td>
<td><?php echo $rows['driverid'];?></td>
<td><?php echo $rows['drivercontact'];?></td>
<td><?php echo $rows['age'];?></td>
<td><?php echo $rows['doj'];?></td>
<td><?php echo $rows['experience'];?></td>
<td><?php echo $rows['address'];?></td>
<td><?php echo $rows['city'];?></td>
<td><?php echo $rows['licensenumber'];?></td>
<td><?php echo $rows['licensevalidupto'];?></td>
<td><?php echo $rows['license'];?></td>
<td><?php echo $rows['id'];?></td>
<td><a href="driverinfo.php?id=<?php echo $rows['driverid'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
<td><a href="delete_driverinfo.php?id=<?php echo $rows['driverid'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
</tr>
<?php
}
}
else
{
$sql2="select * from driverinformation where drivername='$search' ";					  
$r2=mysqli_query($con,$sql2);	
while($rows2=mysqli_fetch_assoc($r2))
{
?>
<tr>
<td><?php echo $rows2['drivername'];?></td>
<td><?php echo $rows2['driverid'];?></td>
<td><?php echo $rows2['drivercontact'];?></td>
<td><?php echo $rows2['age'];?></td>
<td><?php echo $rows2['doj'];?></td>
<td><?php echo $rows2['experience'];?></td>
<td><?php echo $rows2['address'];?></td>
<td><?php echo $rows2['city'];?></td>
<td><?php echo $rows2['licensenumber'];?></td>
<td><?php echo $rows2['licensevalidupto'];?></td>
<td><?php echo $rows2['license'];?></td>
<td><?php echo $rows2['id'];?></td>
<td><a href="driverinfo.php?id=<?php echo $rows2['driverid'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
<td><a href="delete_driverinfo.php?id=<?php echo $rows2['driverid'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
</tr>

<?php	
}
}
?>					
                    </table>					
                    </div>
					</form>
                    </div>
                    </div>
			        </div>
			
			 <div style="margin-top:1500px;"></div>
			
			<!-- footer content -->
          <footer>
          <div class="copyright-info">
            <p class="pull-right">Magenoto Software Pvt.Ltd</p>
          </div>
          <div class="clearfix"></div>
          </footer>
        <!-- /footer content -->
        </div>
      <!-- /page content -->
        </div>
        </div>
<?php include"scriptfile.php"?> 
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>