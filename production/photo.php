<div>
	<form method="post" enctype="multipart/form-data">
   
		
<?php
include "connection1.php";
$data=$_REQUEST['id'];



if(isset($_POST['upload_photo']))
{
	$target="upload/";
	$pname=$data."photo".$_FILES['photo']['name'];
	$target=$target.basename($pname);
	$image_file_type=strtolower(pathinfo($target,PATHINFO_EXTENSION));
	
	if($_FILES['photo']['name']=="")
	{
	?>
	<div style="width:200px; height:200px;border: 2px solid;">
     <h3>click here to choose Photo</h3><span class="fa fa-user" style="size:70px; padding-left:50px;font-size:100px" / >
	<input type="file" name="photo" class="btn btn-link btn-lg"id="photo" style="margin-left:-70px;opacity:0" >
   </div>
	<span style="color:red;">please choose file</span>
	<div><br><button name="upload_photo" class="btn btn-info btn-lg "><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Upload Photo</button>
		</div>
	<?php	
	}
	else if($image_file_type=="jpeg"||$image_file_type=="jpg" ||$image_file_type=="png")
	{	if(move_uploaded_file($_FILES['photo']['tmp_name'],$target))
		{
		mysqli_query($con,"update emp_upload_photo set photo='$target' where emp_id='$data' ");
		?>
		<div style="border:3px solid green;width:205px;height:205px; border-radius:10px">
		<img src="<?php echo $target; ?>" style="width:200px;height:200px;border-radius:10px" >
		</div>
		<?php
	}}
	else if(!($image_file_type=="jpeg"||$image_file_type=="jpg" ||$image_file_type=="png"))
	{
		?>
		<div style="width:200px; height:200px;border: 2px solid;">
     <h3>click here to choose Photo</h3><span class="fa fa-user" style="size:70px; padding-left:50px;font-size:100px" / >
	<input type="file" name="photo" class="btn btn-link btn-lg"id="photo" style="margin-left:-70px;opacity:0" >
   </div>
		<span style="color:red;"> please choose only jpg jpeg and png file only </span>
		<div><br><button name="upload_photo" class="btn btn-info btn-lg "><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Upload Photo</button>
		</div>
		<?php
	}
}
else
{
?>
<div style="width:200px; height:200px;border: 2px solid;">
     <h3>click here to choose Photo</h3><span class="fa fa-user" style="size:70px; padding-left:50px;font-size:100px" / >
	<input type="file" name="photo" class="btn btn-link btn-lg"id="photo" style="margin-left:-70px;opacity:0" >
   </div>
   <div><br><button name="upload_photo" class="btn btn-info btn-lg "><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Upload Photo</button>
		</div>
<?php	
}


?>

	</form>	
</div>
