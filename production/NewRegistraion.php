
<html lang="en">

<head>
  <?php
  include("head1.php");
  session_start();
$admin=$_SESSION['user_name'];
  include("connection.php");
  error_reporting(0);
  ?>
</head>
<body class="nav-md">

  <div class="container body">
    <div class="main_container">
	 <div class="navbar nav_title" style="border: 0;">
 
			
          <!-- menu prile quick info -->
          
		  
		   <?php
		   include "sidemenu.php";
		   ?>
          </div>
<!--abc paste-->
<?php
//include("menu.php");
?>
 
<?php
include("header.php");
?>
      <!-- page content -->
      <div class="right_col" role="main">

       <!--working part-->
	    <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>NEW REGISTRAION FORM <small>ABC SCHOOL</small></h2>
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
				  function apply(val)
				  {
					  $.ajax
					  ({
						  type:"POST",
						  url:'get_registration.php',
						  data:'emp='+val,
						  success:function(data)
						  {
							  alert(data);
							  $('#l_reg_no').val(data)
						  }
					  });
					  
				  }
				  
				  </script>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
				   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Type <span class="required" >*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <Select class="Select2_multiple form-control" name="type" onchange="apply(this.value);">
					   <option>choose type</option>
                        <option>Student</option>
					     <option>Teacher</option>
						   <option>Management</option>
						   </select>
					   
                      </div>
                    </div>
					

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Library Registration Number <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="l_reg_no" required="required" class="form-control col-md-7 col-xs-12" name="l_reg" readonly>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Registration Number <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                     <input list="browsers" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="reg">
					<datalist id="browsers">
					<?php
					$result1=mysqli_query($con, "select addno from  studentdetail ");
					while($fetch1=mysqli_fetch_assoc($result1))
					{
						?>
						<option value="<?php  echo $fetch1['addno'];  ?>" class="form-control"><?php  echo $fetch1['addno'];  ?>
						<?php
					}

				?>	

				</datalist>
					 
					 </div>
                    </div>
					<?php
					if(isset($_POST['submit']))
					{
					$type=$_POST['type'];
					$l_reg=$_POST['l_reg'];
					$reg=$_POST['reg'];
					$query="insert into new_registration values('$type','$l_reg','$reg')";
					$result=mysqli_query($con,$query);
					}
				?>
    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					   <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        <button type="submit" class="btn btn-primary">Cancel</button>
                       </div>
                    </div>

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
