<?php
$con=mysqli_connect('localhost','root','','sms');
$id=$_REQUEST['id'];
$sql="select * from businformation where busplateno='$id'";
$result=mysqli_query($con,$sql);
$featch=mysqli_fetch_assoc($result);

?>

<?php
if(isset($_POST['update']))
{
$busname=$_POST['busname'];
$busplateno=$_POST['busplateno'];
$insurancestartdate=$_POST['insurancestartdate'];
$insuranceenddate=$_POST['insuranceenddate'];
$drivername=$_POST['drivername'];
$driverphone=$_POST['driverphone'];
$capacity=$_POST['capacity'];
$seatcount=$_POST['seatcount'];
$seatalloted=$_POST['seatalloted'];
$busrc=$_POST['busrc'];
$businsurance=$_POST['businsurance'];
$sql=" update  businformation set busname='$busname',busplateno='$busplateno',insurancestartdate='$insurancestartdate',insuranceenddate='$insuranceenddate',drivername='$drivername',driverphone='$driverphone',capacity='$capacity',seatcount='$seatcount',seatalloted='$seatalloted',busrc='$busrc',businsurance='$businsurance' where busplateno='$id'";
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
            <h2 style="color:#0077b3"><b>BUS INFORMATION</b></h2>
			 
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
               <label class="control-label col-md-4 col-sm-4 col-xs-12">BusName<span class="required">*</span></label>
               <div class="col-md-10 col-sm-10 col-xs-12">
          <select class="form-control" name="busname">
		  <option value="<?php echo $featch['busname']; ?>"><?php echo $featch['busname']; ?></option>
		  <?php
		  if($featch['busname']=='ajantatravels')
		  {
			  
		  }
		  else
		  {
			  ?> <option value="ajantatravels">Ajanta Travels</option> <?php
		  }
		  if($featch['busname']=='devtravels')
		  {
			  
		  }
		  else
		  {
			  ?> <option value="devtravels">Dev Travels</option>  <?php
		  }
		  
		  
		  ?>
               </select>
               </div>
               </div>
			   </div>
               	
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="busplateno">BusPlateNo.<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="busplateno" name="busplateno" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['busplateno']?>">
            </div>
            </div>
		    </div>
          		 
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="insurancestartdate">InsuranceStartdate<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="date" id="insurancestartdate" name="insurancestartdate" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['insurancestartdate']?>">
            </div>
            </div>
		    </div>
			</div>
			
			
			<div class="row"> 
	        <div class="col-sm-4">
			<div class="form-group"><br>
                      <label for="insuranceenddate" class="control-label col-md-4 col-sm-4 col-xs-12">InsuranceEnddate</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="date" class="form-control col-md-7 col-xs-12"  name="insuranceenddate" value="<?php echo $featch['insuranceenddate']?>">
                    </div>
                    </div>
					</div>
				
					
			
	        <div class="col-sm-4">
			<div class="form-group"><br>
                      <label for="drivername" class="control-label col-md-4 col-sm-4 col-xs-12">DriverName</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="text" class="form-control col-md-7 col-xs-12"  name="drivername" value="<?php echo $featch['drivername']?>">
                      </div>
                    </div>
					</div>
				
				<div class="col-sm-4">
				<div class="form-group"><br>
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="driverphone">DriverPhoneNo.<span class="required"></span>
                </label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                <input type="text" id="driverphone" name="driverphone" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $featch['driverphone']?>">
                </div>
                </div>
				</div>
				</div>
				
				
					
	<div class="row">
	<div class="col-sm-4">
	<div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12">Capacity<span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
	<select class="form-control" name="capacity" id="capacity">
	 <option value="<?php echo $featch['capacity']; ?>"><?php echo $featch['capacity']; ?></option>
	 <?php
		  if($featch['capacity']=='20')
		  {
			  
		  }
		  else
		  {
			  ?> <option value="20">20</option>  <?php
		  }
		  if($featch['capacity']=='22')
		  {
			  
		  }
		  else
		  {
			  ?> <option value="22">22</option>  <?php
		  }
		  
		  
		  ?>
	 
	</select>
    </div>
    </div>
    </div>
	
					
		  <div class="col-sm-4">
		  <div class="form-group"><br>
          <label class="control-label col-md-4 col-sm-4 col-xs-12">RemainingSeatCount<span class="required"></span></label>
          <div class="col-md-10 col-sm-10 col-xs-12">
          <select class="form-control" name="seatcount" id="seatcount">
		  <option value="<?php echo $featch['seatcount']; ?>"><?php echo $featch['seatcount']; ?></option>
          <?php
		  if($featch['seatcount']=='20')
		  {
			  
		  }
		  else
		  {
			  ?> <option value="20">20</option>    <?php
		  }
		  if($featch['seatcount']=='22')
		  {
			  
		  }
		  else
		  {
			  ?> <option value="22">22</option>  <?php
		  }
		  
		  
		  ?>
		  		  
          </select><br>
          </div>
          </div>
		  </div>
		  
					
	<div class="col-sm-4">
    <div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Quantity">SeatsAlloted<span class="required">*</span>
    </label>
    <div class="col-md-10 col-sm-10 col-xs-12">
    <input type="text" id="seatalloted" name="seatalloted" required="seatalloted" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['seatalloted']?>">
    </div>
    </div>
	</div>
	</div>
	
	                  <div class="row">
	                  <div class="col-sm-4">
	                  <div class="form-group"><br>
                      <label for="busrc" class="control-label col-md-3 col-sm-3 col-xs-12">BusRc</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="file" name="busrc">
                      </div>
                      </div>
					  </div>
					
					<div class="col-sm-6">
					<div class="form-group"><br>
                    <label for="businsurance" class="control-label col-md-3 col-sm-3 col-xs-12">BusInsurance</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="businsurance">
                    </div>
                    </div>
	                </div>
                    </div>
	
	
            <div class="ln_solid"></div>
            <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">    
            <button type="submit" style="border-radius:10px;background-color: #00b3b3"  class="btn btn-success" name="update">Update</button>
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