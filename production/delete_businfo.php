<?php
$con=mysqli_connect('localhost','root','','sms');
$id=$_REQUEST['id'];
$sql="delete from businformation where busplateno='$id'";
mysqli_query($con,$sql);
header('Location:bus_information.php');
?>