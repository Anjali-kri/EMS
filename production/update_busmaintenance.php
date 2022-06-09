<?php
$con=mysqli_connect('localhost','root','','sms');
$id=$_REQUEST['id'];

$sql="select * from busmaintenance where busname='$id'";
$result=mysqli_query($con,$sql);
$featch=mysqli_fetch_assoc($result);

?>

<?php
if(isset($_POST['update']))
{
$busname=$_POST['busname'];
$inchargeperson=$_POST['inchargeperson'];
$expense =$_POST['expense'];
$servicedate=$_POST['servicedate'];
$servicetype=$_POST['servicetype'];
$license=$_POST['license'];
$sql=" update  busmaintenance set busname='$busname',inchargeperson='$inchargeperson',expense='$expense',servicedate='$servicedate',servicetype='$servicetype',license='$license' where busname='$id'";
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
            <h2 style="color:#0077b3"><b>BUS MAINTENANCE</b></h2>
			 
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
               <label class="control-label col-md-4 col-sm-4 col-xs-12">Bus Name<span class="required">*</span></label>
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
               </select><br>
               </div>
               </div>
			   </div>
               	
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="driverid">InchargePerson<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="inchargeperson" name="inchargeperson" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['inchargeperson']?>">
            </div>
            </div>
		    </div>
          		 
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="expense">Expense<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="expense" name="expense" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['expense']?>">
            </div>
            </div>
		    </div>
			</div>
			
			
			<div class="row"> 
	        <div class="col-sm-4">
			<div class="form-group">
                      <label for="servicedate" class="control-label col-md-4 col-sm-4 col-xs-12">Service Date</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="date" class="form-control col-md-7 col-xs-12"  name="servicedate" value="<?php echo $featch['servicedate']?>">
                      </div>
                    </div>
					</div>
				
					
			
	        <div class="col-sm-4">
			<div class="form-group">
                      <label for="servicetype" class="control-label col-md-4 col-sm-4 col-xs-12">Service Type</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="text" class="form-control col-md-7 col-xs-12" required="required" name="servicetype" value="<?php echo $featch['servicetype']?>">
                      </div>
                    </div>
					</div>
				
				
	                  <div class="col-sm-4">
	                  <div class="form-group"><br>
                      <label for="license" class="control-label col-md-3 col-sm-3 col-xs-12">License</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
					  <input type="file" name="license" value="<?php echo $featch['license']?>">
                      </div>
                      </div>
					  </div>
	                  </div>
	
            <div class="ln_solid"></div>
            <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">    
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