
<html lang="en">
<head>
  <?php
  
  include("head1.php");
  include "connection1.php";
  
  ?>
  
  <style >
  .f_size
  {
	 font-size:18px;
	  
  }
  .p
  {
	  color:red;
  }
  a:hover
  {
	  color:red;
	  
  }
 

  </style>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
	 <div class="navbar nav_title" style="border: 0;">
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
?>
<script>
function printpage(p1)
{   
	var rpage = document.body.innerHTML;
	var pritablecontent= document.getElementById(p1).innerHTML;
	document.body.innerHTML=pritablecontent;
	window.print();
	document.body.innerHTML= rpage;
}
</script>
      <!-- page content -->
      <div class="right_col" role="main">
	  <input type="submit" onclick="printpage('maincontent');" value="print"/>
	  <div id="maincontent">
	      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><p style="color:red">Employee Personal Details<p> </h2>
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
				  
                 <!-- working Area     -->
				 <?php
				 $data=$_SESSION['emp_code'];
				 $result=mysqli_query($con,"select * from emp_details where emp_id='$data'");
				 $result1=mysqli_query($con,"select * from emp_qualification where emp_id='$data'");
				 $result2=mysqli_query($con,"select * from emp_salary where emp_id='$data'");
				 $result3=mysqli_query($con,"select * from emp_bank_detail where emp_id='$data'");
				 $result4=mysqli_query($con,"select * from emp_upload_photo where emp_id='$data'");
				 $result5=mysqli_query($con,"select * from emp_sal_monthly where emp_id='$data'");
				 $emp_details=mysqli_fetch_assoc($result);
				 $emp_qualification=mysqli_fetch_assoc($result1);
				 $emp_salary=mysqli_fetch_assoc($result2);
				 $emp_bank_detail=mysqli_fetch_assoc($result3);
				 $emp_upload_photo=mysqli_fetch_assoc($result4);
				 $emp_sal_monthly=mysqli_fetch_assoc($result5);
				
				 ?>
				  <div class="row">
				 <div class="col-sm-8 col-md-8 col-lg-8 f_size">
				 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Name : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['fname'];?>&nbsp; <?php
				      echo $emp_details['mname'];?>&nbsp; <?php
				      echo $emp_details['lname'];?>
				 </div>
				 </div><br>
				 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Date of Birth : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['dob'];?>&nbsp; </b>
				 </div>
				 </div><br>
				 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Gender : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['gender'];?>&nbsp; </b>
				 </div>
				 </div><br>
				 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Matrital Status : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['status'];?>&nbsp;  </b>
				 </div>
				 </div><br>
				 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Nationality : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['nationality'];?>&nbsp; </b>
				 </div>
				 </div><br>
				 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Religion : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['religion'];?>&nbsp; </b>
				 </div>
				 </div><br>
				 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Joinging Date : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['joining_date'];?>&nbsp; </b>
				 </div>
				 </div><br><div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Department : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['dept'];?>&nbsp; </b>
				 </div>
				 </div><br>
				 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Phone Number : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['phone'];?>&nbsp; </b>
				 </div>
				 </div><br>
				 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Email : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['email'];?>&nbsp; </b>
				 </div>
				 </div><br>
				  <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> PAN No. : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['pan'];?>&nbsp; </b>
				 </div>
				 </div><br>
				  <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<label> Adhar No. : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <b><?php echo $emp_details['adhar'];?>&nbsp; </b>
				 </div>
				 </div><br>
				 
				 </div>
				 <div class="col-sm-4 col-md-4 col-lg-4">
				 <?php
				 if($emp_upload_photo['photo']=="")
				 {
					 include "photo.php";
				} 
				 else
				 {
				?>	 
				
				 <div style="border:3px solid green;width:205px;height:205px; border-radius:10px">
				 <img src="<?php echo $emp_upload_photo['photo']; ?>" style="width:200px;height:200px;border-radius:10px" ></div>
				 <?php
				 }
				 ?>
				 <br> <label Style="padding-left:30px" > Desigination : &nbsp;<?php echo $emp_details['desi'];?></label>
				 <br><label Style="padding-left:30px" >Employee Id :&nbsp; <?php echo $emp_upload_photo['emp_id']; ?></label>
				  </div>
				  </div>
				 </div>
				  <div class="row p">
				 <div class="col-sm-12 col-md-12 col-lg-12">
				 <h3> <p style="color:red">Address &nbsp;</p></h3>
				 <hr style="border-width:5px">
				 </div>
				</div><br>
				 <div class="row f_size">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label>Parmanent Address</label><br><hr>
				 <b><?php echo $emp_details['parm_add'];?>&nbsp; <b><br><br>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label>Present Address</label><br><hr>
				 <b><?php echo $emp_details['temp_add'];?>&nbsp; <b><br><br>
				 </div>
				 </div></br>
				 
             
			 <div class="f_size">
			  <div class="row p">
				 <div class="col-sm-12 col-md-12 col-lg-12">
				 <h3> <p >Qualification  &nbsp;</p></h3>
				 <hr style="border-width:5px">
				 </div>
				</div><br>
				<div class="row">
				 <div class="col-sm-12 col-md-12 col-lg-12">
				  <table class="table table-striped table-border table-hover">
				 <thead>
				<th>Exam Passed</th>
				<th>Degree/Subject/Stream</th>
				<th>Date of Passing</th>
				<th>Obtained Marks</th>
				<th>Total Marks</th>
				<th>% of Marks</th>
				<th>Class/Grade</th>
				</thead>
				
				 <tr>
				 <td><?php echo $emp_qualification['course'];  ?></td>
				 <td><?php echo $emp_qualification['sub'];  ?></td>
				 <td><?php echo $emp_qualification['dop'];  ?></td>
				 <td><?php echo $emp_qualification['o_marks'];  ?></td>
				 <td><?php echo $emp_qualification['t_marks'];  ?></td>
				 <td><?php echo $emp_qualification['p_marks'];  ?></td>
				 <td><?php echo $emp_qualification['class'];  ?> </td>
				 </tr>
				</table>
				 
				 </div>
				</div><br>
				 <div class="row p">
				 <div class="col-sm-12 col-md-12 col-lg-12">
				 <h3> <p>Salary &nbsp;</p></h3>
				 <hr style="border-width:5px">
				 </div>
				</div><br>
				<div class="row">
				 <div class="col-sm-12 col-md-12 col-lg-12">
				  <table class="table table-striped table-border table-hover">
				 <thead>
				<th>Salary</th>
				<th>Basic</th>
				<th>Housing Allowance</th>
				<th>Medical</th>
				<th>Dearness</th>
				<th>Increment</th>
				<th>Insentive</th>
				<th>Outdoor</th>
				<th>Transport</th>
				<th>Total Earning</th>
				</thead>
				<tr>
				 <td><p style="font-size:20px; color:green">&#10004;</p></td>
				 <td><?php echo $emp_salary['b_sal'];  ?></td>
				 <td><?php echo $emp_salary['house'];  ?></td>
				 <td><?php echo $emp_salary['medical'];  ?></td>
				 <td><?php echo $emp_salary['dearness'];  ?></td>
				 <td><?php echo $emp_salary['increment'];  ?></td>
				 <td><?php echo $emp_salary['incentive'];  ?> </td>
				 <td><?php echo $emp_salary['outdoor'];  ?></td>
				 <td><?php echo $emp_salary['transport'];  ?></td>
				 <td><?php echo $emp_salary['total_earn'];  ?></td>
