<?php
 include_once('connection.php');
 error_reporting(0);
$v= $_REQUEST['id'];
 
 $sql="select * from studentdetail where addno='$v'";
$r=mysqli_query($con,$sql);
 $fetch=mysqli_fetch_assoc($r);
 
	 $sql1="select * from guardiandetail where addno='$v'";
$r1=mysqli_query($con,$sql1);
 $fetch1=mysqli_fetch_assoc($r1);

		 $sql2="select * from bankdetail where addno='$v'";
$r2=mysqli_query($con,$sql2);
 $fetch2=mysqli_fetch_assoc($r2);
//$sql3="update studentdetail set roll=$fetch['roll'], class=$fetch['class'], section=$fetch['section'], fname=$fetch['fname'], lname=$fetch['lname'], religion=$fetch['religion'], dob=$fetch['dob'], adddate=$fetch['adddate'], gender=$fetch['gender'], categories=$fetch['categories'], mobileno=$fetch['mobileno'], email=$fetch['email'], hostel=$fetch['hostel'], routelist=$fetch['routelist'], roomno=$fetch['roomno'] where addno='$v'";
//$r3=mysqli_query($con,$sql3);
//$sql3="update studentdetail set roll=".'$fetch["roll"]'."hello";
//$s="select * from studentdetail where addno=".$_REQUEST['id'].";
$sql6="select * from studentdetail where addno='".$_REQUEST['id']."'";
$r6=mysqli_query($con,$sql6);
$p=mysqli_fetch_assoc($r6);
//echo $p['roll'];


