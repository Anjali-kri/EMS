
<html lang="en">
<head>
  <?php
  session_start();
  $admin=$_SESSION['user_name'];
  
  if($admin=="")
  {
	  header('Location:login.php');
  }
  error_reporting(0);
  include("head1.php");
    include "connection1.php";
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
	if(isset($_POST['update']))
	{
		$result_update_sal=mysqli_query($con,"update  emp_salary set desi='$desi', b_sal='$b_sal', house='$house', medical='$medical', dearness='$dearness', increment='$increment', incentive='$incentive', outdoor='$outdoor', transport='$transport', total_earn='$total_ern', loss_wage='$loss_wage', provident_fund='$pro_fund', total_leave='$T_leave', tax='$tax', other1='$other1', total_deduction='$total_dedu', net_pay='$n_pay' where emp_id='$emp_Id' ");
		$result_update_sal_detail=mysqli_query($con,"update  emp_bank_detail set bank_name='$b_name', bank_address='$b_add', ifc_code='$ifc', account_holder='$a_holder', account_no='$a_num', other='$other2' where emp_id='$emp_Id'");
	
	if($result_update_sal_detail)
	{
		?><script> alert("data updated");
		window.location.href="admin_update.php";
		</script><?php
		
	}
	else
	{
		?><script> alert("Update failed");</script><?php
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
<?php
					$empid=$_POST['reg'];
					if(isset($_POST['search']))
					{
						$result1=mysqli_query($con,"select * from emp_bank_detail where emp_id='$empid'");
						$fetch1=mysqli_fetch_assoc($result1);
						$result_data=mysqli_query($con,"select * from emp_salary where emp_id='$empid'");
						$fetch_data=mysqli_fetch_assoc($result_data);
						$empid=$fetch['emp_id'];
						$row=mysqli_num_rows($result_data);
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
		  <?php include "sidemenu_admin_login.php";?>
		  </div>
<?php
include("header.php");
$total="hello";
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
                  <h2>Update Employee Salary </h2>
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
				  <label> Employee Id.</label>
				  </div>
				  <div class="col-sm-4">
				 <input type="text" name="reg" class="form-control" >
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
	  <?php }
	  else 
		{
			$empid=$_POST['reg'];
			$result11=mysqli_query($con,"select * from emp_salary where emp_id='$empid'");
			$fetch=mysqli_fetch_assoc($result11);
			?>
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
				  <input type="text" name="emp_Id" class="form-control" id="emp_Id" required value="<?php echo $fetch['emp_id']; ?>" readonly>
				  </div>
				  <div class="col-sm-1">
				 <br> <span id="s"></span>
				</div>
				  <div class="col-sm-3">
				 <label>Designation</label><br>
				  <input type="text" name="desi" class="form-control" id="desi" required value="<?php echo $fetch['desi']; ?>">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				   
				  </div>
				  
				  </div><br>
				 
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Basic Salary</label><br>
				  <input type="number" name="b_sal" class="form-control" id="b_sal" required  onblur="basic_add();" value="<?php echo $fetch['b_sal']; ?>">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Housing Allowence</label><br>
				  <input type="number" name="house" class="form-control" id="h_allow" value="<?php echo $fetch['house']; ?>" onblur="basic_add();">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Medical Allowence</label><br>
				  <input type="number" name="medical" class="form-control" id="m_allow" value="<?php echo $fetch['medical']; ?>" onblur="basic_add();">
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Dearness Allowence</label><br>
				  <input type="number" name="dearness" class="form-control" id="dearness" value="<?php echo $fetch['dearness']; ?>" onblur="basic_add();">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Increment</label><br>
				  <input type="number" name="increment" class="form-control" id="increment" value="<?php echo $fetch['increment']; ?>" onblur="basic_add();">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Incentives</label><br>
				  <input type="number" name="incentive" class="form-control" id="incentive" value="<?php echo $fetch['incentive']; ?>" onblur="basic_add();">
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Outdoor toure</label><br>
				  <input type="text" name="outdoor" class="form-control" id="outdoor" value="<?php echo $fetch['outdoor']; ?>" onblur="basic_add();">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Transport</label><br>
				  <input type="text" name="transport" class="form-control" id="transport" value="<?php echo $fetch['transport']; ?>" onblur="basic_add();">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Total Earning*</label><br>
				  <input type="number" name="total_ern" class="form-control" id="t_earn" required value="<?php echo $fetch['total_earn']; ?>" readonly>
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
				  <input type="number" name="loss_wage" class="form-control" id="l_wage" value="<?php echo $fetch['loss_wage']; ?>" onblur="basic_add();">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Provident Fund</label><br>
				  <input type="number" name="pro_fund" class="form-control" id="p_fund" value="<?php echo $fetch['provident_fund']; ?>" onblur="basic_add();">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Total Leave</label><br>
				  <input type="number" name="T_leave" class="form-control" id="T_leave" value="<?php echo $fetch['total_leave']; ?>" onblur="basic_add();">
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Tax</label><br>
				  <input type="number" name="tax" class="form-control" id="tax" value="<?php echo $fetch['tax']; ?>" onblur="basic_add();">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Other</label><br>
				  <input type="text" name="other1" class="form-control" id="other" value="<?php echo $fetch['other1']; ?>" onblur="basic_add();">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Total deduction</label><br>
				  <input type="number" name="total_dedu" class="form-control" id="t_dedu" value="<?php echo $fetch['total_deduction']; ?>" readonly onblur="basic_add();">
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
				  <input type="text" name="b_name" class="form-control" required value="<?php echo $fetch1['bank_name'];?>">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Bank Address*</label><br>
				  <input type="text" name="b_add" class="form-control" required value="<?php echo $fetch1['bank_address'];?>">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>IFC code*</label><br>
				  <input type="text" name="ifc" class="form-control" required value="<?php echo $fetch1['ifc_code'];?>">
				  </div>
				  
				  </div><br>
				   <div class="row">
				  <div class="col-sm-3">
				  <label>Account holder name*</label><br>
				  <input type="text" name="a_holder" class="form-control" required value="<?php echo $fetch1['account_holder'];?>">
				  
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Account Number*</label><br>
				  <input type="number" name="a_num" class="form-control" required value="<?php echo $fetch1['account_no'];?>">
				  </div>
				  <div class="col-sm-1">
				</div>
				  <div class="col-sm-3">
				  <label>Other</label><br>
				  <input type="text" name="other2" class="form-control" value="<?php echo $fetch1['other'];?>">
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
				 <label> Net Payment* <label>  <input type="text" name="n_pay"  id="n_pay" required value="<?php echo $fetch['net_pay']; ?>" readonly class="form-control" onblur="basic_add();">
				 
				  </div>
				  
				  </div><br>
				   <div class="row">
	   
	   <div class="col-sm-12">
	   <button name="update"  class="btn-info btn-lg btn-block"><i class="fa fa-save" style="color:red; font-size:25px"></i>&nbsp;&nbsp; Update</button>
	   </div>
	   </div>

                </div>
              </div>
            </div>
          </div>
		<?php 
		} ?>
		
</form>

       
</div>
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
