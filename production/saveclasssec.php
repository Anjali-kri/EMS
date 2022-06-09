
<?php
error_reporting(0);
session_start();
$admin=$_SESSION['user_name'];
 include_once('connection.php');
if (isset($_POST["save"]))
{
	
	$class=$_POST['class'];
	$section=$_POST['section'];
	
    $q="insert into classsection values('$class','$section')";
$r=mysqli_query($con,$q);
if(mysqli_affected_rows($con)>0)
{
	echo"data save";
}
else
{
	echo"not save";
}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>

 <script>
		
		function getsec(val)
		{
			
			$.ajax
		  ({
		   type: "POST",
		   url: "getsec.php",
		   data: 'adno='+val,
		   success: function(data)
		   {
			   $("#section2").html(data);
		   }
		  
		   });	
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
              <h3>Student Information</h3>
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

                
 <h2> <span class="glyphicon glyphicon-search">&nbsp;</span>Select Criteria</h2>	

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
				
				

				<form method="post">
				
				<div class="row">
		 <div class="col-sm-4">
		  <!--<input type="text" class="form-control">-->
		  
		  <div class="form-group">
                      <label><h2>Class</h2></label>
                      <!--<div class="col-md-9 col-sm-9 col-xs-12">-->
                        <select class="select2_multiple form-control" style="padding:0px" name="class"  onchange="getsec(this.value)"> 
                          <option>Select</option>
                          <option  value="1">1</option>
                          <option  value="2">2</option>
                          <option  value="3">3</option>
                          <option  value="4">4</option>
                          <option  value="5">5</option>
                          <option  value="6">6</option>
						  <option  value="7">7</option>
						  <option  value="8">8</option>
						  <option  value="9">9</option>
						  <option  value="10">10</option>
                        </select>
					
                     <!-- </div>-->
                    </div>
					</div>

		  
		  
		  
		 <div class="col-sm-4">
		 
		 <div class="form-group">
                      <label><h2>Section</h2></label>
                      <!--<div class="col-md-9 col-sm-9 col-xs-12">-->
                        <select class="select2_multiple form-control" style="padding:0px" name="section";> 
                          <option>Select</option>
                          <option  value="A">A</option>
                          <option  value="B">B</option>
                          <option  value="C">C</option>
                          <option  value="D">D</option>
                          <option  value="E">E</option>
                          <option  value="F">F</option>
                        </select>
                     <!-- </div>-->
                    </div>
					</div><br><br>
					
					 <div class="col-sm-4">
			<span style="background-color:#4ddbff; color:#00bfff;" id="section2"></span>
			</div>
					
					

	
		  </div>
		  
		  <div class="row">
		    <div class="col-sm-4">
	
			</div>
		  <div class="col-sm-4">
		  <input type="submit"value="SAVE" name="save" style="border-radius:15px; background-color:#4ddbff;color:white ;border-radius:25px;height:30px;width:60px" >
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

  
		 </form> 
  <?php include"scriptfile.php"?>

</body>
</html>