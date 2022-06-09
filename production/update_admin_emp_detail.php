
<html lang="en">
<head>
  <?php
 error_reporting(0);
  include("head1.php");
    include "connection1.php";
	session_start();
	$admin=$_SESSION['user_name'];
  
  if($admin=="")
  {
	  header('Location:login.php');
  }
  $result_gender=mysqli_query($con,"select gender FROM combo where gender='male' OR gender='female' OR gender='other'");
  $result_m_status=mysqli_query($con,"select m_status FROM combo where m_status='married' OR m_status='unmarried'");
  $result_reg=mysqli_query($con,"select religions FROM combo where religions='hindu' OR religions='muslim' OR religions='sikha'OR religions='Christian' OR religions='other'");
  $result_nati=mysqli_query($con,"select Nationality FROM combo where Nationality='indian' OR Nationality='other'");
  $result_grade=mysqli_query($con,"select grade FROM combo where grade='first' OR grade='second' OR grade='Third'");
  
  ?>
  <script>
                        function check_email()
						{
						var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
						if(email.value.match(mailformat))
						{
						var elem=document.getElementById("email_valid");
						elem.innerHTML="";
					
						return false;		
						}
						else
						{
						var elem=document.getElementById("email_valid");
					elem.innerHTML="Enter valid email id!";
					elem.style.color="red";
					elem.style.fontSize="15";
					return false;	
							}
						}
  function parmanentd()
  {
	   var a1=document.getElementById('present').value;
	  
		  
		  //alert(p);
		   if(document.getElementById('parmanent123').checked==true)
		   {
			   document.getElementById('parmanent').value= a1;
			    
		   }
		   else 
		   {
			document.getElementById('parmanent').value="";
			}
  }
  </script>
  <?php
  $empId=$_POST['reg'];
  echo "empid is :".$empId;
  if(isset($_POST['search']))
  {     
    
	$result_detail=mysqli_query($con,"select * from emp_details where emp_id='$empId'");
	$result_Qualification=mysqli_query($con,"select * from emp_qualification where emp_id='$empId'");
	$row=mysqli_num_rows($result_detail);
	$fetch_detail=mysqli_fetch_assoc($result_detail);
	$fetch_quali=mysqli_fetch_assoc($result_Qualification);
  }
  ?>
  <?php
  echo "emp:".$empId;
  $fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$status=$_POST['status'];
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
$jdate=$_POST['jdate'];
$desi=$_POST['desi'];
$dept=$_POST['dept'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pan=$_POST['pan'];
$adhar=$_POST['adhar'];
$present=$_POST['present'];
$parmanent=$_POST['parmanent'];
$sub=$_POST['sub'];
$dop=$_POST['dop'];
$o_marks=$_POST['o_marks'];
$t_marks=$_POST['t_marks'];
$p_marks=$_POST['p_marks'];
$class=$_POST['class'];


if(isset($_POST['update']))
	
{
	$empId=$_POST['empid'];
	echo "empid is".$empId;
	echo "fname:".$fname;
	echo "mname:".$mname;
	echo "lname:".$lname;
	echo "dob:".$dob;
	echo "gender:".$gender;
	echo "status:".$status;
	echo "nationality:".$nationality;
	echo "religion:".$religion;
	echo "jdate:".$jdate;
	echo "desi:".$desi;
	echo "dept:".$dept;
	echo "phone:".$phone;
	echo "email:".$email;
	echo "pan:".$pan;
	echo "adhar:".$adhar;
	echo "present:".$present;
	echo "parmanent:".$parmanent;
	echo "sub:".$sub;
	echo "dop:".$dop;
	echo "o_marks:".$o_marks;
	echo "t_marks:".$t_marks;
	echo "p_marks:".$p_marks;
	echo "class:".$class;
	$check=mysqli_query($con,"update  emp_details set fname='$fname', mname='$mname', lname='$lname', dob='$dob', gender='$gender', status='$status', nationality='$nationality', religion='$religion', joining_date='$jdate', desi='$desi',dept='$dept',phone='$phone', email='$email',pan='$pan',adhar='$adhar',temp_add='$present',parm_add='$parmanent' where emp_id='$empId' ");
	mysqli_query($con,"update emp_qualification set sub='$sub',dop='$dop',o_marks='$o_marks',t_marks='$t_marks',p_marks='$p_marks',class='$class' where emp_id='$empId'");
	if(mysqli_affected_rows($con)>0)
	{
	?><script>alert("Data updated");</script><?php
		header('Location:admin_update.php');
	}
	else
	{
	?><script>alert("Data updated");</script><?php	
	header('Location:admin_update.php');
	}
}
  ?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container" >
	 <div class="navbar nav_title" style="border: 0;" >
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SMS</span></a>
			</br>
			<div class="clearfix"></div>
          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Admin</h2>
            </div>
          </div>
		  <div class="page-header">
		  </div>
		  <?php 
		  include_once "sidemenu_admin_login.php";
		  ?>
		  
          </div>
		  <?php
include("header.php");


?>
      <!-- page content -->
      <div class="right_col" role="main">
	  <form method="POST">
	  <?php
	  if($row=="")
	  {
	  ?>
	  <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Update Employee Details </h2>
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
                </div>
                <div class="x_content">
                  <br />
				  <div class="row">
				  <div class="col-sm-2">
				  <label> Employee Id.*</label>
				  </div>
				  <div class="col-sm-4">
				 <input type="text" name="reg" class="form-control" required>
				  </div>
				  <div class="col-sm-6">
				  </div>
				  </div><br>
				   <div class="row">
						<div class="col-sm-12">
						<button name="search"  class="btn-info btn-lg btn-block"><i class="fa fa-Search" style="color:red; font-size:25px"></i>&nbsp;&nbsp; Search </button>
					</div>
					</div>
					</div>
              </div>
            </div>
          </div>
	  <?php
	  }
	  else
	  {
		  echo "empid".$empId;
	  ?>
	      <div class="row">
		  
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Employee Personal Details </h2>
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
                </div>
                <div class="x_content">
                  <br />
				  
				  <div>
				   <div class="row">
				  <div class="col-sm-3">
				  <input type="text" name="empid" value="<?php echo $fetch_detail['emp_id']; ?>" hidden>
				  
				  <label>First Name*</label><br>
				  <input type="text" name="fname" class="form-control"  required value="<?php echo $fetch_detail['fname']; ?>">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				 <label>Middle Name</label><br>
				  <input type="text" name="mname" class="form-control" value="<?php echo $fetch_detail['mname']; ?>">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				   <label>Last Name</label><br>
				  <input type="text" name="lname" class="form-control" value="<?php echo $fetch_detail['lname']; ?>" >
				  </div>
				  
				  </div><br>
				 
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Date Of Birth*</label><br>
				  <input type="date" name="dob" class="form-control" required value="<?php echo $fetch_detail['dob']; ?>">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Gender*</label><br>
				  <select name="gender" class="form-control" required >
				  <option value="<?php echo $fetch_detail['gender']; ?>"><?php echo $fetch_detail['gender']; ?></option>
				  <?php
				 while($fetch_gender=mysqli_fetch_assoc($result_gender))
				 {
					 if($fetch_detail['gender']!=$fetch_gender['gender'])
					 {
						?><option><?php echo $fetch_gender['gender']; ?></option>
						 <?php 
					 }
					 
				 }
				  ?>
				  </select>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Marital Status*</label><br>
				  <select name="status" class="form-control" required >
				  <option value="<?php echo $fetch_detail['status']; ?>"><?php echo $fetch_detail['status']; ?></option>
				 <?php
				 while($fetch_status=mysqli_fetch_assoc($result_m_status))
				 {
					 if($fetch_detail['status']!=$fetch_status['m_status'])
					 {
						?><option><?php echo $fetch_status['m_status']; ?></option>
						 <?php  
					 }
				 }
				 ?>
				  </select>
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Nationality*</label><br>
				  <Select name="nationality" class="form-control" required value="<?php echo $fetch_detail['nationality']; ?>">
				  <option value="<?php echo $fetch_detail['nationality']; ?>"><?php echo $fetch_detail['nationality']; ?></option>
				  <?php
				  while($fetch_nation=mysqli_fetch_assoc($result_nati))
				  {
					  if($fetch_detail['nationality']!=$fetch_nation['Nationality'])
					  {
						 ?><option><?php echo $fetch_nation['Nationality']; ?></option>
						 <?php 
					  }
				  }
				  ?>
				  </select>
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Religion*</label><br>
				  <Select name="religion" class="form-control" required value="<?php echo $fetch_detail['religion']; ?>" >
				 <option> <?php echo $fetch_detail['religion']; ?> </option>
				 <?php

				 while($fetch_reg=mysqli_fetch_assoc($result_reg))
				 {
					 if($fetch_reg['religions']!=$fetch_detail['religion'])
					 {
						?><option><?php echo $fetch_reg['religions']; ?></option>
						 <?php 
					 }
					  
				 }
				 ?>
				  </select>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Joining Date*</label><br>
				  <input type="date" name="jdate" class="form-control" required value="<?php echo $fetch_detail['joining_date']; ?>">
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Designation*</label><br>
				  <input type="text" name="desi" class="form-control" required value="<?php echo $fetch_detail['desi']; ?>">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Department*</label><br>
				  <input type="text" name="dept" class="form-control" required value="<?php echo $fetch_detail['dept']; ?>">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Phone*</label><br>
				   <input type="number" name="phone" class="form-control" required pattern="[789][0-9]{9}" required value="<?php echo $fetch_detail['phone']; ?>">
				  </div>
				  </div></br>
				  <div class="row">
				  <div class="col-sm-3">
				  <label>Email*</label><br>
				  <input type="text"  id="email" name="email" class="form-control"  required onblur="check_email();" value="<?php echo $fetch_detail['email']; ?>">
				  <span id="email_valid">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>PAN No.*</label><br>
				  <input type="number" name="pan" class="form-control" required value="<?php echo $fetch_detail['pan']; ?>">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Adhar Card No.</label><br>
				  <input type="number" name="adhar" class="form-control"  value="<?php echo $fetch_detail['adhar']; ?>">
				  </div>
				  
				  </div><br>
                </div>
              </div>
            </div>
          </div>
		  </div>
		  
		  <!--dlskalfksa -->
		     <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Employee Address Details </h2>
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
                </div>
                <div class="x_content">
                  <br />
				  <div class="row">
				  <div class="col-sm-5">
				 
				   <span ><p style="text-align:right"><b>same parmanent address</b>&nbsp;&nbsp;<input type="checkbox" id="parmanent123" onclick="parmanentd();" ><p></span>
				 
				   <div class="row">
				  <div class="col-sm-12">
				  <label>Present Address</label><br>
				 <textArea class="form-control" rows="6" cols="6" id="present" name="present"> <?php echo $fetch_detail['temp_add'];  ?></textArea>
				 
				 </div>
				   </div>
				 </div>
				  <div class="col-sm-7">
				 <br><br>
				  <div class="row">
				  <div class="col-sm-12" style="padding-left:20%">
				  <label>Parmanent Address</label>
				 <textArea class="form-control" name="parmanent" rows="6" cols="6" id="parmanent" ><?php echo $fetch_detail['parm_add'];  ?></textArea>
				  </div>
				   </div>
				   </div>
				  </div><br>
				  </div>
              </div>
            </div>
          </div>

<!--- aklfklkal -->
	     <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Employee Education Qualification </h2>
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
                </div>
                <div class="x_content">
                  <br />
				 <table class="table-bordered">
				 <thead>
				<th>Exam Passed</th>
				<th>Degree/Subject/Stream</th>
				<th>Date of Passing</th>
				<th>Obtained Marks</th>
				<th>Total Marks</th>
				<th>% of Marks</th>
				<th>Class/Grade</th>
				</thead>
				<script>
				function sum()
				{
					document.getElementById('p_marks').value=(parseInt(document.getElementById('o_marks').value)*100)/parseInt(document.getElementById('t_marks').value);
				
				}
				</script>
				 <tr>
				 <td><input type="text" name="X" style="border:none" readonly value="Graduction*"></td>
				 <td><input type="text" name="sub" class="form-control" required value="<?php echo $fetch_quali['sub']; ?>"></td>
				 <td><input type="date" name="dop" class="form-control"required value="<?php echo $fetch_quali['dop']; ?>"></td>
				 <td><input type="number" name="o_marks" class="form-control" id="o_marks" required value="<?php echo $fetch_quali['o_marks']; ?>"></td>
				 <td><input type="number" name="t_marks" class="form-control"id="t_marks" value="<?php echo $fetch_quali['t_marks']; ?>"required onblur="sum();"></td>
				 <td><input type="text" name="p_marks" class="form-control" id="p_marks" value="<?php echo $fetch_quali['p_marks']; ?>"required onblur="sum();"></td>
				 <td><Select name="class" class="form-control"required value="<?php echo $fetch_quali['class']; ?>">
				 <option value="<?php echo $fetch_quali['class']; ?>"><?php echo $fetch_quali['class']; ?></option>
				 <?php
				 while($fetch_grad=mysqli_fetch_assoc($result_grade))
				 {
					 if($fetch_quali['class']!=$fetch_grad['grade'])
					 {
						 ?>
						 <option><?php echo $fetch_grad['grade']; ?></option>
						 <?php
					 }
				 }
				 ?>
				 </Select>
				 </td>
				 </tr>
				</table>
                </div>
              </div>
            </div>
          </div>
		  <div class="row">
			<div class="col-sm-12">
		  <button  name="update" class="btn btn-info btn-lg btn-block" ><i class="fa fa-save" style="color:red; font-size:25px"></i>&nbsp;&nbsp;Update</button>
		 
		  </div>
		  </div>  
</div>
<?php
	  
include_once("footer.php");
}
?>
	</form>
</div>
</div>
<?Php
include_once("script.php");
?>
</body>
</html>
         