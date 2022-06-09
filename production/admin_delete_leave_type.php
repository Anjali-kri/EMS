<?php
include "connection1.php";
$id=$_REQUEST['id'];
mysqli_query($con,"delete from admin_leave_type where id='$id'");
header('Location:admin_show_leave.php');

?>

