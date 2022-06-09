<?php
error_reporting(0);
session_start();
$admin=$_SESSION['user_name'];
include_once('connection.php');
if(isset($_POST['insert']))
{

	$busname=$_POST['busname'];
	$busplateno=$_POST['busplateno'];
	$insurancestartdate=$_POST['insurancestartdate'];
	$insuranceenddate=$_POST['insuranceenddate'];
	$drivername=$_POST['drivername'];
	$driverphone=$_POST['driverphone'];
	$capacity=$_POST['capacity'];
	$seatcount=$_POST['seatcount'];
    $seatalloted=$_POST['seatalloted'];
	$busrc=$_POST['busrc'];
	$businsurance=$_POST['businsurance'];	
	$q="insert into businformation(busname,busplateno,insurancestartdate,insuranceenddate,drivername,driverphone,capacity,seatcount,seatalloted,busrc,businsurance)values('$busname','$busplateno','$insurancestartdate','$insuranceenddate','$drivername','$driverphone','$capacity','$seatcount','$seatalloted','$busrc','$businsurance')";
	
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
            <h2 style="color:#0077b3"><b>BUS INFORMATION</b></h2>
			 
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
               <label class="control-label col-md-4 col-sm-4 col-xs-12">BusName<span class="required">*</span></label>
               <div class="col-md-10 col-sm-10 col-xs-12">
          <select class="form-control" name="busname">
		  <option>---Select---</option>
		  <option value="ajantatravels">Ajanta Travels</option>
		  <option value="devtravels">Dev Travels</option>  
               </select>
               </div>
               </div>
			   </div>
               	
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="busplateno">BusPlateNo.<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="busplateno" name="busplateno" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
		    </div>
          		 
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="insurancestartdate">InsuranceStartdate<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="date" id="insurancestartdate" name="insurancestartdate" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
		    </div>
			</div>
			
			
			<div class="row"> 
	        <div class="col-sm-4">
			<div class="form-group"><br>
                      <label for="insuranceenddate" class="control-label col-md-4 col-sm-4 col-xs-12">InsuranceEnddate</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="date" class="form-control col-md-7 col-xs-12"  name="insuranceenddate">
                    </div>
                    </div>
					</div>
				
					
			
	        <div class="col-sm-4">
			<div class="form-group"><br>
                      <label for="drivername" class="control-label col-md-4 col-sm-4 col-xs-12">DriverName</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="text" class="form-control col-md-7 col-xs-12"  name="drivername">
                      </div>
                    </div>
					</div>
				
				<div class="col-sm-4">
				<div class="form-group"><br>
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="driverphone">DriverPhoneNo.<span class="required"></span>
                </label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                <input type="text" id="driverphone" name="driverphone" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
				</div>
				</div>
				
				
					
	<div class="row">
	<div class="col-sm-4">
	<div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Capacity<span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
	<select class="form-control" name="capacity" id="capacity">
	 <option>---Select---</option>
	 <option value="20">20</option>  
	 <option value="22">22</option>
     <option value="25">25</option>  
	</select>
    </div>
    </div>
    </div>
	
					
		  <div class="col-sm-4">
		  <div class="form-group"><br>
          <label class="control-label col-md-4 col-sm-4 col-xs-12">RemainingSeatCount<span class="required"></span></label>
          <div class="col-md-10 col-sm-10 col-xs-12">
          <select class="form-control" name="seatcount" id="seatcount">
		  <option>---Select---</option> 
          <option value="20">20</option>  
	      <option value="22">22</option>
          <option value="25">25</option>  		  
          </select><br>
          </div>
          </div>
		  </div>
		  
					
	<div class="col-sm-4">
    <div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Quantity">SeatsAlloted<span class="required">*</span>
    </label>
    <div class="col-md-10 col-sm-10 col-xs-12">
    <input type="text" id="seatalloted" name="seatalloted" required="seatalloted" class="form-control col-md-7 col-xs-12">
    </div>
    </div>
	</div>
	</div>
	
	                  <div class="row">
	                  <div class="col-sm-4">
	                  <div class="form-group"><br>
                      <label for="busrc" class="control-label col-md-3 col-sm-3 col-xs-12">BusRc</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="file" name="busrc">
                      </div>
                      </div>
					  </div>
					
					<div class="col-sm-6">
					<div class="form-group"><br>
                    <label for="businsurance" class="control-label col-md-3 col-sm-3 col-xs-12">BusInsurance</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="businsurance">
                    </div>
                    </div>
	                </div>
                    </div>
	
	
            <div class="ln_solid"></div>
            <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">    
            <button type="submit" style="border-radius:10px;background-color: #00b3b3"  class="btn btn-success" name="insert">Insert Record</button>
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
            <h2 style="color:#0077b3"><b>BUS INFORMATION LIST</b></h2>
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
    <label class="control-label col-md-4 col-sm-4 col-xs-12">SelectBusName<span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
		   
		  <?php 
		  $r=mysqli_query($con,"select * from businformation");
		  ?>
          <select class="form-control" name="busname">
		  <option>---Select---</option>
		  <?php
		  while($row=mysqli_fetch_assoc($r))
		  {
		  ?>
		  <option value="<?php echo $row['busname']?>"><?php echo $row['busname']?></option>
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
	
		 
				  
                      <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                      <tr style="background-color:#00cccc;color:white">
                        <th><b>Bus Name</b></th>
                        <th><b>Bus PlateNo.</b></th>
                        <th><b>Insurance Start Date</b></th>
                        <th><b>Insurance End Date</b></th>   
						<th><b>Driver Name</b></th>                        
						<th><b>Driver PhoneNo.</b></th>
						<th><b>Capacity</b></th>
                        <th><b>Remaining Seat Count</b></th>
						<th><b>Seats Alloted</b></th>
						<th><b>Busrc</b></th>
                        <th><b>Bus Insurance</b></th>
						<th><b>Id</b></th>
						<th><b>Action</b></th>
						<th><b>Action</b></th>
                    </tr>
                    </thead>

<?php
include "connection.php";
error_reporting(0);
$search=$_POST['busname'];
if(($search=="")&&(!isset($_POST['go'])))
{	
$sql="select * from businformation ";					  
$r=mysqli_query($con,$sql);	
while($rows=mysqli_fetch_assoc($r))
{		
?>
<tr>
<td><?php echo $rows['busname'];?></td>
<td><?php echo $rows['busplateno'];?></td>
<td><?php echo $rows['insurancestartdate'];?></td>
<td><?php echo $rows['insuranceenddate'];?></td>
<td><?php echo $rows['drivername'];?></td>
<td><?php echo $rows['driverphone'];?></td>
<td><?php echo $rows['capacity'];?></td>
<td><?php echo $rows['seatcount'];?></td>
<td><?php echo $rows['seatalloted'];?></td>
<td><?php echo $rows['busrc'];?></td>
<td><?php echo $rows['businsurance'];?></td>
<td><?php echo $rows['id'];?></td>
<td><a href="businfo.php?id=<?php echo $rows['busplateno'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
<td><a href="delete_businfo.php?id=<?php echo $rows['busplateno'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
</tr>
<?php
}
}
else
{
$sql2="select * from businformation where busname='$search' ";					  
$r2=mysqli_query($con,$sql2);	
while($rows2=mysqli_fetch_assoc($r2))
{
?>
<tr>
<td><?php echo $rows2['busname'];?></td>
<td><?php echo $rows2['busplateno'];?></td>
<td><?php echo $rows2['insurancestartdate'];?></td>
<td><?php echo $rows2['insuranceenddate'];?></td>
<td><?php echo $rows2['drivername'];?></td>
<td><?php echo $rows2['driverphone'];?></td>
<td><?php echo $rows2['capacity'];?></td>
<td><?php echo $rows2['seatcount'];?></td>
<td><?php echo $rows2['seatalloted'];?></td>
<td><?php echo $rows2['busrc'];?></td>
<td><?php echo $rows2['businsurance'];?></td>
<td><?php echo $rows2['id'];?></td>
<td><a href="businfo.php?id=<?php echo $rows2['busplateno'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
<td><a href="delete_businfo.php?id=<?php echo $rows2['busplateno'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
</tr>

<?php	
}
}
?>
				
                    </table>					
                    </div>
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