
<html lang="en">
<head>
  <?php
   session_start();
  $admin=$_SESSION['user_name'];
  if($admin=="")
  {
	  header('Location:login.php');
  }
   include "connection1.php";
  include ("session_check_file.php");
  error_reporting(0);
  include("head1.php");
   
	$emp_Id=$_POST['emp_Id'];
	$desi=$_POST['desi'];
	$b_sal=$_POST['b_sal'];
	$house=$_POST['house'];
	$medical=$_POST['medical'];
	$dearness=$_POST['dearness'];
	$increment=$_POST['increment'];
	$incentive=$_POST['incentive'];
	$outdoor=$_POST['outdoor'];
	$transport=$_POST['transport'];
	$total_ern=$_POST['total_ern'];
	$loss_wage=$_POST['loss_wage'];
	$pro_fund=$_POST['pro_fund'];
	$T_leave=$_POST['T_leave'];
	$tax=$_POST['tax'];
	$other1=$_POST['other1'];
	$total_dedu=$_POST['total_dedu'];
	$n_pay=$_POST['n_pay'];
	
	$b_name=$_POST['b_name'];
	$b_add=$_POST['b_add'];
	$ifc=$_POST['ifc'];
	$a_holder=$_POST['a_holder'];
	$a_num=$_POST['a_num'];
	$other2=$_POST['other2'];
	if(isset($_POST['save']))
	{
		$empid=$_POST['emp_Id'];
		$result=mysqli_query($con,"select * from emp_details where emp_id='$empid'");
		$total=mysqli_num_rows($result);
		
		$fetch=mysqli_fetch_assoc($result);
		if($empid==$fetch['emp_id'])
		{	
    mysqli_query($con,"insert into emp_salary values('$emp_Id','$desi','$b_sal','$house','$medical','$dearness','$increment','$incentive','$outdoor','$transport','$total_ern','$loss_wage','$pro_fund','$T_leave','$tax','$other1','$total_dedu','$n_pay')");
    mysqli_query($con,"insert into  emp_bank_detail values('$emp_Id','$b_name','$b_add','$ifc','$a_holder','$a_num','$other2')");
 ?>
	<script>alert("data save successfully");</script>
 <?php	
	}
	else
	{
  ?>
	<script>alert("data not save");</script>
<?php	
	}}
	
?>
<script>

function basic_add()
{
	var b_sal=parseInt(document.getElementById("b_sal").value);
var h_allow=parseInt(document.getElementById("h_allow").value);
var m_allow=parseInt(document.getElementById("m_allow").value);
var dearness=parseInt(document.getElementById("dearness").value);
var increment=parseInt(document.getElementById("increment").value);
var incentive=parseInt(document.getElementById("incentive").value);
var outdoor=parseInt(document.getElementById("outdoor").value);
var transport=parseInt(document.getElementById("transport").value);
var l_wage=parseInt(document.getElementById("l_wage").value);
var p_fund=parseInt(document.getElementById("p_fund").value);
var T_leave=parseInt(document.getElementById("T_leave").value);
var tax=parseInt(document.getElementById("tax").value);
var other=parseInt(document.getElementById("other").value);
document.getElementById("t_earn").value=b_sal+h_allow+m_allow+dearness+increment+incentive+outdoor+transport;
document.getElementById("t_dedu").value=l_wage+p_fund+tax+other;
document.getElementById("n_pay").value=parseInt(document.getElementById("t_earn").value)-parseInt(document.getElementById("t_dedu").value);
}
function getcheck(val)
{
	$.ajax
	({
		type:"POST",
		url:"check_emp_id_sal.php",
		data:'emp='+val,
		success:function(data)
		{
			$("#s").html(data);
			
		}
		
	});
}
</script>
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
		  <?php include "sidemenu_admin_login.php";?>
		  </div>
