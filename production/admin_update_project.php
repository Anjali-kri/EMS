
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
	include "connection1.php";
	$prog_id=$_REQUEST['id'];
	echo $prog_id;
	if(isset($_POST['update']))
	{
	$pro_name=$_POST['pro_name'];
	$company=$_POST['company'];
	$emp_no=$_POST['emp_no'];
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];
	$m_date=$_POST['m_date'];
	$status=$_POST['status'];
	//caculate Date
	$start=strtotime($start_date);
 $end=strtotime($end_date);
 $marginal=strtotime($m_date);
 $starting=$end-$start;
 $marginal_d= $marginal-$start;
 $marginal_d1=$end-$marginal;
 $s_date= round($starting/(60*60*24));
 $m1_date= round($marginal_d/(60*60*24));
 $m2_date= round($marginal_d1/(60*60*24));
 if(( $s_date>0)&&($m1_date>0)&&($m2_date>0))
 {
	$check=mysqli_query($con,"update project_list set proj_name='$pro_name',company='$company',no_emp='$emp_no',start_date='$start_date',last_date='$end_date',marginal_date='$m_date',status='$status' where proj_code='$prog_id'");
 }
 if($check)
 {
	header('Location:admin_project_details.php');	
 }
 else
 {
	?><script>alert("data not saved");</script>
<?php	
 } 
 }
 include("head1.php");	
 
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

?>
      <!-- page content -->
      <div class="right_col" role="main">
	  <form method="POST">
	      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Update Project Details </h2>
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
				  //get id from get_project_details.php
				 $prog_id=$_REQUEST['id'];
				 $result=mysqli_query($con, "select * from project_list where proj_code='$prog_id'");
				 $fetch=mysqli_fetch_assoc($result);
					?>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Project Name</label><br>
				  <input type="text" name="pro_name" class="form-control" id="pro_name" value="<?php echo $fetch['proj_name'];   ?>" >
				  </div>
				  <div class="col-sm-1">
				 <br> <span id="s"></span>
				</div>
				  <div class="col-sm-3">
				 <label>Company</label><br>
				  <input type="text" name="company" class="form-control" id="company" value="<?php echo $fetch['company'];   ?>">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				   <label>Number of Employee</label><br>
				  <input type="text" name="emp_no" class="form-control" id="emp_no" value="<?php echo $fetch['no_emp'];   ?>">
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Starting Date</label><br>
				  <input type="date" name="start_date" class="form-control" id="start_date"value="<?php echo $fetch['start_date'];   ?>"  >
				  </div>
				  <div class="col-sm-1">
				</div>
				<script>
				function check()
				{
				var a=document.getElementById('start_date').value;
				var b=document.getElementById('end_date').value;
				
				$.ajax
				({
					type:"POST",
					url:"get_check_date.php",
					data:{emp:a, emp1:b},
					success:function(data)
					{
						$('#datecheck').html(data)
					}
					
				});
				}
				function check1()
				{
				var a=document.getElementById('start_date').value;
				var b=document.getElementById('end_date').value;
				var c=document.getElementById('m_date').value;
				
				$.ajax
				({
					type:"POST",
					url:"get_check_date1.php",
					data:{emp:a, emp1:b, emp2:c},
					success:function(data)
					{
						$('#datecheck1').html(data)
					}
					
				});
				}
				
				</script>
				<style>
				.date
				{
					
					color:red;
					font-weight:bold;
				}
				</style>
				  <div class="col-sm-3">
				  <label>Ending Date</label><br>
				  <input type="date" name="end_date" class="form-control" id="end_date" onblur="check();" value="<?php echo $fetch['last_date'];   ?>" >
				  <br><span id="datecheck" class="date"></span>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Marginal Date</label><br>
				  <input type="Date" name="m_date" class="form-control" id="m_date" onchange="check();" onblur="check1();" value="<?php echo $fetch['marginal_date'];   ?>" >
				  <br><span id="datecheck1" class="date"></span>
				  </div>
				  <?php
				  $start_date=$_POST['start_date'];
				  $end_date=$_POST['end_date'];
				  $m_date=$_POST['m_date'];
				  
				  ?>
				  </div>
				  <div class="row">
				  <div class="col-sm-3">
				   <label>Status</label>
				  <select class="form-control" name="status">
				  <option ><?php echo $fetch['status'];  ?></option>
				  <?php if($fetch['status']!='Upcomming')
				  {
					?><option value="Upcomming">Upcomming </option><?php  
				  }
				   if($fetch['status']!='Ongoing')
				  {
					?><option value="Ongoing">Ongoing </option><?php  
				  }
				  if($fetch['status']!='Completed')
				  {
					?><option value="Completed">Completed </option><?php  
				  }
				  
				  ?>
				   </select>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				 
				  </div>
				  
				  </div><br>
				  <br>
				   <button name="update"  class="btn-info btn-lg btn-block"><i class="fa fa-save" style="color:white; font-size:25px"></i>&nbsp;&nbsp; Update </button>
					<br>
				  
				  </div>
              </div>
            </div>
          </div>
		  
</form>

       
</div>
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
