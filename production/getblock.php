<html>
	<?php
	include('connection.php');
	$block=$_POST['adno'];
	$result=mysqli_query($con,"select distinct * from room where block='$block'");
	$fetch=mysqli_fetch_assoc($result);
	$floor=$fetch['floor'];
	$i=1;
	
?>
<select>
<?php
while($floor>=$i)
{
	?>
	<option value="<?php echo $i ?> "><?php echo $i ?> </option>
	<?php
	$i++;
}
?>
</select>
</html>


