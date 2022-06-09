
<html lang="en">

<head>
  <?php
  include("head1.php");
  include "connection.php";
  error_reporting(0);
 $id=$_REQUEST['id'];
 $result=mysqli_query($con,"select * from  book_detail where id='$id'");
 $fetch=mysqli_fetch_assoc($result);
 
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
                  <h2>BOOK DETAILS <small>BOOKS OF DIFFERENT DEPARTMENT </small></h2>
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
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				  

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Book id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="id" value='<?php  echo $fetch['id']; ?>'>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Book Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12" name="book_name" value='<?php  echo $fetch['book_name']; ?>'>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Author Name</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="author_name" value='<?php echo $fetch['author_name']; ?>'>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Publisher's Name</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="publisher_name" value='<?php echo $fetch['publisher_name']; ?>'>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Price</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="price" value='<?php echo $fetch['price']; ?>'>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Subject code</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="s_code" value='<?php echo $fetch['sub_code']; ?>'>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Block</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <Select class="Select2_multiple form-control" name="block">
					  <option value="<?php echo $fetch['block'];  ?>"><?php echo $fetch['block'];  ?></option>
					  <?php
					  $result1=mysqli_query($con, "select * from block");
					 while($fetch1=mysqli_fetch_assoc($result1))
					 {
					  if($fetch1['block']==$fetch['block'])
					  {
						  
					  }
					  else
					  {
						?> <option value='<?php  echo $fetch1['block'];  ?>'><?php  echo $fetch1['block'];  ?></option><?php  
					  }
					 }
					  ?>
					   </select>
                      </div>
					  </div>
					  <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Self Number</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="self_name" value='<?php echo $fetch['self_no']; ?>'>
                      </div>
					  </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					  <button type="submit" class="btn btn-success" name="update">Update</button>
                        <button type="submit" class="btn btn-primary" name="can">Cancel</button> 
                      </div>
                    </div>

                  </form>
				  	 <?php
					if(isset($_POST['update']))
					{
					 $id=$_POST['id'];
					 $book_name=$_POST['book_name'];
					 $author_name=$_POST['author_name'];
					 $publisher_name=$_POST['publisher_name'];
					 $price=$_POST['price'];	   
					 $s_code=$_POST['s_code']; 
					 $block=$_POST['block'];
					 $self_name=$_POST['self_name'];
					mysqli_query($con,"update book_detail set book_name='$book_name', author_name='$author_name', publisher_name='$publisher_name', price='$price', sub_code='$s_code', block='$block', self_no='$self_name' where id='$id'");
					?>
					<script>window.location="book_update.php";</script>
					<?php
					}
					if(isset($_POST['can']))
					{
						header('Location:book_update.php');
					}
					 ?>
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
