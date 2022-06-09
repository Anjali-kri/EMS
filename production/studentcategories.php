<?php
 include('connection.php');
 error_reporting(0);
 session_start();
 $admin=$_SESSION['user_name'];
 
if(isset($_POST["save"]))
{
$categories=$_POST['categories'];
$q="insert into studentcategory value('$categories')";
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
            <div class="title_left">
              <h2></h2>
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
                  <h2>create categories</h2>
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
		
				<div class="col-sm-4">
		<label> categories</label>
		<input type="text" class="form-control" name="categories">
		  </div>
					
					<div class="col-sm-4">
				</div>
				<br><br><br><br>
				<hr>
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
				<input type="submit"value="Save" name="save"  style="border-radius:15px; background-color:#4ddbff;color:white ;border-radius:25px;height:35px;width:70px" >
		  </form>
				 <a href="studentcategories.php"> <input type="submit" value="Refresh" class="btn btn-info" style="border-radius:15px" ></a>
				</div>
				
		</form>
				</div>
				</div>
				</div>
				</div>
				
<div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
            
				
							<div class="x_panel">
                <div class="x_title">
                  <h2><span class="glyphicon glyphicon-align-left"></span> &nbsp;category list</h2>
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
                  <input type="text" class="form-control"   style="border-radius:15px width:60%;border-color:#334949 " placeholder="Search for categories" name="search">
                  <span class="input-group-btn"> 
				  <option>Select</option>
                          <option  value="gen">gen</option>
                          <option  value="obc">obc</option>
                          <option  value="sc">sc</option>
                          <option  value="st">st</option>
                          <option  value="E">E</option>
                          <option  value="F">F</option>
                        </select>
                           <!-- <button class="btn btn-default" type="submit">Go!</button>-->
                  </span>
				</form>
                </div>
              </div>
            </div>
          </div>
		  		
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Admission number</th>
                        <th> First Name</th>
                        <th>Class</th>
						<th>Date Of Birth</th>
						<th>Gender</th>
						<th>Mobile Number</th>
						<th>Category</th>
			</tr> 
					   
                    </thead>
	<?php
	include('connection.php');
	
$search=$_POST['search'];
$sql="select * from studentdetail where categories='$search'";
$r=mysqli_query($con,$sql);
$sql3="select * from bankdetail where categories='$search'";
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
		<td><?php echo $rs['mobileno'];?></td>
		<td><?php echo $rs['categories'];?></td>
		</tr>
	<?php
	}
	?>

</table>
</div>	
</div>	
	<div style="margin-top:1500px;"></div>		
             
<div class="clearfix">
            </div>
			</div>

                   
                    <tbody>
            </div>

      <!-- /page content -->
<?php include"footer.php"?>
      </div>
    </div>
  </div>
<?php include"scriptfile.php"?>
		  <script src="js/datatables/jquery.dataTables.min.js"></script>
        <script src="js/datatables/dataTables.bootstrap.js"></script>
        <script src="js/datatables/dataTables.buttons.min.js"></script>
        <script src="js/datatables/buttons.bootstrap.min.js"></script>
        <script src="js/datatables/jszip.min.js"></script>
        <script src="js/datatables/pdfmake.min.js"></script>
        <script src="js/datatables/vfs_fonts.js"></script>
        <script src="js/datatables/buttons.html5.min.js"></script>
        <script src="js/datatables/buttons.print.min.js"></script>
        <script src="js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="js/datatables/dataTables.keyTable.min.js"></script>
        <script src="js/datatables/dataTables.responsive.min.js"></script>
        <script src="js/datatables/responsive.bootstrap.min.js"></script>
        <script src="js/datatables/dataTables.scroller.min.js"></script>
</body>
</html>
