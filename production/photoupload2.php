
<?php
 include_once('connection.php');
 error_reporting(0);
 $q="select max(id) as maximumid from studentdetail";
 $r=mysqli_query($con,$q);
 $row=mysqli_fetch_assoc($r);
 $maxid=$row['maximumid'];

 $r2=mysqli_query($con,"select * from studentdetail where id='$maxid'");
 $row2=mysqli_fetch_assoc($r2);
 $res=$row2['addno'];
 if(isset($_POST['submit']))
 {
	  $res="";
 }

 if(isset($_POST['submit'])&& isset($_FILES['fatherphoto'])&& isset($_FILES['motherphoto'])&& isset($_FILES['studentphoto']))
{
$target_dir="document/";
$target_file=$target_dir.basename($_FILES["fatherphoto"]["name"]);
$target_file2=$target_dir.basename($_FILES["motherphoto"]["name"]);
$target_file3=$target_dir.basename($_FILES["studentphoto"]["name"]);
$addno=$_POST['text1'];
$image_file_type=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($image_file_type=="jpeg" || $image_file_type=="jpg" || $image_file_type=="png")
{
	if($_FILES["imageupload_file"]["size"] <5000000)
	{  
        if((move_uploaded_file($_FILES['fatherphoto']['tmp_name'],$target_file))&&(move_uploaded_file($_FILES['motherphoto']['tmp_name'],$target_file2))&&(move_uploaded_file($_FILES['studentphoto']['tmp_name'],$target_file3)))
		{  
	    mysqli_query($con,"insert into  upload_document values('$target_file','$target_file2','$target_file3','1005','$addno')");
	         //messaging integration  start
						$result_s=mysqli_query($con, "select * from studentdetail where addno='$addno'");
						$fetch_s=mysqli_fetch_assoc($result_s);
						$name=$fetch_s['fname']." ".$fetch_s['lname'];
						$phone=$fetch_s['mobileno'];
						$add_no=$fetch_s['addno'];
						$email=$fetch_s['email'];
						echo "name".$name;
						echo "phone".$phone;
						echo "add_no".$add_no;
					$authKey = "274966AIgNz5swdqhQ5ccbe1b4";
							$senderId = "TESTDU";
							
								$mobileNumber=$phone;
								$msg="Dear ".$name.", Thank you for taking admission. your Admission number is : ".$add_no;
								$message = urlencode($msg);
								$route = "4";
								$postData = array(
								'authkey' => $authKey,
								'mobiles' => $mobileNumber,
								'message' => $message,
								'sender' => $senderId,
								'route' => $route
								);
								$url="http://api.msg91.com/api/sendhttp.php";
								$ch = curl_init($url);
							curl_setopt_array($ch, array(
								CURLOPT_URL => $url,
								CURLOPT_RETURNTRANSFER => true,
								CURLOPT_POST => true,
								CURLOPT_POSTFIELDS => $postData
								//,CURLOPT_FOLLOWLOCATION => true
							   ));

							curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
							curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
							$response = curl_exec($ch);

							//Print error if any
							if(curl_errno($ch))
							{
								echo 'error:' . curl_error($ch);
							}

							curl_close($ch);

							echo '<script> alert("your msg has been sent to '.$mobileNumber.' by this '.$response.' ");</script>';	

				//message integration end
				
			   if(mysqli_affected_rows($con)==1)
	                 { 
                          $q12="select * from studentdetail where hostel='yes' and addno='$addno'";
                          $r12=mysqli_query($con,$q12);
                          $ab=mysqli_num_rows($r12);
				 if($ab==1)
						 {
		                 //echo"<script>alert('Photo uploaded');</script>";
						 header('Location:seatallocate.php');
						 }
						 else
						 {
							 //mail integration start
				
					echo "****email is :".$email;
					echo "*****name :".$name;
					echo "****addno".$add_no;
				    include "PHPMailer/PHPMailerAutoload.php";
					$mail_id=$email;
					$subject="Password recovery";
					$msg='Dear '.$name.' Your password is '. $add_no.'.';
					$mail=new PHPMailer();
					$mail->isSMTP();
					$mail->Host='smtp.gmail.com';
					$mail->Port='465';
					$mail->SMTPAuth='true';
					$mail->SMTPSecure='ssl';
					$mail->Username='monikabhagat693@gmail.com';
					$mail->Password='7654803129';
					$mail->setFrom('monikabhagat693@gmail','dheeraj');
					$mail->addAddress($mail_id,'d');
					$mail->addReplyTo("monikabhagat693@gmail");
					$mail->isHTML(true);
					$mail->Subject=$subject;
					$mail->Body=$msg;
					if($mail->send())
					{
						?><script>
				alert("your password has been send to your registered email id");
				window.location.href="studentadmission.php";</script>
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
				
				
				//mail integration end
							 header('Location:studentadmission.php');
						 }
	                 }
				else
				{
					echo"<script>alert('error in uploading image');</script>";
				}
			
		}
		else
		{
			echo"<script>alert('error in reading image');</script>";
		}

	
		
	}
	else
	{
		echo"<script>alert('image size is too large');</script>";
	}
}
else
{
	echo"<script>alert('not valid format of imgaes');</script>";
}	

?>


<?php
$q1="select * from studentdetail where hostel='yes' and addno='$res'";
$r1=mysqli_query($con,$q1);
$a=mysqli_num_rows($r1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>

</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
	  
      <?php include"topnavigation.php"?>
      <!-- page content -->
      <div class="right_col" role="main">
          <div class="page-title">
            <div class="title_left">
              <h3>PHOTO DETAILS...</h3>
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
                  <h2>photo upload</h2>
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

				<div class="row">
				<form method="post" enctype="multipart/form-data">
				  <div class="col-sm-3">
				  <input type="text" name="text1" value="<?php echo $res; ?>" readonly>
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-3">
		   <label>Father Photo<span>*</span></label>
		   <input type="file" name="fatherphoto" ><p> <span class="fa fa cloud"></span></p>
		  </div>
	       <div class="col-sm-3">
		   <label>Mother Photo<span>*</span></label>
		   <input type="file" name="motherphoto" >
		  </div>
			<div class="col-sm-3">
		   <label>Student Photo<span>*</span></label>
		   <input type="file"  name="studentphoto" >
		  </div>
		  </div>
		  <hr style="width:100%;border:3px solid; border-radius:25px">
		  <div class="row">
		  <div class="col-sm-4">
		  </div>
		  <div class="col-sm-4"><br>
		  <input type="submit" value="SUBMIT" name="submit" style="border-radius:15px"class=" btn btn-info">
		  		  
		<?php
		
			if($a==1)
			{
		
		?>

		   <a href="seatallocate.php" class=" btn btn-success" value="submit"style="border-radius:15px" name="booking">booking in hostel</a>
<?php
			}
			?>
		  </form>
		   </div><br><br>
		   <div class="col-sm-4"><br>
		    
			</div>
			</div>
			</div>
			</div>
			</div>
				
			
<?php include"footer.php"?>

      </div>
      <!-- /page content -->
    </div>
  </div>

<?php include"scriptfile.php"?>

</body>
</html>
