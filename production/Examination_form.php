<?php
include_once('connection.php');
session_start();
$admin=$_SESSION['user_name'];
if(isset($_POST['save']))
{

	$studentname=$_POST['studentname'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$email=$_POST['email'];
	$mobno=$_POST['mobno'];
	$class=$_POST['class'];	
	$board=$_POST['board'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$photo=$_POST['photo'];	
	$category=$_POST['category'];		
	$q="insert into examination(studentname,address,city,state,pin,email,mobno,class,board,gender,dob,photo,category)values('$studentname','$address','$city','$state','$pin','$email','$mobno','$class','$board','$gender','$dob','$photo','$category')";

$r=mysqli_query($con,$q);
if(mysqli_affected_rows($con)>0)      
				{
					echo" data save";
				}
				else
				{
					echo" NOT save";
				}
}				
?>	

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include"heder.php"?>
</head>
<body class="nav-md">
<div class="container body">
<div class="main_container">
    <?php include"sidebar.php"?> 
	<?php include"footer.php"?> 
<!-- page content -->

<div class="right_col" role="main">			
		  <div class="">
          <div class="page-title">
          <div class="title_left">
          </div>
		  </div>
		  
			<div class="clearfix">
			</div>
			
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
            <div class="x_title">
            <h2 style="color:#0077b3"><b>EXAMINATION FORM</b></h2>
			 
			<div class="clearfix">
			</div>
            </div>
			
               <div class="x_content">
               <br />
			   <form id="demo-form2" data-parsley-validate  method="post">
			   <div class="row">
			   <div class="col-sm-4">
              <div class="form-group"><br>
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="studentname">StudentName<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="studentname" name="studentname" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
		    </div>
		
			 
			 <div class="col-sm-4">       
            <div class="form-group"><br>
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="address">Address<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="address" name="address" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
		    </div>
          		 
			<div class="col-sm-4">
            <div class="form-group"><br>
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="city">City<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="city" name="city" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
		    </div>
			</div>
			
			
			<div class="row"> 
	        <div class="col-sm-4">
			<div class="form-group"><br>
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="state">State<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="state" name="state" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					</div>
				
					
			
	        <div class="col-sm-4">
			<div class="form-group"><br>
             <label class="control-label col-md-4 col-sm-4 col-xs-12" for="pin">Pin<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="pin" name="pin" required="required" class="form-control col-md-7 col-xs-12">        
                      </div>
                    </div>
					</div>
				
				<div class="col-sm-4">
				<div class="form-group"><br>
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="email">Email<span class="required">*</span>
                </label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
				</div>
				</div>
				
				
					
	<div class="row">
	<div class="col-sm-4">
	<div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="mobno">MobileNo<span class="required"></span>
    </label>
    <div class="col-md-10 col-sm-10 col-xs-12">
    <input type="text" id="mobno" name="mobno" required="required" class="form-control col-md-7 col-xs-12">
    </div>
    </div>
    </div>
	
					
		  <div class="col-sm-4">
		  <div class="form-group"><br>
          <label class="control-label col-md-4 col-sm-4 col-xs-12" for="class">Class<span class="required">*</span>
          </label>
          <div class="col-md-10 col-sm-10 col-xs-12">
          <input type="text" id="class" name="class" required="required" class="form-control col-md-7 col-xs-12">
          </div>
          </div>
		  </div>
		  
					
	<div class="col-sm-4">
    <div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Board<span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
	<select class="form-control" name="board">
		  <option>---Select---</option>
		  <option>CBSE</option>
		  <option>ICSE</option>
          <option>BSEB</option>		  
          </select>
    </div>
    </div>
	</div>
	</div>
	
	         <div class="row">
			 <div class="col-sm-4">
             <div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Category<span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
	<select class="form-control" name="category">
		  <option>---Select---</option>
		  <option>GEN</option>
		  <option>OBC</option>
          <option>SC</option>
          <option>ST</option>
          <option>OTHERS</option>		  
          </select>
    </div>
    </div>
	</div>
	
	 
	        <div class="col-sm-4">
			<div class="form-group"><br>
            <label for="dob" class="control-label col-md-4 col-sm-4 col-xs-12">Date Of Birth</label>
            <div class="col-md-10 col-sm-10 col-xs-12">
			<input type="Date" class="form-control col-md-7 col-xs-12"  name="dob">
                    </div>
                    </div>
					</div>
			        
			<div class="col-sm-4">
			<div class="form-group"><br>
            <label for="photo" class="control-label col-md-4 col-sm-4 col-xs-12">Photo</label>
            <div class="col-md-10 col-sm-10 col-xs-12">
		    <input type="file" name="photo">
            </div>
            </div>
		    </div> 
			</div>
			
			<div class="row">
			<div class="col-sm-4">
			<div class="form-group"><br>
            <label for="gender" class="control-label col-md-4 col-sm-4 col-xs-12">Gender</label>
		    <input type = "radio"  name="gender" value="male">Male
            <input type = "radio"  name="gender" value="female">Female
            </div>
            </div>
		    </div> 
			
			
	
            <div class="ln_solid"></div>
            <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">    
            <button type="submit" style="border-radius:10px;background-color: #00b3b3" class="btn btn-success" name="save">Save</button>
			<button type="submit" style="border-radius:10px;background-color:#5c8a8a" class="btn btn-primary" name="cancel">Cancel</button>
            </div>
		    </form>
            </div>
            </div>
            </div>
            </div>
			</div>
			
			
	

			<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2 style="color:#0077b3"><b>EXAMINATION LIST</b></h2>
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
					</li>
                  <li><a class="print-link"><i class="fa fa-print"></i></a>
                  </li>
				  <li><a class="copy-link"><i class="fa fa-copy"></i></a>
                  </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <p class="text-muted font-13 m-b-30">
                   The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                  </p>
				  
  
		 <div class="row"> 
         <div class="col-lg-2">		   
         <div class="input-group">
          <form method="post">
         <input type="text" name="search" class="form-control" placeholder="Search for Class..." > 
		 <span class="input-group-btn">	  
        </span>
         </form>	
         </div>
         </div>
         </div>				  
				  
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr style="background-color:#00cccc;color:white">
                        <th><b>Student Name</b></th>
                        <th><b>Address</b></th>
                        <th><b>City</b></th>
                        <th><b>State</b></th>   
						<th><b>Pin</b></th>                        
						<th><b>Email</b></th>
						<th><b>MobileNo</b></th>
                        <th><b>Class</b></th>
                        <th><b>Board</b></th>
						<th><b>Gender</b></th>                        
						<th><b>Dob</b></th>
						<th><b>Photo</b></th>
                        <th><b>category</b></th>
                        <th><b>Id<b></th>
                      </tr>
                    </thead>					
					
					
<?php
include "connection.php";
error_reporting(0);
$search=$_POST['search'];
if($search!="")
{	

$sql2="select * from examination where class='$search'or category='$search'";	  
  
	
$r=mysqli_query($con,$sql2);
	
while($rows=mysqli_fetch_assoc($r))
{		
?>
<tr>
<td><?php echo $rows['studentname'];?></td>
<td><?php echo $rows['address'];?></td>
<td><?php echo $rows['city'];?></td>
<td><?php echo $rows['state'];?></td>
<td><?php echo $rows['pin'];?></td>
<td><?php echo $rows['email'];?></td>
<td><?php echo $rows['mobno'];?></td>
<td><?php echo $rows['class'];?></td>
<td><?php echo $rows['board'];?></td>
<td><?php echo $rows['gender'];?></td>
<td><?php echo $rows['dob'];?></td>
<td><?php echo $rows['photo'];?></td>
<td><?php echo $rows['category'];?></td>
<td><?php echo $rows['id'];?></td>
</tr>
<?php
}
}
else
{
$sql2="select * from examination ";					  
$r2=mysqli_query($con,$sql2);	
while($rows2=mysqli_fetch_assoc($r2))
{
?>
<tr>
<td><?php echo $rows2['studentname'];?></td>
<td><?php echo $rows2['address'];?></td>
<td><?php echo $rows2['city'];?></td>
<td><?php echo $rows2['state'];?></td>
<td><?php echo $rows2['pin'];?></td>
<td><?php echo $rows2['email'];?></td>
<td><?php echo $rows2['mobno'];?></td>
<td><?php echo $rows2['class'];?></td>
<td><?php echo $rows2['board'];?></td>
<td><?php echo $rows2['gender'];?></td>
<td><?php echo $rows2['dob'];?></td>
<td><?php echo $rows2['photo'];?></td>
<td><?php echo $rows2['category'];?></td>
<td><?php echo $rows2['id'];?></td>
</tr>

<?php	
}
}

?>
				
            </table>
            </div>
            </div>
            </div>
			</div>
			
			
	<div style="margin-top:1500px;"></div>
        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Magenoto Software Pvt.Ltd</p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->
    </div>
  </div>
  
<?php include"scriptfile.php"?>
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>

		  
		  
					
					
					
			
			