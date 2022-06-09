<div>
	<form method="post" enctype="multipart/form-data">
   
	
<?php
include "connection1.php";
$data=$_REQUEST['id'];



if(isset($_POST['upload_sign']))
{
	$target="upload/";
	$sname=$data."sign".$_FILES['sign']['name'];
	$target=$target.basename($sname);
	$image_file_type=strtolower(pathinfo($target,PATHINFO_EXTENSION));
	
	if($_FILES['sign']['name']=="")
	{
	?>
	<div style="width:240px;height:130px;border: 2px solid;">
     <h3>click here to choose Signature</h3>
	<input type="file" name="sign" class="btn btn-link btn-lg"id="photo" style="margin-left:-10px;opacity:1" >
   </div>
	<span style="color:red;">please choose file</span>
	 <div><br><button name="upload_sign" class="btn btn-info btn-lg "><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Upload Photo</button>
		</div>
	<?php	
	}
	else if($image_file_type=="jpeg"||$image_file_type=="jpg" ||$image_file_type=="png")
	{	if(move_uploaded_file($_FILES['sign']['tmp_name'],$target))
		{
			echo "filename".$target;
		mysqli_query($con,"update emp_upload_photo set sign='$target' where emp_id='$data' ");
		?>
		<div style="width:200px;height:100px;border-radius:10px">
		<img src="<?php echo $target; ?>" style="width:200px;height:100px;border-radius:10px" >
		</div>
		<?php
	}}
	else if(!($image_file_type=="jpeg"||$image_file_type=="jpg" ||$image_file_type=="png"))
	{
		?>
		<div style="width:240px;height:130px;border: 2px solid;">
     <h3>click here to choose Signature</h3>
	<input type="file" name="sign" class="btn btn-link btn-lg"id="photo" style="margin-left:-10px;opacity:1" >
   </div>
		<span style="color:red;"> please choose only jpg jpeg and png file only </span>
		 <div><br><button name="upload_sign" class="btn btn-info btn-lg "><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Upload Photo</button>
		</div>
		<?php
	}
}
else
{
?>
<div style="width:240px;height:130px;border: 2px solid;">
     <h3>click here to choose Signature</h3>
	<input type="file" name="sign" class="btn btn-link btn-lg"id="photo" style="margin-left:-10px;opacity:1" >
   </div>
   <div><br><button name="upload_sign" class="btn btn-info btn-lg "><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Upload Photo</button>
		</div>
<?php	
}


?>

	</form>	
</div>
