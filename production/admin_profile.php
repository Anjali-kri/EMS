
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
  <style>
				  .output
				  {
					font-size:25px ;
					padding-left:40px;
					
					
				  }
				  td
				  {
					  font-size:25px;
					  padding:5px;
				  }
				  table
				  {
					  width:100%;
					  height:10%;
				  }
				  </style>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
	 <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>EMS</span></a>
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
                  <h2 >User Profile </h2>
                 
                  <div class="clearfix"></div>
                </div>
                    <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				  <div class="row">
				  <div class="col-sm-3">
				   
				  <p style="padding-left:10px"> <img src="images/img.jpg" alt="..." class="img-thumbnail" ></p>
				   <?php
				   $result=mysqli_query($con, "select * from  admin_add where name='$admin'");
				$fetch=mysqli_fetch_assoc($result);  ?>
				<p><span class="output"> <?php echo $fetch['name']; ?> </span><br>
				<i class="fa fa-map-marker " style="font-size:15px;padding:5px;">&nbsp;&nbsp; Boaring Road, Patna Bihar 800001</i><br>
				 <i class="fa fa-envelope" style="font-size:15px;padding:5px;">&nbsp;&nbsp;<?php  echo $fetch['email']; ?></i><br>
				 <button class="btn btn-success"><i class="fa fa-edit"></i> Edit Profile</button></p>
				  <span class="output"> </span><br>
				  <?php
				  if($emp_id=='SuperAdmin')
				  {
				  ?>
				  <label class="btn btn-success btn-block" ><a href="create_user.php" style="color:white;padding-right:30px;">Create users Account</a></label>
				  <label class="btn btn-success btn-block" ><a href="update_user_account.php" style="color:white;padding-right:30px;">Update users Account</a></label>
				  <!-- <label class="btn btn-success btn-block" ><a href="admin_payslip.php" style="color:white;padding-right:30px;">Generate Payslip</a></label> -->
				  <?php
				  }
				  ?>
				  </div>
				  <div class="col-sm-9">
				 

                    <div class="profile_title">
                      <div class="col-md-6">
                        <h2>User Activity Report</h2>
                      </div>
                      <div class="col-md-6">
                        
                      </div>
                    </div>
                    <!-- start of user-activity-graph -->
                    <div id="graph_bar" style="width:100%; height:280px;"></div>
                    <!-- end of user-activity-graph -->

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Recent Activity</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                          <!-- start recent activity -->
                          <ul class="messages">
                            <li>
                              <img src="images/img.jpg" class="avatar" alt="Avatar">
                              <div class="message_date">
                                <h3 class="date text-info">24</h3>
                                <p class="month">May</p>
                              </div>
                              <div class="message_wrapper">
                                <h4 class="heading">Desmond Davison</h4>
                                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                <br />
                                <p class="url">
                                  <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                  <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                </p>
                              </div>
                            </li>
                            <li>
                              <img src="images/img.jpg" class="avatar" alt="Avatar">
                              <div class="message_date">
                                <h3 class="date text-error">21</h3>
                                <p class="month">May</p>
                              </div>
                              <div class="message_wrapper">
                                <h4 class="heading">Brian Michaels</h4>
                                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                <br />
                                <p class="url">
                                  <span class="fs1" aria-hidden="true" data-icon=""></span>
                                  <a href="#" data-original-title="">Download</a>
                                </p>
                              </div>
                            </li>
                            <li>
                              <img src="images/img.jpg" class="avatar" alt="Avatar">
                              <div class="message_date">
                                <h3 class="date text-info">24</h3>
                                <p class="month">May</p>
                              </div>
                              <div class="message_wrapper">
                                <h4 class="heading">Desmond Davison</h4>
                                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                <br />
                                <p class="url">
                                  <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                  <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                                </p>
                              </div>
                            </li>
                            <li>
                              <img src="images/img.jpg" class="avatar" alt="Avatar">
                              <div class="message_date">
                                <h3 class="date text-error">21</h3>
                                <p class="month">May</p>
                              </div>
                              <div class="message_wrapper">
                                <h4 class="heading">Brian Michaels</h4>
                                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                                <br />
                                <p class="url">
                                  <span class="fs1" aria-hidden="true" data-icon=""></span>
                                  <a href="#" data-original-title="">Download</a>
                                </p>
                              </div>
                            </li>

                          </ul>
                          <!-- end recent activity -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                          <!-- start user projects -->
						  <style>
						  .thead
						  {
						  font-size:10px;
						  
						  }
						  </style>
                          <table class="table table-striped table-responsive">
                            <thead >
                              <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th> Company</th>
								<th>End_date</th>
								<th>Action</th>
                              </tr>
                            </thead>
                            <tbody class="thead">
							<?Php
							$result1=mysqli_query($con, "select * from project_assign where emp_id='$emp_id'");
							$fetch1=mysqli_fetch_assoc($result1);
							$p_code=$fetch1['project_name'];
							$result2=mysqli_query($con, "select * from  project_list where proj_code='$p_code'");
							$i=0;
							while($fetch2=mysqli_fetch_assoc($result2))
							{
							?>
                              <tr>
							  <td><?Php echo ++$i; ?></td>
							  <td><?Php echo $fetch2['proj_name'];  ?></td>
							  <td><?Php echo $fetch2['company'];  ?></td>
							  <td><?Php echo $fetch2['last_date'];  ?></td>
							  <td><input type="button" id="<?Php echo $fetch2['proj_code'];?>"  class="btn btn-info view" value="view more"></td>
                                
                              </tr>
                              
                             <?php
							}
							 ?>
							 
                             
                            </tbody>
                          </table>
                          <!-- end user projects -->

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                            photo booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>
                      </div>
                    </div>
                  
				  </div>
				  
				  </div>
                    </form>
				  	
                </div>
             
              </div>
            </div>
          </div>
