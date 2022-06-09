			<?php
error_reporting(0);
include_once("connection.php");
if (isset($_POST["save"]))
{
   $sb=$_POST['sb'];
   $db=$_POST['db'];
   $tb=$_POST['tb'];
   $fb=$_POST['fb'];
   $meal=$_POST['meal'];
   $wifi=$_POST['wifi'];
   $q="insert into adminhostelfee value('$sb','$db','$tb','$fb','$meal','$wifi')";
   $r=mysqli_query($con,$q);
   if(mysqli_affected_rows($con)<0)
{
	echo"<script>alert('Sorry Error Occured');</script>";
}


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
      <?php include"topnavigation.php"?>
      <!-- page content -->
	  <div class="right_col" role="main">
	      <div class="">
        <div class="page-title">
            <div class="title_left">
              <h2></h2>
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
                  <h2> <span class="glyphicon glyphicon-align-left"></span> &nbsp;Hostel Fee</h2>
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
				<form method="post">
				<div class="row">
				<div class="col-sm-12"><br>
				
			<div class="row">
<div class="col-sm-12">
<label style="width:20%; border:3px solid ;color:grey;padding-left:25px;"> Number:</label>

<span style="padding-left:20px;"><input type="number" name="phone">
</span>
</div>
</div><br>

<div class="row">
<div class="col-sm-12">
<label style="width:20%; border:3px solid ;color:grey;padding-left:25px;"> Message:</label>

<span style="padding-left:20px;">
<textarea name="msg"></textarea>
</span>
</div>
</div><br>



<input type="submit" value="send " name="send" class="btn btn-info" style="border-radius:15px;" >	       
				</form>
		
				
				<?php include"footer.php"?>
      </div>
      <!-- /page content -->
    </div>
  </div>
   </form>
<?php include"scriptfile.php"?>
</body>
</html>
<?php
$authKey = "274966AIgNz5swdqhQ5ccbe1b4";
$senderId = "TESTDU";
if(isset($_POST['send']))
{
	$mobileNumber=$_POST['phone'];
	$msg=$_POST['msg'];
	//Your message to send, Add URL encoding here.
$message = urlencode($msg);

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init($url);
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$response = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo "<script>msg has been send ".$mobileNumber."</script>";
	
}
?>




