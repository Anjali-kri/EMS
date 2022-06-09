
<html lang="en">
<head>
  <?php
  error_reporting(0);
  session_start();
  $admin=$_SESSION['user_name'];
  $emp_id=$_SESSION['emp_code'];
  
  
  
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
                  <h2> Show Leave History </h2>
                 
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
				  <th>Leave Code</th>
				  <th>Reg. no</th>
				  <th>Name</th>
				  <th>Leave Type</th>
				  <th>From</th>
				  <th>To</th>
				  <th>Posting</th>
				  <th>Status</th>
				  <th>Action</th>
				  </tr>
				   
				  <?php
				 $result=mysqli_query($con, "select * from emp_leave where name='$admin'");
				  $id=1;
				 while( $fetch=mysqli_fetch_assoc($result))
				 {
					if(($fetch['L1_status']=='3')||($fetch['L1_status']=='4'))
					{
						
				  ?>
				  <tr>
				  <td><?php echo $id; ?> </td>
				  <td ><?php echo $fetch['leave_code'];  ?></td>
				  <td><?php echo $fetch['emp_id'];  ?></td>
				  <td><?php echo $fetch['name'];  ?></td>
				  <td><?php echo $fetch['leave_type'];  ?></td>
				  <td><?php echo $fetch['from_date'];  ?></td>
				  <td><?php echo $fetch['to_date'];  ?></td>
				  <td><?php echo $fetch['creation'];  ?></td>
				  <td><?php 
				  if($fetch['L1_status']=='3')
				  {
					?>
					<label class="btn btn-success" style="border-radius:15px">Approved</label>
					<?php  
				  }
				  else if($fetch['L1_status']=='4')
				  {
					?>
					<label class="btn btn-danger" style="border-radius:15px">Rejected</label>
					<?php  
				  }
					  ?>
				  
				  
				  
				  </td>
				  <td><a href="check_leave.php?id_history=<?php echo $fetch['leave_code'];?>"><i class="fa fa-trash" aria-hidden="true" style="font-size:25px;color:#ff3333;"  ></i></a></td>
				  
				 
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
		  <!--  2nd part -->
		  <div class="row" >
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2 > Leave Details </h2>
                 
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
				  <div class="col-sm-2">
				  </div>
				  <div class="col-sm-8">
				  <table class="table table-hover">
				  <tr style="background-color: #3399ff">
				  <th>#</th>
				  <th>Leave type</th>
				  <th>Total Days</th>
				  <th>Remaining</th>
				 </tr>
				 <?php
				 $result1=mysqli_query($con,"select * from employee_leave_details where emp_id='$emp_id'");
				 $i=0;
				  while($fetch1=mysqli_fetch_assoc($result1))
				  {
					  $remain=$fetch1['no_of_days']-$fetch1['temp_days'];
					  ?>
					  <tr>
					  <td><?php echo ++$i;  ?></td>
					   <td><?php echo $fetch1['leave_type'];  ?></td>
					    <td><?php echo $fetch1['no_of_days'];  ?></td>
						 <td><?php echo $remain;   ?></td>
				      </tr>
					  
					  <?php
				  }
				 ?>
				 <tr>
				 </tr>
				 
				  
				  </table>
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
