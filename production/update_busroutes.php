<?php
$con=mysqli_connect('localhost','root','','sms');
$id=$_REQUEST['id'];
$sql="select * from busroutesrecords where busname='$id'";
$result=mysqli_query($con,$sql);
$featch=mysqli_fetch_assoc($result);
?>

<?php
if(isset($_POST['update']))
{
$busname=$_POST['busname'];
$routes=$_POST['routes'];
$stopname=$_POST['stopname'];
$pickuptime=$_POST['pickuptime'];
$droptime=$_POST['droptime'];
$busfee=$_POST['busfee'];
$sql=" update  busroutesrecords set busname='$busname',routes='$routes',stopname='$stopname',pickuptime='$pickuptime',droptime='$droptime',busfee='$busfee' where busname='$id'";
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
            <h2 style="color:#0077b3"><b>BUS ROUTES RECORDS</b></h2>
			 
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
            <label class="control-label col-md-4 col-sm-4 col-xs-12">Routes<span class="required">*</span></label>
            <div class="col-md-10 col-sm-10 col-xs-12">
           <select class="form-control" name="routes">
		  <option value="<?php echo $featch['routes']; ?>"><?php echo $featch['routes']; ?></option>
			
		  <?php
		  if($featch['routes']=='Boring Road,Patna')
		  {
			  
		  }
		  else
		  {
			  ?> <option value="boring road">Boring Road,Patna</option> <?php
		  }
		  if($featch['routes']=='Baily Road,Patna')
		  {
			  
		  }
		  else
		  {
			  ?> <option value="baily road">Baily Road,Patna</option>  <?php
		  }
		  
		  ?>
          </select><br>
            </div>
            </div>
		    </div>
          		 
			<div class="col-sm-4">
            <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="stopname">Stop Name<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="stopname" name="stopname" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['stopname']?>">
            </div>
            </div>
		    </div>
			</div>
			
			
			<div class="row"> 
	        <div class="col-sm-4">
			<div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="pickuptime">Pickup Time<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="time" id="pickuptime" name="pickuptime" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['pickuptime']?>">
                      </div>
                    </div>
					</div>
			
			
			
	        <div class="col-sm-4">
			<div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="droptime">Drop Time<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="time" id="droptime" name="droptime" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $featch['droptime']?>">
                      </div>
                    </div>
					</div>
				
				
	        <div class="col-sm-4">
	        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="busfee">Bus Fees<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
	       <div class="input-group">
           <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount" name="busfee" value="<?php echo $featch['busfee']?>">
           <div class="input-group-addon">$</div>
           </div>
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