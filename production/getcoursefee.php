
</html>
	<?php
	include('connection.php');
	$sql="select * from course where course='".$_POST["adno"]."'";
	$result11=mysqli_query($con,$sql);
?>

<?php
if(mysqli_num_rows($result11))
{  //echo"<script>alert('hello');</script>";
	$rows=mysqli_fetch_assoc($result11);
	//echo"<script>alert('$rows');</script>";
?>
<select>
<option value="<?php echo $rows['fee']?>"><?php echo $rows['fee']?>
</option>
</select>
<?php
}
else
{
	
echo "Sorry! No result found!!";
}
?>
</html>