<?php
include_once('connection.php');
session_start();
$admin=$_SESSION['user_name'];
if(isset($_POST['save']))
{

	$Itemcategory=$_POST['Itemcategory'];
	
	$Description=$_POST['Description'];
	$q="insert into additemcategory(Itemcategory,Description)values('$Itemcategory','$Description')";
	
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
<div class="clearfix"></div>
			
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2 style="color:#0077b3"><b>ADD ITEM CATEGORY</b></h2>
		
<div class="clearfix">
</div>
</div>
				
			
                 <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                  <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Item Category">Item Category<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="Item Category" name="Itemcategory" required="required" class="form-control col-md-7 col-xs-12">
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
                  <h2 style="color:#0077b3"><b>ITEM CATEGORY LIST</b></h2>
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
				  
				  
				   
		   <div class="row"> 
           <div class="col-lg-2">		   
           <div class="input-group">
          <form method="post">
   		  <input type="text" name="search" class="form-control" placeholder="Search for Id..." >
		  </form>
          </div>
          </div>
          </div>
				  
                   <table id="datatable-buttons" class="table table-striped table-bordered">
                   <thead>
                   <tr style="background-color:#00cccc;color:white">
                   <th><b>Item Category</b></th>
                   <th><b>Description</b></th> 
				   <th><b>Id</b></th> 
                   </tr>
                   </thead>



<?php
include "connection.php";
error_reporting(0);
$search=$_POST['search'];
if($search!="")
{	
$sql="select * from additemcategory where id='$search'";					  
$r=mysqli_query($con,$sql);	
while($rows=mysqli_fetch_assoc($r))
{		
?>
<tr>
<td><?php echo $rows['Itemcategory'];?></td>
<td><?php echo $rows['Description'];?></td>
<td><?php echo $rows['Id'];?></td>
</tr>
<?php
}
}
else
{
$sql2="select * from additemcategory ";					  
$r2=mysqli_query($con,$sql2);	
while($rows2=mysqli_fetch_assoc($r2))
{
?>
<tr>
<td><?php echo $rows2['Itemcategory'];?></td>
<td><?php echo $rows2['Description'];?></td>
<td><?php echo $rows2['Id'];?></td>
</tr>
<?php	
}
}
?>


			
<?php
/*$sql="select * from additemcategory";
$r=mysqli_query($con,$sql);
if(mysqli_num_rows($r)>0)
{
while($rows=mysqli_fetch_assoc($r))
{
?>
<tr>
<td><?php echo $rows['Itemcategory'];?>
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

		  
		  
