     
<?php
  session_start();
$admin=$_SESSION['user_name'];
 include_once('connection.php');
 error_reporting(0);
if (isset($_POST["save"]))
{
	$id=$_POST['id'];
    $breakfast=$_POST['breakfast'];
	$lunch=$_POST['lunch'];
	$snacks=$_POST['snacks'];
	$dinner=$_POST['dinner'];
	$total=$_POST['total'];
	
 $q="insert into meal values('$id','$breakfast','$lunch','$snacks','$dinner','$total')";
 $r=mysqli_query($con,$q);
if(mysqli_affected_rows($con)<0)
{
	echo"<script>alert('Sorry Error Occured');</script>";
}
}

?>	 
	 
	 
	 
	 
	 
	 <!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>
 <script>	
function sum2()
{

	var a=parseInt(document.getElementById('lunch').value);
	var b=parseInt(document.getElementById('breakfast').value);
	var c=parseInt(document.getElementById('snacks').value);
	var d=parseInt(document.getElementById('dinner').value);
	 
	
	 document.getElementById('total').value=a+b+c+d;
}
function hello()
{
	alert("hello");
}
</script>
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
              <h3>Hostels Information</h3>
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

                
 <h2> <span class="glyphicon glyphicon-search">&nbsp;</span>Hostel Meals Price</h2>	

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
<div class="col-sm-2">
		 <label>id<span>*</span></label> 
		  <input type="text" class="form-control" name="id" >  
		 </div>
		 <div class="col-sm-2">
		 <label>Breakfast<span>*</span></label> 
		  <input type="text" class="form-control" name="breakfast" value="0" id="breakfast">  
		 </div>
		   <div class="col-sm-2">
		  <label>Lunch<span>*</span></label>
           <input type="text" class="form-control" name="lunch" value="0" id="lunch">
		  </div>
		 		   <div class="col-sm-2">
		  <label>Snacks<span>*</span></label>
           <input type="text" class="form-control" name="snacks" value="0" id="snacks" >
		  </div>
		  <div class="col-sm-2">
		  <label>Dinner<span>*</span></label>
           <input type="text" class="form-control" name="dinner" value="0" id="dinner" onblur="sum2();">
		  </div>
		  <div class="col-sm-2">
		  <label>Total<span>*</span></label>
           <input type="text" class="form-control" name="total" value="0" id="total">
		  </div>
		  </div>
		
       
		  <hr>
		  			<div class="row">
			 <div class="col-sm-4">
			 </div>
			  <div class="col-sm-4">
			  <input type="submit"value="SAVE" name="save" style=" background-color:#9f8ad1 ; color:white ;border-radius:25px;" onclick="sum2();">	
		
			 </div>
		  <div class="col-sm-4">
		   </div>
		   </div>   
		   </form>
		  </div>
		 </div>
	 
		</div>
		<div style="margin-top:1500px;"></div>
<?php include"footer.php"?>
      </div>
      <!-- /page content -->
    </div>
  </div>
<?php include"scriptfile.php"?>
</body>
</html>
