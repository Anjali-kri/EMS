
<?php
include "connection1.php";
$post_id=$_REQUEST['id'];
$id=$_REQUEST['id2'];
$result=mysqli_query($con,"delete from leave_details where post_id='$post_id' and id='$id'  ");
header('Location:admin_emp_leave_list.php');




?>