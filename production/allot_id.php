
<html lang="en">

<head>
  <?php
  error_reporting(0);
  include("head1.php");
  include "connection.php";
  $pub_no=$_REQUEST['id'];
  // book details
  $result_book=mysqli_query($con, "select * from book_detail where publisher_name='$pub_no'");
  $fetch_book=mysqli_fetch_assoc($result_book);
  $book_name=$fetch_book['book_name'];
  $id=$fetch_book['id'];
  //issue book
  $result_issue=mysqli_query($con, "select * from issue_book_detail where book_name='$book_name' ");
  $fetch_issue=mysqli_fetch_assoc($result_issue);
  $book_id=$fetch_issue['book_id'];
  $return_date=$fetch_issue['return_date'];
  
  
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
                  <h2>Alloted Id for Issue book <small>ABC SCHOOL </small></h2>
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
				  <table class="table table-striped table-border table-responsive">
				  <tr>
					  <th>#</th>
					  <th>Book id</th>
					  <th>Book Name</th>
					  <th>Publisher Name</th>
					  <th>Author's Name</th>
					  <th>Action</th>
				  </tr>
				  <?php   
				  $pub_name=$_REQUEST['id'];
				  $book_name=$_REQUEST['id1'];
				  $result=mysqli_query($con,"select * from book_detail where publisher_name='$pub_name' and book_name='$book_name'");
				  $i=0;
				  while($fetch=mysqli_fetch_assoc($result))
				  {
					  ?>
					  <tr>
					  <td><?php echo ++$i; ?></td>
					  <td><?php echo $fetch['id'];  ?></td>
					  <td><?php echo $fetch['book_name'];  ?></td>
					  <td><?php echo $fetch['publisher_name'];  ?></td>
					  <td><?php echo $fetch['author_name'];  ?></td>
					  <td><a href="book_issue.php?id=<?php  echo $fetch['id']; ?>&key=<?php echo $fetch['book_name']; ?>" class="btn btn-success " style="width:100px;border-radius:20px"> Issue book</a></td>
					  </tr>
					  <?php
				  }
				 
				  
				  ?>
				  <tr>
				  
				  </tr>
					
				  
				  </table>
                  
                </div>
              </div>
            </div>
          </div>

        

        


       
</div>
      
		<?php
		include("footer.php");
		?>


        

    </div>

  </div>

  
<?php

include("script.php");

?>

</body>

</html>
