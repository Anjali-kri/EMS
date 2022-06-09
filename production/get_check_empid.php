<?php
include "connection1.php";
$s=$_POST['emp'];

$result=mysqli_query($con,"select * from emp_details where emp_id='$s'");
$fetch=mysqli_fetch_assoc($result);
 $fname=$fetch['fname'];
 echo $fname;
//$mname=$fetch['mname'];
//$lname=$fetch['lname'];
 //$name=$fname." ".$mname." ".$lname;
 //echo $name;
 



?>