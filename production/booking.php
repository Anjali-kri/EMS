<?php 
error_reporting(0);
include_once('connection.php');
if(isset($_POST['save']))
{
	$sql2="select * from studentdetail";
	$result2=mysqli_query($con,$sql2);
	$flag=0;
	$sid=$_POST['sid'];
	
		while($fetch2=mysqli_fetch_assoc($result2))
		{
			if($sid==$fetch2['addno'])
			{
				$flag=1;
				break;
			}
			
			
		}
	if($flag==1)
	{
	
    $allotment=$_POST['allotment'];
	$q="insert into booking value('','$sid','$allotment')";
	$r=mysqli_query($con,$q);
	$sql="select * from adminhostel where roomno='$allotment'";
	echo "allocation:".$allotment;
	$result=mysqli_query($con,$sql);
	$fetch=mysqli_fetch_assoc($result);
	$temp=$fetch['tempbed']-1;

	mysqli_query($con,"update adminhostel set tempbed='$temp' where roomno='$allotment'");
	
	
	
	if(mysqli_affected_rows($con)>0)
{
	echo"<script>alert('Data Save Successfully');</script>";
	header('Location:seatallocate.php');
}
}
else
{
 ?> <script> alert("please input correct admission no.");</script><?php	
}	

		
}

?>










<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>
</head>
<body class="nav-md">
<form method="post" >
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
      <?php include"topnavigation.php"?>
	  <?php 
	  $id=$_REQUEST['id'];

	  ?>
	  
	  <!--pagecontent-->
	  
	  <div class="right_col" role="main">
	      <div class="">
        <div class="page-title">
            <div class="title_left">
              <h3>booking Information </h3>

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
			  

                  
                  <h2><span class="glyphicon glyphicon-user"></span>&nbsp; booking </h2>

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
		  <label>student id<span>*</span></label>
		   <input type="text" class="form-control"  required name="sid">
		  </div>
		   <div class="col-sm-4">
		   <label>Allotment<span>*</span></label>
		   <input type="text" class="form-control"  required name="allotment" value="<?php echo $id; ?>">
				</div>
				</div><br>
				<br>
				<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
				<input type="submit"value="SAVE " name="save" class="btn btn-info">	
				</div>
				<div class="col-sm-4">
				</div>
				</div>
</div>
				
		<?php include"footer.php"?>

      </div>
      <!-- /page content -->
    </div>
  </div>

  
		 </form> 
  <?php include"scriptfile.php"?>

</body>
</html>