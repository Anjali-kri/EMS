<?php
$con=mysqli_connect('localhost','root','','sms');
$id=$_REQUEST['id'];
$sql="select * from driverinformation where driverid='$id'";
$result=mysqli_query($con,$sql);
$featch=mysqli_fetch_assoc($result);

?>

<?php
if(isset($_POST['update']))
{
$drivername=$_POST['drivername'];
$driverid=$_POST['driverid'];
$email=$_POST['email'];
$drivercontact=$_POST['drivercontact'];
$bloodgroup=$_POST['bloodgroup'];
$age=$_POST['age'];
$doj=$_POST['doj'];
$experience=$_POST['experience'];
$address=$_POST['address'];
$city=$_POST['city'];
$licensenumber=$_POST['licensenumber'];
$licensevalidupto=$_POST['licensevalidupto'];
$license=$_POST['license'];
$sql=" update  driverinformation set drivername='$drivername',driverid='$driverid',email='$email',drivercontact='$drivercontact',bloodgroup='$bloodgroup',age='$age',doj='$doj',experience='$experience',address='$address',city='$city',licensenumber='$licensenumber',licensevalidupto='$licensevalidupto',license='$license' where driverid='$id'";
mysqli_query($con,$sql);	
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
            <h2 style="color:#0077b3"><b>DRIVER INFORMATION</b></h2>
			 
				  <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="print-link"><i class="fa fa-print"></i></a>
                  </li>
				  <li><a class="copy-link"><i class="fa fa-copy"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>				 
                </ul>
			
			<div class="clearfix">
			</div>
            </div>
			
			   <div class="x_content">
		
			   <form id="demo-form2" data-parsley-validate  method="post">
			   <div class="row">
			   <div class="col-sm-4">
               <div class="form-group">
               <label class="control-label col-md-4 col-sm-4 col-xs-12" for="drivername">Driver Name<span class="required">*</span>
               </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="drivername" name="drivername" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['drivername']?>">
               </div>
               </div>
			   </div>
               	
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="driverid">Driver Id<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="driverid" name="driverid" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['driverid']?>">
            </div>
            </div>
		    </div>
          		 
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="email">Email<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['email']?>">
            </div>
            </div>
		    </div>
			</div>
			
			
			<div class="row"> 
	        <div class="col-sm-4">
			<div class="form-group"><br>
                      <label for="drivercontact" class="control-label col-md-4 col-sm-4 col-xs-12">DriverContact</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="text" class="form-control col-md-7 col-xs-12"  name="drivercontact" value="<?php echo $featch['drivercontact']?>">
                      </div>
                    </div>
					</div>
				
					
			
	        <div class="col-sm-4">
			<div class="form-group"><br>
                      <label for="bloodgroup" class="control-label col-md-4 col-sm-4 col-xs-12">BloodGroup</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="text" class="form-control col-md-7 col-xs-12"  name="bloodgroup" value="<?php echo $featch['bloodgroup']?>">
                      </div>
                    </div>
					</div>
				
				<div class="col-sm-4">
				<div class="form-group"><br>
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="age">Age<span class="required"></span>
                </label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                <input type="text" id="age" name="age" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['age']?>">
                </div>
                </div>
				</div>
				</div>
				
				
					
	<div class="row">
	<div class="col-sm-4">
	<div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12">DateOfJoining<span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
    <input type="date" id="doj" name="doj" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['doj']?>">
	</select>
    </div>
    </div>
    </div>
	
					
		  <div class="col-sm-4">
		  <div class="form-group"><br>
          <label class="control-label col-md-4 col-sm-4 col-xs-12">Experience<span class="required"></span></label>
          <div class="col-md-10 col-sm-10 col-xs-12">
          <input type="text" id="experience" name="experience" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['experience']?>">
          </div>
          </div>
		  </div>
		  
					
	<div class="col-sm-4">
    <div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="address">Address<span class="required">*</span>
    </label>
    <div class="col-md-10 col-sm-10 col-xs-12">
    <input type="text" id="address" name="address" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['address']?>">
    </div>
    </div>
	</div>
	</div>
	
	                  <div class="row">
	                  <div class="col-sm-4">
	                  <div class="form-group"><br>
                      <label class="control-label col-md-4 col-sm-4 col-xs-12" for="city">City<span class="required">*</span>
                      </label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
                      <input type="text" id="city" name="city" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['city']?>">
                      </div>
                      </div>
					  </div>
					
					<div class="col-sm-4">
					<div class="form-group"><br>
                   <label class="control-label col-md-4 col-sm-4 col-xs-12" for="licensenumber">LicenseNumber<span class="required">*</span>
                   </label>
                   <div class="col-md-10 col-sm-10 col-xs-12">
                   <input type="text" id="licensenumber" name="licensenumber" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['licensenumber']?>">
                    </div>
                    </div>
	                </div>
					
					
					
				   <div class="col-sm-4">
				   <div class="form-group"><br>
                   <label class="control-label col-md-4 col-sm-4 col-xs-12" for="licensevalidupto">LicenseValidUpto<span class="required">*</span>
                   </label>
                   <div class="col-md-10 col-sm-10 col-xs-12">
                   <input type="text" id="licensevalidupto" name="licensevalidupto" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['licensevalidupto']?>">
                    </div>
                    </div>
	                </div>
                    
					
					  <div class="row">
	                  <div class="col-sm-4">
	                  <div class="form-group"><br>
                      <label for="license" class="control-label col-md-3 col-sm-3 col-xs-12">License</label>
                      <div class="col-md-6 col-sm-6 col-xs-12" value="<?php echo $featch['license']?>">
					  <input type="file" name="license">
                      </div>
                      </div>
					  </div>
	                  </div>
	
            <div class="ln_solid"></div>
            <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">    
			<button type="submit" style="border-radius:10px;background-color: #00b3b3" class="btn btn-primary" name="update">Update</button>		
			<button type="submit" style="border-radius:10px;background-color:#5c8a8a" class="btn btn-primary" name="cancel">Cancel</button>
            </div>
		    </form>
            </div>
            </div>
            </div>
            </div>
            </div>
			</div>
			
			
			
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