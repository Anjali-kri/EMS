
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
	$id=$_REQUEST['id'];
	$result_pre=mysqli_query($con, "select * from permission where user='$id'");
	$fetch_pre=mysqli_fetch_assoc($result_pre);
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
					.user
					{
					 background-color: #cc6600;	
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
				  <style>
				 
				  </style>
				  <form method="POST">
				   <div class="row">
				   <div class="col-sm-4">
				   <label class="alert alert-info user" style="border-radius:15px;width:150px ;text-align:center;  border:none"><p>USER</p> </label>
				   <i class="fa fa-angle-double-right " style="font-size:35px;color:red"></i>&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="btn btn-success btn-lg " style="border-radius:15px;width:150px;background-color:#2eb82e"><?php echo $id;?></label>
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
				  $priv=$_POST['priv'];
				  if(isset($_POST['save']))
				  {
					 
					 $result=mysqli_query($con,"select * from permission where user='$id'");
					 $total=mysqli_num_rows($result);
					 echo "id is ".$id;
					 if($total>0)
					 {
						mysqli_query($con,"update permission set e_detail='$emp_detail', e_sal='$emp_sal', e_m_sal='$emp_m_salary' ,fin_year='$fin_year',search_detail='$search_detail',assign_proj='$assign_proj',project_list='$project_list',master_update='$master_update',career='$career',contact='$contact',create_user='$create_user',change_pass='$change_pass',priv='$priv' where user='$id' ");
						if(mysqli_affected_rows($con)>0)
						{
							?><script> alert("Permission Assign Successfully");</script><?php
						}
						else
						{
							?><script> alert("Updation Failed");</script><?php
						}
						?><script> window.location.href="priv.php";</script><?php
						
				 }
					 else
					 {
						 echo " total else  :".$total;
						 //mysqli_query($con, "insert into permission values('','$user','$emp_detail','$emp_sal','$emp_m_salary','$fin_year','$search_detail','$assign_proj','$project_list','$master_update','$career','$contact','$create_user','$change_pass')");
					
						
						
					 }
				  }
				  ?>
				   <label class="home btn-info btn-block btn-lg permission" ><p>Home</p></label><br>
				   <div class="wall home1" style="border:1px solid gray;padding:5px" id="grad">
				   <?php 
				   if($fetch_pre['e_detail']=='admin_emp_details.php')
				   {
					?>
					<input type="checkbox" checked  name="emp_detail" value="admin_emp_details.php"><span style="color:btn-info;">Employee Details</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="emp_detail" value="admin_emp_details.php"><span style="color:btn-info;">Employee Details</span><br>  
				   <?php
				   }
				   ?>
				   <?php 
				   if($fetch_pre['e_sal']=='admin_emp_sal.php')
				   {
					?>
					<input type="checkbox" checked  name="emp_sal" value="admin_emp_sal.php"><span style="color:btn-info;">Employee Salary</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="emp_sal" value="admin_emp_sal.php"><span style="color:btn-info;">Employee Salary</span><br>  
				   <?php
				   }
				   ?>
				   <?php 
				   if($fetch_pre['e_m_sal']=='admin_emp_sal_monthly.php')
				   {
					?>
					<input type="checkbox" checked  name="emp_m_salary" value="admin_emp_sal_monthly.php"><span style="color:btn-info;">Employee monthly Salary</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="emp_m_salary" value="admin_emp_sal_monthly.php"><span style="color:btn-info;">Employee monthly Salary</span><br>  
				   <?php
				   }
				   ?>
				   <?php 
				   if($fetch_pre['fin_year']=='admin_finance_Year.php')
				   {
					?>
					<input type="checkbox" checked  name="fin_year" value="admin_finance_Year.php"><span style="color:btn-info;">Finance year</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="fin_year" value="admin_finance_Year.php"><span style="color:btn-info;">Finance year</span><br>  
				   <?php
				   }
				   ?>
				   <?php 
				   if($fetch_pre['search_detail']=='admin_emp_search.php')
				   {
					?>
					<input type="checkbox" checked  name="search_detail" value="admin_emp_search.php"><span style="color:btn-info;">Search Employee Details</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="search_detail" value="admin_emp_search.php"><span style="color:btn-info;">Search Employee Details</span><br>  
				   <?php
				   }
				   ?>
				   <?php 
				   if($fetch_pre['assign_proj']=='admin_assign_project.php')
				   {
					?>
					<input type="checkbox" checked  name="assign_proj" value="admin_assign_project.php"><span style="color:btn-info;">Assign Project</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="assign_proj" value="admin_assign_project.php"><span style="color:btn-info;">Assign Project</span><br>  
				   <?php
				   }
				   ?>
				   <?php 
				   if($fetch_pre['project_list']=='admin_project_list.php')
				   {
					?>
					<input type="checkbox" checked  name="project_list" value="admin_project_list.php"><span style="color:btn-info;">Project List</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="project_list" value="admin_project_list.php"><span style="color:btn-info;">Project List</span><br>  
				   <?php
				   }
				   ?>
				   <?php 
				   if($fetch_pre['master_update']=='admin_update.php')
				   {
					?>
					<input type="checkbox" checked  name="master_update" value="admin_update.php"><span style="color:btn-info;">Master Update</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="master_update" value="admin_update.php"><span style="color:btn-info;">Master Update</span><br>  
				   <?php
				   }
				   ?>
				   </div>
				   </div>
				   <div class="col-sm-4">
				    <label  class="web btn-info btn-block btn-lg permission"><p>Web</p></label><br>
					 <div class="wall web1" style="border:1px solid gray;padding:5px" id="grad">
					  <?php 
				   if($fetch_pre['career']=='admin_career.php')
				   {
					?>
					<input type="checkbox" checked  name="career" value="admin_career.php"><span style="color:btn-info;">career</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="career" value="admin_career.php"><span style="color:btn-info;">career</span><br>  
				   <?php
				   }
				   ?>
				    <?php 
				   if($fetch_pre['contact']=='admin_contact.php')
				   {
					?>
					<input type="checkbox" checked  name="contact" value="admin_contact.php"><span style="color:btn-info;">contact</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="contact" value="admin_contact.php"><span style="color:btn-info;">contact</span><br>  
				   <?php
				   }
				   ?>
				    </div>
				   </div>
				   <div class="col-sm-4">
				  <label  class="settings btn-info btn-block btn-lg permission"><p>Settings</p></label><br>
					 <div class="wall settings1" style="border:1px solid gray;padding:5px" id="grad">
					  <?php 
				   if($fetch_pre['create_user']=='admin_add.php')
				   {
					?>
					<input type="checkbox" checked  name="create_user" value="admin_add.php"><span style="color:btn-info;">Create User</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="create_user" value="admin_add.php"><span style="color:btn-info;">Create User</span><br>  
				   <?php
				   }
				   ?>
				   <?php 
				   if($fetch_pre['change_pass']=='admin_change_password.php')
				   {
					?>
					<input type="checkbox" checked  name="change_pass" value="admin_change_password.php"><span style="color:btn-info;">Change password</span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="change_pass" value="admin_change_password.php"><span style="color:btn-info;">Change password</span><br>  
				   <?php
				   }
				   ?>
				   <?php 
				   if($fetch_pre['priv']=='priv.php')
				   {
					?>
					<input type="checkbox" checked  name="priv" value="priv.php"><span style="color:btn-info;">permission </span><br>
					<?php   
				   }
				   else
				   {
					   ?>
					 <input type="checkbox"  name="priv" value="priv.php"><span style="color:btn-info;">permission</span><br>  
				   <?php
				   }
				   ?>
				   </div>
				   </div>
				  </div><br>
				  
				  <div class="row">
				  <div class="col-sm-12">
				  <button name="save" class="btn-info btn-block btn-lg"><i class=" fa fa-save"></i>&nbsp; Update</button>
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
