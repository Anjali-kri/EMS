
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
	
	
	?>
	<script>
	function getcheck(val)
	{
		
		$.ajax
		({
			type:"POST",
			url:"check_emp_id.php",
			data:'emp='+val,
			success:function(data)
			{
				$("#s").html(data);
			}
			
		});
		
	}
	function getvalue(val)
	{
		
	$.ajax
		({
			type:"POST",
			url:"getvalue.php",
			data:'emp='+val,
			success:function(data)
			{  
				$('#T_Salary').val(data)
				
				
			}
			
		});	
		
	}
	
	function sum()
	{
	var extra=parseInt(document.getElementById('extra').value);
	var T_Salary =parseInt(document.getElementById('T_Salary').value);
	document.getElementById('gross').value=extra+T_Salary;
	}
	
	</script>
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
                  <h2>Employee Salary Details </h2>
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
				  <div class="col-sm-3">
				  <label> Employee id*</label>
				  </div>
				  <div class="col-sm-3">
				  <input type="text" name="emp_id" class="form-control" onblur="getcheck(this.value ); getvalue(this.value); " required autocomplete="off">
				  </div>
				 <span id="abcd"></span>
				  <div class="col-sm-6">
				   <span id="s"></span>
				 
					</div>
				  
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label> Month*</label>
				  </div>
				    <div class="col-sm-3">
				 <select name="month" class="form-control" id ="month"required>
				  <?php
				  if(!(isset($_POST['emp_id'])))
				  {
					  echo "data Selected";
				 $result= mysqli_query($con,"select max(id )as maximum from finance_year");
				 $fetch=mysqli_fetch_assoc($result);
				  $maxi= $fetch['maximum'];
				  $result1= mysqli_query($con,"select * from finance_year where id='$maxi'");
				  $fetch1=mysqli_fetch_assoc($result1);
				  $yr=$fetch1['start'];
				  $session=$fetch1['session'];
				  $result2= mysqli_query($con,"select * from yearly where year='$yr'");
				  $fetch2=mysqli_fetch_assoc($result2);
				  $tmp=$fetch2['id'];
				  $tmp=$tmp+1;
				 $y1=$tmp-1;
				 while(($fetch2['id'])!=$tmp)
				{
					  if($tmp==14)
					  {
						  $tmp=1;
						  $y1=1;
						
					  }
					 $result3= mysqli_query($con,"select * from yearly where id='$y1'");
				  $fetch3=mysqli_fetch_assoc($result3);
					 
					 ?><option id="month1" value="<?php echo $fetch3['year'] ; ?>"><?php echo $fetch3['year'] ; ?></option>
					 <?Php
					 ++$y1;
				++$tmp;
				  }}
				  else
				  {
					  echo "data not Selected";
					?><option id="month1"> </option>  <?php
				  }
				  ?>
					
					</select>
				 </div>
				  <div class="col-sm-8">
				  </div>
				  
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Leave*</label>
				  </div>
				  <div class="col-sm-3">
				  <input type="number" name="leave" class="form-control" required>
				  </div>
				  <div class="col-sm-8">
				  </div>
				  
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label> Extra*</label>
				  </div>
				  <div class="col-sm-3">
				  <input type="number" name="extra" class="form-control" required value="0" id="extra" onblur="sum() ;">
				  </div>
				  <div class="col-sm-8">
				  </div>
				  
				  
				  </div><br>
				  <div class="row">
				  <div class="col-sm-3">
				  <label> Total Salary*</label>
				  </div>
				  <div class="col-sm-3">
				  <input type="text" name="T_Salary"  class="form-control"   id="T_Salary" required readonly>
				 </div>
				  <?php
				 
				  ?>
				  <div class="col-sm-8">
				  </div>
				  
				  
				  </div><br>
				  <div class="row">
				  <div class="col-sm-3">
				  <label> Gross Salary*</label>
				  </div>
				  <div class="col-sm-3">
				  <input type="number" name="gross" class="form-control" required value="0" id="gross" onblur="sum() ;" readonly>
				  </div>
				  <div class="col-sm-8">
				  </div>
				  
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-12">
				 <br> <button class=" btn btn-info btn-lg btn-block" name="save" style="font-size:25px"><i class="fa fa-save" style="font-size:30px"></i> Save</button>
				  </div>
				  
				  
				  
				  </div><br>
				  
				 <div class="row">
				  
				  
				  
				  </div>
				</form>
                </div>
              </div>
            </div>
          </div>
		  
		  <!--dlskalfksa -->
		  <?php
		  echo "session".$session;
		  if(isset($_POST['save']))
	{
		$emp_id=$_POST['emp_id'];
		$month=$_POST['month'];
		$leave=$_POST['leave'];
		$extra=$_POST['extra'];
		$T_Salary=$_POST['T_Salary'];
		$gross=$_POST['gross'];
		date_default_timezone_set('Asia/Kolkata');
	$date=date('Y-m-d');
	$time=date('h:m');
		$result5= mysqli_query($con,"select max(id )as maximum from finance_year");
				 $fetch5=mysqli_fetch_assoc($result5);
				  $maxii= $fetch5['maximum'];
				  $result22= mysqli_query($con,"select * from finance_year where id='$maxii'");
				  $fetch22=mysqli_fetch_assoc($result22);
				 
				  $session1=$fetch22['session'];
		echo "session1".$session1;
		$result=mysqli_query($con,"select * from emp_salary where emp_id='$emp_id' and month='$month' and session='$session1'");
		$total=mysqli_num_rows($result);
		echo "total=".$total;
		if($total==0)
		{
			$result=mysqli_query($con,"insert into emp_sal_monthly values('$session1','$emp_id','$month','$leave','$extra','$T_Salary','$gross','$date','$time')");
			 
		}
		else
		{
			?> alert("data already exist in database");<?php
		}
		if($result)
		{
		echo "data saved ";	
		}
		else
		{
		echo "data not saved ";	
		}
	}
	
		  ?>
		 <div style="margin-top:1500px;"></div>
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
