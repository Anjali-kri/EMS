<?php
session_start();
$admin=$_SESSION['user_name'];
if($admin=="")
  {
	  header('Location:login.php');
  }
 include_once('connection.php');
 error_reporting(0);
if (isset($_POST["save_next"]))
{
	$i=0000;
	$val=date('y');
	echo "value".$val;
	$addno=$val.$i++;
	$id=$_POST['id'];
	$addno=$_POST['addno'];
	$rollno=$_POST['rollno'];
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
	$gender=$_POST['gender'];
    $hostel=$_POST['hostel'];
	$routelist=$_POST['routelist'];

	
	$q="insert into studentdetail values('$id','$addno','$rollno','$class','$section','$firstname','$lastname','$dob','$religion','$categories','$mobileno','$email','$admissiondate','$gender','$hostel','$routelist')";

	
	$addno=$_POST['addno'];
	$fathername=$_POST['fathername'];
	$fatherphone=$_POST['fatherphone'];
	$fatheroccupation=$_POST['fatheroccupation'];
	$mothername=$_POST['mothername'];
	$motherphone=$_POST['motherphone'];
	$motheroccupation=$_POST['motheroccupation'];
	$Mother=$_POST['Mother'];
	$permanentaddress=$_POST['permanentaddress'];
	$address=$_POST['tempadd'];
    
    $q2="insert into guardiandetail values('$addno','$fathername','$fatherphone','$fatheroccupation','$mothername','$motherphone','$motheroccupation','$Mother','$permanentaddress','$address')";

   
   $addno=$_POST['addno'];
	$bankaccountno=$_POST['bankaccountno'];
	$bankname=$_POST['bankname'];
	$ifsccode=$_POST['ifsccode'];
	$nationalidentification=$_POST['nationalidentification'];
	$localidentification=$_POST['localidentification'];
	$previousschooldetail=$_POST['previousschooldetail'];
	
$q3="insert into bankdetail values('$addno','$bankaccountno','$bankname','$ifsccode','$nationalidentification','$localidentification','$previousschooldetail')";


$r=mysqli_query($con,$q);
$r2=mysqli_query($con,$q2);
$r3=mysqli_query($con,$q3);
if(mysqli_affected_rows($con)>0)
{
	
	header('Location:photoupload2.php');
}
else
{
	echo "not save";
}
}

?>

<?php
$q="select max(id) as maximumid from studentdetail";
 $r=mysqli_query($con,$q);
 $row=mysqli_fetch_assoc($r);
 $maxid=$row['maximumid'];
