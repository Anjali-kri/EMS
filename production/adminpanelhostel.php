
<?php
 include_once('connection.php');
 error_reporting(0);
if (isset($_POST["save"]))
{
    $hostel=$_POST['hostel'];
	$category=$_POST['category'];
	
 $q="insert into adminhostel values('$hostel','$category')";
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
	  <form method="post">
      <?php include"topnavigation.php"?>
      <!-- page content -->
      	  <div class="right_col" role="main">
	      <div class="">
        <div class="page-title">
            <div class="title_left">
              <h3>Student Information </h3>

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
			  

                  
                  <h2><span class="glyphicon glyphicon-home"></span>&nbsp; hostel information</h2>

</p>
                  

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
				<div class="col-sm-4">
				<label> Roomid</label>
				<input type="text" name="hostel">
				</div>
				<div class="col-sm-4">
				<label> Total no. of beds</label>
				<input type="text" name="category">
				</div>
				</div>

				<hr>
						<div class="row">
			 <div class="col-sm-4" >
			 </div>
			  <div class="col-sm-4">
			  <input type="submit"value="SAVE " name="save" class="btn btn-success">	
			 </div>
			 
		  <div class="col-sm-4">

		   </div>
		   </form>
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
