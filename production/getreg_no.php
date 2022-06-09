<?php
$lib_no=$_POST['reg'];
include "connection.php";
$result=mysqli_query($con,"select * from new_registration where L_reg='$lib_no'");
$fetch=mysqli_fetch_assoc($result);
echo $fetch['reg'];
?>