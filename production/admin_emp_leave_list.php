
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
  <script>
  function getpost(val)
  {
	$.ajax
		({
			type:"POST",
			url:"getpost.php",
			data:'emp='+val,
			success:function(data)
			{  
				$('#post1').html(data)
				
				
			}
			
		});	
	
	
  }
  function post_date()
  {
	 var a=document.getElementById('post1').value;
	 var b=document.getElementById('leave').value;
	 var c=document.getElementById('days').value;
	 document.getElementById('days').value="";
	

	  $.ajax
	  ({
		  type:"POST",
		  url:"get_data.php",
		  data:{emp:a, emp1:b, emp2:c},
		  success:function(data)
		  {
			  $('#abc').html(data)
		  }
	  });
  }
  function load()
  {
	var a=document.getElementById('post1').value;
	 var b=document.getElementById('leave').value;
	 var c=document.getElementById('days').value;
	

	  $.ajax
	  ({
		  type:"POST",
		  url:"load1.php",
		  data:{emp:a, emp1:b, emp2:c},
		  success:function(data)
		  {
			  $('#abc').html(data)
		  }
	  });  
  }
  //post1
  //leave
  //days
  </script>
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
				  <label class="L1">Department Name</label><br>
				  <Select name="dept" id='dept' class="output1" style="width:300px" onchange="getpost(this.value);">
				  <option>Choose</option>
				  <?php 
				  $result_dept=mysqli_query($con,"select * from admin_dept_type ");
				  while($fetch_dept=mysqli_fetch_assoc($result_dept))
				  {
					  ?>
					  <option value="<?php echo $fetch_dept['dept_short_name'];?>" ><?php echo $fetch_dept['department name'];  ?></option>
					  <?php
				  }
				  ?>
				  </select><br><br>
				  <label class="L2">Post Name</label><br>
				  <select id="post1" class="output1" name="post1" style="width:300px"> 
				  </select><br><br>
				  <label class="L2">Leave Type</label><br>
				  <select id="leave" class="output1"  name="leave" style="width:300px"> 
				  <?php
				  $result=mysqli_query($con,"select * from admin_leave_type ");
				  while($fetch=mysqli_fetch_assoc($result))
				  {
					  ?><option value="<?php echo $fetch['leave_type'];?>"><?php echo $fetch['leave_type'];?></option><?php
				  }
				  ?>
				  </select><br><br>
				  <label class="L2">No. of Days</label><br>
				  <input type="text" class="T2" name="days" id="days" autocomplete="off" ><br><br>
				  <label class="btn btn-info" name="add_post" id="bcd" onclick="post_date();">ADD POST</label>
				 </div>
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
