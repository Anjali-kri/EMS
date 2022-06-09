<?php
 include_once('connection.php');
 error_reporting(0);
 session_start();
$admin=$_SESSION['user_name'];
if(isset($_POST['submit'])&& isset($_FILES['fatherphoto'])&& isset($_FILES['motherphoto'])&& isset($_FILES['studentphoto']))	   
{
	
$target_dir="document/";
$target_file=$target_dir.basename($_FILES["fatherphoto"]["name"]);
$target_file2=$target_dir.basename($_FILES["motherphoto"]["name"]);
$target_file3=$target_dir.basename($_FILES["studentphoto"]["name"]);
$addno=$_POST['text1'];
$image_file_type=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($image_file_type=="jpeg" || $image_file_type=="jpg" || $image_file_type=="png")
{
	if($_FILES["imageupload_file"]["size"] <500000)
	{  
        if((move_uploaded_file($_FILES['fatherphoto']['tmp_name'],$target_file))&&(move_uploaded_file($_FILES['motherphoto']['tmp_name'],$target_file2))&&(move_uploaded_file($_FILES['studentphoto']['tmp_name'],$target_file3)))
		{  
	mysqli_query($con,"insert into  upload_document values('$target_file','$target_file2','$target_file3','1005','$addno')");
	            if(mysqli_affected_rows($con)==1)
	                 {
		                 echo"<script>alert('Photo uploaded');</script>";
						
	                 }
				else
				{
					echo"<script>alert('error in uploading image');</script>";
				}
			
		}
		else
		{
			echo"<script>alert('error in reading image');</script>";
		}

	
		
	}
	else
	{
		echo"<script>alert('image size is too large');</script>";
	}
}
else
{
	echo"<script>alert('not valid format of imgaes');</script>";
}	
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>

</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
	  
      <?php include"topnavigation.php"?>
      <!-- page content -->
      <div class="right_col" role="main">
          <div class="page-title">
            <div class="title_left">
              <h3>Photo Details.</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
               
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

		  
		  
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" >
              <div class="x_title">
                  <h2>photo upload <span class="glyphicon glyphicon-cloud" </span></h2>
				 

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>

				
				<div class="row">
				<form method="post" enctype="multipart/form-data">
				  <div class="col-sm-3">
				  <input type="text" name="text1" placeholder="addno">
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-3">
		   <label>Father Photo</label>
		   <input type="file"name="fatherphoto" >
	
		  </div>
	       <div class="col-sm-3">
		   <label>Mother Photo</label>
		   <input type="file"name="motherphoto" >
		  
		  </div>
			<div class="col-sm-3">
		   <label>Student Photo</label>
		   <input type="file"name="studentphoto" >
	
		  </div>
		
		  
			</div>
			<hr>
			<div class="row">
		  <div class="col-sm-4">
		  </div>
		  <div class="col-sm-4"><br>
		  		    <input type="submit" value="Submit" name="submit"class=" btn btn-primary" style="border-radius:15px" >
					    <input type="submit" value="cancel" name="Cancel"class=" btn btn-success" style="border-radius:15px" >
		   </div><br><br>
		   <div class="col-sm-4"><br>
		    
		  </form>
			</div>
			</div>
			</div>
			
			<div style="margin-top:1500px;"></div>
		
			
				
				
				



<?php include"footer.php"?>

      </div>
      <!-- /page content -->
    </div>
  </div>

<?php include"scriptfile.php"?>

</body>
</html>
