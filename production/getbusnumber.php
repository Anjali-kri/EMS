
<select>
<?php 
include "connection.php";

$route=$_POST['route'];
$sql="select busplateno from  businformation where busname=(select busname from busroutesrecords where routes='$route')";
$result=mysqli_query($con,$sql);
$fetch=mysqli_fetch_assoc($result);



while($fetch=mysqli_fetch_assoc($result))
{
?>
<option value="<?php $fetch['busplateno'];  ?>"><?php  echo $fetch['busplateno'];   ?></option>
<?php
}
?>

</select>