<?php 
include_once('connection.php');
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
	  <!--pagecontent-->
	  
	  <div class="right_col" role="main">
	      <div class="">
        <div class="page-title">
            <div class="title_left">
              <h3>Hostel Information </h3>

            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
               
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
		  

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
				 <div class="x_panel">
                <div class="x_title">
                  <h2><span class="glyphicon glyphicon-user">&nbsp;</span>hostel report</h2>
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
				
                 <table id="datatable-buttons" class="table table-striped table-responsive table-bordered">
                    <thead>
                      <tr>
                        <th>registration_no</th>
						 <th>name</th>
						  <th>Action</th>
						  
						  					  <?php
											  include "connection.php";

$id=$_REQUEST['id'];
error_reporting(0);
$search=$_POST['search'];
$sql="select * from booking where allot='$id'";
$r=mysqli_query($con,$sql);

 $room_no=$_REQUEST['id'];

	while($fetch=mysqli_fetch_assoc($r))	
	{
     $sid=$fetch['sid'];
	 
	$result_sid=mysqli_query($con,"select * from studentdetail where addno='$sid' ");
	$fetch_sid=mysqli_fetch_assoc($result_sid);
	$name=$fetch_sid['fname']." ".$fetch_sid['lname'];	
					 
	?>
		<tr>
		
	    <td><?php echo $fetch['sid'];?></td>
		<td><?php echo $name;?></td>
		<td> <button name="release" class="btn btn-success btn-sm" style="border-radius:15px" > <a href="seat.php?id=<?php echo $fetch['sid'];?>">Release</a></button></td></td>
		</tr>
		<?php
		if(isset($_POST['release']))
		{
			$room_no=$_REQUEST['id'];
			$id=$fetch['sid'];
			echo "id ".$id;
			echo  "room no".$room_no;
			mysqli_query($con,"delete from booking where sid='$id'");
			$result=mysqli_query($con,"select * from adminhostel where roomno='$room_no'");
			$fetch=mysqli_fetch_assoc($result);
			$temp=$fetch['tempbed'];
			echo "temp".$temp;
			$temp2=$temp+1;
			echo "bed".$temp2;
			mysqli_query($con,"update adminhostel set tempbed='$temp' where roomno='$room_no'");
			header('Location:seatallocate.php');
		}
	}
	?>			
    </table>
				
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
				