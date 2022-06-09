<?php
error_reporting(0);
include "connection1.php";
$id_aprove_admin=$_REQUEST['aprove_a'];
$id_reject_admin=$_REQUEST['reject_a'];
$id_aprove_sub=$_REQUEST['aprove_sub'];
$id_reject_sub=$_REQUEST['reject_sub'];
$id_aprove_super=$_REQUEST['aprove_super'];
$id_reject_super=$_REQUEST['reject_super'];
$id_history=$_REQUEST['id_history'];
if($id_aprove_admin!="")
{
mysqli_query($con,"update emp_leave set L1_status='2' where leave_code='$id_aprove_admin'");	
header('Location:admin_leave.php');
}
else if($id_reject_admin!="")
{
mysqli_query($con,"update emp_leave set L1_status='4' where leave_code='$id_reject_admin'");	
header('Location:admin_leave.php');
}
else if($id_aprove_sub!="")
{
mysqli_query($con,"update emp_leave set L1_status='1' where leave_code='$id_aprove_sub'");	
header('Location:subadmin_leave.php');
}
else if($id_reject_sub!="")
{
mysqli_query($con,"update emp_leave set L1_status='4' where leave_code='$id_reject_sub'");	
header('Location:subadmin_leave.php');
}
else if($id_aprove_super!="")
{	
mysqli_query($con,"update emp_leave set L1_status='3' where leave_code='$id_aprove_super'");
$result=mysqli_query($con,"select * from emp_leave where leave_code='$id_aprove_super'");	
$fetch=mysqli_fetch_assoc($result);
$emp_id=$fetch['emp_id'];
$leave_type=$fetch['leave_type'];
$status=$fetch['L1_status'];
$days=$fetch['days'];
$result1=mysqli_query($con,"select * from employee_leave_details where emp_id='$emp_id' and leave_type='$leave_type'");
$fetch1=mysqli_fetch_assoc($result1);	
$temp_days=$fetch1['temp_days'];
$temp=$temp_days+$days;
mysqli_query($con, "update employee_leave_details set temp_days='$temp' where emp_id='$emp_id' and leave_type='$leave_type' ");













 $f_email=mysqli_fetch_assoc(mysqli_query($con,"select * from emp_details where emp_id='$emp_id'"));
					    $email_id=$f_email['email'];
					    $f_name=$f_email['fname'];

					   
					
					$subject="Regarding  Leave approval ";
					$msg='Dear '.$f_name.' you apply leave is approved successfully';
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


















header('Location:superadmin_leave.php');
}
else if($id_reject_super!="")
{
mysqli_query($con,"update emp_leave set L1_status='4' where leave_code='$id_reject_super'");	
header('Location:superadmin_leave.php');
}
else if($id_history!="")
{
mysqli_query($con,"delete from emp_leave where leave_code='$id_history'");	
header('Location:admin_leave_history.php');	
}



?>