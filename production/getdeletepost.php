<?php
include "connection1.php";
$post=$_REQUEST['id'];
mysqli_query($con, "delete from group_permission where post_code='$post' ");
header('Location:admin_group_priv.php');

?>