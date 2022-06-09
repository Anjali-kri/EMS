<?php 
include "connection.php";
$sid=$_REQUEST['id'];
$result=mysqli_query($con, "select * from  booking where sid='$sid'");
$fetch=mysqli_fetch_assoc($result);
$room_no=$fetch['allot'];
$resultdel=mysqli_query($con, "delete from booking where sid='$sid'");
			
			$r=mysqli_query($con,"select * from adminhostel where roomno='$room_no'");
			$rowdata=mysqli_fetch_assoc($r);
			$tempbed=$rowdata['tempbed'];
			$tempbed=$tempbed+1;
			mysqli_query($con,"update adminhostel set tempbed='$tempbed' where roomno='$room_no'");
			header('Location:seatallocate.php');



?>
