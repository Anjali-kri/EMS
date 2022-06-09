
<html lang="en">
<head>
  <?php
error_reporting(0);
 include "connection1.php";
 
  include("head1.php");
    
	session_start();
	$admin=$_SESSION['user_name'];
  
  if($admin=="")
  {
	  header('Location:login.php');
  }
  include ("session_check_file.php");
  $result21=mysqli_query($con,"select gender FROM combo where gender='male' OR gender='female' OR gender='other'");
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
	   var a1=document.getElementById('lane').value;
	   var a2=document.getElementById('street').value;
	    var a3=document.getElementById('locality').value;
		 var a4=document.getElementById('city').value;
		  var a5=document.getElementById('state').value;
		   var a6=document.getElementById('pin').value;
		  
		  //alert(p);
		   if(document.getElementById('parmanent').checked==true)
		   {
			   document.getElementById('lane1').value= a1;
			    document.getElementById('street1').value=a2;
				document.getElementById('locality1').value=a3;
				document.getElementById('city1').value=a4;
				  document.getElementById('state1').value=a5;
				   document.getElementById('pin1').value=a6;
			   
		   }
		   else 
		   {
			   
			   document.getElementById('lane1').value="";
			    document.getElementById('street1').value="";
				 document.getElementById('locality1').value=""; 
				 document.getElementById('city1').value="";
				  document.getElementById('state1').value="";
				   document.getElementById('pin1').value="";
		   }
  }
  
  function get_dept(val)
{
	$.ajax
	({
		type:"POST",
		url:"get_dept.php",
		data:'emp='+val,
		success:function(data)
		{
			$("#desi").html(data);
			
		}
		
	});
}
  </script>
  <?php

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
	      <div class="row">
		  <form method="POST" action="admin_upload_photo.php">
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
				  <div class="row">
				  <div class="col-sm-3">
				  <label>Emp id</label><br>
				  <?php $date=date('Y');
				 $sql4="select * from emp_details";
				$result=mysqli_query($con,$sql4);
				  $row=mysqli_num_rows( $result);
				  $id=$date.++$row;
				  ?>
				  <input type="text" name="emp_Id" class="form-control" value="<?php echo $id; ?>"  readonly>
				  </div>
				  </div><br>
				  <div>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>First Name*</label><br>
				  <input type="text" name="fname" class="form-control"  required>
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				 <label>Middle Name</label><br>
				  <input type="text" name="mname" class="form-control" >
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				   <label>Last Name</label><br>
				  <input type="text" name="lname" class="form-control" >
				  </div>
				  
				  </div><br>
				 
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Date Of Birth*</label><br>
				  <input type="date" name="dob" class="form-control" required>
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Gender*</label><br>
				  <select name="gender" class="form-control" required>
				  <option>choose</option>
				  <?php 
				  while($fetch=mysqli_fetch_assoc($result21))
				  {
					  ?>
					  <option value="<?php echo $fetch['gender'];?>"><?php echo $fetch['gender']; ?></option>
					  <?php
				  }
				  ?>
				  </select>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Marital Status*</label><br>
				  <select name="status" class="form-control" required>
				  <option>choose</option>
				  <?php
				  while($fetch_ms=mysqli_fetch_assoc($result_m_status))
				  {
					?>
					<option><?php echo $fetch_ms['m_status'];  ?></option>
					<?php					
				  }
				  ?>
				  </select>
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Nationality*</label><br>
				  <Select name="nationality" class="form-control" required>
				  <option>choose</option>
				 <?php
				 while($fetch_nati=mysqli_fetch_assoc($result_nati))
				 {
					 ?>
					 <option> <?php echo $fetch_nati['Nationality']; ?></option>
					 <?php
				 }
				 ?>
				  </select>
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Religion*</label><br>
				  <Select name="religion" class="form-control" required >
				  <option>choose</option>
				  <?php
				  while($fetch_reg=mysqli_fetch_assoc($result_reg))
				  {
					  ?>
					  <option><?php echo $fetch_reg['religions']; ?> </option>
					  <?php
				  }
				  ?>
				  </select>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Joining Date*</label><br>
				  <input type="date" name="jdate" class="form-control" required>
				  </div>
				  
				  </div><br>
				   <div class="row">
				    <div class="col-sm-3">
				  <label>Department*</label><br>
				  <select name="dept" class="form-control" onchange="get_dept(this.value)" >
				  <option> choose</option>
				  <?php
				  $result=mysqli_query($con, "select * from admin_dept_type");
				  while($fetch=mysqli_fetch_assoc($result))
				  {
					  ?>
					  <option value='<?php echo $fetch['dept_short_name'];?>'><?php echo $fetch['department name'];?></option>
					  <?php
				  }
				  
				  ?>
				  </select>
				  </div>
				  <div class="col-sm-1">
				</div>
			       <div class="col-sm-3">
				  <label>Post*</label><br>
				  <select  name="desi" id="desi" class="form-control">
				  </select>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Phone*</label><br>
				   <input type="number" name="phone" class="form-control" required pattern="[789][0-9]{9}" required>
				  </div>
				  </div></br>
				  <div class="row">
				  <div class="col-sm-3">
				  <label>Email*</label><br>
				  <input type="text"  id="email" name="email" class="form-control"  required onblur="check_email();">
				  <span id="email_valid">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>PAN No.*</label><br>
				  <input type="number" name="pan" class="form-control" required>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Adhar Card No.</label><br>
				  <input type="number" name="adhar" class="form-control" >
				  </div>
				  
				  </div><br>
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
				  <label>Present Address</label><br>
				   <span ><p style="text-align:right"><b>same parmanent address</b>&nbsp;&nbsp;<input type="checkbox" id="parmanent" onclick="parmanentd();" ><p></span>
				  <hr>
				 <div class="row">
				  <div class="col-sm-12">
				  <label>Lane</label>
				  <input type="text" name="lane" class="form-control" id="lane" >
				 
				 </div>
				   </div>
				   <div class="row">
				  <div class="col-sm-12">
				  <label>street</label>
				  <input type="text" name="street" class="form-control" id="street" >
				 
				 </div>
				   </div>
				    <div class="row">
				  <div class="col-sm-12">
				  <label>locality</label>
				  <input type="text" name="locality" class="form-control" id="locality">
				 
				 </div>
				   </div>
				   <div class="row">
				  <div class="col-sm-12">
				  <label>State*</label>
				  <input type="text" name="state" class="form-control" id="state" required>
				 </div>
				   </div>
				    <div class="row">
				  <div class="col-sm-12">
				  <label>City*</label>
				  <input type="text" name="city" class="form-control" id="city" required>
				 </div>
				   </div>
				    
				    <div class="row">
				  <div class="col-sm-12">
				  <label>Pin*</label>
				  <input type="number" name="pin" class="form-control" id="pin" required>
				 </div>
				   </div>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-5">
				  <label>Parmanent Address</label>
				  <br><br><hr>
				   <div class="row">
				  <div class="col-sm-12">
				  <label>Lane</label>
				  <input type="text" name="lane1" class="form-control" id="lane1">
				 </div>
				   </div>
				   <div class="row">
				  <div class="col-sm-12">
				  <label>street</label>
				  <input type="text" name="street1" class="form-control" id="street1">
				 </div>
				   </div>
				    <div class="row">
				  <div class="col-sm-12">
				  <label>locality</label>
				  <input type="text" name="locality1" class="form-control" id="locality1">
				 </div>
				   </div>
				   <div class="row">
				  <div class="col-sm-12">
				  <label>State*</label>
				  <input type="text" name="state1" class="form-control" id="state1" required>
				 </div>
				   </div>
				    <div class="row">
				  <div class="col-sm-12">
				  <label>City*</label>
				  <input type="text" name="city1" class="form-control" id="city1" required>
				 </div>
				   </div>
				    
				    <div class="row">
				  <div class="col-sm-12">
				  <label>Pin*</label>
				  <input type="number" name="pin1" class="form-control" id="pin1" required>
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
				 <td><input type="text" name="sub" class="form-control" required></td>
				 <td><input type="date" name="dop" class="form-control"required></td>
				 <td><input type="number" name="o_marks" class="form-control" id="o_marks" value="0"required ></td>
				 <td><input type="number" name="t_marks" class="form-control"id="t_marks" value="0"required onblur="sum();"></td>
				 <td><input type="text" name="p_marks" class="form-control" id="p_marks" value="0"required onblur="sum();"></td>
				 <td><Select name="class" class="form-control"required>
				 <?php
				 while($fetch_grade=mysqli_fetch_assoc($result_grade))
				 {
					 ?>
					 <option><?php echo $fetch_grade['grade']?></option>
					 <?php
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
		  <button name="submit" value="Save "class="btn btn-info btn-lg btn-block" ><i class="fa fa-save" style="color:white; font-size:25px"></i>&nbsp;&nbsp;Save & Next</button>
		  
		  </div>
		  </div>  
	      </form> 
		 
</div>
<div style="margin-top:1500px;"></div>
<?php
include_once("footer.php");

?>
</div>
</div>
<?Php
include_once("script.php");
?>
</body>
</html>
         