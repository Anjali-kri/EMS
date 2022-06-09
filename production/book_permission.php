
<html lang="en">

<head>
  <?php
  include("head1.php");
  session_start();
$admin=$_SESSION['user_name'];
  include "connection.php";
  error_reporting(0);
  ?>

  

</head>

<body class="nav-md">

  <div class="container body">


    <div class="main_container">
	 <div class="navbar nav_title" style="border: 0;">
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
                  <h2>BOOK DETAILS <small>BOOKS OF DIFFERENT DEPARTMENT </small></h2>
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
				  

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Type <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <Select class="Select2_multiple form-control" name="type">
					   <option>choose type</option>
                        <option>Student</option>
					     <option>Teacher</option>
						   <option>Management</option>
						   </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">number of books issue once <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12" name="book_issue_once">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">issue days</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="issue_days">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">One day fine</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="one_day_fine">
                      </div>
                    </div>
					<?php
					if(isset($_POST['submit']))
					{
					$type=$_POST['type'];
					$book_issue_once=$_POST['book_issue_once'];
					$issue_days=$_POST['issue_days'];
					$one_day_fine=$_POST['one_day_fine'];
					$result=mysqli_query($con,"select * from  fine_book where type='$type'");
					$total=mysqli_num_rows($result);
					if($total>0)
					{
					?><script>alert("data already exist in database");</script><?php	
					}
					else
					{
						$result1=mysqli_query($con,"insert into  fine_book values('$type','$book_issue_once','$issue_days','$one_day_fine')");
						?><script>alert("data save in database");</script><?php
					}
					
					}
					
					?>
					
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					  <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        <button type="submit" class="btn btn-primary" name="can">Cancel</button> 
                      </div>
                    </div>

                  </form>
				  	 
                </div>
              </div>
            </div>
			<div style="margin-top:1500px;"></div>
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
