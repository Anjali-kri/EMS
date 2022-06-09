
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
      <input type="text" class="form-control" placeholder="Search for registration no........." name="search">
      <span class="input-group-btn">
       <!-- <button class="btn btn-default" type="button" name="go">Go!</button> -->
      </span>
    </div><!-- /input-group -->
 </form>
 	<?php
	
				$search=$_POST['search'];
				$query="select * from issue_book_detail where reg_no='$search'";
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
				  <form method="post" action="return1.php">
				  <input type="submit" name="return" value="return" align="right" class="btn btn-round" width="150px">
				  </form>
				  <table class="table table-striped table-border table-hover" >
				<tr>
				<th>#</th>
				<th>Type</th>
				<th>Reg.no</th>
				<th>lib.no</th>
				<th>Book Id</th>
				<th>Book Name</th>
				<th>Issue date</th>
				<th>Operation</th>
				</tr>
					<?php
				$i=1;
			while($fetch=mysqli_fetch_assoc($result))
				{
					$i+1;
				
					?>
				
					<tr>
					<td><?php echo $i;  ?></td>	
					<td><?php echo $fetch['type']; ?></td>
					<td><?php echo $fetch['reg_no']; ?></td>
					<td><?php echo $fetch['lib_no']; ?></td>
					<td><?php echo $fetch['book_id']; ?></td>
					<td><?php echo $fetch['book_name']; ?></td>
					<td><?php echo $fetch['issue_date']; ?></td>
					<td><span class="fa fa-plus" style="color:red; padding-left:30px" data-toggle="modal" data-target="#<?php echo $fetch['book_id']?>" ></td>
					</tr>
										  <div class="modal fade" id="<?php echo $fetch['book_id']?>" role="dialog">
    <div class="modal-dialog">
					 <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Return Book </h4>
        </div>
        <div class="modal-body">
		
		<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Regisration Number</label>
                      <div>
                        <input id="middle-name" type="text" name="reg" value="<?php echo $fetch['reg_no']; ?>">
                      </div>
                    </div><br>
					<div class="form-group">
					<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                      <div>
                        <input id="middle-name" type="text" name="reg" value="<?php echo "##" ?>">
                      </div>
                    </div><br>
					<div class="form-group">
					<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">library Number</label>
                      <div>
                        <input id="middle-name" type="text" name="reg" value="<?php echo $fetch['lib_no']; ?>">
                      </div>
                    </div><br>
					<div class="form-group">
					<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Issue Date</label>
                      <div >
                        <input id="middle-name" type="text" name="reg" value="<?php echo $fetch['issue_date']; ?>" readonly>
                      </div>
                    </div><br>
					<div class="form-group">
					<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Return Date</label>
                      <div>
					  <?php
					 date_default_timezone_set('Asia/Kolkata');
						$today = date("d-m-Y   h:i");
					  ?>
                        <input id="middle-name" type="text" name="reg" value="<?php echo $today; ?>" readonly>
                      </div>
                    </div><br>
					<div class="form-group">
					<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Fine </label>
                      <div>
                        <input id="middle-name" type="text" name="reg" value="<?php echo "##" ?>">
                      </div>
                    </div><br>
					
        </div>
        <div class="modal-footer">
		
          <button type="submit" class="btn btn-success" name='submit'>Return Book</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
	  </div>
	  </div>
	  </div>
					<?php
					//$i=$i+1;
				}
				
					?>
				
					
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
