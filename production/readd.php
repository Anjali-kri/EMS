
<?php
session_start();
$admin=$_SESSION['user_name'];
include_once('connection.php');
error_reporting(0);

if (isset($_POST["GO"]))
{
    $addno=$_POST['addno'];
	$name=$_POST['name'];
	$class=$_POST['class'];
	$section=$_POST['section'];
	$q="insert into readdno value('$addno','$name','$class','$section')";
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
                  <h2>Readmission Report( To Get Data Enter Addmission no.) </h2>
				  
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
              <h2><span class="glyphicon glyphicon-align-left"></span>&nbsp;Readmission List</h2>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
				<form method="post">
                  <input type="text" class="form-control"  style="border-radius:15px width:60%;border-color:#334949 "placeholder="Enter Addno...." name="search">
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
                        <th>Name</th>
						<th>Class</th>
						<th>Section</th>
						<th> Action</th>
					
                      </tr>
					 </thead>
					 
					  <?php
					  include "connection.php";
$search=$_POST['search'];
$sql1="select * from studentdetail where addno='$search'";
$r1=mysqli_query($con,$sql1);


	while($rs1=mysqli_fetch_assoc($r1))	
	{
     	
					 
	?>
		<tr>
		
	    <td><?php echo $rs1['addno'];?></td>
		<td><?php echo $rs1['fname'];?></td>
		<td><?php echo $rs1['class'];?></td>
		<td><?php echo $rs1['section'];?></td>
		<td><a href="update.php ?id=<?php echo $rs1['addno']; ?> "><span class="btn btn-success btn-xs" style="border-radius:15px"><i class='fa fa-pencil' style='font-size:23px'></i></span></a>
		<a href="delete.php" type="update" class="btn btn-danger btn-xs"style="border-radius:15px"><i class='fa fa-trash' style='font-size:23px'></i></a></button> </td>

	<?php
	}
	?>				  	
					 </table>
		
		</div>
	
		</div>
			<div style="margin-top:1500px;"></div>
<?php include"footer.php"?>
 </div>
      <!-- /page content -->
    </div>
  </div>

<?php include"scriptfile.php"?>

</body>
</html>
