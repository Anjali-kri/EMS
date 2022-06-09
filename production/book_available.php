
<html lang="en">

<head>
  <?php
  include("head1.php");
   session_start();
$admin=$_SESSION['user_name'];
  include "connection.php";
  error_reporting(0);
  ?>
</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">
	 <div class="navbar nav_title" style="border: 0;">
	<!-- menu prile quick info -->
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
                  <h2>Search Book</h2>
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
				<form method="POST">
                  <div class="row">
				  
				  <div class="col-sm-3">
				  <input type="text" name="book_name" placeholder="search for Book Name..." class="form-control">
				  </div>
				   <div class="col-sm-3">
				   <button class="btn btn-success "style="width:100px;border-radius:20px" name="search">search</button>
				  </div>
				   <div class="col-sm-4">
				  </div>
				  </div>
				  
               <?php
			   if(isset($_POST['search']))
			   {
				  $book_name=$_POST['book_name']; 
			   $result=mysqli_query($con, "select * from book_stock where book_name='$book_name'");
				
				
			   }
			   
			   ?>
				</form>
                </div>
              </div>
            </div>
          </div>

           <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Book Avability </h2>
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
				 
				  <table class="table table-striped table-border table-hover" >
				<tr>
				<th>#</th>
				<th>Book Name</th>
				<th>Publisher Name</th>
				<th>Avability</th>
				<th>Operation</th>
				
				</tr>
				<?php
				$i=1;
				while($fetch=mysqli_fetch_assoc($result))
				{
					$available=$fetch['total_copy']-$fetch['temp'];
					
					?>
					<tr>
					<td><?php echo $i++; ?> </td>
					<td><?php echo $fetch['book_name'];?></td>
					<td><?php echo $fetch['publisher_name'];?></td>
					<td><?php echo $available ?></td>
					<?php
					if($available==0)
					{
						?>
					<td><label class="btn btn-danger" style="width:100px;border-radius:20px">Not Available</label></td>	
					<?php
					}
					else
					{
					?>
					<td><a href="allot_id.php?id=<?php echo $fetch['publisher_name'];?>&id1=<?php echo $fetch['book_name'];?>" class="btn btn-success" style="width:100px;border-radius:20px">Issue Book</a></td>
					<?php	
					}
					?>
					
					</tr>
					<?php
					
				}
				
				?>
					</table>

				</div>
              </div>
            </div>
          </div>
		  <div style="margin-top:1500px;"></div>

        

        


       
</div>
      
		


     

    </div>


  </div>

		
  
<?php

include("script.php");

?>

</body>

</html>
