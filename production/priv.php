
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
	$result=mysqli_query($con, "select * from admin_add");
	?>
	<style>
	span
	{
		font-size:15px;
	}
	</style>
	<script>
				  $(document).ready(function(){
					  $(".home").click(function(){
						  $(".home1").toggle(1500);
					  });
				  });
				   $(document).ready(function(){
					  $(".web").click(function(){
						  $(".web1").toggle(1500);
					  });
				  });
				   $(document).ready(function(){
					  $(".settings").click(function(){
						  $(".settings1").toggle(1500);
					  });
				  });
				  </script>
				  <style>
				  #grad {
                     background-image: linear-gradient(#b3b3ff, #ffe6ff);
					 color:black;
					 font-weight:bold;
                        }
						checkbox
						{
							font-size:50%;
						}
				  .home1
				  {
					  display:none;
				  }
				  .web1
				  {
					  display:none;
				  }
				  .settings1
				  {
					  display:none;
				  }
				  p
				  {
					  text-align:center;
				  }
				  .permission
				  {
					  background-color: #cc6600;
				  }
				    .permission:hover
					{
						background-color:#2eb82e;
					}
				  </style>
				  
	
</head>
<body class="nav-md">
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
                  <h2>Assign Permission</h2>
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
				  <form method="POST">
				   <div class="row">
				   <div class="col-sm-4">
				   <label>User </label>
				   
				   <select name="user" class="form-control">
				   <?Php
				   while($fetch=mysqli_fetch_assoc($result))
				   {
					   ?>
					   <option ><?php echo $fetch['name']; ?> </option>
					   <?php
				   }
				   ?>
				   
					
					</select>
				   </div>
				   <div class="col-sm-8">
				    </div>
				  </div><br>
				  <div class="row">
				  <div class="col-sm-4" >
				  <?php
				  $user=$_POST['user'];
				  $emp_detail=$_POST['emp_detail'];
				  $emp_sal=$_POST['emp_sal'];
				  $emp_m_salary=$_POST['emp_m_salary'];
				  $fin_year=$_POST['fin_year'];
				  $search_detail=$_POST['search_detail'];
				  $assign_proj=$_POST['assign_proj'];
				  $project_list=$_POST['project_list'];
				  $master_update=$_POST['master_update'];
				  $career=$_POST['career'];
				  $contact=$_POST['contact'];
				  $create_user=$_POST['create_user'];        
				  $change_pass=$_POST['change_pass'];
				  $prev=$_POST['prev'];
				  if(isset($_POST['save']))
				  {
					 
					 $result=mysqli_query($con,"select * from permission where user='$user'");
					 $total=mysqli_num_rows($result);
					 if($total>0)
					 {
						?><script> alert("Permission already Assign ");</script><?php
						
				 }
					 else
					 {
						 mysqli_query($con, "insert into permission values('','$user','$emp_detail','$emp_sal','$emp_m_salary','$fin_year','$search_detail','$assign_proj','$project_list','$master_update','$career','$contact','$create_user','$change_pass','$prev')");
					 }
				  }
				  ?>
				   <label class="home btn-info btn-block btn-lg permission"><p>Home</p></label><br>
				   <div class="wall home1" style="border:1px solid gray;padding:5px" id="grad">
				  <input type="checkbox" name="emp_detail" value="admin_emp_details.php"><span style="color:btn-info;">Employee Details</span><br>
				   <input type="checkbox" name="emp_sal" value="admin_emp_sal.php"><span>Employee Salary</span><br>
				   <input type="checkbox" name="emp_m_salary" value="admin_emp_sal_monthly.php"><span>Employee monthly Salary</span><br>
				   <input type="checkbox" name="fin_year" value="admin_finance_Year.php"><span>finance Year</span><br>
				   <input type="checkbox" name="search_detail" value="admin_emp_search.php"><span>Search Employee Details</span><br>
				   <input type="checkbox" name="assign_proj" value="admin_assign_project.php"><span>Assign Project</span><br>
				   <input type="checkbox" name="project_list" value="admin_project_list.php"><span>Project List</span><br>
				   <input type="checkbox" name="master_update" value="admin_update.php"><span>Master Update</span><br>
				   </div>
				   </div>
				   <div class="col-sm-4">
				    <label  class="web btn-info btn-block btn-lg permission"><p>Web</p></label><br>
					 <div class="wall web1" style="border:1px solid gray;padding:5px" id="grad">
				   <input type="checkbox" name="career" value="admin_career.php"><span>career</span><br>
				   <input type="checkbox" name="contact" value="admin_contact.php"><span>contact</span><br>
				   </div>
				   </div>
				   <div class="col-sm-4">
				  <label  class="settings btn-info btn-block btn-lg permission"><p>Settings</p></label><br>
					 <div class="wall settings1" style="border:1px solid gray;padding:5px" id="grad">
				   <input type="checkbox" name="create_user" value="admin_add.php"> <span>Create User</span><br>
				   <input type="checkbox" name="change_pass" value="admin_change_password.php"><span >Change password</span><br>
				   <input type="checkbox" name="prev" value="priv.php.php"><span >Assign Permission</span><br>
				   </div>
				   </div>
				  </div><br>
				  
				  <div class="row">
				  <div class="col-sm-12">
				  <button name="save" class="btn-info btn-block btn-lg"><i class="fa fa-save" style="color:white; font-size:25px"></i>&nbsp;&nbsp;&nbsp;<b style="font-size:25px">Save</b></button>
				  </div>
				  </div>
				  </form>
				  

				  <div>
				 
				  </div>
				</div>
              </div>
            </div>
          </div>
		    <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Update Permission</h2>
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
				  <form method="POST">
				   <div class="row">
				 <div class="col-sm-2">
				 </div>
				  <div class="col-sm-8">
				  <table class=" table table-responsive table-striped table-hover">
				  <tr>
				  <th>User</th>
				
				  <th style="width:150px">Update</th>
				  <th></th>
				  </tr>
				  <?php
				  $result_pre=mysqli_query($con, "select * from  permission");
				  
				  while($fetch_pre=mysqli_fetch_assoc($result_pre))
				  {
				  ?>
				  <tr>
				  <td><?php echo $fetch_pre['user']; ?></td>
				  
				  <td><a class="btn-success btn-sm" href="priv_update.php?id=<?php echo $fetch_pre['user']; ?>">update</a></td>
				  <td></td>
				  </tr>
				  <?php
				  }
				  ?>
				  </table>
				 </div>
				 <div class="col-sm-2">
				 </div>
					</div>
				  </form>
				  

				  <div>
				 
				  </div>
				</div>
              </div>
            </div>
          </div>
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
