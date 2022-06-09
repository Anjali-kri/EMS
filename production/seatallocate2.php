<?php
 include_once('connection.php');
 error_reporting(0);

?>	 
	 
	 <!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>
<script>
		
		function getfloor(val)
		{
			
			$.ajax
		  ({
		   type: "POST",
		   url: "getfloor.php",
		   data: 'adno='+val,
		   success: function(data)
		   {
			   $("#floor").html(data);
		   }
		  
		   });	
		}
		</script>

<style>
.as
{
	background-color:#1a3663;
	color:white;
<!--background:linear-gradient(to right, #00ffff 0%, #ff99cc 100%);	-->
}
.abc
{
	color:white;
	padding-top:10px;
}
.pq:hover
{
	background:#d3e4ff;
}

</style>









</head>
<body class="nav-md">
<form method="post">
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
      <?php include"topnavigation.php"?>
	  
	  
	  <div class="right_col" role="main">
	      <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>SEAT ALLOCATION</h3>
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
 <h2> <span class="glyphicon glyphicon-search">&nbsp;</span> Student's Seat Allocate </h2>	

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
				
				

<div class="row">
 <div class="col-sm-4">
		 <label>Block<span>*</span></label> 
		  <select class="form-control" name="block" onchange="getfloor(this.value)"> 
		  <option>--select--</option>
					<?php
					                         
						 $r=mysqli_query($con,"select * from room");
						 
					while($row=mysqli_fetch_assoc($r))
					{
						?>
						<option value="<?php echo $row['block']?>"><?php echo $row['block']?></option>
					<?php
					}
					?>	
           </select>					
		 </div>
		 		 <div class="col-sm-4">
		 <label>Floor<span>*</span></label> 

	
		   <select class="select2_multiple form-control" style="padding:0px" name="floor" id="floor"> 
             <option></option>
			 </select>
		  </div>
		 		 <div class="col-sm-4">
				 </div>
				 </div>
		 
		<hr>
		<div class="row">
			 <div class="col-sm-4">
			 </div>
			  <div class="col-sm-4">
			  <input type="submit" value="Search" name="search"  style=" background-color:#9f8ad1;color:white ;border-radius:25px;height:30px;width:60px" >	
			 </div>
		  <div class="col-sm-4">
		   </div>
              </div>
			  
			  









			  
			</div>
			<div class="x_panel">
                <div class="x_title">
                  <h2> <span class="glyphicon glyphicon-user">&nbsp;</span>Hostel room</h2>
				  
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
	
                <div class="x_content">
				<div class="page-title">
            <div class="title_left">
              <h3>seat List</h3>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
				
                
                  <span class="input-group-btn">    
                  </span>
			
                </div>
              </div>
			 
            </div>
			
			</div>
			<?php
			if(isset($_POST['search']))
			{
				$block=$_POST['block'];
			$floor=$_POST['floor'];
				$result1=mysqli_query($con,"select * from adminroom where block='$block' and floor='$floor'");
				$fetch1=mysqli_fetch_assoc($result1);
			?>
						<?php
			if(isset($_POST['search']))
			{?>
				<label>block</label>
				<span> <?php echo $block ?></span>
				<label>floor</label>
				<span> <?php echo $floor ?></span>
				<label>Total no. of rooms</label>
				<span> <?php echo $fetch1['room'];?></span>
				

             <table class="table table-responsive">
			<tr class='as'>
			<th> Room No. </th>
			<th>Total Bed</th>
			<th> Availabel</th>
			<th colspan="2"><p style="padding-left:100px"> Action</p></th>
			
			</tr>
			<?php
			
				
			$block=$_POST['block'];
			$floor=$_POST['floor'];
			$result=mysqli_query($con,"select * from adminroom where block='$block' and floor='$floor'");
			
			while($fetch=mysqli_fetch_assoc($result))
			{
				$roomno=$fetch['roomno'];
				$result12=mysqli_query($con,"select * from adminhostel where roomno='$roomno'");
				$fetch2=mysqli_fetch_assoc($result12);
				
				?>
				<tr class='pq'>
				<td><?php echo $fetch['roomno']; ?></td>
				<td><?php echo $fetch2['totalbed']; ?> </td>
				<td><?php echo $fetch2['tempbed']; ?></td>
				<td><?php
				if($fetch2['tempbed']==0)
				{ ?>
					<a href="#" class="btn btn-info btn-sm" style="border-radius:15px"> Booked</a>
				<?php
				}
				else
				{
					?>
<a href="booking.php?id=<?php echo $fetch['roomno']; ?>" class="btn btn-info btn-sm" style="border-radius:15px"> Booking</a>
				<?php
				}

				?>
				</td>
				
				
				<td><a href="show.php?id=<?php echo $fetch['roomno']; ?>" class=" btn btn-danger btn-sm " style="border-radius:15px">Show Details</a></td>
				</tr>
				<?php
			}
			}
			?>
			</table>     					 
		  <?php
			}
			else
			{
				?>
								<label>block</label>
				<span> <?php echo $block ?></span>
				<label>floor</label>
				<span> <?php echo $floor ?></span>
				<label>Total no. of rooms</label>
				<span> <?php echo $fetch1['room'];?></span>
				

             <table class="table table-responsive">
			<tr class='as'>
			<th> Room No. </th>
			<th>Total Bed</th>
			<th> Availabel</th>
			<th colspan="2"><p style="padding-left:100px"> Action</p></th>
			
			</tr>
			<?php
			$rmax=mysqli_query($con,"select max(id) as maximumid from booking ");
			$rowmax=mysqli_fetch_assoc($rmax);
			$maxid=$rowmax['maximumid'];
			$rmaxroomno=mysqli_query($con,"select *  from booking where id='$maxid' ");
			$rowmaxroomno=mysqli_fetch_assoc($rmaxroomno);
			$allotno=$rowmaxroomno['allot'];
		
				$result123=mysqli_query($con,"select * from adminhostel where roomno='$allotno'");
				$fetch23=mysqli_fetch_assoc($result123);
				
				?>
				<tr class='pq'>
				<td><?php echo $allotno; ?></td>
				<td><?php echo $fetch23['totalbed']; ?> </td>
				<td><?php echo $fetch23['tempbed']; ?></td>
				<td><?php
				if($fetch23['tempbed']==0)
				{ ?>
					<a href="#" class="btn btn-info btn-sm" style=" border-radius:15px"> Booked</a>
				<?php
				}
				else
				{
					?>
<a href="booking.php?id=<?php echo $fetch['roomno']; ?>" class="btn btn-info btn-sm" style="border-radius:15px"> Booking</a>
				<?php
				}

				?>
				</td>
				
				
				<td><a href="show.php?id=<?php echo $fetch23['roomno']; ?>" class=" btn btn-danger btn-sm " style="border-radius:15px">Show Details</a></td>
				</tr>
			
			</table>
			<?php
			}
			?>
		 
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
