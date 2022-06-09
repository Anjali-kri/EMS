<?php
$details=$_POST['emp'];
include("connection.php");
$result=mysqli_query($con,"select count(*) as total from new_registration where type='$details'");
$fetch=mysqli_fetch_assoc($result);
$code=$details."/".date('Y')."/".++$fetch['total'];
echo $code;


?>