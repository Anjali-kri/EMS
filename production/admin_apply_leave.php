
<html lang="en">
<head>
  <?php
  error_reporting(0);
  session_start();
  $admin=$_SESSION['user_name'];
  $emp_id=$_SESSION['emp_code'];
  
  
  if($admin=="")
  {
	  header('Location:login.php');
  }
  include("head1.php");
  include "connection1.php";
 

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
	     <div class="row" >
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2 > Apply Leave Pannel </h2>
                 
                  <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                  <br />
				  <style>
				  .T2
				  {
					 border:none;
					 border-bottom:2px solid;
					  width:350px;
					  border-color:#1aa3ff;
					  color:#1aa3ff;
					  font-size:15px;
					  font-weight:bold;
					  
					 
				  }
				  input
				  {
					 border:none;
					 border-bottom:2px solid;
					 
					  border-color:#1aa3ff;
					  color:#1aa3ff;
					  font-size:15px;
					  font-weight:bold; 
				  }
				  select
				  {
					border:none;
					 border-bottom:2px solid;
					  width:350px;
					  border-color:#1aa3ff;
					  color:#1aa3ff;
					  font-size:15px;
					  font-weight:bold;  
				  }
				  .L1 .L2
				  {
					  color:#1aa3ff;
					  
				  }
				  select:hover
				  {
					  padding:10px;
				  }
				  
				  .T2:hover
				  {
					padding-top:10px;  
				  }
				  .output
				  {
					font-size:25px; 
					color:#1aa3ff; 
					font-weight:bold; 
					border:none;
					border-left:5px solid #1aa3ff; 
					border-bottom:2px solid #1aa3ff; 					
				  }
				  .output1
				  {
					font-size:25px; 
					color:red; 
					font-weight:bold; 
					border:none;
					border-left:5px solid red; 
					border-bottom:2px solid red; 					
				  }
				  #test
				  {
					font-weight:bold;
					color:red;
					
				  }
				  </style>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				  <div class="row">
				  <div class="row">
				  <div class="col-sm-2">
				  </div>
				  <div class="col-sm-6">
				  <?php
				   if(isset($_POST['apply1']))
				  {
				  date_default_timezone_set('Asia/Kolkata');
				  $cration_date=date('d-m-Y  h:m');
				  $leave_type=$_POST['leave_type'];
				  $from=$_POST['from'];
				  $to=$_POST['to'];
				  $Alternate=$_POST['Alternate'];
				  $description=$_POST['description']; 
				  $days=$_POST['days']; 
				  //create leave code with empid and id
				  $result_max1=mysqli_query($con,"select max(id) as maxi from emp_leave ");
				  $fetch_max1=mysqli_fetch_assoc($result_max1);
                  $leave_code=$emp_id.++$fetch_max1['maxi'];
				  $result_count=mysqli_query($con,"select count(*) as total from emp_leave where emp_id='$emp_id' and L1_status='0' or L1_status='1' or L1_status='2' ");
				  $fetch_total=mysqli_fetch_assoc($result_count);
				  ?><br><?php
				  if($fetch_total['total']>0)
				  {
					?><span  class="output1">&nbsp; your previous apply leve is under process </span><?php 
				  }
				  else
				  {
					  $result_test=mysqli_query($con, "select * from employee_leave_details where emp_id='$emp_id' and leave_type='$leave_type'");
					  $fetch_test=mysqli_fetch_assoc($result_test);
					  $day_diff=$fetch_test['no_of_days']-$fetch_test['temp_days'];
					  if($day_diff>$days)
					  {
					mysqli_query($con, "insert into emp_leave values('','$leave_code','$emp_id','$admin','$leave_type','$from','$to','$days','$Alternate','$description','$cration_date','0')");
					  }
					    if(mysqli_affected_rows($con)>0)
				       {
					    ?> <span  class="output"> Leave Apply Successfully</span>  <?php




					    //mailing address
					    
					    $f_email=mysqli_fetch_assoc(mysqli_query($con,"select * from emp_details where emp_id='$emp_id'"));
					    $email_id=$f_email['email'];
					    $f_name=$f_email['fname'];

					   
					
					$subject="Regarding Apply Leave ";
					$msg='Dear '.$f_name.' you apply leave is underprocessing';
					include "PHPMailer/PHPMailerAutoload.php";
					$mail=new PHPMailer();
					$mail->isSMTP();
					$mail->Host='smtp.gmail.com';
					$mail->Port='465';
					$mail->SMTPAuth='true';
					$mail->SMTPSecure='ssl';
					$mail->Username='anjalibobbysingh@gmail.com';
					$mail->Password='bobbysingh@24';
					$mail->setFrom('anjalibobbysingh@gmail.com','anjali');
					$mail->addAddress($email_id,'d');
					$mail->addReplyTo("anjalibobbysingh@gmail.com");
					$mail->isHTML(true);
					$mail->Subject=$subject;
					$mail->Body=$msg;
					if($mail->send())
					{
						?><script>
				alert("your password has been send to your registered email id");
				</script>
				<?php
					}
					


				       }
				       else
				       {
					     ?> <span  class="output"> Leave Apply failed</span>  <?php  
				       } 
				  }
				  }
				  
				  ?>
				  <script>
				  function check(val)
				  {
					 
					  $.ajax
					  ({
						 type:"POST",
						 url:"get_leave_check.php",
						 data:'emp='+val,
						 success:function(data)
						 {
							  alert(data);
							 ('#abc').html(data)
						 }
						 
					  });
				  }
				  
				  function get_calculate()
				 {
					 var from=document.getElementById('from').value;
					 var to=document.getElementById('to').value;
					 $.ajax
					 ({
						 type:"POST",
						 url:"get_calculate_date.php",
						 data:{emp:from,emp1:to},
						 success:function(data)
						 {
							 if(data>0)
							 {
								$('#days').val(data) 
							 }
							 else
							 {
								 alert("please input correct date");
								 var data="";
								 $('#days').val(data)
							 }
							
						 }
					 });
				 }
				  </script>
	
				  </div>
				  <div class="col-sm-2">
				  <span id="abc"></span>
				  </div>
				  </div><br><br>
				  <div class="row">
				  <div class="col-sm-2">
				  </div>
				  <div class="col-sm-6">
				  <label class="L1">Leave Type</label><br>
				  <select name="leave_type" id="leave_type"  onchange="check(this.value)">
				  <option>Choose Leave Type</option>
				  <?php
				  $result_type=mysqli_query($con,"select * from admin_leave_type ");
				  while($fetch_type=mysqli_fetch_assoc($result_type))
				  {
					?> <option value="<?php echo $fetch_type['leave_type'];?>"><?php echo $fetch_type['leave_type'];?></option><?php  
				  }
				  ?>
				  </select><br><br>
				  <div class="row">
				  <div class="col-sm-5">
				  <label class="L1">From</label><br>
				  <input type="date" name="from"  id="from" required >
				  </div>
				  <div class="col-col-2">
				  <script>
				  function getTest(val)
				  {
					  
					  var a=document.getElementById('leave_type').value;
					  var b=document.getElementById('days').value;
					 
					  
					  $.ajax
					  ({
						  
						  type:"POST",
						  url:"gettest.php",
						  data:{emp:a,  emp1:b},
						  success:function(data)
						  {
							 
							  $('#test').html(data)
						  }
					  });
					  
				  }
				  </script>
				  
				  </div>
				  <div class="col-sm-5">
				  <label class="L1">To</label><br>
				  <input type="date" name="to" id="to" required onblur="get_calculate()">
				  </div>
				  </div><br>
				   <label class="L2">Days</label><br>
				  <input type="text" class="T2" id="days" name="days" autocomplete="off" readonly required onblur='getTest()'">
				  <br>
				  <span id="test"></span>
				  <br><br>
				  <label class="L2">Alternate Person</label><br>
				  <input type="text" class="T2" name="Alternate" autocomplete="off"><br><br>
				  <label class="L2">Description</label><br>
				  <input type="text" class="T2" name="description" autocomplete="off"><br><br>
				  <button class="btn btn-info" name="apply1">Apply</button>
					
				  </div>
				  <div class="col-sm-2">
				  </div>
				  </div>
				  
				  
                    </form>
				  	
                </div>
				<div style="margin-top:1500px;"></div>
             
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