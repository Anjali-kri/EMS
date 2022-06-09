<?php
include "connection1.php";
$id=$_REQUEST['id'];
$id2=$_REQUEST['id2'];
mysqli_query($con, "delete from admin_post where post_code='$id' ");
header('Location:admin_add_post.php');




?>