<?php
$con=mysqli_connect('localhost','root','','sms');
$id=$_REQUEST['id'];
$sql="delete from busmaintenance where busname='$id'";
mysqli_query($con,$sql);
header('Location:bus_maintenance.php');
?>