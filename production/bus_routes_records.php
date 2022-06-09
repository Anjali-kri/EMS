<?php
error_reporting(0);
include_once('connection.php');
session_start();
$admin=$_SESSION['user_name'];
if(isset($_POST['insert']))
{

	$busname=$_POST['busname'];
	$routes=$_POST['routes'];
	$stopname=$_POST['stopname'];
	$pickuptime=$_POST['pickuptime'];
	$droptime=$_POST['droptime'];
	$busfee=$_POST['busfee'];
	$q="insert into busroutesrecords(busname,routes,stopname,pickuptime,droptime,busfee)values('$busname','$routes','$stopname','$pickuptime','$droptime','$busfee')";
	
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
            <h2 style="color:#0077b3"><b>BUS ROUTES RECORDS</b></h2>
			 
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
		  <label class="control-label col-md-4 col-sm-4 col-xs-12">Routes<span class="required">*</span></label>
          <div class="col-md-10 col-sm-10 col-xs-12">            
          <?php 
		  include "connection.php";
		  $r=mysqli_query($con,"select * from busroutes");
		  ?>
          <select class="form-control" name="routes">
		  <option>---Select---</option>
		  <?php
		  while($row=mysqli_fetch_assoc($r))
		  {
		  ?>
		  <option value="<?php echo $row['routes']?>"><?php echo $row['routes']?></option>
		  <?php
		  }
		  ?>
			
          </select><br>
		  </div>
          </div>
	      </div>   
		   
			   
		  <div class="col-sm-4">
          <div class="form-group">   			   
          <label class="control-label col-md-4 col-sm-4 col-xs-12">Bus Name<span class="required">*</span></label>
          <div class="col-md-10 col-sm-10 col-xs-12">
          <?php 
		  include "connection.php";
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
               	
			
          		 
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="stopname">Stop Name<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="stopname" name="stopname" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
		    </div>
			</div>
			
			
			<div class="row"> 
	        <div class="col-sm-4">
			<div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="pickuptime">Pickup Time<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="time" id="pickuptime" name="pickuptime" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					</div>
			
			
			
	        <div class="col-sm-4">
			<div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="droptime">Drop Time<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="time" id="droptime" name="droptime" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    </div>
					</div>
					
				
	        <div class="col-sm-4">
	        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="busfee">Bus Fees<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
	       <div class="input-group">
           <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount" name="busfee">
           <div class="input-group-addon">$</div>
           </div>
           </div>
			
                    </div> 
					</div>
                    </div>
					
	
            <div class="ln_solid"></div>
            <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">    
            <button type="submit" style="border-radius:10px;background-color: #00b3b3"  class="btn btn-success" name="insert">Insert</button>
			<button type="submit" style="border-radius:10px;background-color:#5c8a8a" class="btn btn-primary" name="cancel">Cancel</button>
            </div>
		    </form>
            </div>
            </div>          
			</div>           
			</div>
            </div>
			
			
			
			
			<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
            <div class="x_title">
            <h2 style="color:#0077b3"><b>BUS RECORD LIST</b></h2>
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
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Bus Name<span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
		   
		  <?php 
		  include "connection.php";
		  $r=mysqli_query($con,"select * from busroutesrecords");
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
                        <th><b>Route</b></th>
                        <th><b>Stop Name</b></th>
                        <th><b>Pickup Time</b></th>   
						<th><b>Drop Time</b></th>                        
						<th><b>Bus Fees</b></th>
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
$sql="select * from busroutesrecords ";					  
$r=mysqli_query($con,$sql);	
while($rows=mysqli_fetch_assoc($r))
{		
?>
<tr>
<td><?php echo $rows['busname'];?></td>
<td><?php echo $rows['routes'];?></td>
<td><?php echo $rows['stopname'];?></td>
<td><?php echo $rows['pickuptime'];?></td>
<td><?php echo $rows['droptime'];?></td>
<td><?php echo $rows['busfee'];?></td>
<td><?php echo $rows['id'];?></td>
<td><a href="update_busroutes.php?id=<?php echo $rows['busname'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
<td><a href="delete_businfo.php?id=<?php echo $rows['busname'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
</tr>
<?php
}
}
else
{
$sql2="select * from busroutesrecords where busname='$search' ";					  
$r2=mysqli_query($con,$sql2);	
while($rows2=mysqli_fetch_assoc($r2))
{
?>
<tr>
<td><?php echo $rows2['busname'];?></td>
<td><?php echo $rows2['routes'];?></td>
<td><?php echo $rows2['stopname'];?></td>
<td><?php echo $rows2['pickuptime'];?></td>
<td><?php echo $rows2['droptime'];?></td>
<td><?php echo $rows2['busfee'];?></td>
<td><?php echo $rows2['id'];?></td>
<td><a href="update_busroutes.php?id=<?php echo $rows2['busname'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
<td><a href="delete_businfo.php?id=<?php echo $rows2['busname'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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