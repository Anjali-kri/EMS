<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?></head>
<body class="nav-md">
<form method="post" >
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
      <?php include"topnavigation.php"?>
	  
	  <!--pagecontent-->
	  
	  <div class="right_col" role="main">
	      <div class="">
        <div class="page-title">
            <div class="title_left">
              <!--<h2>  AttendanceInformation </h2>-->

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
			  

                  
                  <h2><span class="glyphicon glyphicon-user"></span>&nbsp; Student Attendance</h2>

</p>
                  

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
						  		  <div class="col-sm-3">
		  <label>Class<span>*</span></label><br>
                        <select class="select2_multiple form-control" style="padding:0px" name="hostel">
                          <option></option>
                          <option  value="1">1</option>
                          <option  value="2">2</option>
                          <option  value="3">3</option>
                         
                        </select>
		                </div>
		  						  		  <div class="col-sm-3">
		  <label>Section<span>*</span></label><br>
                        <select class="select2_multiple form-control" style="padding:0px" name="hostel">
                          <option></option>
                          <option  value="a">a</option>
                          <option  value="b">b</option>
                          <option  value="c">c</option>
                         
                        </select>
		               </div>
		  <div class="col-sm-3">
		  <label>date<span>*</span></label></br>
		  <input type="date">
		  </div>
		  <input type="submit" value="SAVE " name="save" class="btn btn-info " style="border-radius:15px ;  background:red;" >	       
		  
		  
		  </div>
		  </div>
		  
		  
		  
		  			<div class="x_panel">
                <div class="x_title">
                  <h2> <span class="glyphicon glyphicon-user">&nbsp;</span>Guardian Report( To Get Data Enter Addmission no.)</h2>
				  
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
              <h2>Get List</h2>
            </div>
            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
				
                  <!--<input type="date" class="form-control"  style="border-radius:15px width:70%;border-color:#334949 " placeholder="Enter Date...." name="search">-->
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
                        <th>Roll</th>
						<th>Name</th>
						<th>Attendance</th>
						
                      </tr>
					 </thead>
					 </table>
		  
		  
		  
		  
					  
				</div>
				</div>

					  <?php include"footer.php"?>

      </div>
      <!-- /page content -->
    </div>
  </div>

  
		 </form> 
  <?php include"scriptfile.php"?>

</body>
</html>