<?php
$con=mysqli_connect("localhost","root","","test1");
if($con)
{
	echo "connected";
}
else
{
	echo " connection failed ";
}



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.a
		{
			margin-top: :50px;

			font-size:20px;
		}
	</style>

</head>
<body>
<div class="a">
	<label>block</label>
	<input type="text" name="block"><br>
	<label>gender</label>
	<select name="gender">
		<option>male</option>
		<option>female</option>
	</select><br>
	<label>floor</label>
	<input type="text" name="floor">
	<input type="submit" name="save" value="save">
</div>


</body>
</html>