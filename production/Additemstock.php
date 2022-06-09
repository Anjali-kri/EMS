<?php
error_reporting(0);
session_start();
$admin=$_SESSION['user_name'];
include_once('connection.php');
if(isset($_POST['save'])&& isset($_FILES['Attachdocument']))
{
    $target_dir="upload/";
	$target_file=$target_dir.basename($_FILES["Attachdocument"]["name"]);
	$image_file_type=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if($image_file_type=="jpeg" || $image_file_type=="jpg" || $image_file_type=="png")
	{
	if($_FILES["Attachdocument"]["size"] <500000)
	{
		if(move_uploaded_file($_FILES['Attachdocument']['tmp_name'],$target_file))
		{
			$Itemcategory=$_POST['Itemcategory'];
			$Item=$_POST['Item'];
			$Supplier=$_POST['Supplier'];
			$Store=$_POST['Store'];
			$Quantity=$_POST['Quantity'];
			$Date=$_POST['Date'];
			$Description=$_POST['Description'];
			$q="insert into additemstock(Itemcategory,Item,Supplier,Store,Quantity,Date,Attachdocument,Description)values('$Itemcategory','$Item','$Supplier','$Store','$Quantity','$Date','$target_file','$Description')";
	
			$r=mysqli_query($con,$q);
			
		}
	}
	}
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
			<div class="clearfix"></div>
			
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2 style="color:#0077b3"><b>ADD ITEM STOCK</b></h2>
				  
				 
                  
			
			<div class="clearfix">
			</div>
                </div>
				
			
               <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
			<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Item Category <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  
					  <?php 
					  include "connection.php";
		  $r=mysqli_query($con,"select * from additemcategory");
		  ?>
          <select class="form-control" name="Itemcategory">
		  <option>---Select---</option>
		  <?php
		  while($row=mysqli_fetch_assoc($r))
		  {
		  ?>
		  <option value="<?php echo $row['Itemcategory']?>"><?php echo $row['Itemcategory']?></option>		  
		  <?php
		  }
		  ?>
			                                  
                        </select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Item<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <?php 
					  include "connection.php";
		  $r=mysqli_query($con,"select * from additem");
		  ?>
          <select class="form-control" name="Item">
		  <option>---Select---</option>
		  <?php
		  while($row=mysqli_fetch_assoc($r))
		  {
		  ?>
		  <option value="<?php echo $row['Item']?>"><?php echo $row['Item']?></option>
		  <?php
		  }
		  ?>
		                                    
                      </select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Supplier<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <?php 
					  include "connection.php";
		  $r=mysqli_query($con,"select * from itemsupplier");
		  ?>
          <select class="form-control" name="Supplier">
		  <option>---Select---</option>
		  <?php
		  while($row=mysqli_fetch_assoc($r))
		  {
		  ?>
		  <option value="<?php echo $row['Name']?>"><?php echo $row['Name']?></option>
		  <?php
		  }
		  ?>
				  						
                        </select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Store<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <?php 
					  include "connection.php";
		  $r=mysqli_query($con,"select * from additemstore");
		  ?>
          <select class="form-control" name="Store">
		  <option>---Select---</option>
		  <?php
		  while($row=mysqli_fetch_assoc($r))
		  {
		  ?>
		  <option value="<?php echo $row['Itemstorename']?>"><?php echo $row['Itemstorename']?></option>
		  <?php
		  }
		  ?>
					                           
                      </select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label for="Quantity" class="control-label col-md-3 col-sm-3 col-xs-12">Quantity<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="Quantity" class="form-control col-md-7 col-xs-12" name="Quantity">	
                      </div>
                    </div>
					
					
					<div class="form-group">
                      <label for="Date" class="control-label col-md-3 col-sm-3 col-xs-12">Date</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="Date"  class="form-control col-md-7 col-xs-12"  name="Date">
                      </div>
                    </div>
					
					
					<div class="form-group">
                      <label for="Attach Document" class="control-label col-md-3 col-sm-3 col-xs-12">Attach Document</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="file" name="Attachdocument">
					 
                     </div>
                    </div>
					
			                             
					<div class="form-group">
                      <label for="Description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="Description" class="form-control col-md-7 col-xs-12" type="text" name="Description">
                      </div>
                    </div><br>
				
				
                      <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">                        
                        <button type="submit" style="border-radius:10px;background-color: #00b3b3" class="btn btn-success" name="save">Save</button>
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
                  <h2 style="color:#0077b3"><b>ITEM STOCK LIST</b></h2>
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
                  <li><a class="print-link"><i class="fa fa-print"></i></a>
                  </li>
				  <li><a class="copy-link"><i class="fa fa-copy"></i></a>
                  </li>
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
				  
				  
		 <div class="row"> 
         <div class="col-lg-2">		   
         <div class="input-group">
         <form method="post">
         <input type="text" name="search" class="form-control" placeholder="Search for Item..." > 
         </form>		 
         </div>
         </div>
         </div>
				  
				  
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr style="background-color:#00cccc;color:white">
                        <th><b>Item Category</b></th>
                        <th><b>Item</b></th>                        
                        <th><b>Supplier</b></th> 
						<th><b>Store</b></th>                        
                        <th><b>Quantity</b></th>
                        <th><b>Date</b></th>                        
                        <th><b>Attach Document</b></th> 
                        <th><b>Description</b></th>
						<th><b>Id</b></th>
                      </tr>
                    </thead> 
<?php
include "connection.php";
error_reporting(0);
$search=$_POST['search'];					  
$sql="select * from additemstock where Item='$search'";					  
$r=mysqli_query($con,$sql);	
while($rows=mysqli_fetch_assoc($r))
{	
?>
<tr>
<td><?php echo $rows['Itemcategory'];?>
<td><?php echo $rows['Item'];?></td>
<td><?php echo $rows['Supplier'];?></td>
<td><?php echo $rows['Store'];?></td>
<td><?php echo $rows['Quantity'];?></td>
<td><?php echo $rows['Date'];?></td>
<td><?php echo $rows['Attachdocument'];?></td>
<td><?php echo $rows['Description'];?></td>
<td><?php echo $rows['Id'];?></td>
</tr>
<?php
}
?>

			
<?php
/*$sql="select * from additemstock";
$r=mysqli_query($con,$sql);
if(mysqli_num_rows($r)>0)
{
while($rows=mysqli_fetch_assoc($r))
{	
?>
<tr>
<td><?php echo $rows['Itemcategory'];?>
<td><?php echo $rows['Item'];?></td>
<td><?php echo $rows['Supplier'];?></td>
<td><?php echo $rows['Store'];?></td>
<td><?php echo $rows['Quantity'];?></td>
<td><?php echo $rows['Date'];?></td>
<td><?php echo $rows['Attachdocument'];?></td>
<td><?php echo $rows['Description'];?></td>
<td><?php echo $rows['Id'];?></td>
</tr>
<?php
}
}
	*/
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

		  
		  
