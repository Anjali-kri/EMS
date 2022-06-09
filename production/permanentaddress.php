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
            <h2>Examination Form</h2>
			 
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
            <button type="submit" class="btn btn-success" name="save">Save</button>
			<button type="submit" class="btn btn-primary" name="cancel">Cancel</button>
            </div>
		    </form>
            </div>
            </div>
            </div>
            </div>
			</div>