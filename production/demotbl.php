<html>
	<?php
	include('connection.php');
	$sql="select distinct floor from room where block='".$_POST["adno"]."'";
	$r=mysqli_query($con,$sql);
	
	
?>



<?php
if(mysqli_num_rows($r)>0)
{  //echo"<script>alert('hello');</script>";
	
	//echo"<script>alert('$rows');</script>";
?>
<select>
<?php
while($rows=mysqli_fetch_assoc($r))
{
?>
<option value="<?php echo $rows['floor']?>"><?php echo $rows['floor']?>
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