   
<?php
error_reporting(0);
include('connection.php');
if (isset($_POST["save"]))
{

	$class=$_POST['class'];
    $addno1=$_POST['addno1'];
	$session=$_POST['session'];
    $q="insert into feecollect values ('$class','$addno1','$session')";
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




<?php
error_reporting(0);
include('connection.php');
if (isset($_POST["save1"]))
{

	$classb=$_POST['classb'];
    $addno2=$_POST['addno2'];
	$addmission=$_POST['addmission'];
    $q="insert into yearlyfeecoll values ('$classb','$addno2','$addmission')";
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


 <script type="text/javascript">
		
		function getmonthlyfee(val)
		{
			
			$.ajax
		  ({
		   type: "POST",
		   url: "getmonthlyfee.php",
		   data: 'adno='+val,
		   success: function(data)
		   {
			   $("#totalfee").html(data);
		   }
		  
		   });	
		}
		
		
		
		
		
		
		function getyearlyfee(val)
		{
			
			$.ajax
		  ({
		   type: "POST",
		   url: "getyearlyfee.php",
		   data: 'adno='+val,
		   success: function(data)
		   {
			   $("#yearlyfee").html(data);
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
      <!-- page content -->
      
	  <div class="right_col" role="main">
	      <div class="">
        <div class="page-title">
            <div class="title_left">
              <h3>Fee collection Information</h3>
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
                  <h2> Monthly Fee..</h2>
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
                </div><!--end of page-->
			
				<div class="row">
				<div class="col-sm-4">
				
								<label> class</label><br><br>
                       <select class="select2_multiple form-control" style="padding:0px" onclick="getmonthlyfee(this.value)" name="class";> 
                          <?php
						  $r=mysqli_query($con,"select * from fee");
					      while($row=mysqli_fetch_assoc($r))
					       {
						  ?>
                          <option  value="<?php echo $row['class'];?>"><?php echo $row['class'];?></option>
                          <?php
						   }
						   ?>
                        </select>
                  <span class="input-group-btn">    
                  </span>
				  </div>
		
				<div class="col-sm-4">
				<label> Enter Addnission no</label><br><br>
                       
<input type="text"  class="select2_multiple form-control" name="addno1"><br>

				</div>
				<div class="col-sm-4">
			<label> session</label><br><br>
                       <select class="select2_multiple form-control" style="padding:0px"  name="session";> 
                          <option> Select..</option>
                          <option  value="Jan-march">Jan-march</option>
                          <option  value="April-june">April-june</option>
                          <option  value="july-Sep">july-Sep</option>
                          <option  value="Oct-Dec">Oct-Dec</option>
                        </select>
                  <span class="input-group-btn">    
                  </span>
				</div>

				</div><br><br>
				</form>
				<div class="row">
	  <div class="col-sm-4">
	  <label> Total fee</label><br>
	 <select id="totalfee" name="totalfee">
	 <option></option>
	 </select>
	  </div>
			<div class="col-sm-4">
			</div>
<div class="col-sm-4">
			</div>

			</div><br><br>
				
				
				<div class="row">
				<div class="col-sm-6">
				</div>
				
				
				
				
				
				
				<div class="col-sm-6">
              <input type="submit" value="collect" name="save"class=" btn btn-primary">
	               </form>
	               </div>               
	              </div>
	             </div>
				</div>
				</div>
				 
				 
				 <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" >
              <div class="x_title">
                  <h2>Addmission/Readdmission Fee..</h2>
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
                </div><!--end of page-->
			
				<div class="row">
				<div class="col-sm-4">
				
								<label> class</label><br><br>
                       <select class="select2_multiple form-control" style="padding:0px" onclick="getyearlyfee(this.value)" name="classb";> 
                          <?php
						  $r=mysqli_query($con,"select * from fee");
					      while($row=mysqli_fetch_assoc($r))
					       {
						  ?>
                          <option  value="<?php echo $row['class'];?>"><?php echo $row['class'];?></option>
                          <?php
						   }
						   ?>
                        </select>
                  

				  
				  
                  <span class="input-group-btn">    
                  </span>
				  </div>
		
				<div class="col-sm-4">
				<label> Enter Addnission no</label><br><br>
                       
<input type="text"  class="select2_multiple form-control" name="addno2">
                  

				</div>
				<div class="col-sm-4">
				                    <p><br><br><br>
                      <input type="radio" name="addmission"  value="addmission">Addmission<!--class="flat" name="gender" id="Father" value="Father" /><!--checked="" required /> f:-->
                      <input type="radio" name="addmission" value="readdmission">Readdmission<!--flat" name="gender" id="genderF" value="Mother" />-->
					  
                    </p>
				</div>
				</div><br><br>
				</form>
				<div class="row">
	  <div class="col-sm-3">
	  <label> yearlyfee</label><br>
	 <select id="yearlyfee" name="yearlyfee">
	 <option></option>
	 </select>
	  </div>
	  </div>
	  <div class="row">
	   <div class="col-sm-6">
	   </div>
	  <div class="col-sm-6">
 <input type="submit" value="collect" name="save1"class=" btn btn-primary">
</div>
</div>
</div>
</div>
</div>
				</div><br><br>
<?php include"footer.php"?>
 </div>
      <!-- /page content -->
    </div>
  </div>

<?php include"scriptfile.php"?>

</body>
</html>
