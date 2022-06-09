<?php
include "connection1.php";
$emp_id=$_POST['emp'];

$result=mysqli_query($con, "select * from emp_details where emp_id='$emp_id'");
$fetch=mysqli_fetch_assoc($result);
$dept=$fetch['dept'];
$post=$fetch['desi'];
$result1=mysqli_query($con, "select * from admin_post where department='$dept' and post='$post'");
$fetch1=mysqli_fetch_assoc($result1);
echo $fetch1['post_code']; 




?>