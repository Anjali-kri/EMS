
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
                  <h2>Show Issue Salary Details</h2>
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
		<?php
		$eid=$_REQUEST['eid'];
		$month=$_REQUEST['month'];
		$date=$_REQUEST['date'];
		$fatch_12=mysqli_fetch_assoc(mysqli_query($con,"select * from emp_details where emp_id='$eid'"));
		$fatch_13=mysqli_fetch_assoc(mysqli_query($con,"select * from emp_sal_monthly where emp_id='$eid' and month='$month' and date='$date'"));


		?>	
		<script type="text/javascript">
		function printpage(p1)
{   
	var rpage = document.body.innerHTML;
	var pritablecontent= document.getElementById(p1).innerHTML;
	document.body.innerHTML=pritablecontent;
	window.print();
	document.body.innerHTML= rpage;
}
</script>
		<input type="submit" onclick="printpage('maincontent');" value="print"/>
		<div id="maincontent">	  
				 <div class="row">
				 <div class="col-sm-12 table-responsive">
				 	<table class="table table-striped" border="1">
				 		<tr>
				 			<td colspan="2" style="text-align: center;">Viduit Bhawan<br>Boring Road Patna</td>
				 		</tr>
				 		<tr>
				 			<td>Employee Id</td>
				 			<td><?php echo $eid;  ?></td>
				 		</tr>
				 		<tr>
				 			<td>Name</td>
				 			<td><?php echo $fatch_12['fname']." ".$fatch_12['mname']." ".$fatch_12['lname'];  ?></td>
				 		</tr>
				 		<tr>
				 			<td>Month</td>
				 			<td><?php echo $month;  ?></td>
				 		</tr>
				 		<tr>
				 			<td>Salary</td>
				 			<td><?php echo $fatch_13['total_salary']; ?></td>
				 		</tr>
				 		<tr>
				 			<td>Incentive</td>
				 			<td><?php echo $fatch_13['extra']; ?></td>
				 		</tr>
				 		<tr>
				 			<td>Gross Salary</td>
				 			<td><?php echo $fatch_13['gross']; ?></td>
				 		</tr>
				 		
				</table>
				</div>
				<a href="emp_show_sal.php">Back</a>
				 
				 
				 
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
