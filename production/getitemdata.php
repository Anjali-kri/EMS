
</html>
	<?php
	include('connection.php');
	$sql="select * from additem where itemcategory='".$_POST["adno"]."'";
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
{?>
<option value="<?php echo $rows['Item']?>"><?php echo $rows['Item']?>
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