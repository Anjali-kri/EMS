	<?php
	include('connection.php');
	$sql="select * from adminroom where block='".$_POST["adno"]."'";
	$a=$_POST["adno"];
	echo $a;
	$result11=mysqli_query($con,$sql);
?>

<?php
if(mysqli_num_rows($result11))
{  //echo"<script>alert('hello');</script>";
	
	//echo"<script>alert('$rows');</script>";
?>
<select>
<?php
while($rows=mysqli_fetch_assoc($result11))
{
?>
<option value="<?php echo $rows['roomno']?>"><?php echo $rows['roomno']?>
</option>
<?php
}
?>
</select>
<?php
}
else
{
	
echo "Sorry! No result found!!";
}
?>
</html>