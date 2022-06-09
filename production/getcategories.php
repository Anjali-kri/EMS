</html>
	<?php
	include('connection.php');
	$sql="select * from categories where class='".$_POST["adno"]."'";
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
<option value="<?php echo $rows['categories']?>"><?php echo $rows['categories']?>
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