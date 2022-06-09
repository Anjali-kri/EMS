<?php
	include('connection.php');
	$sql="select * from classsection where class='".$_POST["adno"]."'";
	$result11=mysqli_query($con,$sql);
?>

<?php
if(mysqli_num_rows($result11))
{  //echo"<script>alert('hello');</script>";
	
	//echo"<script>alert('$rows');</script>";
?>

<?php
while($rows=mysqli_fetch_assoc($result11))
{
?>
<option value="<?php echo $rows['section']?>"><?php echo $rows['section']?>
</option>
<?php
}
?>

<?php
}
else
{
	
echo "Sorry! No result found!!";
}
?>
</html>