<?php
include("header.php");
$total="hello";
?>
      <!-- page content -->
      <div class="right_col" role="main">
	  <form method="POST">
	      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Employee Salary Details </h2>
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
				  <label>Emp id*</label><br>
				  <input type="text" name="emp_Id" class="form-control" id="emp_Id" required onblur="getcheck(this.value);">
				  </div>
				  <div class="col-sm-1">
				 <br> <span id="s"></span>
				</div>
				  <div class="col-sm-3">
				 <label>Designation</label><br>
				  <input type="text" name="desi" class="form-control" id="desi" required>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				   
				  </div>
				  
				  </div><br>
				 
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Basic Salary</label><br>
				  <input type="number" name="b_sal" class="form-control" id="b_sal" required value="0" onblur="basic_add();">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Housing Allowence</label><br>
				  <input type="number" name="house" class="form-control" id="h_allow" value="0" onblur="basic_add();">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Medical Allowence</label><br>
				  <input type="number" name="medical" class="form-control" id="m_allow" value="0" onblur="basic_add();">
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Dearness Allowence</label><br>
				  <input type="number" name="dearness" class="form-control" id="dearness" value="0" onblur="basic_add();">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Increment</label><br>
				  <input type="number" name="increment" class="form-control" id="increment" value="0" onblur="basic_add();">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Incentives</label><br>
				  <input type="number" name="incentive" class="form-control" id="incentive" value="0" onblur="basic_add();">
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Outdoor toure</label><br>
				  <input type="text" name="outdoor" class="form-control" id="outdoor" value="0" onblur="basic_add();">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Transport</label><br>
				  <input type="text" name="transport" class="form-control" id="transport" value="0" onblur="basic_add();">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Total Earning*</label><br>
				  <input type="number" name="total_ern" class="form-control" id="t_earn" required value="0" readonly>
				  </div>
				  
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
                  <h2>Employee Salary Deduction </h2>
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
				  <label>Loss wages fund</label><br>
				  <input type="number" name="loss_wage" class="form-control" id="l_wage" value="0" onblur="basic_add();">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Provident Fund</label><br>
				  <input type="number" name="pro_fund" class="form-control" id="p_fund" value="0" onblur="basic_add();">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Total Leave</label><br>
				  <input type="number" name="T_leave" class="form-control" id="T_leave" value="0" onblur="basic_add();">
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Tax</label><br>
				  <input type="number" name="tax" class="form-control" id="tax" value="0" onblur="basic_add();">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Other</label><br>
				  <input type="text" name="other1" class="form-control" id="other" value="0" onblur="basic_add();">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Total deduction</label><br>
				  <input type="number" name="total_dedu" class="form-control" id="t_dedu" value="0" readonly onblur="basic_add();">
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
                  <h2>Employee Bank Details </h2>
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
				  <label>Bank Name*</label><br>
				  <input type="text" name="b_name" class="form-control" required>
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Bank Address*</label><br>
				  <input type="text" name="b_add" class="form-control" required>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>IFC code*</label><br>
				  <input type="text" name="ifc" class="form-control" required>
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Account holder name*</label><br>
				  <input type="text" name="a_holder" class="form-control" required>
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Account Number*</label><br>
				  <input type="number" name="a_num" class="form-control" required>
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Other</label><br>
				  <input type="text" name="other2" class="form-control">
				  </div>
				  
				  </div><br>

                </div>
              </div>
            </div>
          </div>
		<!-- total payment -->  
		  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Gross Payment </h2>
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
				  <div class="col-sm-8">
				   </div>
				  <div class="col-sm-4">
				 <label> Net Payment* <label>  <input type="text" name="n_pay"  id="n_pay" required value="0" readonly class="form-control" onblur="basic_add();">
				 
				  </div>
				  
				  </div><br>
				   <div class="row">
	   
	   <div class="col-sm-12">
	   <button name="save"  class="btn-info btn-lg btn-block"><i class="fa fa-save" style="color:white; font-size:25px"></i>&nbsp;&nbsp; Save </button>
	   </div>
	   </div>

                </div>
              </div>
            </div>
          </div>
      
		
</form>

       
</div>
<div style="margin-top:1500px;"></div>
		<?php
		include("footer.php");
		?>
    </div>
  </div>

<?php
include("script.php");
?>
</body>

</html>
