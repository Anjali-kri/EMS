<?php
include "connection1.php";
error_reporting(0);
session_start();
$admin=$_SESSION['user_name'];
 
  if($admin=="")
  {
	  header('Location:login.php');
  }

	if(isset($_POST['submit']))
{
	
	$emp_Id=$_POST['emp_Id'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$status=$_POST['status'];
	$nationality=$_POST['nationality'];
	$religion=$_POST['religion'];
	$jdate=$_POST['jdate'];
	$desi=$_POST['desi'];
	$dept=$_POST['dept'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$pan=$_POST['pan'];
	$adhar=$_POST['adhar'];
	$lane=$_POST['lane'];
	$street=$_POST['street'];
	$locality=$_POST['locality'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$lane1=$_POST['lane1'];
	$street1=$_POST['street1'];
	$locality1=$_POST['locality1'];
	$city1=$_POST['city1'];
	$state1=$_POST['state1'];
	$pin1=$_POST['pin1'];
	$temp_add=$lane." ".$street." ".$locality." ".$city." ".$state." ".$pin;
	$per_add=$lane1." ".$street1." ".$locality1." ".$city1." ".$state1." ".$pin1;
	$sql="insert into emp_details values('','$emp_Id','$fname','$mname','$lname','$dob','$gender','$status','$nationality','$religion','$jdate','$desi','$dept','$phone','$email','$pan','$adhar','$temp_add','$per_add')";
	mysqli_query($con,$sql);
	//employee permission
	
		$result_post=mysqli_query($con,"select * from admin_post where post='$desi' and department='$dept'");
		$fetch_post=mysqli_fetch_assoc($result_post);
		$post_code=$fetch_post['post_code'];
		mysqli_query($con,"insert into emp_permission (empid,post_code) values('$emp_Id','$post_code')");
	//Education Qualification
	$X=$_POST['X'];
	$sub=$_POST['sub'];
	$dop=$_POST['dop'];
	$o_marks=$_POST['o_marks'];
	$t_marks=$_POST['t_marks'];
	$p_marks=$_POST['p_marks'];
	$class=$_POST['class'];
	
	
	$sql1="insert into emp_qualification values('$emp_Id','$X','$sub','$dop','$o_marks','$t_marks','$p_marks','$class')";
	mysqli_query($con,$sql1);
	$sql2="insert into emp_upload_photo values('$emp_Id','','','','','','') ";
 mysqli_query($con,$sql2);
 //Employee Salary Details
$resut_post=mysqli_query($con, "select * from emp_salary_detail where post_code='$desi'");
$fetch_post=mysqli_fetch_assoc($resut_post);
$b_sal=$fetch_post['b_sal'];
$house=$b_sal*$fetch_post['house']/100;
$medical=$b_sal*$fetch_post['medical']/100;
$dearness=$b_sal*$fetch_post['dearness']/100;
$increment=$b_sal*$fetch_post['increment']/100;
$incentive=$b_sal*$fetch_post['incentive']/100;
$outdoor=$b_sal*$fetch_post['outdoor']/100;
$transport=$b_sal*$fetch_post['transport']/100;
$total_earn=$b_sal+$house+$medical+$dearness+$increment+$incentive+$outdoor+$transport;
$loss_wage=$b_sal*$fetch_post['loss_wage']/100;
$provident_fund=$b_sal*$fetch_post['provident_fund']/100;
$total_leave=$fetch_post['total_leave'];
$tax=$b_sal*$fetch_post['tax']/100;
$other1=$b_sal*$fetch_post['other1']/100;
$total_deduction=$loss_wage+$provident_fund+$tax+$other1;
$net_pay=$total_earn-$total_deduction;
mysqli_query($con, "insert into emp_salary value('$emp_Id','$desi','$b_sal','$house','$medical','$dearness','$increment','$incentive','$outdoor','$transport','$total_earn','$loss_wage','$provident_fund','$total_leave','$tax','$other1','$total_deduction','$net_pay')");
}
//photo
$sql3="select max(emp_id) as maxid from emp_upload_photo";
$result3=mysqli_query($con,$sql3);
$fetch=mysqli_fetch_assoc($result3);
$maxid=$fetch['maxid'];
$sql5="select * from emp_upload_photo where emp_Id='$maxid'";
$result5=mysqli_query($con,$sql5);
$fetch=mysqli_fetch_assoc($result5);
$photo=$fetch['photo'];
$sign=$fetch['sign']; 
$matric=$fetch['matric'];
$inter=$fetch['inter'];
$grad=$fetch['grad'];
$post_grad=$fetch['post_grad'];
//leave Details
 $reslult_leave=mysqli_query($con,"select * from leave_details where post_id='$post_code'");
 while($fetch_leave=mysqli_fetch_assoc($reslult_leave))
 {
	 $post_code=$fetch_leave['post_id'];
	 $leave=$fetch_leave['leave_type'];
	 $days=$fetch_leave['no_of_days'];
	 $temp=0;
	 mysqli_query($con,"insert into employee_leave_details (emp_id,post_code,leave_type,no_of_days,temp_days)values('$emp_Id','$post_code','$leave','$days','$temp')");
 }


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
	 <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SMS</span></a>
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
			
			$photoname=$maxid."photo".$_FILES['photo']['name'];
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
                   mysqli_query($con,"update emp_upload_photo set photo='$targe_path' where emp_id='$maxid'"); 
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
				
				$result= mysqli_query($con,"select * from emp_upload_photo where emp_id='$maxid'");
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
		  
		  $sign_name=$maxid."sign".$_FILES['sign']['name'];
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
      	      mysqli_query($con,"update emp_upload_photo set sign='$targe_path' where emp_id='$maxid'");
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
			 
				$result= mysqli_query($con,"select * from emp_upload_photo where emp_id='$maxid'");
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
			  
			 <div> <span ></span><button name="upload_photo" class="btn btn-info btn-lg "><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Upload Photo</button>
			  </div>
			   </div>
			    <div class="col-sm-6">
				
			   <input type="file" name="sign" class="btn btn-link btn-lg">
			  
			   <button name="upload_signature"  class="btn btn-info btn-lg"><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Upload Sign</button>
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
			$pan=$maxid."pan".$_FILES['matrix']['name'];
             $targe_path=$targe_path.basename($pan);	
			 if(move_uploaded_file($_FILES['matrix'][tmp_name],$targe_path))
			 {
             $sql3="update emp_upload_photo set matric='$targe_path' where emp_id='$maxid'";
            $check= mysqli_query($con,$sql3);
			 }
			?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
			  }}
		 else if($matric=="")
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
		  echo "pan is :".$pan;
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
			$diploma=$maxid."diploma".$_FILES['diploma']['name'];
             $targe_path=$targe_path.basename($diploma);
			 if(move_uploaded_file($_FILES['diploma'][tmp_name],$targe_path))
			 {
             $sql3="update emp_upload_photo set inter='$targe_path' where emp_id='$maxid'";
            $check= mysqli_query($con,$sql3);
			 }
			?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
			  }}
		 else if($inter=="")
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
		  echo "diploma is :".$diploma;
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
			$grad =$maxid."grad".$_FILES['grad']['name'];
             $targe_path=$targe_path.basename($grad);	
			if(move_uploaded_file($_FILES['grad'][tmp_name],$targe_path))
			 {
             $sql3="update emp_upload_photo set grad='$targe_path' where emp_id='$maxid'";
            $check= mysqli_query($con,$sql3);
			 }
			?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
			  }}
		 else if($grad=="")
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
			$exp=$maxid."expri".$_FILES['post_grad2']['name'];
             $targe_path=$targe_path.basename($exp);
			 if(move_uploaded_file($_FILES['post_grad2'][tmp_name],$targe_path))
			 {
             $sql3="update emp_upload_photo set post_grad='$targe_path' where emp_id='$maxid'";
            $check= mysqli_query($con,$sql3);
			 }
			?>
			   <th><p style="font-size:25px; color:green">&#10004;</p></th>
			   <?php
			  }}
		 else if($post_grad=="")
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
			  <button class="btn btn-info btn-lg" name="upload" onclick="return ValidateExtension()" id="btnUpload"><i class="fa fa-upload" style="color:red; font-size:25px"></i>&nbsp;&nbsp; Upload Documents</button>
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
			<div class="row">
			  
			  <div class="col-sm-12">
			  <form method="Post">
			  <a href="admin_emp_bank_details.php?id=<?php echo $fetch['emp_id'];?>" class="btn btn-info btn-lg btn-block"  ><i class="fa fa-save" style="color:red; font-size:25px"></i>&nbsp;&nbsp; save &next </a>
			  </form>
			  </div>
			  </div>
            </div>
			<!-- document uploaded    -->
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
