<?php
$con=mysqli_connect('localhost','root','','sms');
$id=$_REQUEST['id'];
$sql="delete from driverinformation where driverid='$id'";
mysqli_query($con,$sql);
header('Location:driver_information.php');
?>