<?php
include "connection1.php";
$dept=$_POST['emp'];
$post=$_POST['emp1'];
$result=mysqli_query($con, "select * from emp_salary_detail where dept='$dept' and post_code='$post'");
$total=mysqli_num_rows($result);
if($total>0)
{
	?><br><span> Status : <span style="color:red;font-weight:bold;"> Data Exist in Databse</span></span><?php
}
else
{
	
	
}

?>