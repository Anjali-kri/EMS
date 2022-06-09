
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
  function addpost()
  {
	var a=document.getElementById('dept').value;
	var b=document.getElementById('post_name').value;
	document.getElementById('post_name').value="";
	$.ajax
		({
			type:"POST",
			url:"get_admin_post.php",
			data:{emp:a, emp1:b},
			success:function(data)
			{
				$('#abc').html(data)


			}

		});


  }
  function load()
  {
	var a=document.getElementById('dept').value;
	var b=document.getElementById('post_name').value;

	$.ajax
		({
			type:"POST",
			url:"load_add_post.php",
			data:{emp:a, emp1:b},
			success:function(data)
			{
				$('#abc').html(data)


			}

		});

  }
  </script>
</head>
<body class="nav-md" onload="load()">
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
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				  <div class="row">
				  <div class="col-sm-2">
				  </div>
				  <div class="col-sm-6">
				  <?php

				  date_default_timezone_set('Asia/Kolkata');
				  $date=date('d-m-Y  h:m');
				  if(isset($_POST['add']))
				  {
				  $dept_name=$_POST['dept_name'];
				   $dept_short_name=strtoupper($_POST['dept_short_name']);

				//  mysqli_query($con, "insert into admin_dept_type values('','$dept_name','$dept_short_name','$date')");

				  if(mysqli_affected_rows($con)>0)
				  {
					?> <span  class="output"> Data Save Successfully</span>  <?php
				  }
				  else
				  {
					?> <span  class="output"> Data Save failed</span>  <?php
				  }
				  }

				  ?>

				  </div>
				  <div class="col-sm-2">
				  </div>
				  </div><br><br>
				  <div class="row">
				  <div class="col-sm-2">
				  </div>
				  <div class="col-sm-6">
				  <label class="L1">Department Name</label><br>
				  <Select name="dept" id='dept' class="output1" style="width:300px">
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
				  <input type="text" class="T2" name="post_name" id="post_name" autocomplete="off" ><br><br>
				  <label class="btn btn-info" name="" id="bcd"   onclick="addpost();" >ADD POST</label>


				  </div>
				  <div class="col-sm-2">
				  </div>
				  </div>
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
