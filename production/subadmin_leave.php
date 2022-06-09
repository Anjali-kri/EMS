
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
				  .text
				  {
					  border-radius:40px;
					  position:relative;
					  width:70%;
					  padding-left:20px
				  }
				 
				  </style>
				  
				  <div class="col-sm-12">
				  <table class="table table-hover">
				  <tr style="background-color: #3399ff">
				  <th>#</th>
				  <th>Leave Code</th>
				  <th>Reg. no</th>
				  <th>Name</th>
				  <th>Post</th>
				  <th>Leave Type</th>
				  <th>From</th>
				  <th>To</th>
				  <th>Posting</th>
				  <th colspan='2'>Action</th>
				  </tr>
				  
				  <?php
				 $result=mysqli_query($con, "select * from emp_leave where 	L1_status='0'");
				  $id=1;
				 while( $fetch=mysqli_fetch_assoc($result))
				 {
					 $emp=$fetch['emp_id'];
				     $result1=mysqli_query($con, "select * from emp_permission where empid='$emp'");
					$fetch1= mysqli_fetch_assoc($result1);
				  ?>
				  
				  <tr>
				  <td><?php echo $id; ?> </td>
				  <td ><?php echo $fetch['leave_code'];  ?></td>
				  <td><?php echo $fetch['emp_id'];  ?></td>
				  <td><?php echo $fetch['name'];  ?></td>
				  <td><?php echo $fetch1['post_code'];  ?></td>
				  <td><?php echo $fetch['leave_type'];  ?></td>
				  <td><?php echo $fetch['from_date'];  ?></td>
				  <td><?php echo $fetch['to_date'];  ?></td>
				  <td><?php echo $fetch['creation'];  ?></td>
				  <td><a href="check_leave.php?aprove_sub=<?php echo $fetch['leave_code'];?>" class="btn btn-success" style="border-radius:10px" name="aprove" >Aprove</a> </td>
				  <td><a href="check_leave.php?reject_sub=<?php echo $fetch['leave_code'];?>" class="btn btn-danger" style="border-radius:10px" name="reject">Reject</a> </td>
				
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
		  
		  <!-- date pannel   -->
	<div class="row" >
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2 > Date wise search </h2>
                 
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
				  <div class="row">
				  <form method="POST">
				  <div class="col-sm-2"></div>
				  <div class="col-sm-3">
				  <label>Starting Date</label>
				  <input type="date" class="form-control" name="start" id="start" style="border-radius:10px">
				  </div>		  
				  <div class="col-sm-3">
				  <label>Ending Date</label>
				  <input type="date" class="form-control" name="end" id="end" style="border-radius:10px">
				  </div>
				  <div class="col-sm-3"><br>
				  <label class="btn btn-info "style="border-radius:30px;width:150px" onclick="search_date();"> Search</label>
				  </div>
				  <div class="col-sm-1"></div>
				  </form>
				  </div>
				  <div class="row">
					<div class="col-sm-12" id="date1">
					
					</div>
				  </div>
               
				  </div>
             </div>
            </div>
          </div>
	
	<!--date close pannel -->
	
		  <!-- search Pannel-->
		  <div class="row" >
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2 > Search Pannel </h2>
                 
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
				  
                  <form id="demo-form2" method="POST">
				  
				  <div class="row">
				  <div class="col-sm-4">
				  <input type="text" class="form-control text" id="reg" name="reg" placeholder="Search Registration Number" autocomplete="off" >
				  </div>
				  <div class="col-sm-4"></div>
				  <div class="col-sm-4">
				  
				 <select class="form-control text" name="post" id="post">
				 <option>-- Select --</option>
				 <?php   
				  $result_post=mysqli_query($con,"select * from admin_post");
				  while($fetch_post=mysqli_fetch_assoc($result_post))
				  {
					  ?><option value="<?php echo $fetch_post['post_code'];  ?>"><?php echo $fetch_post['post_code'];  ?></option><?php
				  }
				  ?>
				 </select>
				  </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-12">
				  <label class="btn btn-info btn-block btn-lg" onclick="search();"><i class="fa fa-search" ></i> <b> Search</b></label>
				  </div>
				  </div>
				  <div class="row">
				  <div class="col-sm-12 search-info">
				  
				  </div>
				  </div>
				  <script>
				  function search()
				  {
					var reg=document.getElementById('reg').value; 
					var post=document.getElementById('post').value;
					if(reg!=="")
					{
						$.ajax
						({
							type:'POST',
							url:'getsubadmin.php',
							data:'emp='+reg,
							success:function(data)
							{
								$('.search-info').html(data);
								
							}
						});
					}
					else if(post!='-- Select --')
					{
						$.ajax
						({
							type:'POST',
							url:'getsubadmin1.php',
							data:'emp1='+post,
							success:function(data)
							{
								$('.search-info').html(data);
								
							}
						});
						
					}
					}
					
					
					
					
				  function search_date()
				  {
					var start=document.getElementById('start').value;  
					var end=document.getElementById('end').value;
					$.ajax
					({
						type:'POST',
						url:'get_leave_date.php',
						data:{s:start, e:end},
						success:function(data)
						{
							$('#date1').html(data)
						}
						
						
					});
					
				  }
				  </script>
				  </form>
				  </div>
             </div>
            </div>
          </div>
		  
		  <div style="margin-top:1500px;"></div>
	
	
        
       
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
