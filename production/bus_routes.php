<?php
error_reporting(0);
session_start();
$admin=$_SESSION['user_name'];
include_once('connection.php');
if(isset($_POST['save']))
{
	$routes=$_POST['routes'];		
	$q="insert into busroutes(routes)values('$routes')";
	
$r=mysqli_query($con,$q);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include"heder.php"?>
</head>
<body class="nav-md">
  <div class="container body">
  <div class="main_container">
  <?php include"sidebar.php"?> 
  <?php include"footer.php"?> 
  
          <!-- page content -->
		  <div class="right_col" role="main">			
		  <div class="">
          <div class="page-title">
          <div class="title_left">
          </div>
		  </div>
		  
			<div class="clearfix">
			</div>
			
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
            <div class="x_title">
            <h2 style="color:#0077b3"><b>BUS ROUTES</b></h2>
			 
				  <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="print-link"><i class="fa fa-print"></i></a>
                  </li>
				  <li><a class="copy-link"><i class="fa fa-copy"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>				 
                </ul>
			
			<div class="clearfix">
			</div>
            </div>
			
			   <div class="x_content">
			   
			   <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">		   
               <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="routes">Routes<span class="required">*</span>
               </label>
               <div class="col-md-5 col-sm-5 col-xs-12">
               <input type="text" id="routes" name="routes" required="required" class="form-control col-md-7 col-xs-12">
               </div>
               </div>
		
					  
			<div class="ln_solid"></div>
            <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">    
            <button type="submit" style="border-radius:10px;background-color: #00b3b3"  class="btn btn-success" name="save">Save</button>
			<button type="submit" style="border-radius:10px;background-color:#5c8a8a" class="btn btn-primary" name="cancel">Cancel</button>
            </div>
		    </form>
            </div>
            </div>
            </div>
            </div>
            </div>
			</div>
			 <div style="margin-top:1500px;"></div>
			
			
			<!-- footer content -->
          <footer>
          <div class="copyright-info">
            <p class="pull-right">Magenoto Software Pvt.Ltd</p>
          </div>
          <div class="clearfix"></div>
          </footer>
        <!-- /footer content -->
        </div>
      <!-- /page content -->
        </div>
        </div>
<?php include"scriptfile.php"?> 
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>