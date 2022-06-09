
<html lang="en">
<head>
  <?php
  error_reporting(0);
  include("head1.php");
  include "connection1.php";
  session_start();
  $admin=$_SESSION['user_name'];
  
  if($admin=="")
  {
	  header('Location:login.php');
  }
  include "session_check_file.php"
  ?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
	 <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SMS</span></a>
			</br>
			<div class="clearfix"></div>
          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Admin</h2>
            </div>
          </div>
		  <div class="page-header">
		  </div>
		  <?php include "sidemenu_admin_login.php";?>
		  </div>
<?php
include("header.php");
?>
      <!-- page content -->
      <div class="right_col" role="main">
	      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>add admin </h2>
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
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				  <div class="row">
					<div class="col-sm-1">
					<label> Emp_id </label>
                     </div>
					<div class="col-sm-3">
					<input type="text" id="empid" class="form-control" name="empid">
                      </div>
					  <div class="col-sm-3">
					  <p style="text-align:center"><b>OR</b></p>
					  </div>
					  <div class="col-sm-1">
					  <label>Department</label>
					</div>
				   <div class="col-sm-3">
				   <select name="department" class="form-control">
				   <option></option>
				   <?php
				   $result_dept=mysqli_query($con,"select * from admin_dept_type");
				   while($fetch_dept=mysqli_fetch_assoc($result_dept))
					   
				   {
					   ?>
					   <option <?php echo $fetch_dept['dept_short_name'];  ?>><?php echo $fetch_dept['dept_short_name']; ?></option>
					   <?php
				   }
				  ?>
				   </select>
				  <!-- <input type="text" name="department" class="form-control" >  -->
				   </div>
                   </div>
				   <br><br>
					<div class="row">
					<div class="col-sm-12">
                     <button type="submit" class="btn btn-info btn-block btn-lg" name="submit" ><i class="fa fa-search " style="font-size:30px"></i>&nbsp;&nbsp;Search</button>
                        </div>
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
                  <h2>Search Data </h2>
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
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
				  <!-- table -->
                 <div>
				 <?php

				 ?>
				  <table class="table table-striped table-border table-hover">
				<tr>
				<th>#</th>
				<th>Emp_id</th>
				<th>Name</th>
				<th>Desination</th>
				<th>Department</th>
				<th>Net Salary</th>
				<th>Gross Salary</th>
				<th>View</th>
				<?php
				 if(isset($_POST['submit']))
				 {
					
					 if(($_POST['empid']!="")&&(($_POST['department']=="")))
					 {
				 $empid=$_POST['empid'];
				 $dept=$_POST['department'];
				 $empdetails=mysqli_query($con,"select * from emp_details where emp_id='$empid' OR dept='$dept'");
				$empsal=mysqli_query($con,"select * from emp_salary where emp_id='$empid'");
				$empsal_monthly=mysqli_query($con,"select * from emp_sal_monthly where emp_id='$empid'");
				$fetch1=mysqli_fetch_assoc($empsal);
				$fetch2=mysqli_fetch_assoc($empsal_monthly);
				$i=0;
				while(($fetch=mysqli_fetch_assoc($empdetails)))
				{

				?>
				<tr>
				<td><?php echo ++$i; ?></td>
				<td><?php echo $fetch['emp_id']; ?></td>
				<td><?php echo $fetch['fname']; ?></td>
				<td><?php echo $fetch['desi']; ?></td>
				<td><?php echo $fetch['dept']; ?></td>
				<td><?php echo $fetch1['net_pay']; ?></td>
				<td><?php echo $fetch2['gross']; ?></td>
				<td><a href="admin_emp_full_detail.php?id=<?php echo $fetch['emp_id']; ?>" class="btn-success"> view</a></td>
				</tr>
				<?php
				
				 }}
				else if(($_POST['empid']=="")&&(($_POST['department']!="")))
				 {
					 $dept=$_POST['department'];
					$result=mysqli_query($con,"select * from emp_details where dept='$dept'");
					$i=1;
					 while($fetch3=mysqli_fetch_assoc($result))
					 {
						 $f=$fetch3['emp_id'];
						$empdetails=mysqli_query($con,"select * from emp_details where emp_id='$f'");
				        $empsal=mysqli_query($con,"select * from emp_salary where emp_id='$f'");
						$empsal_monthly=mysqli_query($con,"select * from emp_sal_monthly where emp_id='$f'");
						$fetch1=mysqli_fetch_assoc($empsal);
						$fetch2=mysqli_fetch_assoc($empsal_monthly); 
						
				while(($fetch=mysqli_fetch_assoc($empdetails)))
				{
				?>
				<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $fetch['emp_id']; ?></td>
				<td><?php echo $fetch['fname']; ?></td>
				<td><?php echo $fetch['desi']; ?></td>
				<td><?php echo $fetch['dept']; ?></td>
				<td><?php echo $fetch1['net_pay']; ?></td>
				<td><?php echo $fetch2['gross']; ?></td>
				<td><a href="admin_emp_full_detail.php?id=<?php echo $fetch['emp_id']; ?>" class="btn-success"> view</a></td>
				</tr>
				<?php
				 }
					 }
				 }}
				?>
				</table>
				 </div>
				 
				 
				 
				</div>
             </div>
            </div>
          </div>
        </div>
		<div style="margin-top:1500px;"></div>
		<?php
		include("footer.php");
		?>
      </div>
     </div>

<?php
include("script.php");
?>
</body>
</html>
