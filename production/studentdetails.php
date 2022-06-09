
<?php
error_reporting(0);
 include_once('connection.php');
if (isset($_POST["save"]))
{
	$class=$_POST['class'];
	$section=$_POST['section'];
    $q="insert into studentclass values('$class','$section')";
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
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
      <?php include"topnavigation.php"?>
	  <!--start of page-->
	  
	  <div class="right_col" role="main">
	      <div class="">
          <div class="page-title">
            <div class="title_left">
              <h2>Student Information</h2>
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
                  <h2>Select criteria</h2>
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
				<form method="post">
		 <div class="col-sm-3">
		  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">class</label><br><br>
                      <!--<div class="col-md-9 col-sm-9 col-xs-12">-->
                        <select class="select2_multiple form-control" style="padding:0px" name="class"> 
                          <option>Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select>
                     <!-- </div>-->
                    </div>
		  </div>
		  <div class="col-sm-3">
		   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Section</label><br><br>
                      <!--<div class="col-md-9 col-sm-9 col-xs-12">-->
                        <select class="select2_multiple form-control" style="padding:0px" name="section"> 
                          <option>Select</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                        </select>
                      <!--</div>-->
					  </div>
					  </div>
                 <div class="col-sm-6">   
					<!--<label> Search By Keyword</label><br/><br/>
	  <div class="title_right">-->
             <!-- <div class="pull-right">-->
                <!--<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>-->
                <!--<input style="width:350px;height:30px;" type="text" placeholder="Search by student name rollno.Enrollno." class="autocomplete-input input tooltip-button ui-autocomplete-input" data-placement="bottom" title="" name="" data-original-title="Type 'jav' to see the available tags..." autocomplete="off" name="search">
                <i class="glyph-icon icon-search"></i>-->
              <!--</div>
            </div>-->
				</div>	
					
				</diV>	
					<br><br>
			<input type="submit"value="save" name="save">	

</form>				   
                        </div>
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