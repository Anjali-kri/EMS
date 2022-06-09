
<?php 
session_start();
include_once"connection.php";
if(isset($_SESSION['loggedin']))
{

if(isset($_POST['save']))
{

	$regno=mysqli_real_escape_string($con,$_POST['regno']);
	$batch=mysqli_real_escape_string($con,$_POST['batchid']);
    $cateogry=mysqli_real_escape_string($con,$_POST['cateogry']);
	$course=mysqli_real_escape_string($con,$_POST['course']);
	$fee=mysqli_real_escape_string($con,$_POST['fee']);
	$paid=mysqli_real_escape_string($con,$_POST['paid']);
	$due=mysqli_real_escape_string($con,$_POST['due']);
	date_default_timezone_get('Asia/Kolkata');
	$date=date('y-m-d');	
	
	$query="insert into enrollment
	(regno,course,batchid,cateogry,date)
	values('$regno','$course','$batch','$cateogry','$date')";
	$r=mysqli_query($con,$query);
	$r2=mysqli_query($con,"select max(roll)as roll from enrollment");
	$row=mysqli_fetch_assoc($r2);
	$roll=$row['roll'];
	
	$query2="insert into fee_account
	(regno,roll,course,total,paid,due,date)
	values('$regno','$roll','$course','$fee','$paid','$due','$date')";
	$r=mysqli_query($con,$query2);
	
		$query3="insert into transaction
	(regno,roll,total,paid,due,date)
	values('$regno','$roll','$fee','$paid','$due','$date')";
	$r=mysqli_query($con,$query3);
	
	if(mysqli_affected_rows($con)==1)
	   {  
			 header('Location:enrollment.php');
	   }
	else
	   {
			 echo"<script> alert('Sorry some Error Ocurred');</script>";
	   }
		   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <?php include"adminheader.php"?>
    <script>
		
		function getfee(val)
		{
			
			$.ajax
		  ({
		   type: "POST",
		   url: "getcoursefee.php",
		   data: 'adno='+val,
		   success: function(data)
		   {
			   $("#fee").html(data);
		   }
		  
		   });	
		}
		
		
		//$(function(){$("#fee,#paid").on("keydown keyup",sum(){
		//$("#balance").val(Number($("#fee").val())-Number($("#paid").val()));}});
		
		function calculatedue()
		{
			var total=document.getElementById('fee').value;
			var paid=document.getElementById('paid').value;
			var due= total-paid;
			document.getElementById('balance').value=due;
		}
		
		
		
		
		
		
	</script>

</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
        <?php include"adminsidebar.php"?>
        <?php include"admintopbar.php"?>
              <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Student
                </h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Student Enrollment<small>Entry form</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">                    
                    <span class="section">Enrollment Info</span>
					<div class="row">
					<div class="col-sm-3">
					<label>Registration Number</label>
					<input type="text" name="regno" required>
					</div>
					</div><br>
					<div class="row">
					<div class="col-sm-3">
					<label>batch Id</label><br>
					<select name="batchid" style="width:170px;height:25px;" required>
					<option vlaue="">--Select batchid--</option>
					<?php
					$r=mysqli_query($con,"select * from course_batch");
					while($row=mysqli_fetch_assoc($r))
					{
						?>
						<option value="<?php echo $row['bid'];?>"><?php echo $row['bid'];?></option>
						<?php
					}
					?>
					</select>
					</div>
				
					<div class="col-sm-3">
					<label>cateogry</label><br>
					<select name="cateogry" style="width:170px;height:25px;" required>
					<option value="none">None</option>
					<option value="project">Project</option>
					<option value="internship">Internship</option>
					</select>
					</div>
					<div class="col-sm-3">
					<label>course</label><br>
					<select name="course" style="width:170px;height:25px;" onchange="getfee(this.value)" required>
					<option value="">--select course--</option>
						<?php
					$r=mysqli_query($con,"select * from course");
					while($row=mysqli_fetch_assoc($r))
					{
						?>
						<option value="<?php echo $row['course'];?>"><?php echo $row['course'];?></option>
						<?php
					}
					?>
					
					</select>
					</div>
					</div>
					<br>
				    <div class="row">
					<div class="col-sm-1">
					<label>Total</label><br>
					<select id="fee" name="fee" readonly>
					<option ></option>
					</select>
					</div>
					<div class="col-sm-3">
					<label>Paid</label><br>
					<input type="text" name="paid" id="paid" onkeyup="calculatedue();">
					</div>
					<div class="cl-sm-3">
					<label>Due</label><br>
					<input type="text" name="due" id="balance" readonly>
					</div>
					</div>
					
					<br>
					
				
					<div class="row">
					
					<div class="span6">
					<input class="btn btn-primary btn-md " type="submit" name="save" value="Save">
					
					
					<a href="enrollment.php" class="btn btn-info"> Refresh</a>
					</div>
					</div>
					</form>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">devloped By<a href="#">Magenoto Software Pvt/Ltd</a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
      </div>
   </div>
 
  <?php include"adminfooterscript.php"?>
</body>
</html>
<?php
}
else{
	header('Location:login.php');
}
?>