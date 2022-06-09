<?php
$book_no=$_POST['book_name'];
include "connection.php";
$result1=mysqli_query($con,"select * from book_detail where id='$book_no'");
$fetch1=mysqli_fetch_assoc($result1);
echo $fetch1['book_name'];

?>