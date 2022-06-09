
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
  $result=mysqli_query($con,"select * from emp_leave where L1_status=''||L1_status='1'||L1_status='2' ");
  $total_pending=mysqli_num_rows($result);
  $result_r=mysqli_query($con,"select * from emp_leave where L1_status='4' ");
  $total_rejected=mysqli_num_rows($result_r);
  $result_a=mysqli_query($con,"select * from emp_leave where L1_status='3' ");
  $total_aprove=mysqli_num_rows($result_r);
  $result_t=mysqli_query($con,"select * from emp_leave  ");
  $total_total=mysqli_num_rows($result_t);


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
	     <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o" style="padding-top:8px"></i>
                </div>
                <div class="count"><?php echo $total_total; ?></div>

                <h3>Total Leave</h3>
                
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
                <div class="icon a1"><i class="fa fa-check-square-o" style="padding-top:8px"></i>
                </div>
                <div class="count"><?php echo $total_pending; ?></div>

                <h3>Pending Leave</h3>
               
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
               <div class="icon a1"><i class="fa fa-check-square-o" style="padding-top:8px"></i>
                </div>
                <div class="count"><?php echo $total_aprove; ?></div>

                <h3>Approval Leave</h3>
              
              </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="tile-stats">
               <div class="icon"><i class="fa fa-check-square-o" style="padding-top:8px"></i>
                </div>
                <div class="count"><?php echo $total_rejected; ?></div>

                <h3>Not Approval Leave</h3>
               
              </div>
            </div>
			 <div class="row" >
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2 >User Profile </h2>
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
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				  <div class="row">
				  <div class="col-sm-12" >
				 <p style="text-align:center"> <img src="images/img.jpg" alt="..." class="img-thumbnail" ></p>
				  </div>
				  </div>
				  <style>
				  
				 
				  </style>
                    <div class="row">
				  <div class="col-sm-4">
				 </div>
				   <div class="col-sm-6">
				 <table class="table-bordered" style="border:2px solid black;">
				 <tr>
				 <?php
				 $result=mysqli_query($con, "select * from  admin_add where name='$admin'");
				$fetch=mysqli_fetch_assoc($result);
				?>
				 <td> Name</td>
				 <td><?php echo $fetch['name']; ?></td>
				
				 </tr>
				  <tr>
				 <td>Email id</td>
				 <td><?php  echo $fetch['email']; ?></td>
				 </tr>
				 </table>
				  </div>
				   <div class="col-sm-2" >
						
				  </div>
				  </div> 
					

                  </form>
				  	
                </div>
             
              </div>
            </div>
          </div>
		  
		   <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Responsive example <small>Users</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
                          <li><a href="#"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
						</div>
                      <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                          Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                        </p>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>First name</th>
                              <th>Last name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                              <th>Extn.</th>
                              <th>E-mail</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Tiger</td>
                              <td>Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                              <td>5421</td>
                              <td>t.nixon@datatables.net</td>
                            </tr>
                            
                            
                            <tr>
                              <td>Lael</td>
                              <td>Greer</td>
                              <td>Systems Administrator</td>
                              <td>London</td>
                              <td>21</td>
                              <td>2009/02/27</td>
                              <td>$103,500</td>
                              <td>6733</td>
                              <td>l.greer@datatables.net</td>
                            </tr>
                            <tr>
                              <td>Jonas</td>
                              <td>Alexander</td>
                              <td>Developer</td>
                              <td>San Francisco</td>
                              <td>30</td>
                              <td>2010/07/14</td>
                              <td>$86,500</td>
                              <td>8196</td>
                              <td>j.alexander@datatables.net</td>
                            </tr>
                            <tr>
                              <td>Shad</td>
                              <td>Decker</td>
                              <td>Regional Director</td>
                              <td>Edinburgh</td>
                              <td>51</td>
                              <td>2008/11/13</td>
                              <td>$183,000</td>
                              <td>6373</td>
                              <td>s.decker@datatables.net</td>
                            </tr>
                            <tr>
                              <td>Michael</td>
                              <td>Bruce</td>
                              <td>Javascript Developer</td>
                              <td>Singapore</td>
                              <td>29</td>
                              <td>2011/06/27</td>
                              <td>$183,000</td>
                              <td>5384</td>
                              <td>m.bruce@datatables.net</td>
                            </tr>
                            <tr>
                              <td>Donna</td>
                              <td>Snider</td>
                              <td>Customer Support</td>
                              <td>New York</td>
                              <td>27</td>
                              <td>2011/01/25</td>
                              <td>$112,000</td>
                              <td>4226</td>
                              <td>d.snider@datatables.net</td>
                            </tr>
                          </tbody>
                        </table>

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

admin_total_leave.php
