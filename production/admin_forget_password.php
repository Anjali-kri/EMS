
<html lang="en">
<head>
  <?php
  error_reporting(0);
 include("head1.php");
 include "connection1.php";
 ?> 
</head>
<body >
  <div class="container body">
    <div >
	
<?php
session_start();
$user=$_SESSION['user_name'];
?>     
	 <div class="top_nav">
        <div class="nav_menu">
          <nav class="" role="navigation">
          
            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				
                  <img src="images/img.jpg" alt=""><span style="font-size:15px;padding-right:15px">welcome,&nbsp; <?php echo $user?></span>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="admin_profile.php">  Profile</a>
                  </li>
                  <li>
                    <a href="admin_change_password.php">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>
              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image">
                      <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a href="inbox.html">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- page content -->
      <div class="right_col" role="main">
	     <div class="row" style="padding-top:200px;padding-left:400px;padding-right:400px">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2 > Password Recovery Pannel </h2>
                 
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
					<div class="row">
					<div class="col-sm-4" >
					</div>
					<div class="col-sm-4" >
					<label>Employee_id</label><br>
					<input type="text" name="emp_id" class="form-control" style="width:300px;border-radius:5px;" autocomplete="off"><br>
					<label>Email_id </label><br>
					<input type="text" name="email_id" class="form-control" style="width:300px;border-radius:5px;" autocomplete="off"><br>
					<button name="submit" class="btn btn-success" >Submit</button>
					<label name="back" class="btn btn-info" onclick="back()">Back</label>
					</div>
					<div class="col-sm-4">
					<script>
					function back()
					{
						window.location="login.php";
					}
					</script>
					</div>
					</div>
				<?php
				if(isset($_POST['submit']))
				{
					$emp_id=$_POST['emp_id'];
					$email1=$_POST['email_id'];
					echo $emp_id;
					echo "***emmail****".$email1;
					$result2=mysqli_query($con,"select * from admin_add where reg_no='$emp_id' and email='$email1' ");
					$fetch2=mysqli_fetch_assoc($result2);
					
					$result3=mysqli_query($con,"select * from emp_details where emp_id='$emp_id'");
					$fetch3=mysqli_fetch_assoc($result3);
					$name=$fetch3['fname']." ".$fetch3['mname']." ".$fetch3['lname'];
					//mailing  *******************************

					$mail_id=$fetch2['email'];
          echo "your email address is :".$mail_id;
					$subject="Password recovery";
					$msg='Dear '.$name.' Your password is '. $fetch2['pass'].'.';
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
					$mail->addAddress($mail_id,'d');
					$mail->addReplyTo("anjalibobbysingh@gmail.com");
					$mail->isHTML(true);
					$mail->Subject=$subject;
					$mail->Body=$msg;
					if($mail->send())
					{
						?><script>
				alert("your password has been send to your registered email id");
				window.location.href="login.php";</script>
				<?php
					}
					else
					{
						?><script>
				alert("something is wrong in sending mail or enter wrong email id or password might be wrong");
				</script>
				<?php
					}	
				}
				?>
				 
                    </form>
				  	
                </div>
             
              </div>
            </div>
          </div>

        </div>
       
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
