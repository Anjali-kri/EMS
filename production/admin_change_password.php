
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
  include "session_check_file.php";
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
	      <div class="row" style="padding-top:150px;padding-left:200px;padding-right:200px">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Change Passowrd </h2>
                  <ul class="nav navbar-right panel_toolbox">
                    </ul>
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
				  <style>
				  input:hover
				  {
					border-color:blue;
				}
				  </style>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				  
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Old password*</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="pass" class="form-control col-md-7 col-xs-12" type="password" name="opass" required style="border-radius:10px">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">New  password*</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="mpass" class="form-control col-md-7 col-xs-12" type="password" name="npass" required style="border-radius:10px">
						<input type="checkbox" onclick="show();">show password
						<span id="pass_valid"></span>
                      </div>
                    </div>
					
					<?php
					if(isset($_POST['submit']))
					{
					
					
					$pass=$_POST['opass'];
					$npass=$_POST['npass'];
					$result=mysqli_query($con,"select * from admin_add where user='$admin' and pass='$pass'");
					$row=mysqli_num_rows($result);
					if($row>0)
					{
					mysqli_query($con,"update admin_add set pass='$npass', mpass='$npass' where user='$user'");	
					?>
					<script>alert("password changed successully")</script>
					<?php
					}
					else
					{
					?>
					<script>alert("please check either userid or password wrong")</script>
					<?php	
					}
					  
				  
					}
					
					?>
					
					  
    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					  <button type="submit" class="btn btn-success" name="submit" ">Update</button>
                        <button type="reset" class="btn btn-primary" name="can">Cancel</button> 
						<script type="text/javascript">
						function show()
						{
							var x=document.getElementById("pass");
							var y=document.getElementById("mpass");
							if((x.type==="password")&&(y.type==="password"))
							{
								x.type="text";
								y.type="text";
							}
							else
							{
								x.type="password";
								y.type="password";
							}
						}
						
						
			
						</script>
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
