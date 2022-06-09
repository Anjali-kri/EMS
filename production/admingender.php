     
<?php
 include_once('connection.php');
 error_reporting(0);
 session_start();
$admin=$_SESSION['user_name'];
if (isset($_POST["save"]))
{
   $block=$_POST['block'];
   $gender=$_POST['gender'];
   $floor=$_POST['floor'];
	
	
 $q="insert into room values('$block','$gender','$floor')";
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
		
		function getfloor(val)
		{
			
			$.ajax
		  ({
		   type: "POST",
		   url: "getfloor.php",
		   data: 'adno='+val,
		   success: function(data)
		   {
			   $("#floor").html(data);
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

                
 <h2> <span class="glyphicon glyphicon-search">&nbsp;</span>Admin gender</h2>	

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
		 <label>Block<span>*</span></label> 
		  <input type="text" class="form-control" name="block"  id="block" onchange="getfloor(this.value)"> 
				


				
		 </div>
		 
		 		 <div class="col-sm-2">
		 <label>gender<span>*</span></label> 

	
		                         <select class="select2_multiple form-control" style="padding:0px" name="gender"> 
                    
                          <option  name="male" value="male">male</option>
                          <option  name="male" value="female">female</option>
		  </select>
		 </div>
		 		 		 <div class="col-sm-2">
		 <label>Floor<span>*</span></label> 
		  <input type="text" class="form-control" name="floor" id="floor">  
		  
		  
		  
		  
		  

		 </div>
		 </div>
       
		  <hr>
		  			<div class="row">
			 <div class="col-sm-4">
			 </div>
			  <div class="col-sm-4">
			  <input type="submit"value="SAVE" name="save" style='background-color:#9f8ad1;color:white;border-radius:25px'>	
		
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
