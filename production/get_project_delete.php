<?php
$emp_id=$_REQUEST['id'];
include "connection1.php";
mysqli_query($con,"delete from  project_assign where emp_id='$emp_id'");
header('Location:admin_project_details.php');




?>