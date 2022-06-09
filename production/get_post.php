<?php
include "connection1.php";
$dept=$_POST['emp'];
$result=mysqli_query($con, "select * from admin_post where department='$dept'");
?>
<html>
<select>
<?php
while($fetch=mysqli_fetch_assoc($result))
{
	?>
	<option value="<?php echo $fetch['post']; ?>"><?php echo $fetch['post']; ?></option>
	<?php
}


?>

</select>
</html>