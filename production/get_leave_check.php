<?php
session_start();
include "connection1.php";
$admin=$_SESSION['user_name'];
$empid=$_SESSION['emp_code'];
$leave=$_POST['emp'];
$result=mysqli_query($con, "select * from employee_leave_details where emp_id='$empid' and leave_type='$leave'");
$fetch=mysqli_fetch_assoc($result);
if($fetch['temp_days']<=$fetch['no_of_days'])
{
	echo "you don't have".$leave;
}
else
{
	
}
echo "hello".$leave;
?>