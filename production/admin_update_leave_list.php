
<html lang="en">
<head>
  <?php
  error_reporting(0);
  session_start();
  $admin=$_SESSION['user_name'];
  
  
  if($admin=="")
  {
	  header('Location:login.php');
  }
  include("head1.php");
  include "connection1.php";
  $id=$_REQUEST['id'];
  $id2=$_REQUEST['id2'];
  $result=mysqli_query($con,"select * from leave_details where post_id='$id' and id='$id2'");
  $fetch_update=mysqli_fetch_assoc($result);
  
  
  
  
  
  
  ?>
 
</head>
<body class="nav-md" onload="load();">
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
                <div class="x_title" >
                  <h2 > Add Post Details</h2>
                 
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
				  <style>
				  input
				  {
					 border:none;
					 border-bottom:2px solid;
					  width:300px;
					  border-color:#1aa3ff;
					  color:#1aa3ff;
					  font-size:15px;
					  font-weight:bold;
					  
					 
				  }
				  .L1 .L2
				  {
					  color:#1aa3ff;
					  
				  }
				  .T1:hover
				  {
					padding-top:10px;  
				  }
				  
				  .T2:hover
				  {
					padding-top:10px;  
				  }
				  .output
				  {
					font-size:25px; 
					color:#1aa3ff; 
					font-weight:bold; 
					border:none;
					border-left:5px solid #1aa3ff; 
					border-bottom:2px solid #1aa3ff; 					
				  }
				  .output1
				  {
					font-size:19px; 
					color:#1aa3ff; 
					font-weight:bold; 
					border:none;
					
					border-bottom:2px solid #1aa3ff; 					
				  }
				  </style>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" onsubmit="">
				  <div class="row">
				  <div class="col-sm-2">
				  </div>
				  <div class="col-sm-6">
				  </div>
				  <div class="col-sm-2">
				  </div>
				  </div><br><br>
				  <div class="row">
				  <div class="col-sm-2">
				  </div>
				  <div class="col-sm-6">
				  
				  <label class="L2">Leave Type</label><br>
				  <select id="leave" class="output1"  name="leave" style="width:300px"> 
				  <option value="<?php echo $fetch_update['leave_type']; ?>"><?php echo $fetch_update['leave_type']; ?></option>
				  <?php
				  $result=mysqli_query($con,"select * from admin_leave_type ");
				  while($fetch1=mysqli_fetch_assoc($result))
				  {
					  if($fetch_update['leave_type']==$fetch1['leave_type'])
					  {
						  
					  }
					  else
					  {
						?><option value="<?php echo $fetch1['leave_type'];?>"><?php echo $fetch1['leave_type'];?></option><?php  
					  }
					  
				  }
				  ?>
				  </select><br><br>
				  <label class="L2">No. of Days</label><br>
				  <input type="text" class="T2" name="days" id="days" autocomplete="off"  value="<?php echo $fetch_update['no_of_days'];  ?>"><br><br>
				  <button class="btn btn-info" name="update">update</button>
				 </div>
				 <?php
			
				if(isset($_POST['update']))
				{
				$leave=$_POST['leave'];
				 $day=$_POST['days'];
				 $result=mysqli_query($con,"update leave_details set leave_type='$leave', no_of_days='$day' where post_id='$id' and id='$id2'" );
				?> <script>window.location.href="admin_emp_leave_list.php";</script><?php
				}
				 ?>
				  <div class="col-sm-2">
				  </div>
				  </div>
				  <br><br><br><br>
				  
				  <div id='abc'>
				  </div>
				  
                    </form>
				  	
                </div>
             
              </div>
            </div>
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