</tr>
				 
				</table>
				 
				 </div>
				</div><br>
				<div class="row">
				 <div class="col-sm-12 col-md-12 col-lg-12">
				  <table class="table table-striped table-border table-hover">
				 <thead>
				<th>Salary</th>
				<th>loss of ways</th>
				<th>PF</th>
				<th>Tax</th>
				<th>Other</th>
				<th>Total Deduction</th>
				
				</thead>
				<tr>
				 
				 <td><p style="font-size:20px; color:green">&#10004;</p></td>
				 <td><?php echo $emp_salary['loss_wage'];  ?></td>
				 <td><?php echo $emp_salary['provident_fund'];  ?></td>
				 <td><?php echo $emp_salary['tax'];  ?></td>
				 <td><?php echo $emp_salary['other1'];  ?></td>
				 <td><?php echo $emp_salary['total_deduction'];  ?> </td>
				</tr>
				 </table>
				 
				 </div>
				</div><br>
				<div class="row">
				 <div class="col-sm-12 col-md-12 col-lg-12">
				  <span style="margin-left:40%;border:2px solid;font-size:200%; padding-right:30px"><tb>Gross Salary :&nbsp; <?php echo $emp_sal_monthly['gross'];?></b></span>
				 
				 </div>
				</div><br>
				<div class="row p">
				 <div class="col-sm-12 col-md-12 col-lg-12">
				 <h3> <p>Account Details  &nbsp;</p></h3>
				 <hr style="border-width:5px">
				 </div>
				</div><br>
				 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Bank Name : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<b><?php echo $emp_bank_detail['bank_name'];?>&nbsp; <b>
				</div>
				<div>
				  </div>
             </div><br>
			  <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Bank Address : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<b><?php echo $emp_bank_detail['bank_address'];?>&nbsp; <b>
				</div>
				<div>
				  </div>
             </div><br>
			  <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> IFSC Code : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<b><?php echo $emp_bank_detail['ifc_code'];?>&nbsp; <b>
				</div>
				<div>
				  </div>
             </div><br>
			  <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> A/C Holder Name : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<b><?php echo $emp_bank_detail['account_holder'];?>&nbsp; </b>
				</div>
				<div>
				  </div>
             </div><br>
			  <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> A/C Number : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<b><?php echo $emp_bank_detail['account_no'];?>&nbsp; </b>
				</div>
				<div>
				  </div>
             </div><br>
			  <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> Other : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<b><?php echo $emp_bank_detail['other'];?>&nbsp; </b>
				</div>
				<div>
				  </div>
             </div><br>
			
			  <div class="row p">
				 <div class="col-sm-12 col-md-12 col-lg-12">
				 <h3> <p>Doucment Uploaded &nbsp;</p></h3>
				 <hr style="border-width:5px">
				 </div>
				</div><br>
				<div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> PAN CARD : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<b><a href="<?php echo $emp_upload_photo['matric']; ?>" download>click here to download PAN card</a> </b>
				</div>
				<div>
				  </div>
             </div><br>
			 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> ADHAR CARD : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<b><a href="<?php echo $emp_upload_photo['inter']; ?>"download>click here to download Adhar Card </a> </b>
				</div>
				<div>
				  </div>
             </div><br>
			 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> GRADUCATION CERTIFICATE : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<b><a href="<?php echo $emp_upload_photo['grad']; ?>" download>Click here to download graduction certificate </a> </b>
				</div>
				<div>
				  </div>
             </div><br>
			 <div class="row">
				 <div class="col-sm-6 col-md-6 col-lg-6">
				 <label> EXPERIENCE CERTIFICATE : &nbsp;</label>
				 </div>
				 <div class="col-sm-6 col-md-6 col-lg-6">
				<b><a href="<?php echo $emp_upload_photo['post_grad']; ?>" download>Click here to download experience Certificate </a>
				</div>
				<div>
				  </div>
             </div><br>
			  <div class="row">
				 <div class="col-sm-12 col-md-12 col-lg-12">
				<div style="margin-left:80%">
				<?php
				 if($emp_upload_photo['sign']=="")
				 {
					 include "sign.php";
				} 
				 else
				 {
				?>	 
				
				<img src="<?php echo $emp_upload_photo['sign']; ?>" style="width:200px;height:100px;border-radius:10px" ><br>
				 <?php
				 }
				 ?>
				
				 <span style="padding-right:30px">Appicant Signature</span></div>
				 </div>
				</div><br>
			 </div>
            </div>
          </div>
         </div><br><br>
        </div>
		<?php
		include("footer.php");
		?>
		</div>
      </div>
     </div>

<?php
include("script.php");
?>
</body>
</html>
