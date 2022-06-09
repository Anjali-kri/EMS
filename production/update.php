<?php
error_reporting(0);
 include_once('connection.php');
if (isset($_POST["save"]))
{
	    $addno=$_POST['addno'];
        $class=$_POST['class'];
        $section=$_POST['section'];
	
	
    $q="insert into readdno value('$addno','$class','$section')";
$r=mysqli_query($con,$q);
if(mysqli_affected_rows($con)<0)
{
	echo"<script>alert('Sorry Error Occured');</script>";
}
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>
</head>
<body class="nav-md">
<form method="post">
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
	  
      <?php include"topnavigation.php"?>
      <!-- page content -->
	   <div class="right_col" role="main">
	      <div class="">
        <div class="page-title">
            <div class="title_left">
              <h3>Readmission Information</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
               
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
		  
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" >
              <div class="x_title">
                  <h2>update</h2>
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
                </div><!--end of page-->
				
          <div class="row">
		  <div class="col-sm-3">
		  <label>Admission number<span>*</span></label> 
		  <input type="text" class="form-control" name="addno"  required value="<?php echo $_REQUEST['id'];?>" readonly>
		  </div>
		  
		  <div class="col-sm-3">
		  <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="class"  required >
		  </div>
		  <div class="col-sm-3">
		  <label>section<span>*</span></label> 
		  <input type="text" class="form-control" name="section"  required >
		  </div>
		  </div><br>
		  <div class="row">
		  <div class="col-sm-4">
		  </div>
		  <div class="col-sm-4">
		   <input type="submit" class="btn btn-info" value="Save" name="save">
		   <form>
	      <input type="button" value="Back" class="btn btn-success " onClick="javascript:history.go(-1)" />
</form>
		</div>
		</div>
		</form>
		<div class="col-sm-4">
		</div>
		</div>
<?php include"footer.php"?>
 </div>
      <!-- /page content -->
    </div>
  </div>

<?php include"scriptfile.php"?>

</body>
</html>
