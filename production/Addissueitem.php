<?php
include_once('connection.php');
session_start();
$admin=$_SESSION['user_name'];
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
                  <h2 style="color:#0077b3"><b>ISSUE ITEM LIST</b></h2>
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
				 <div class="clearfix">
				<a href="Addissueitemclick.php" type="submit" style="border-radius:10px;background-color: #00b3b3" class="btn btn-success">+ issue Item</a><br><br>
                 </div>

				 
                <div class="x_content">				
                  <p class="text-muted font-13 m-b-30">
                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.                 
				  </p>
				  
				 
		 <div class="row">		 
         <div class="col-lg-2">		   
         <div class="input-group">
		 <form method="post">
         <input type="date" name="Issuedate" class="form-control" placeholder="Search for Issuedate..." > 		
		 <span class="input-group-btn" >
		 <input class="btn btn-primary" style="border-radius:10px;background-color: #00b3b3" type="submit" value="Go" name="go">
         </span>		 		 
          </form>		 
          </div>
          </div>
          </div>
				 
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr style="background-color:#00cccc;color:white">
                        <th><b>Item</b></th>
                        <th><b>Item Category</b></th>                        
                        <th><b>Issue Date</b></th>	
						<th><b>Return Date</b></th>	
                        <th><b>Issue To</b></th>
                        <th><b>Issued By</b></th>
                        <th><b>Quantity</b></th>
						<th><b>User Type</b></th>							
						<th><b>Note</b></th>
						<th><b>Id</b></th>						
                      </tr>
                    </thead>
					  
<?php
include "connection.php";
error_reporting(0);
if(isset($_POST['go']))
{
$Search=$_POST['Issuedate'];		
$sql="select * from addissueitem where Issuedate='$Search'";					  
$r=mysqli_query($con,$sql);	
while($rows=mysqli_fetch_assoc($r))
{	
?>
<tr>
<td><?php echo $rows['Item'];?></td>
<td><?php echo $rows['Itemcategory'];?>
<td><?php echo $rows['Issuedate'];?></td>
<td><?php echo $rows['Returndate'];?></td>
<td><?php echo $rows['Issueto'];?></td>
<td><?php echo $rows['Issueby'];?></td>
<td><?php echo $rows['Quantity'];?></td>
<td><?php echo $rows['Usertype'];?></td>
<td><?php echo $rows['Note'];?></td>
<td><?php echo $rows['Id'];?></td>
</tr>
<?php
}
}
?>

	
					  		
<?php
/*$sql="select * from addissueitem";
$r=mysqli_query($con,$sql);
if(mysqli_num_rows($r)>0)
{
while($rows=mysqli_fetch_assoc($r))
{
?>
<tr>
<td><?php echo $rows['Item'];?></td>
<td><?php echo $rows['Itemcategory'];?>
<td><?php echo $rows['Issuedate'];?></td>
<td><?php echo $rows['Returndate'];?></td>
<td><?php echo $rows['Issueto'];?></td>
<td><?php echo $rows['Issueby'];?></td>
<td><?php echo $rows['Quantity'];?></td>
<td><?php echo $rows['Usertype'];?></td>
<td><?php echo $rows['Note'];?></td>
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

		  
		  
