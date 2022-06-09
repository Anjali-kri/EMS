
<html lang="en">

<head>
  <?php
  include("head1.php");
  include "connection.php";
  error_reporting(0);
  ?>
  	

  

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">
	 <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SMS</span></a>
			</br>
			<div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Admin</h2>
            </div>
          </div>
		  <div class="page-header">
		  </div>
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
                  <h2>RETURN BOOK <small>ABC SCHOOL</small></h2>
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
                <div class="row">
				
				 <div class="col-lg-6">
				 <form method="POST">
    <div class="input-group">
      <input list="browsers" class="form-control" placeholder="Search for Lib. registration no...." name="search" autocomplete="off" style="width:260px">
	  <datalist id="browsers">
	  <?php
	 $result12=mysqli_query($con,"select * from new_registration");
	while($fetch12=mysqli_fetch_assoc($result12))
	{
		?>
		 <option value="<?php echo  $fetch12['L_reg']; ?>">
		<?php
	}
	  
	  ?>
  
</datalist>
      <span class="input-group-btn">
       <!-- <button class="btn btn-default" type="button" name="go">Go!</button> -->
	   
      </span>
    </div><!-- /input-group -->
 </form>
 	<?php
	
				$search=$_POST['search'];
				$query="select * from issue_book_detail where lib_no='$search' and return_date=''";
				$result=mysqli_query($con,$query);
				$total=mysqli_num_rows($result);
				//echo "total number of book is ". $total;
				//$fetch=mysqli_fetch_assoc($result);
			 // echo $fetch['issue_date'];
			  if($total==0)
			 {
				 echo "Sorry!!  data not found";
			 }
			?>

	</div>
	<div class="col-lg-6">
	
	</div>
				
				<br><br>
		       </div>
				
                </div>
              </div>
            </div>
          </div>

           <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>RETURN BOOK <small>ABC SCHOOL</small></h2>
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
				  <form method="post" action="">
				  <input type="submit" name="return" value="return" align="right" class="btn btn-round" width="150px">
				  </form>
				  <table class="table table-striped table-border">
				<tr>
				<th>#</th>
				<th>Type</th>
				<th>Reg.no</th>
				<th>lib.no</th>
				<th>Book Id</th>
				<th>Book Name</th>
				<th>Issue date</th>
				<th >fine</th>
				<th> operation</th>
				</tr>
					<?php
				
			while($fetch=mysqli_fetch_assoc($result))
				{
					
					echo  $fetch['book_name'];
					?>
				
					<tr>
					<td><?php echo $i+1; ?></td>	
					<td><?php echo $fetch['type']; ?></td>
					<td><?php echo $fetch['reg_no']; ?></td>
					<td><?php echo $fetch['lib_no']; ?></td>
					<td><?php echo $fetch['book_id']; ?></td>
					<td><?php echo $fetch['book_name']; ?></td>
					<td><?php echo $fetch['issue_date']; ?></td>
					<td><a href="get_calculate_fine.php?id=<?php echo $fetch['book_id']; ?>" class="btn btn-success" style="width:125px;border-radius:20px">check fine</a></td>
					<td><a href="get_return.php?id=<?php echo $fetch['book_id']; ?>" class="btn btn-success" style="width:125px;border-radius:20px">BOOK RETURN</a></td>
					</tr>
					<?php
					//$i=$i+1;
				}
				
					?>
					<!-- <a href="return_book_details.php?id=<?php echo $fetch['reg_no']?>"> -->
					
					</table>
					</div>
              </div>
            </div>
          </div>

        

        


       
</div>
      
		


     

    </div>


  </div>

		
  
<?php

include("script.php");

?>

</body>

</html>
