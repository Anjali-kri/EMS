
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
	     <div class="row" style="padding-top:100px;padding-left:50;padding-right:250px;">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2 > Add Leave Type </h2>
                 
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
				  </style>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				  <div class="row">
				  <div class="col-sm-2">
				  </div>
				  <?php
				   $id=$_REQUEST['id'];
				  date_default_timezone_set('Asia/Kolkata');
				  $date=date('d-m-Y  h:m');
				  if(isset($_POST['Update']))
				  {
				  $leave=$_POST['leave'];
				   $description=$_POST['description'];
				  mysqli_query($con, "update  admin_leave_type set leave_type='$leave', description='$description',creation='$date' where id='$id' ");
				  if(mysqli_affected_rows($con)>0)
				  {
					  ?><script> window.location.href="admin_show_leave.php";</script><?php
				  }
				  }
				 
				  $res=mysqli_query($con,"select * from admin_leave_type where id='$id'");
				  $fetch=mysqli_fetch_assoc($res);
				  
				  
				  ?>
				  <div class="col-sm-6">
				  <label class="L1">Leave Type</label><br>
				  <input type="text" class="T1" name="leave" value="<?php echo $fetch['leave_type']; ?>"><br><br>
				  <label class="L2">Description</label><br>
				  <input type="text" class="T2" name="description" value="<?php echo $fetch['description']; ?>"><br><br>
				  <button class="btn btn-info" name="Update">Update</button>
					
				  </div>
				  <div class="col-sm-2">
				  </div>
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
admin_update_leave_type.php