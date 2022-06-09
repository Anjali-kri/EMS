
<html lang="en">

<head>
  <?php
  error_reporting(0);
  session_start();
$admin=$_SESSION['user_name'];
  include("head1.php");
  include "connection.php";
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
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Type <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <Select class="Select2_multiple form-control" name="type">
					   <option>choose type</option>
                        <option>Student</option>
					     <option>Teacher</option>
						   <option>Management</option>
						   </select>
					   
                      </div>
                    </div>
					<script>
					function getreg_no(val)
					{
						$.ajax
						({
							type:"POST",
							url:"getreg_no.php",
							data:"reg="+val,
							success:function(data)
							{
								$('#reg').val(data)
							}
						});
						
					}
					function get_bookno(val)
					{
						$.ajax
						({
							type:"POST",
							url:"get_bookno.php",
							data:"book_name="+val,
							success:function(data)
							{
								$('#book_name').val(data)
							}
						});
						
					}
					
					</script>

					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Library Enrollment Id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  
                        <input type="text" id="last-name"  required="required" class="form-control col-md-7 col-xs-12" name="lib_enrol" onblur="getreg_no(this.value);">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Registraton Number <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="reg" required="required" class="form-control col-md-7 col-xs-12" name="reg" readonly>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Book Id</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="book_id" onblur="get_bookno(this.value)";>
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Book Name</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="book_name" class="form-control col-md-7 col-xs-12" type="text" name="book_name" readonly >
                      </div>
                    </div>
					<div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Issue Date</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <?php
					  date_default_timezone_set('Asia/Kolkata');
					  $d=date('Y-m-d');
					  
					  ?>
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="issue_date"  value="<?php echo $d;?>" readonly>
                      </div>
                    </div>
					<?php
					if(isset($_POST['submit']))
					{
						
					$type=$_POST['type'];
					$reg=$_POST['reg'];
					$lib_no=$_POST['lib_enrol'];
					$book_id=$_POST['book_id'];
					$book_name=$_POST['book_name'];
					$issue_date=$_POST['issue_date'];
					
					
					//code to check book available or not
					$result_detail=mysqli_query($con, "select * from book_detail where id='$book_id'");
						$fetch_detail=mysqli_fetch_assoc($result_detail);
						$b_name=$fetch_detail['book_name'];
						$a_name=$fetch_detail['author_name'];
						$p_name=$fetch_detail['publisher_name'];
						$result_stock=mysqli_query($con, "select * from book_stock where book_name='$b_name' and author_name='$a_name' and publisher_name='$p_name'");
						$fetch_stock=mysqli_fetch_assoc($result_stock);
						if($fetch_stock['total_copy']>$fetch_stock['temp'])
						{
						//code to insert 
						$query="insert into issue_book_detail values('$type','$reg','$lib_no','$book_id','$book_name','$issue_date','','','')";
						$result=mysqli_query($con,$query);
								if(mysqli_affected_rows($con)>0)
								{
									
									$temp=$fetch_stock['temp']+1;
									mysqli_query($con, "update book_stock set temp='$temp' where book_name='$b_name' and author_name='$a_name' and publisher_name='$p_name' ");
									
								}
								else
								{
									echo "data failed";
								}
						
						}
						else
						{
							?>
							<script>alert("book not available");</script>
							<?php
						}
					}
					
                   ?>
    
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-success" name='submit'>Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
		  <div style="margin-top:1500px;"></div>

        

        


       
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
