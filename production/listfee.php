  <?php
include_once('connection.php');
error_reporting(0);
if (isset($_POST["list"]))

 
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
      <!-- page content -->
     
	  <div class="right_col" role="main">
	      <div class="">
          <div class="page-title">
          

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
               
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

		  
		  
          
                  <div class="clearfix"></div>
                </div><!--end of page-->
				
				
			
	  
	  <div class="x_panel">
                <div class="x_title">
                  <h2>FEE Report( To Get Data Enter Class.)</h2>
				  
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
              <h3>FEE List</h3>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
				<form method="post">
                  <input type="text" class="form-control" placeholder="Enter class...." name="search">
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
					  <th> class</th>
                        <th>fee</th>
                        <th>lab</th>
						<th>activity</th>
						<th>exam</th>
						<th>development</th>
						<th> add fee</th>
						<th>icard</th>
						<th>uniform</th>
                      </tr>
					  </thead>
					  
					   <?php
					   include ('connection.php');
					   error_reporting(0);
$search=$_POST['search'];
$sql7="select * from fee";
$r7=mysqli_query($con,$sql7);

echo $activities;
		echo $development;
		echo $addfee;
					 
	while($rs7=mysqli_fetch_assoc($r7))	
	{
     	
					 
	?>
		<tr>
		<td><?php echo $rs7['class'];?></td>
	    <td><?php echo $rs7['fee'];?></td>
		<td><?php echo $rs7['lab'];?></td>
		<td><?php echo $rs7['activity'];?></td>
		<td><?php echo $rs7['exam'];?></td>
		<td><?php echo $rs7['development'];?></td>
		<td><?php echo $rs7['addfee'];?></td>
		<td><?php echo $rs7['icard'];?></td>
		<td><?php echo $rs7['uniform'];?></td>
				 
<?php
	}
	?>		
					  </table>
					 </div>
					  <a href=" listfee"> <input type="submit" value="Refresh" class="btn btn-primary"></a>
					 </div>
	 
	 
	 
	 
<?php include"footer.php"?>
 </div>
      <!-- /page content -->
    </div>
  </div>

<?php include"scriptfile.php"?>

</body>
</html>
