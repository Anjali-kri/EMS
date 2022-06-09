
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
	     <div class="row" >
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2 > Show Leave Type </h2>
                 
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
				  
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
				  <th>Leave Type</th>
				  <th>Description</th>
				  <th>Creation</th>
				  <th>Action</th>
				  </tr>
				  <?php
				  $result=mysqli_query($con, "select * from admin_leave_type");
				  $id=1;
				 while( $fetch=mysqli_fetch_assoc($result))
				 {
				  ?>
				  <tr>
				  <td><?php echo $id;  ?></td>
				  <td><?php echo $fetch['leave_type'];  ?></td>
				  <td><?php echo $fetch['description'];  ?></td>
				  <td><?php echo $fetch['creation'];  ?></td>
				  <td><a href="admin_update_leave_type.php?id=<?php echo $fetch['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="admin_delete_leave_type.php?id=<?php echo $fetch['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				  </tr>
				  <?php
					$id++;
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