if(isset($_POST['update']))
{	
    $roll=$_POST['rollno'];
    $class=$_POST['class'];
	$section=$_POST['section'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$dob=$_POST['dob'];
	$religion=$_POST['religion'];
	$categories=$_POST['categories'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['email'];
	$admissiondate=$_POST['admissiondate'];
	//$gender=$_POST['gender'];
    $hostel=$_POST['hostel'];
	$routelist=$_POST['routelist'];
	//echo "class".$firstname;
$sql7="update studentdetail set roll='$roll', class='$class', fname='$firstname',lname='$lastname',dob='$dob',religion='$religion',categories='$categories',mobileno='$mobileno',email='$email',adddate='$admissiondate',gender='$gender',hostel='$hostel',routelist='$routelist'where addno='$v'";
 mysqli_query($con,$sql7);
 
 
 
 	$addno=$_POST['addno'];
	$fathername=$_POST['fathername'];
	$fatherphone=$_POST['fatherphone'];
	$fatheroccupation=$_POST['fatheroccupation'];
	$mothername=$_POST['mothername'];
	$motherphone=$_POST['motherphone'];
	$motheroccupation=$_POST['motheroccupation'];
	//$Mother=$_POST['Mother'];
	$permanentaddress=$_POST['permanentaddress'];
	$address=$_POST['tempadd'];
    
    $sql8="update guardiandetail set faname='$fathername',faphone='$fatherphone',faoccu='$fatheroccupation',mothname='$mothername',mothphone='$motherphone',mothoccu='$motheroccupation',mother='$Mother',permenentadd='$permanentaddress',address='$address'where addno='$v'";
 mysqli_query($con,$sql8);

  

    $addno=$_POST['addno'];
	$bankaccountno=$_POST['bankaccountno'];
	$bankname=$_POST['bankname'];
	$ifsccode=$_POST['ifsccode'];
	$nationalidentification=$_POST['nationalidentification'];
	$localidentification=$_POST['localidentification'];
	$previousschooldetail=$_POST['previousschooldetail'];
	echo $addno;
	echo $bankaccountno;
	echo $bankname;
	echo $ifsccode;
	echo $nationalidentification;
	echo $localidentification;
	echo $previousschooldetail;
$sql10="update bankdetail set bankaccount='$bankaccountno',bankname='$bankname',ifsc='$ifsccode',nationalid='$nationalidentification',localid='$localidentification',previousschooldetail='$previousschooldetail' where addno='$v'";
$result=mysqli_query($con,$sql10);
if($result)
{
	echo "data updated";
}
else
{
	echo "data failed";
}
 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>
 <script>
		
		function getclass(val)
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
	  
	  <!--pagecontent-->
	  
	  <div class="right_col" role="main">
	      <div class="">
        <div class="page-title">
            <div class="title_left">
              <h3>Student Information </h3>

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
			  

                  
                  <h2><span class="glyphicon glyphicon-user"></span>&nbsp; Student Admission</h2>

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
		 <div class="col-sm-4">
		 <label>Admission number<span>*</span></label> 
		  <input type="text" class="form-control" name="addno" value="<?php echo $v?>"readonly >
		  </div>
		  <div class="col-sm-4">
		  <label>Rollno.<span>*</span></label>
		   <input type="text" class="form-control"  required name="rollno" value="<?php echo $fetch['roll'];?>">
		  </div>
		   <div class="col-sm-4">
		  <label>Firstname<span>*</span></label>
		   <input type="text" class="form-control"required name="firstname"value="<?php echo $fetch['fname'];?>">
		  </div>
		  <div class="col-sm-4">
		   <label>Lastname<span>*</span></label>
		   <input type="text" class="form-control"required name="lastname"value="<?php echo $fetch['lname'];?>">
		  </div>
		  		  <div class="col-sm-4">
		   <label>Religion<span>*</span></label>
		   <input type="text" class="form-control"required name="religion"value="<?php echo $fetch['religion'];?>">
		  </div>
		  <div class="col-sm-4">
		  <label>D.O.B<span>*</span></label>
		   <input type="date" class="form-control"required name="dob"value="<?php echo $fetch['dob'];?>">
		  </div>
		  </div>
		  <div class="row">
		   <div class="col-sm-4">
		   <label>Admission Date<span>*</span></label>
		   <input type="date" class="form-control"required name="admissiondate" value="<?php echo date('Y-m-d'); ?>" readonly >
		  </div>
		  <div class="col-sm-4">
		   <label>Email<span>*</span></label>
		   <input type="text" class="form-control"required name="email"value="<?php echo $fetch['email'];?>">
		  </div>
		  <div class="row">
		  <div class="col-sm-4">
		  <label>Mobile no.<span>*</span></label>
		   <input type="text" class="form-control"required name="mobileno"value="<?php echo $fetch['mobileno'];?>">
		  </div>
		  </div>
		  <div class="row">
		  <div class="col-sm-4">
		  		  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">CLASS</label><br><br>
                  <!-- <div class="col-md-10 col-sm-10 col-xs-12">-->
                         <?php
						 $r=mysqli_query($con,"select * from classsection");
						 ?>
                     <select class="select2_multiple form-control" style="padding:0px" name="class"value="<?php echo $fetch['class'];?>">
					
					<?php
					while($row=mysqli_fetch_assoc($r))
					{
						?>
						<option value="<?php echo $row['class']?>"><?php echo $row['class']?></option>
					<?php
					}
					?>
					</select>
                    <!--</div>-->
					</div>
		  
		  </div>
		  
		  <div class="col-sm-4">
		   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">SECTION</label><br><br>
					  <?php
						 $r=mysqli_query($con,"select * from classsection");
						 ?>
                        <select class="select2_multiple form-control" style="padding:0px" name="section" id="section"value="<?php echo $fetch['setion'];?>"
                        <?php
					while($row=mysqli_fetch_assoc($r))
					{
						?>
						<option value="<?php echo $row['section']?>"><?php echo $row['section']?></option>
					<?php
					}
					?>
					  
                        </select>
					  </div>
					  </div>
		  
		<div class="col-sm-4">
		  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">CASTE</label><br><br>
                     <?php
						 $r=mysqli_query($con,"select * from categories");
						 ?>
                        <select class="select2_multiple form-control" style="padding:0px"required name="categories" value="<?php echo $fetch['categories'];?>"onchange="getfee(this.value)" id="categories"> 
                          <option> Select..</option>
                          <option  value="GEN">GEN</option>
                          <option  value="OBC">OBC</option>
                          <option  value="SC">SC</option>
                          <option  value="ST">ST</option>
                      <?php
					while($row=mysqli_fetch_assoc($r))
					{
						?>
						<option value="<?php echo $row['categories']?>"><?php echo $row['categories']?></option>
					<?php
					}
					?>
                        </select>
                    </div>
		  </div>
		  </div>
		  <div class="row">
		  </div>
		  <br>
		 <div class="row">
		 <div class="col-sm-8">
		 
		 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                          </label>
                          <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female" checked="" style="gender" value="<?php echo $fetch['gender'];?>">Female
                          </label>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
          </div>
		  
		  
		  
		  
          <div class="row">
		  
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" >
			  <div class="x_title">
			    <h2> <span class="glyphicon glyphicon-user"></span>&nbsp;Parent /Guardian Details</h2><p>
</span>

</p>
                  
             
<div class="clearfix">
            </div>
			</div>
			
			<div class="x_content"><br/>
			
<div class="row">
		  <div class="col-sm-3">
		  <label>Father Name<span>*</span></label>
		   <input type="text" class="form-control"required name="fathername" value="<?php echo $fetch1['faname'];?>">
		  </div>
		  <div class="col-sm-3">
		   <label>Father Phone<span>*</span></label>
		   <input type="text" class="form-control"required name="fatherphone" value="<?php echo $fetch1['faphone'];?>">
		  </div>
		  
		  <div class="col-sm-3">
		   <label>Father Occupation<span>*</span></label>
		   <input type="text" class="form-control"required name="fatheroccupation" value="<?php echo $fetch1['faoccu'];?>">
		  </div>
		  
		 </div>
		 </div>
		 
		  
		 <div class="row">
		  <div class="col-sm-3">
		  <label>Mother Name<span>*</span></label>
		   <input type="text" class="form-control"required name="mothername"value="<?php echo $fetch1['mothname'];?>">
		  </div>
		  <div class="col-sm-3">
		   <label>Mother Phone<span>*</span></label>
		   <input type="text" class="form-control" required name="motherphone"value="<?php echo $fetch1['mothphone'];?>">
		  </div>
		  
		  <div class="col-sm-3">
		   <label>Mother Occupation<span>*</span></label>
		   <input type="text" class="form-control"required name="motheroccupation"value="<?php echo $fetch1['mothoccu'];?>">
		  </div>
		  
		  
		 
		  </div>
		  <br>
		  
		  
		  
		  <label> IF GUARDIAN IS *:</label>
                    <p>
                      <input type="radio" name="Mother"  value="father" >Father<!--class="flat" name="gender" id="Father" value="Father" /><!--checked="" required /> f:-->
                      <input type="radio" name="Mother" value="mother">Mother<!--flat" name="gender" id="genderF" value="Mother" />-->
					  <input type="radio"  name="Mother" value="other" >Other
                    </p>

					</div>
					</div>
					</div>
					</div>
					</div>
					</div>
					
				<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
			  <div class="x_title">
			    <h2>Add More Details &nbsp;<span class="glyphicon glyphicon-plus"></span></h2>

             
            <div class="clearfix">
			</div>
			</div>
			
			<div class="x_content"><br/>
			<h2> Student Address Details</h2>
           
		   
			<label>  Permanent Address<span>*</span></label>	<br>  
		
				  
				  
				  <div class="row">
		 <div class="col-sm-4">
		  <input type="text" class="form-control"required name="permanentaddress" id="n1" value="<?php echo $fetch1['permenentadd'];?>">
		  </div>
		  </div>
		  <label> If Permanent Address Is Current Address</label>	<br>
		  
                    <p>
					<script type="text/javascript">
function copy()
{
    var n1 = document.getElementById("n1");
    var n2 = document.getElementById("n2");
    n2.value = n1.value;
}
function copy1()
{
    var n1 = document.getElementById("n1");
    var n2 = document.getElementById("n2");
    n2.value = "";
}

</script>
                      
                      <input type="radio" name="address" id="yes" onclick="copy()">yes 
                      <input type="radio" name="address" id="no" onclick="copy1()">no
			
					 
					  
                    </p>
					
</div>
				  
				  <div class="row">
		 <div class="col-sm-4">
		  <input type="text" class="form-control"id="n2" name="tempadd" value="<?php echo $fetch1['address'];?>">
		  </div>
		  </div>
		  </div>
		  </div>
		  
		 
		  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" >
			  <div class="x_title">
			       <h2><span class="glyphicon glyphicon-travel"> &nbsp;</span>Transport Details</h2>
              
            <div class="clearfix">
			</div>
			</div>
			
			<div class="x_content"><br/>
			  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"><h2>Route List*</h2></label>
                      
                       						<input type="radio" name="routelist" id="yes" value="yes" onclick="copy()">YES 
						<input type="radio" name="routelist" id="yes"value="no" onclick="copy()">NO
                      
                    </div>
					</div>
					</div>
					</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" >
			  <div class="x_title">
			         <h2><span class="glyphicon glyphicon-home">&nbsp;</span>Hostel Details</h2>
              <div class="clearfix">
      </div>
	  </div>
	  <div class="x_content"><br/>
	  <div class="row">
	  <div class="col-sm-6">
			  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"><h2>Hostel*</h2></label>
                    
					  <input type="radio" required name="hostel" value="yes" >YES
                     <input type="radio" name="hostel" value="no">NO
                        
                      
                    </div>
					</div>

                      </div>
                    </div>
					</div>
					
					
			<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" >
			  <div class="x_title">
			                    <h2>Miscellaneous Details</h2>
                
            
			
			<div class="clearfix">
			
			</div>
			</div>
			<div class="x_content"><br/>
			
              <div class="row">
		  <div class="col-sm-4">
		  <label>Bank Account Number</label>
		   <input type="text" class="form-control" name="bankaccountno"value="<?php echo $fetch2['bankaccount'];?>">
		  </div>
		  <div class="col-sm-4">
		   <label>Bank Name</label>
		   <input type="text" class="form-control" name="bankname"value="<?php echo $fetch2['bankname'];?>">
		  </div>
		  
		  <div class="col-sm-4">
		   <label>IFSC Code</label>
		   <input type="text" class="form-control" name="ifsccode"value="<?php echo $fetch2['ifsc'];?>">
		  </div>
			</div>
			</div>
			
			<div class="row">
		  <div class="col-sm-4">
		  <label>National Identification Number</label>
		   <input type="text" class="form-control" name="nationalidentification"value="<?php echo $fetch2['nationalid'];?>">
		  </div>
		  <div class="col-sm-4">
		   <label>Local Identification Number</label>
		   <input type="text" class="form-control" name="localidentification" value="<?php echo $fetch2['localid'];?>">
		  </div>
		  
		  <div class="col-sm-4">
		   <label>Previous School Details</label>
		   
		   <input type="text" class="form-control" name="previousschooldetail"value="<?php echo $fetch2['previous-schooldetail'];?>">
		  </div>
			</div><br/>
			
			<div class="row">
			 <div class="col-sm-4">
			 </div>
			  <div class="col-sm-4">
			 </div>
			 
		  <div class="col-sm-4">
			<input type="submit"value="Update" name="update" class="btn btn-primary">			  
		   </div>
		   </div>   
		   

</div>
</div>		  
		   
              </div>
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