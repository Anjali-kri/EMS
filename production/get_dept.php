<?php
include "connection1.php";
$id=$_POST['emp'];
echo $id;
$result=mysqli_query($con, "select  * from admin_post where department='$id'" );
while($fetch=mysqli_fetch_assoc($result))
{
	?>
	<option value="<?php echo $fetch['post']; ?>"><?php echo $fetch['post']; ?></option>
	<?php
}


?>
<div>


</div>