<?Php
include "connection1.php";
session_start();
$emp_id=$_SESSION['emp_code'];
$leave_type=$_POST['emp'];
$days=$_POST['emp1'];
$result=mysqli_query($con, "select * from employee_leave_details where emp_id='$emp_id' and leave_type='$leave_type'");
$fetch=mysqli_fetch_assoc($result);
$remain=$fetch['no_of_days']-$fetch['temp_days'];
$temp=$fetch['temp_days']+$days;

if($fetch['no_of_days']>$temp)
{
	
}
else
{
	echo $leave_type." left for ".$remain ." days only";
}


?>