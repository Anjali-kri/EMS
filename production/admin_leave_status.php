
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
		   <style>
		   .status
		   {
			   font-size:30px;
		   }
		   </style>
<?php
include("header.php");
?>
      <!-- page content -->
      <div class="right_col" role="main">
	     <div class="row" >
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2 > Show Leave Type </h2>
                 
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
				  <div class="row">
				  <div class="col-sm-12">
				  <label class="status">Status</label>
				  <?php 
				 $result=mysqli_query($con,"Select max(id) as maxi from emp_leave where name='$admin'");
				 $fetch1=mysqli_fetch_assoc($result);
				 $id=$fetch1['maxi'];
				 $result1=mysqli_query($con,"Select * from emp_leave where name='$admin' and id='$id'");
				  $fetch=mysqli_fetch_assoc($result1);
				 
				 if($fetch['L1_status']=='0')
				 {
					 
					 ?>
					 <div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">
							25%
						</div>
					</div>
					 <?php
				 }
				 else if($fetch['L1_status']=='1')
				 {
					 
					 ?>
					 <div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
							50%
						</div>
					</div>
					 <?php
					 
				 }
				 else if($fetch['L1_status']=='2')
				 {
					 
					 ?>
					 <div class="progress">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
							75%
						</div>
					</div>
					 <?php
					 
				 }
				  
				  ?>
				  
				  </div>
				  </div>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				  <div class="row">
				  <style>
				  th
				  {
					  color:white;
				  }
				 
				  </style>
				  
				  <div class="col-sm-12">
				  <table class="table table-hover">
				  <tr style="background-color: #3399ff">
				  <th>#</th>
				  <th>Leave Code</th>
				  <th>Leave Type</th>
				  <th>From</th>
				  <th>To</th>
				  <th>Posting</th>
				  <th>Status</th>
				  </tr>
				  <?php
				 $result=mysqli_query($con, "select * from emp_leave where name='$admin' ");
				  $id=1;
				 while( $fetch=mysqli_fetch_assoc($result))
				 {
					 if(($fetch['L1_status']=='3')||($fetch['L1_status']=='4'))
					 {
						 
					 }
					 else
					 {
				  ?>
				  
				  <tr>
				  <td><?php echo $id; ?> </td>
				  <td><?php echo $fetch['leave_code'];  ?></td>
				  <td><?php echo $fetch['leave_type'];  ?></td>
				  <td><?php echo $fetch['from_date'];  ?></td>
				  <td><?php echo $fetch['to_date'];  ?></td>
				  <td><?php echo $fetch['creation'];  ?></td>
				  <td> <label style="border:2px solid ;border-radius:10px; background-color:red;color:white;width:90px;padding-left:10px;">Pending</label></td>
				  </tr>
				  <?php
					$id++;
				 }
				 }
				  ?>
				  </table>
				  </div>
				  
				  </div>
				  
				  
                    </form>
				  	
                </div>
             
              </div>
            </div>
          </div>

        
       
</div>
<div style="margin-top:1500px;"></div>
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
