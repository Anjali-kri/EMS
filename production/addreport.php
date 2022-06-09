
<?php
error_reporting(0);
session_start();
$admin=$_SESSION['user_name'];
include_once('connection.php');
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

                
 <h2> <span class="glyphicon glyphicon-list-alt">&nbsp;</span>Student Report</h2>	

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
					<li><a class="print-link"><i class="fa fa-print"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div><!--end of page-->									
      <!-- page content -->
	  <div class="row">
	  <div class="col-sm-6">
		<label style="width:150%; border:3px solid; color:grey;border-radius:15px; padding-left:25px;"> ANNUAL: FROM &nbsp; <input type="date"  name="date1" >
	  TO <input type="date" name="date2">
	  </div>
	  	       <div class="title_right">
			   <div class="col-sm-6">
              <div class="  form-group ">
                <div class="input-group">
                  <input type="submit" class="form-control"  style="border-radius:15px;border-color:#b3d9ff; padding-left:35px;padding-bottom:15px;padding-right:25px;" name="go" value="submit">       
	  </div>
	 </div>
	 </div>
	  </label>
	  </form>
	  <div class="row">                                 
  <table class="table table-striped">
    <thead>
      <tr>
	    <th>CLASS</th> 
		<th>BOYS</th>
		<th>GIRLS</th>
		<th>Total_STUDENT</th>
		<th>NEW ENROLL</th>
		<th>TOTAL COLLECTION</th>
	   
      </tr>
	      </thead>
	  
	 					  <?php	
						  include "connection.php";
						  error_reporting(0);
$go=$_POST['go'];
$result_min=mysqli_query($con,"select min(class) as minimum from classsection");
$result_max=mysqli_query($con,"select max(class) as maximum from classsection");
$fetch_min=mysqli_fetch_assoc($result_min);
$fetch_max=mysqli_fetch_assoc($result_max);

for($i=$fetch_min['minimum'];$i<=$fetch_max['maximum']; $i++)
{
$result_yearly=mysqli_query($con, "select count(*) as total from yearlyfeecoll where class='$i' and mode='readdmission'");
	$fetch_yearly=mysqli_fetch_assoc($result_yearly);
	if(isset($_POST['go']))
	{
		$date1=$_POST["date1"];
$date2=$_POST["date2"];
$result_newenroll=mysqli_query($con,"select count(*) as ab from studentdetail where adddate  between '$date1' and '$date2' ");
$fetch_date=mysqli_fetch_assoc($result_newenroll);

		$result123=mysqli_query($con, "select sum(monthlyfee) as month from feecollect where class='$i'");
	$fetch=mysqli_fetch_assoc($result123);
	$result_class=mysqli_query($con,"select count(*) as total , sum( case when gender = 'male' then 1 else 0 end ) as male, sum( case when gender = 'female'then 1 else 0 end ) as female from studentdetail where adddate  between '$date1' and '$date2' and class='$i'");
	
	while($fetch_class=mysqli_fetch_assoc($result_class))
	{
		?>
		<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $fetch_class['male'];?></td>
		<td><?php echo $fetch_class['female'];?></td>
		<td><?php echo $fetch_class['total'];?></td>
		<td><?php  echo $fetch_yearly['total']; ?> </td>
		<td><?php echo $fetch['month'];?></td>
		</tr>
	<?php
	}
		
	}
	else
	{
	$result123=mysqli_query($con, "select sum(monthlyfee) as month from feecollect where class='$i' ");
	$fetch=mysqli_fetch_assoc($result123);

	$result_class=mysqli_query($con,"select count(*) as total , sum( case when gender = 'male' then 1 else 0 end ) as male, sum( case when gender = 'female'then 1 else 0 end ) as female from studentdetail where class='$i'");
	
	while($fetch_class=mysqli_fetch_assoc($result_class))
	{
		?>
		<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $fetch_class['male'];?></td>
		<td><?php echo $fetch_class['female'];?></td>
		<td><?php echo $fetch_class['total'];?></td>
		<td> <?php  echo $fetch_yearly['total']; ?> </td>
		<td><?php echo $fetch['month'];?></td>
		</tr>
	<?php
	}
	}
}
	?>	
<?php

if(isset($_POST["go"]))
{
$date1=$_POST["date1"];
$date2=$_POST["date2"];


$result_newenroll=mysqli_query($con,"select count(*) as ab from studentdetail where adddate  between '$date1' and '$date2' ");
$fetch_date=mysqli_fetch_assoc($result_newenroll);
}
?>
	<tbody>
  </table>
</div>
<hr style="width:100%;border:3px solid;">
<div class="row">
<div class="col-sm-12">
<label style="width:20%; border:3px solid ;color:grey;padding-left:25px;"> Total Fee Collection:</label>
<?php
	$result_sum=mysqli_query($con, "select sum(yearlyfee)as year from  yearlyfeecoll");
	$fetch_sum=mysqli_fetch_assoc($result_sum);
	$totalcollection=$fetch_sum["year"];

?>
<span style="padding-left:20px;"><input type="text" value="<?php  echo $totalcollection; ?>">
</span>
</div>
</div><br>
<div class="row">
<div class="col-sm-12">
<label style="width:20%; border:3px solid ;color:grey; padding-left:25px;"> Total Admission:</label>
<?php
  $result_total=mysqli_query($con," select count(*) as total from  studentdetail");
$fetch_total=mysqli_fetch_assoc($result_total);
$totaladd=$fetch_total["total"];


?>

<span style="padding-left:20px;"><input type="text" value="<?php echo $totaladd; ?>">
</span>
</div>
</div><br>
<div class="row">
<div class="col-sm-12">
<label style="width:20%; border:3px solid ;color:grey; padding-left:25px;"> Total Old Admission:</label>
<?php

$result_old=mysqli_query($con," select count(*) as old from yearlyfeecoll where mode='Readdmission'");
$fetch_old=mysqli_fetch_assoc($result_old);
$totalold=$fetch_old["old"];

?>


<span style="padding-left:20px;"><input type="text" value="<?php echo $totalold; ?>">
</span>
</div>
</div><br>
<div class="row">
<div class="col-sm-12">
<label style="width:20%; border:3px solid ;color:grey; padding-left:25px;"> Total New Admission:</label>
<?php

$result_new=mysqli_query($con," select count(*) as new from yearlyfeecoll where mode='Addmission'");
$fetch_new=mysqli_fetch_assoc($result_new);
$totalnew=$fetch_new["new"];

?>

<span style="padding-left:20px;"><input type="text" value="<?php echo $totalnew; ?>">
</span>
</div>
</div><br>
<div class="row">
<div class="col-sm-12">
<label style="width:20%;border:3px solid;color:grey;padding-left:25px;">Total Hostel fee:</label>


<?php

$result_new1=mysqli_query($con, "select sum(wifi+meal+fourbed+triplebed+doublebed+singlebed)as hostel from  adminhostelfee");
$fetch_new1=mysqli_fetch_assoc($result_new1);
$totalnew1=$fetch_new1["hostel"];

?>
<span style="padding-left:20px;"><input type="text"  value="<?php echo $totalnew1;?>">
</div>
</div>

	  <hr style="width:100%;border:3px solid;">
	  </div>
	  </div>

	  </div>
	  	  <div style="margin-top:1500px;"></div>
<?php include"footer.php"?>
      
      <!-- /page content -->
    </div>
  </div>
<?php include"scriptfile.php"?>
</body>
</html>