$val=date('Y');
$addno=$val.++$maxid;
?>
<?php
$date=date('Y')-1;
echo"date".$date;
$date1=date('d-m-').$date;
echo "date_abc".$date1;
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
		  <input type="text" class="form-control" name="addno"  required value="<?php echo $addno ?>" readonly>
		  </div>
		  <div class="col-sm-4">
		  <label>Rollno.<span>*</span></label>
		   <input type="text" class="form-control"  required name="rollno">
		  </div>
		   <div class="col-sm-4">
		  <label>Firstname<span>*</span></label>
		   <input type="text" class="form-control"required name="firstname">
		  </div>
		  <div class="col-sm-4">
		   <label>Lastname<span>*</span></label>
		   <input type="text" class="form-control"required name="lastname">
		  </div>
		  		  <div class="col-sm-4">
		   <label>Religion<span>*</span></label>

                        <select class="select2_multiple form-control" style="padding:0px"required name="categories"> 
                          <option> --Select--</option>
                          <option  value="GEN">HINDU</option>
                          <option  value="OBC">MUSLIM</option>
                          <option  value="SC">SIKH</option>
                     
                        </select>
		 <!--  <input type="text" class="form-control"required name="religion">-->
		  </div>
		  <div class="col-sm-4">
		  <label>D.O.B<span>*</span></label>
		   <input type="date" class="form-control"required name="dob">
		  </div>
		  </div>
		  <div class="row">
		   <div class="col-sm-4">
		   <label>Admission Date<span>*</span></label>
		   <input type="text" class="form-control"required name="admissiondate" value="<?php echo date('Y-m-d'); ?>" readonly >
		  </div>
		  <div class="col-sm-4">
		   <label>Email<span>*</span></label>
		   <input type="text" class="form-control"required name="email">
		  </div>
		  <div class="row">
		  <div class="col-sm-4">
		  <label>Mobile no.<span>*</span></label>
		   <input type="number" class="form-control"required name="mobileno">
		  </div>
		  </div>
		  <div class="row">
		  <div class="col-sm-4">
		  		  <div class="form-group">
                      <label>CLASS</label>
					  
                  <!-- <div class="col-md-10 col-sm-10 col-xs-12">-->
                         <?php
						 include "connection.php";
						 $r=mysqli_query($con,"select distinct class from classsection");
						 ?>
                     <select class="select2_multiple form-control" style="padding:0px" name="class" onchange="getsection(this.value)"> 
					<option>--select--</option>
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
                      <label>SECTION</label>
					  
                        <select class="select2_multiple form-control" style="padding:0px" name="section" id="section"> 
                    
						
				
                        </select>
					  </div>
					  </div>
		  
		<div class="col-sm-4">
		  <div class="form-group">
                      <label>CASTE</label>
                     <?php
						 $r=mysqli_query($con,"select * from categories");
						 ?>
                        <select class="select2_multiple form-control" style="padding:0px"required name="categories" onchange="getfee(this.value)" id="categories"> 
                          <option> --Select--</option>
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
		 <script>
		 function gender(val)
		{
			
           var a=val
		    if(a=='male')
			{
				 document.getElementById('block').value='A';
			}
			else
			{
				document.getElementById('block').value='B';
			}
			
		}
		 </script>
		 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" onclick="gender(male.value)">
                            <input type="radio" name="gender" id='male' value="male" > &nbsp; Male &nbsp;
                          </label>
                          <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" onclick="gender(female.value)">
                            <input type="radio" name="gender" id='female' value="female"  style="gender" > Female
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
		   <input type="text" class="form-control"required name="fathername">
		  </div>
		  <div class="col-sm-3">
		   <label>Father Phone<span>*</span></label>
		   <input type="number" class="form-control"required name="fatherphone">
		  </div>
		  
		  <div class="col-sm-3">
		   <label>Father Occupation<span>*</span></label>
		   <input type="text" class="form-control"required name="fatheroccupation">
		  </div>
		  
		 </div>
		 </div>
		 
		  
		 <div class="row">
		  <div class="col-sm-3">
		  <label>Mother Name<span>*</span></label>
		   <input type="text" class="form-control"required name="mothername">
		  </div>
		  <div class="col-sm-3">
		   <label>Mother Phone<span>*</span></label>
		   <input type="number" class="form-control" required name="motherphone">
		  </div>
		  
		  <div class="col-sm-3">
		   <label>Mother Occupation<span>*</span></label>
		   <input type="text" class="form-control"required name="motheroccupation">
		  </div>
		  
		  
		 
		  </div>
		  <br>
		  
		  
		  
		  <label> IF GUARDIAN IS *:</label>
                    <p>
                      <input type="radio" name="Mother"  value="father">Father<!--class="flat" name="gender" id="Father" value="Father" /><!--checked="" required /> f:-->
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
           
		   
			<label>  Current Address<span>*</span></label>	<br>  
		
				  
				  
				  <div class="row">
		 <div class="col-sm-4">
		  <input type="text" class="form-control"required name="permanentaddress" id="n1">
		  </div>
		  </div>
		  <label> If Current Address Is Permanent Address</label>	<br>
		  
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
		  <input type="text" class="form-control"id="n2" name="tempadd" >
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
		   <input type="text" class="form-control" name="bankaccountno">
		  </div>
		  <div class="col-sm-4">
		   <label>Bank Name</label>
		   <input type="text" class="form-control" name="bankname">
		  </div>
		  
		  <div class="col-sm-4">
		   <label>IFSC Code</label>
		   <input type="text" class="form-control" name="ifsccode">
		  </div>
			</div>
			</div>
			
			<div class="row">
		  <div class="col-sm-4">
		  <label>National Identification Number</label>
		   <input type="text" class="form-control" name="nationalidentification">
		  </div>
		  <div class="col-sm-4">
		   <label>Local Identification Number</label>
		   <input type="text" class="form-control" name="localidentification">
		  </div>
		  
		  <div class="col-sm-4">
		   <label>Previous School Details</label>
		   
		   <input type="text" class="form-control" name="previousschooldetail">
		  </div>
			</div><br/>
			<hr>
			<div class="row">
			 <div class="col-sm-4">
			 </div>
			  <div class="col-sm-4">
			  <input type="submit"value="SAVE & NEXT" name="save_next" class="btn btn-success" style="border-radius:15px" >	
			 </div>
			 
		  <div class="col-sm-4">

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