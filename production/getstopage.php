
<select>
<?php
include "connection.php";
$route=$_POST['route'];
$result=mysqli_query($con, "select * from busroutesrecords where routes='$route'");
while($fetch=mysqli_fetch_assoc($result))
{
	?>
	<option value="<?php $fetch['stopname']; ?>"><?php echo $fetch['stopname']; ?></option>
	<?php
}

?>
</select>