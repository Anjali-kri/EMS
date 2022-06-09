     
<?php
 include_once('connection.php');
 error_reporting(0);
if (isset($_POST["save"]))
{
		$addno=$_POST['addno'];
    $hostel=$_POST['hostel'];
	$category=$_POST['category'];
	$typesofbed=$_POST['typesofbed'];
	$floor=$_POST['floor'];
	$room=$_POST['room'];
	$meal=$_POST['meal'];
	$monthfee=$_POST['monthfee'];

 $q="insert into hosteldetail values( '$addno','$hostel','$category','$typesofbed','$floor','$room','$meal','$monthfee')";
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

                
 <h2> <span class="glyphicon glyphicon-search">&nbsp;</span>hostels </h2>	

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
		 <label>Admission number<span>*</span></label> 
		  <input type="text" class="form-control" name="addno">  
		 </div>
		   <div class="col-sm-4">
		  <label>Hostelname<span>*</span></label>
                        <select class="select2_multiple form-control" style="padding:0px" name="hostel">
                          <option></option>
                          <option  value="gdhostel">gdhostel</option>
                          <option  value="ydhostel">ydhostel</option>
                          <option  value="hostel">mdhostel</option>
                         
                        </select>
		  </div>
		  <div class="col-sm-4">
		   <label>categories<span>*</span></label>
	                        <select class="select2_multiple form-control" style="padding:0px" name="category">
                          <option></option>
                          <option  value="girls">girls</option>
                          <option  value="boys">boys</option>
                        
                        </select>
		  </div>
		 </div>
		 <div class="row">
		 <div class="col-sm-4">
                      <label >Types Of beds</label><br>
                        <select class="select2_multiple form-control" style="padding:0px" name="typesofbed">
                          <option></option>
                          <option  value="singlebed">Singlebed</option>
                          <option  value="doublebed">Doublebed</option>
                          <option  value="fourbed">Fourbed</option>
                         
                        </select>
                    </div>
					<div class="col-sm-4">
		   <label>floor<span>*</span></label>
		   <input type="text" class="form-control" name="floor">
		  </div>
		  <div class="col-sm-4">
		   <label>Roomno</span></label>
		   <input type="text" class="form-control" name="room">
		  </div>
		  </div>
		  <div class="row">
		 <div class="col-sm-4">
                      <label >Types Of meals</label><br>
                        <select class="select2_multiple form-control" style="padding:0px" name="meal">
                          <option></option>
                          <option  value="Breakfast">Breakfast</option>
                          <option  value="Lunch">Lunch</option>
                          <option  value="Snacks">Snacks</option>
                           <option  value="Dinner">Dinner</option>
                        
                        </select>
                    </div>
				
 <div class="col-sm-4">
 <label>Total month fee</label>
 <input type="text" class="form-control" name="monthfee">
 
 
 
 </div>
  <div class="col-sm-4">
  </div>
		  
	</div>	  
		  
		  
		  
		  
		  
		  
       
		  <hr>
		  			<div class="row">
			 <div class="col-sm-4">
			 </div>
			  <div class="col-sm-4">
			  <input type="submit"value="SAVE" name="save" class="btn btn-success">	
			 </div>
		  <div class="col-sm-4">
		   </div>
		   </div>   
		   </form>
		  </div>
		 </div>
		 
		 
		 
		 
		 
		 
		</div>
<?php include"footer.php"?>
      </div>
      <!-- /page content -->
    </div>
  </div>
<?php include"scriptfile.php"?>
</body>
</html>
