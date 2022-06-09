<?php
include "connection1.php";
error_reporting(0);
session_start();
$admin=$_SESSION['user_name'];
 
  if($admin=="")
  {
	  header('Location:login.php');
  }
  
 $empId=$_POST['reg'];
echo "empid".$empId ;
$result=mysqli_query($con,"select * from emp_upload_photo where emp_id='$empId' ");
$fetch_d=mysqli_fetch_assoc($result);
?>
<html lang="en">
<head>
  <?php
  include("head1.php");
  include "connection1.php";
  ?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
	<form method="POST" enctype="multipart/form-data">
	 <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>SMS</span></a>
			</br>
			<div class="clearfix"></div>
          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Admin</h2>
            </div>
          </div>
		  <div class="page-header">
		  </div>
		  <?php include "sidemenu_admin_login.php";?>
		   </div>
<?php
include("header.php");
?>
      <!-- page content -->
      <div class="right_col" role="main">
	      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Upload photo and signature <small sytle="font-color:red">(upload photo and signature only jpeg jpg and png only)<span>**</span></small> </h2>
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
                    <div class="x_content">
					
                  <br />
				  <div class="row">
				  <div class="col-sm-6">
               <form method="POST" enctype="multipart/form-data">
		  <?php 
		  //upload photo
		    $targe_path="upload/";
			
			$photoname=$empId."photo".$_FILES['photo']['name'];
             $targe_path=$targe_path.basename($photoname);	
             $image_file_type=strtolower(pathinfo($targe_path,PATHINFO_EXTENSION));
		      if(isset($_POST['upload_photo']))
			  {
			  if(($_FILES['photo']['name'])=="")
				  {
				?>
        <div style="width:200px; height:200px;border: 2px solid;">
          <h3>upload Photo</h3><span class="fa fa-user" style="size:70px; padding-left:50px;font-size:100px" / >
		</div>
		<span style="color:red;"><b> please choose file<b></span>
		<?php  
				}
				  else if($image_file_type=="jpeg"||$image_file_type=="jpg" ||$image_file_type=="png")
				  {
					 if(move_uploaded_file($_FILES['photo'][tmp_name],$targe_path))
					 {
                   mysqli_query($con,"update emp_upload_photo set photo='$targe_path' where emp_id='$empId'"); 
				   ?>
			   <div style="border:3px solid green;width:205px;height:205px; border-radius:10px"><img src="<?php echo $targe_path; ?>" style="width:200px;height:200px;border-radius:10px" ></div><br>
			   <?php
					 }}
				   
			   else if(!($image_file_type=="jpeg"||$image_file_type=="jpg" ||$image_file_type=="png"))
			  {
			 ?>
			  <div style="width:200px; height:200px;border: 2px solid;">
          <h3>upload Photo</h3><span class="fa fa-user" style="size:70px; padding-left:50px;font-size:100px" / >
		</div>
		<span style="color:red;"><b> upload photo into jpeg jpg and png formate only<b></span>
			 <?php
			  }
			   
			  }
			
			  else
		     {     
				$result= mysqli_query($con,"select * from emp_upload_photo where emp_id='$empId'");
				$fetch=mysqli_fetch_assoc($result);
				if($fetch['photo']!="")
				{
			
			  ?>
			  <div style="border:3px solid green;width:205px;height:205px; border-radius:10px"><img src="<?php echo $fetch['photo']; ?>" style="width:200px;height:200px;border-radius:10px" ></div><br>
		
			   <?php
			  }
			  else
			  {
				?>
        <div style="width:200px; height:200px;border: 2px solid;">
          <h3>upload Photo</h3><span class="fa fa-user" style="size:70px; padding-left:50px;font-size:100px" / >
		</div>
		
		<?php   
			 }}
		?>
			</div>
			  <div class="col-sm-6">
		 <?php 
		  $targe_path="upload/";
		  $sign_name=$empId."sign".$_FILES['sign']['name'];
          $targe_path=$targe_path.basename($sign_name);
	      $image_file_type=strtolower(pathinfo($targe_path,PATHINFO_EXTENSION));
         if(isset($_POST['upload_signature']))
           {
			if(($_FILES['sign']['name']==""))
			{
			 ?>
        <div style="width:200px; height:200px;border: 2px solid;">
          <h3>upload signature</h3><span class="fa fa-cloud" style="size:70px; padding-left:50px;font-size:100px" / >
		</div>
		<span style="color:red;"><b> please choose file<b></span>
		<?php	
			}
			 else if($image_file_type=="jpeg"||$image_file_type=="jpg" ||$image_file_type=="png")
			{  
				if(move_uploaded_file($_FILES['sign'][tmp_name],$targe_path))
				{
      	      mysqli_query($con,"update emp_upload_photo set sign='$targe_path' where emp_id='$empId'");
			 ?>
			   <div style="border:3px solid green;width:205px;height:205px; border-radius:10px"><img src="<?php echo $targe_path; ?>" style="width:200px;height:200px;border-radius:10px" ></div><br>
			   <?php 
			}}
			else if(!($image_file_type=="jpeg"||$image_file_type=="jpg" ||$image_file_type=="png"))
			{
			 ?>
        <div style="width:200px; height:200px;border: 2px solid;">
          <h3>upload signature</h3><span class="fa fa-cloud" style="size:70px; padding-left:50px;font-size:100px" / >
		</div>
		<span style="color:red;"><b> upload signature into jpeg jpg and png formate only<b></span>
		<?php		
			}
			else if($sign=="")
		  {
		  ?>
        <div style="width:200px; height:200px;border: 2px solid;">
          <h3>upload signature</h3><span class="fa fa-cloud" style="size:70px; padding-left:50px;font-size:100px" / >
		</div>
		<?php
		}}
		  else
		  {
			 
				$result= mysqli_query($con,"select * from emp_upload_photo where emp_id='$empId'");
				$fetch=mysqli_fetch_assoc($result);
				
				if($fetch['sign']=="")
				{
			 ?>
			 <div style="width:200px; height:200px;border: 2px solid;">
          <h3>upload signature</h3><span class="fa fa-cloud" style="size:70px; padding-left:50px;font-size:100px" / >
		</div><br>
			   <?php
		  }
		  else
		  {?>
			<div style="border:3px solid green;width:205px;height:205px; border-radius:10px"><img src="<?php echo $fetch['sign']; ?>" style="width:200px;height:200px;border-radius:10px" ></div><br>
			<?php
		  }
		  }
			?>
			   </div>
			   
			   </div>
			   <div class="row">
			   <div class="col-sm-6">
			    <input type="file" name="photo" class="btn btn-link btn-lg"id="photo" >
			  <div> <span ></span><button name="upload_photo" class="btn btn-info btn-lg "><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Update Photo</button>
			  </div>
			   </div>
			    <div class="col-sm-6">
				<input type="file" name="sign" class="btn btn-link btn-lg">
			  <button name="upload_signature"  class="btn btn-info btn-lg"><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Update Sign</button>
			   </div>
			   </div>
			 </form>
			  </div> 
				 </div>
				 </div>
             </div>
			  <!-- upload image -->
			   <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>upload Documents  <small>(upload document pdf doc and docx only) <span>**</span></small> </h2>
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
                    <div class="x_content">
					<form method="POST" enctype="multipart/form-data">
                  <br />
				  <div class="row">
				  <div class="col-sm-12 col-lg-12">
				  <div class="table-responsive">
				  <table class="table">
				  <th style="width:60px">#</th>
				  <th>Documents</th>
				  <th>choose files</th>
				 <th style="width:60px">status</th>
				  <tr>
				  <td>1</td>
				  <th>PAN CARD</th>
				  <th><input type="file" name="matrix" id="pan"> <span style="color:red" id="lblError"></span></th>
				  
				  <?php 
		      if(isset($_POST['upload']))
			  {
				if($_FILES['matrix']['name']=="")
				{
					 ?>
					<th></th>
					<?php
				}
				else
				{
             $targe_path="upload/";
			$pan=$empId."pan".$_FILES['matrix']['name'];
             $targe_path=$targe_path.basename($pan);	
			 if(move_uploaded_file($_FILES['matrix'][tmp_name],$targe_path))
			 {
             $sql3="update emp_upload_photo set matric='$targe_path' where emp_id='$empId'";
            $check= mysqli_query($con,$sql3);
			 }
			?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
			  }}
		 else if($fetch_d['matric']=="")
		  {
		  ?>
        <th></th>
		<?php
		  }
		  else
		  {
			  ?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
		  }
		 
		?>
				  </tr>
				   <tr>
				  <td>2</td>
				  <th>ADHAR CARD</th>
				  <th><input type="file" name="diploma" id="adhar"> <span style="red" id="lblError1"></span></th>
				  
				    <?php 
		      if(isset($_POST['upload']))
			  {
				  if($_FILES['diploma']['name']=="")
				  {
					?>
        <th></th>
		<?php  
				  }
				  else
				  {
             $targe_path="upload/";
			$diploma=$empId."diploma".$_FILES['diploma']['name'];
             $targe_path=$targe_path.basename($diploma);
			 if(move_uploaded_file($_FILES['diploma'][tmp_name],$targe_path))
			 {
             $sql3="update emp_upload_photo set inter='$targe_path' where emp_id='$empId'";
            $check= mysqli_query($con,$sql3);
			 }
			?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
			  }}
		 else if($fetch_d['inter']=="")
		  {
		  ?>
        <th></th>
		<?php
		  }
		  else
		  {
			  
			  ?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
		  }
		
		?>
				  </tr>
				   <tr>
				  <td>3</td>
				  <th>GRADUCATION CERTIFICATION</th>
				  <th><input type="file" name="grad" id="grad"> <span  style="color:red" id="lblError2"></span></th>
				 
				  <?php 
		      if(isset($_POST['upload']))
			  {
				  if($_FILES['grad']['name']=="")
				  {
					   ?>
				<th></th>
				<?php
				  }
				  else
				  {
					  
				 
             $targe_path="upload/";
			$grad =$empId."grad".$_FILES['grad']['name'];
             $targe_path=$targe_path.basename($grad);	
			if(move_uploaded_file($_FILES['grad'][tmp_name],$targe_path))
			 {
             $sql3="update emp_upload_photo set grad='$targe_path' where emp_id='$empId'";
            $check= mysqli_query($con,$sql3);
			 }
			?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
			  }}
		 else if($fetch_d['grad']=="")
		  {
		  ?>
        <th></th>
		<?php
		  }
		  else
		  {
			  
			  ?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
		  }
		  
		?>
				  </tr>
				   <tr>
				  <td>4</td>
				  <th>EXPERIENCE CERTIFICATION</th>
				  <th><input type="file" name="post_grad2" id="exp"> <span style="color:red" id="lblError3"></span></th>
				
				  <?php 
				  
		      if(isset($_POST['upload']))
			  {
				  if($_FILES['post_grad2']['name']=="")
				  {
				  }
				  else
				  {
             $targe_path="upload/";
			$exp=$empId."expri".$_FILES['post_grad2']['name'];
             $targe_path=$targe_path.basename($exp);
			 if(move_uploaded_file($_FILES['post_grad2'][tmp_name],$targe_path))
			 {
             $sql3="update emp_upload_photo set post_grad='$targe_path' where emp_id='$empId'";
            $check= mysqli_query($con,$sql3);
			 }
			?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
			  }}
		 else if($fetch_d['post_grad']=="")
		  {
		  ?>
        <th></th>
		<?php
		  }
		  else
		  {
			  
			  ?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
		  }
		  
		?>
				  </tr>
				   <tr>
				  </table>
				   <script type="text/javascript">
			function ValidateExtension() {
        var allowedFiles = [".doc", ".docx", ".pdf"];
        var fileUpload = document.getElementById("pan");
		 var fileUpload1 = document.getElementById("adhar");
		 var fileUpload2 = document.getElementById("grad");
		  var fileUpload3 = document.getElementById("exp");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.value.toLowerCase())) {
			alert("please upload PAN CARD havaing extension pdf doc docx ");
         
            return false;
        }
		if (!regex.test(fileUpload1.value.toLowerCase())) {
			alert("please upload ADHAR CARD havaing extension pdf doc docx ");
            
            return false;
        }
		if (!regex.test(fileUpload2.value.toLowerCase())) {
			alert("please upload GRADUCATION havaing extension pdf doc docx ");
            
            return false;
        }
		if (!regex.test(fileUpload3.value.toLowerCase())) {
			alert("please upload Experience Certification havaing extension pdf doc docx ");
            
            return false;
        }
        
        return true;
    }
		</script>
				  </div>
				  <div class="row">
			  <div class="col-sm-9">
			  </div>
			  <div class="col-sm-3">
			  <button class="btn btn-info btn-lg" name="upload" onclick="return ValidateExtension()" id="btnUpload"><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp; Update Documents</button>
			  </div>
			  </div>
			   </div>
			</div>
			</form>
			
			   </div> 
				 </div>
				  </div>
             </div>
			  <!-- document uploaded    -->
			</div>
			</form>
			 </div>
          </div>
		<?php
		include("footer.php");
		?>
    </div>
	
  </div>
<?php
include("script.php");
?>
</body>
</html>
