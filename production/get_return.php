<?php
$b_id=$_REQUEST['id'];
include "connection.php";
$date=date('Y-m-d');
$time=date('h:m');
mysqli_query($con,"update issue_book_detail set return_date='$date', time='$time' where book_id='$b_id'");
$result=mysqli_query($con, "select * from book_detail where id='$b_id'");
$fetch=mysqli_fetch_assoc($result);
$b_name=$fetch['book_name'];
$a_name=$fetch['author_name'];
$p_name=$fetch['publisher_name'];
$result_stock=mysqli_query($con, "select * from book_stock where book_name='$b_name' and author_name='$a_name' and publisher_name='$p_name'");
$fetch=mysqli_fetch_assoc($result_stock);
$temp=$fetch['temp']-1;
mysqli_query($con,"update book_stock set temp='$temp' where book_name='$b_name' and author_name='$a_name' and publisher_name='$p_name'");


header('Location:return1.php');

?>