<!--  modal start -->
 <script>  
 $(document).ready(function(){  
 $(document).on('click', '.view', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {
					alert(employee_id);
                $.ajax({  
                     url:"get_profile_project.php",  
                     method:"POST",  
                     data:{pro_name:employee_id},  
                     success:function(data){  
                          $('#project').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });
 });
  </script> 
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Project Details</h4>  
                </div>  
                <div class="modal-body" id="project">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>   
  <!--  modal close -->     
</div>
		<?php
		include("footer.php");
		?>
    </div>
  </div>

<?php
include("script.php");
?>
 <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>
  
 
  <!-- icheck -->
 

  <!-- image cropping -->
  <script src="js/cropping/cropper.min.js"></script>
  <script src="js/cropping/main.js"></script>

  <!-- daterangepicker -->
  <script type="text/javascript" src="js/moment/moment.min.js"></script>
  <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>

  <!-- chart js -->
  <script src="js/chartjs/chart.min.js"></script>

  <!-- moris js -->
  <script src="js/moris/raphael-min.js"></script>
  <script src="js/moris/morris.min.js"></script>

  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>

  <script>
    $(function() {
      var day_data = [{
        "period": "Jan",
        "Hours worked": 80
      }, {
        "period": "Feb",
        "Hours worked": 125
      }, {
        "period": "Mar",
        "Hours worked": 176
      }, {
        "period": "Apr",
        "Hours worked": 224
      }, {
        "period": "May",
        "Hours worked": 265
      }, {
        "period": "Jun",
        "Hours worked": 314
      }, {
        "period": "Jul",
        "Hours worked": 347
      }, {
        "period": "Aug",
        "Hours worked": 287
      }, {
        "period": "Sep",
        "Hours worked": 240
      }, {
        "period": "Oct",
        "Hours worked": 211
      }];
      Morris.Bar({
        element: 'graph_bar',
        data: day_data,
        xkey: 'period',
        hideHover: 'auto',
        barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
        ykeys: ['Hours worked', 'sorned'],
        labels: ['Hours worked', 'SORN'],
        xLabelAngle: 60
      });
    });
  </script>
  
  
</body>

</html>
