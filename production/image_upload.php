<?php
include_once('connection.php');
error_reporting(0);
$q="select max(id) as maximumid from employeedetail";
$r=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($r);
$maxid=$row['maximumid'];

$r2=mysqli_query($con,"select * from employeedetail where id='$maxid'");
$row2=mysqli_fetch_assoc($r2);
$code=$row2['code'];



if(isset($_POST['save'])&& isset($_FILES['photo'])&& isset($_FILES['signature']))
{
	$target_dir="upload/";
	$target_file=$target_dir.basename($_FILES["photo"]["name"]);
	echo "target photo".$target_file;
	$target_file2=$target_dir.basename($_FILES["signature"]["name"]);
	echo "target Sign".$target_file2;
	$image_file_type=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if($image_file_type=="jpeg" || $image_file_type=="jpg" || $image_file_type=="png")
	{
	if($_FILES["imageupload_file"]["size"] <500000)
	{
	if((move_uploaded_file($_FILES['photo']['tmp_name'],$target_file))&&(move_uploaded_file($_FILES['signature']['tmp_name'],$target_file2)))
		{
		mysqli_query($con,"insert into uploadimage(code,photo,signature) values('$code','$target_file','$target_file2')");	
		   if(mysqli_affected_rows($con)==1)
           {
            echo"<script>alert('photo upload');</script>";
		   }
		}
	}	
}
	?>
	
	
  <?php

}

?>

	
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include"heder.php"?>
</head>
<body class="nav-md">
<div class="container body">
<div class="main_container">
    <?php include"sidebar.php"?> 
	<?php include"footer.php"?> 
	
          <!-- page content -->
          <div class="right_col" role="main">			
		  <div class="">
          <div class="page-title">
          <div class="title_left">
          </div>
		  </div>
		  
			<div class="clearfix">
			</div>
			
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
            <div class="x_title">
            <h2 style="color:#0077b3"><b>UPLOAD IMAGE/SIGNATURE</b></h2>

			 
	   <div class="clearfix">
	   </div >
	   
       <div class="x_content">
	   <form id="demo-form2" data-parsley-validate  method="POST" enctype="multipart/form-data" >
       <div class="row">	
       <div class="col-sm-6"><br>
	   <?php
	   if(isset($_POST['save']))
	   {
		   ?>
		    <div style="width:180px;height:180px;border:2px solid red;">
		   <img src="<?php echo $target_file ?> " style="width:180px; height:180px">
		  </div>
		   <?php
	   }
	   else
	   {
		   ?>
		   
	   <div style="width:180px;height:180px;border:2px solid red;">
       <p style="text-align:center">Click here to upload photo</p><br><p style="font-size:50px;padding-left:70px"><span class="fa fa-user" ></span></p>
       <input type="file" style="opacity:0;width:100px;height:100px;" value="choose" name="photo">
	   </div>
		   <?php
	   }

	   ?>
       </div>
	   
	   <div class="col-sm-6"><br>
	   <?php
	   if(isset($_POST['save']))
	   {
		 ?>
		 <div style="width:180px;height:180px;border:2px solid red;"> 
	   <img src="<?php echo $target_file2 ?> " style="width:180px; height:180px">
	   </div>
	 
	  <?php
	   }
	   else
	   {
		 ?>
		
       <div style="width:180px;height:180px;border:2px solid red;">
       <p style="text-align:center">Click here to upload signature</p><br><p style="font-size:50px;padding-left:70px"><span class="fa fa-user" ></span></p>
       <input type="file" style="opacity:0;width:100px;height:100px;" value="choose" name="signature">
     
       
		<?php
	   }

	   ?>
       
       </div>
       </div>
	   </div>
	   <hr> 
		  
            <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
			<br><br>
            <button type="submit" style="border-radius:10px;background-color: #00b3b3" class="btn btn-success" name="save">Save</button>
			<button type="submit" style="border-radius:10px;background-color:#5c8a8a" class="btn btn-primary" name="cancel">Cancel</button>
            </div>
		    
            </div>
			</form>
			</div>
            </div>
            </div>
            </div>
			</div>
			<hr>
			
			
        <!-- footer content -->
        <footer>
        <div class="copyright-info">
        <p class="pull-right">Magenoto Software Pvt.Ltd</p>
        </div>
        <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
        </div>
        <!-- /page content -->
        </div>
        </div>
  <?php include"scriptfile.php"?>
  <!-- /datepicker -->
  <!-- /footer content -->
  </body>
  </html>
