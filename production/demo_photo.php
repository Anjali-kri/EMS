

<?php
$con=mysqli_connect('localhost','root','','classobject');
if(isset($_POST['save'])&& isset($_FILES['fatherphoto']))
{
$target_dir="document/";
$target_file=$target_dir.basename($_FILES["fatherphoto"]["name"]);

$image_file_type=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($image_file_type=="jpeg" || $image_file_type=="jpg" || $image_file_type=="png")
{
	if($_FILES["imageupload_file"]["size"] <5000000)
	{  
        if((move_uploaded_file($_FILES['fatherphoto']['tmp_name'],$target_file))['tmp_name'])))
		{  
	    mysqli_query($con,"insert into  upload_document values('$target_file',)");





?>



<html>
<form method="post" enctype="multipart/form-data">
<label>photo</label>
<input type="file" name="photoupload">
<input type="submit" name="save">
</html>