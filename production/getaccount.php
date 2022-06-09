<?php
$a_code=$_POST['a_type'];
error_reporting(0);
include "connection1.php";
$result=mysqli_query($con, "select * from admin_account where account_type='$a_code'");
$total=mysqli_num_rows($result);
if($a_code=='Admin')
{
$code='admin/'.++$total;
}
else 
{
$code='subadmin/'.++$total;
}
?>
<div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Account Code <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text"  class="form-control col-md-7 col-xs-12"  name="account_code" value="<?Php echo $code; ?>" readonly >
                </div>
                </div>