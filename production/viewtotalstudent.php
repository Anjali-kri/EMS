<?php
error_reporting(0);
 include_once('connection.php');
 session_start();
$admin=$_SESSION['user_name'];
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>
 <script>
		
		function getsection(val)
		{
			
			$.ajax
		  ({
		   type: "POST",
		   url: "getsection.php",
		   data: 'adno='+val,
		   success: function(data)
		   {
			   $("#section").html(data);
		   }
		  
		   });	
		}
		

		
		</script>




</head>
<body class="nav-md">
<form method="post" >
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
      <?php include"topnavigation.php"?>
	  	  <div class="right_col" role="main">
	      <div class="">
          <div class="page-title">
            <div class="title_left">
              <h2></h2>
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
                        <select class="select2_multiple form-control" style="padding:0px" name="class" onchange="getsection(this.value)"> 
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
                        <select class="select2_multiple form-control" style="padding:0px"id="section" name="section";> 
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
					
					<span class="input-group-btn">
					
					<input type="submit"  class="btn btn-primary" style="border-radius:10px; background-color:#003b3 " value="Go" name="go">
					
					
					 <!--<input type="text" class="form-control"  style="border-radius:15px width:70%;border-color:#334949 " placeholder="Enter class...." name="search">-->
					</span>
					</div>
					</div>
		  </div>
		  </div>
		  </div>
		  </form>
		 
     
			<div class="x_panel">
                <div class="x_title">
                  <h2> <span class="glyphicon glyphicon-user">&nbsp;</span> Report( To Get Data Enter class )</h2>
				  
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
                   <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                 <div class="clearfix"></div>
                </div>
	
                <div class="x_content">
				<div class="page-title">
            <div class="title_left">
              <h2>Total student</h2>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
				<form method="post">
                 
                  <span class="input-group-btn">    
                  </span>
				</form>
                </div>
              </div>
            </div>
          </div>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Addno.</th>
                        <th>Fname</th>
						<th>class</th>
						<th>Roll</th>
						<th>Add date</th>
						
                      </tr>
					 </thead>
					 <?php
					 include "connection.php";
					if (isset($_POST['go']))
					{
					$class=$_POST['class'];
			        $section=$_POST['section'];
				
					$r1=mysqli_query($con ,"select * from studentdetail where class='$class'  and section='$section'");
					
					while($r=mysqli_fetch_assoc($r1))
					{
		
						?>
						<tr>
		<td><?php echo $r['addno'];?></td>
		<td><?php echo $r['fname'];?></td>
		<td><?php echo $r['class'];?></td>
		<td><?php echo $r['roll'];?></td>
		<td><?php echo $r['adddate'];?></td>
		
		</tr>
	<?php
	}
					}
	?>			
	</table>
	
	

      </div>
	  
    </div>
		<div style="margin-top:1500px;"></div>
      <!-- /page content -->
	  <?php include"footer.php"?>
  </div>
<?php include"scriptfile.php"?>
</body>
</html>
