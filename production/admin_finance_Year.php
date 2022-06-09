
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
	include "session_check_file.php";
	$result=mysqli_query($con,"select * from yearly");
	$result1=mysqli_query($con,"select * from yearly");
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
                  <h2>Finance Year </h2>
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
				  <form method="POST">
				   <div class="row">
				   <div class="col-sm-4">
				   <label>Session</label>
				   <select name="year" class="form-control">
					<?php
					$d=date('Y');
					$s=$d-10;
					echo "value of s".$s;
					while($d>=$s)
					{
						$r=$s."-".++$s
					?>
					<option value="<?php echo $r;?>"><?php echo $r;?> </option>
					<?php
					}
					?>
					</select>
				   </div>
				   <div class="col-sm-8">
				   </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-4">
				  <label>Start from</label>
				  <select name="start" class="form-control">
				  <?php
				  while($fetch=mysqli_fetch_assoc($result))
				  {
				  ?>
				  <option value="<?php echo $fetch['year'];  ?>"><?php echo $fetch['year'];  ?></option>
				  <?php
				  }
				  ?>
				  </select>
				  </div>
				  <div class="col-sm-4">
				  <br><label style="margin-left:150px">To</label>
				  
				  </div>
				  <div class="col-sm-4">
				  <label>End</label>
				  <select name="end" class="form-control">
					<?php 
					while($fetch=mysqli_fetch_assoc($result1))
					{
					?>
					<option><?php echo $fetch['year'];?></option>
					<?php
					}
					?>
				  </select>
				  </div>
				  
				  </div><br>
				  <div class="row">
				  <div class="col-sm-12">
				  <button name="save" class="btn-info btn-block btn-lg"><i class=" fa fa-search"></i>&nbsp; Save</button>
				  </div>
				  </div>
				  </form>
				</div>
              </div>
            </div>
          </div>
		  <?php
		  if(isset($_POST['save']))
		  {
			 $year =$_POST['year'];
			 $start =$_POST['start'];
			 $end =$_POST['end'];
			 
			$result3= mysqli_query($con,"select * from finance_year where session='$year'");
			$total=mysqli_num_rows($result3);
			
			if(($total)!=0)
			{
				?><script> alert("Session Exist in Database");</script><?php
			}
			else
			{
				echo "year is".$year;
				echo "start is".$start;
				echo "end ".$end;
				
			$result=mysqli_query($con,"insert into finance_year values('','$year','$start','$end')");	
			 if(mysqli_affected_rows($con)>0)
			{
				?><script> alert("Data save successfully");</script><?php 
			}
			 else
			{
				?><script> alert("Data save failed");</script><?php  
			}
			}
			}
		  
		  
		  
		  ?>
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
