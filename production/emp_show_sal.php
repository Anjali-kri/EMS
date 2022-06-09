
<html lang="en">
<head>
  <?php
  error_reporting(0);
  session_start();
  $admin=$_SESSION['user_name'];
 
  if($admin=="")
  {
	  header('Location:login.php');
  }
  
  include("head1.php");
    include "connection1.php";
	//include "session_check_file.php";
	
	?>
	
	
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container" >
	 <div class="navbar nav_title" style="border: 0;" >
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
$total="hello";
?>
      <!-- page content -->
      <div class="right_col" role="main">
	  <form method="POST">
	   <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Generate Payslip</h2>
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
				  
				 <div class="row">
				 <div class="col-sm-12 table-responsive">
				 	<table class="table table-striped">
				 		<tr class="bg-info" style="color: white;background-color: blue;">
				 			<th>Sl no</th>
				 			<th>Months</th>
				 			<th>Salary</th>
				 			<th>Incentive</th>
				 			<th>Total Salary</th>
				 			<th>Date</th>
				 			<th>Time</th>
				 			<th>Option</th>
				 		</tr>
				 			<?php
				 			$i=0;
				 				$data=$_SESSION['emp_code'];
				 				$result=mysqli_query($con,"select * from emp_sal_monthly where emp_id='$data'");
				 				while($fetch=mysqli_fetch_assoc($result))
				 				{
				 					$month=$fetch['month'];
				 					$date=$fetch['date'];
				 					?>
				 		<tr>
				 			<td><?php echo ++$i;  ?></td>
				 			<td><?php echo $fetch['month'];?></td>
				 			<td><?php echo $fetch['total_salary'];?></td>
				 			<td><?php echo $fetch['extra'];?></td>
				 			<td><?php echo $fetch['gross'];?></td>
				 			<td><?php echo $fetch['date'];?></td>
				 			<td><?php echo $fetch['time'];?></td>
				 			<td><a href="generate_payslip.php?eid=<?php echo $data; ?>&&month=<?php echo $month; ?>&&date=<?php echo $date; ?>">Generate Salary</a></td>
				 					</tr>

				 					<?php
				 				}
				 			?>

				 		
				 	</table>
				 
				 </div>
				 
				 </div>
				 <div class="row" style="margin-top:80px;">
				 <div class="col-sm-12" id="proj_detail">
				 </div>
				 
				 </div>
				  

				  <div>
				 
				  </div>
				</div>
              </div>
            </div>
          </div>
		  <div style="margin-top:1500px;"></div>
		  <!--dlskalfksa -->
		 
<!--- aklfklkal -->
	   <!-- total payment -->  
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
