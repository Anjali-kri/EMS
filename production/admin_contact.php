
<html lang="en">
<head>
  <?php
  error_reporting(0);
  session_start();
  $admin=$_SESSION['user_name'];
  echo $admin;
  if($admin=="")
  {
	  header('Location:login.php');
  }
  include("head1.php");
    include "connection1.php";
	include "session_check_file.php";
	$sql="select * from contact";
  $result=mysqli_query($con,$sql);
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
	      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Contact </h2>
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
				
				 <div class="col-lg-3">

						<input type="date" class="form-control" placeholder="from" name="from">
				</div>
				<div class="col-lg-2">
				</div>
				<div class="col-lg-2">
	                 <span> To</span>
				</div>
				<div class="col-lg-3">
	                 <input type="date" class="form-control" placeholder="" name="to">
				</div>
				<div class="col-lg-2">
				</div>
				
		       </div>
			   <br>
			   <div class="row">
			   <div class="col-sm-12">
			   <button class="btn btn-info btn-lg-5 btn-block" name="search" value="search"><i class="fa fa-search" style="color:white; font-size:25px"></i>&nbsp;&nbsp;<b style="font-size:25px">Search</b></button>
			   </div>
			   
			   </div>
				</form>
                </div>
              </div>
            </div>
          </div>

              <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Enquiry Details</h2>
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
				  <table class="table table-striped table-border table-hover" >
				<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile No.</th>
				<th>Message</th>
				<th>Date</th>
				<th>Time</th>
				</tr>
								<?php
				$i=0;
				if(($_POST['from']=='')&&($_POST['to']==''))
				{
				while($fetch=mysqli_fetch_assoc($result))
				{
					?>
					<tr>
					<td><?php echo ++$i; ?></td>
					<td><?php echo $fetch['name']; ?></td>
					<td><?php echo $fetch['email']; ?></td>
					<td><?php echo $fetch['mobile']; ?></td>
					<td><?php echo $fetch['msg']; ?></td>
					<td><?php echo $fetch['date']; ?></td>
					<td><?php echo $fetch['time']; ?></td>
					<tr>
					
					<?php
				
				}
				}
				else
				{
					if(isset($_POST['search']))
					{
						$from=$_POST['from'];
						$to=$_POST['to'];
						$sql1="select * from contact where date between '$from' and '$to' "; 
                        $result=mysqli_query($con,$sql1);
						while($fetch1=mysqli_fetch_assoc($result))
						{
							?>
							<tr>
					<td><?php echo ++$i; ?></td>
					<td><?php echo $fetch1['name']; ?></td>
					<td><?php echo $fetch1['email']; ?></td>
					<td><?php echo $fetch1['mobile']; ?></td>
					<td><?php echo $fetch1['msg']; ?></td>
					<td><?php echo $fetch1['date']; ?></td>
					<td><?php echo $fetch1['time']; ?></td>
					<tr>
							
							<?php
						
					}
					}
					
				}
				
				?>

					</table>
					</form>

				</div>
              </div>
            </div>
          </div>

       
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
