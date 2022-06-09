<?php
include "connection.php";
$book_id=$_REQUEST['id'];
mysqli_query($con,"delete from  book_detail where id='$book_id' ");
header('Location:book_update.php');


?>