<?php
	session_start();
   $admin=$_SESSION['user_name'];
 include_once('connection.php');
 error_reporting(0);
if (isset($_POST["save"]))
{
   $room=$_POST['room'];
   $beds=$_POST['beds'];
   
   
	 
$q="insert into adminhostel values('$room','$beds','$beds')";
 $r=mysqli_query($con,$q); 
	   
	

if(mysqli_affected_rows($con)<0)
{
	echo"<script>alert('Sorry Error Occured');</script>";
}
}


	$sql="select roomno from adminroom ";
	$r=mysqli_query($con,$sql);
	
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
			  

                  
                  <h2><span class="glyphicon glyphicon-home"></span>&nbsp; Bed Information</h2>

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


		 

					<div class="col-sm-3">
		  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Room no</label><br><br>
                     
                        <select class="select2_multiple form-control" style="padding:0px"required name="room" > 
                          <option> --Select--</option>
<?php 

					while($result11=mysqli_fetch_assoc($r))
					{
						?>
						<option value="<?php echo $result11['roomno']?>"><?php echo $result11['roomno']?></option>
					<?php
					}
					?>



                        </select>
                    </div>
					</div>
<div class="row">
		 					<div class="col-sm-3">
		  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Total beds</label>

                       <input type="text" class="form-control" required name="beds" > 
                         
                    </div>
					</div>
</div>
</div>
				<hr>
						<div class="row">
			 <div class="col-sm-4" >
			 </div>
			  <div class="col-sm-4">
			  <input type="submit"value="SAVE " name="save"  style=" background-color:#9f8ad1;color:white;border-radius:25px">	
			 </div>
			 
		  <div class="col-sm-4">

		   </div>
		   </form>
		   </div>   
		   </div>
	  
	  <div style="margin-top:1500px;"></div>
<?php include"footer.php"?>
 </div>
      <!-- /page content -->
    </div>
  </div>

<?php include"scriptfile.php"?>

</body>
</html>
