
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
	//include "session_check_file.php";
	
	?>
	
	<script>
				  function getDetail()
				  {
					   $.ajax
						({
						type:"POST",
						url:"get_project_details.php",
						data:'emp='+1,
						success:function(data)
							{
							$('#proj_detail').html(data)
							}
						});
					  
				  }
				  </script>
				  
				  
	
</head>
<body class="nav-md" onload="getDetail()">
  <div class="container body">
    <div class="main_container" >
	 <div class="navbar nav_title" style="border: 0;" >
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
$total="hello";
?>
      <!-- page content -->
      <div class="right_col" role="main">
	  <form method="POST">
	   <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Project Details</h2>
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
				  <script>
				  function getProject_id()
				  {
					  var pro=document.getElementById('project_name').value;
					  alert(pro);
					  $.ajax
					  ({
						  type:"POST",
						  url:"getporject.php",
						  data:"emp="+pro,
						  success:function(data)
						  {
							  $('#proj_detail').html(data)
						  }
					  });
				  }
				  
				  </script>
				 <div class="row">
				 <div class="col-sm-4">
				 <input type="text" class="form-control" placeholder="Project Name or project code" style="border-radius:10px;height:35px;" id="project_name">
				 </div>
				 <div class="col-sm-4">
				 <label class="btn btn-info" style="border-radius:5px" onclick="getProject_id();">Search</label>
				 </div>
				 <div class="col-sm-4">
				 </div>
				 </div>
				 <div class="row" style="margin-top:80px;">
				 <div class="col-sm-12" id="proj_detail">
				 </div>
				 
				 </div>
				  

				  <div>
				 
				  </div>
				</div>
              </div>
            </div>
          </div>
		  <div style="margin-top:1500px;"></div>
		  <!--dlskalfksa -->
		 
<!--- aklfklkal -->
	   <!-- total payment -->  
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
