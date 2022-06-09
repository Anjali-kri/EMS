<?php
$id=$_REQUEST['id'];
?>


<html lang="en">

<head>
  <?php
  error_reporting(0);
  include("head1.php");
  include "connection.php";
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
                  <h2>ISSUE BOOK DETAILS <small>ABC SCHOOL </small></h2>
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
				  <?php
				  $result=mysqli_query($con,"select * from issue_book_detail where book_id='$id' and return_date=''");
				  $fetch=mysqli_fetch_assoc($result);
				  
				  ?>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Type <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="text" name="type" class="form-control" value="<?php echo $fetch['type'];  ?>">
                       
					   
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Library Enrollment Id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  
                        <input type="text" id="last-name"  required="required" class="form-control col-md-7 col-xs-12" name="lib_enrol" value="<?php echo $fetch['lib_no'];  ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Registraton Number <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="reg" required="required" class="form-control col-md-7 col-xs-12" name="reg" value="<?php echo $fetch['reg_no'];  ?>" readonly>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Book Id</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="book_id" value="<?php echo $fetch['book_id'];  ?>">
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Book Name</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="book_name" class="form-control col-md-7 col-xs-12" type="text" name="book_name" value="<?php echo $fetch['book_name'];  ?>" readonly >
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Issue Date</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="issue_date"  value="<?php echo $fetch['issue_date'];  ?>" readonly>
                      </div>
                    </div>
					
					<?php
					  date_default_timezone_set('Asia/Kolkata');
					  $d=date('Y-m-d');
					  
					  $issue=strtotime($_POST['issue_date']);
						 $return=strtotime($_POST['Return_date']);
						  $diff=$return-$issue;
						 $days1= round($diff/(60*60*24));
						 $type=$fetch['type'];
						 $result1=mysqli_query($con,"select * from fine_book where type='$type'");
						 $fetch1=mysqli_fetch_assoc($result1);
						 $days=$days1-$fetch1['issue_days'];
						 if($days<0)
						 {
							$days=0; 
						 }
						 $fine=$fetch1['fine']*$days;
					  
					  ?>
					  <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Return Date</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="book_name" class="form-control col-md-7 col-xs-12" type="text" name="Return_date" readonly value="<?php echo $d;  ?>" >
                      </div>
                    </div>
					  <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">extra days</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="book_name" class="form-control col-md-7 col-xs-12" type="text" name="days" readonly value='<?php echo $days ?>' >
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Calculate fine</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="book_name" class="form-control col-md-7 col-xs-12" type="text" name="fine" readonly value="<?php echo $fine;  ?>">
                      </div>
                    </div>
					<?php
					if(isset($_POST['pay_fine']))
					{
						
					$type=$_POST['type'];
					$reg=$_POST['reg'];
					$lib_no=$_POST['lib_enrol'];
					$book_id=$_POST['book_id'];
					$book_name=$_POST['book_name'];
					$issue_date=$_POST['issue_date'];
					$Return_date=$_POST['Return_date'];
					$fine=$_POST['fine'];
					mysqli_query($con,"update issue_book_detail set fine='$fine' where book_id='$book_id' and return_date=''");
					?><script>
						window.location="return1.php";
						</script><?php
					}
					if(isset($_POST['cal']))
					{
						?><script>
						window.location="return1.php";
						</script><?php
						
					}
                   ?>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
					  <button type="submit" class="btn btn-success" name='pay_fine'>Pay fine</button>
                        <button type="submit" class="btn btn-primary" name="cal">Cancel</button>
                        
                      </div>
                    </div>

                  </form>
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
