<!DOCTYPE html>

<?php
include "connection1.php";
session_start();
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="login_css1.css">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<div class="box">
		<h2>Login</h2>
	<form method="post">
		<div class="inputBox">
			<input type="text" name="user" required="" placeholder="username" autocomplete="off" >
			
		</div>
		<div class="inputBox">
			<input type="password" name="pass" required="" placeholder="pasword" autocomplete="off" >
			<span style="color:red;padding-left:70px;font-size:15px"><u><a href="admin_forget_password.php" style="color:red;">Forget Password</a> /<a href="admin_add.php" style="color:red;"> New Registration</a> </u></span>
		</div><br>
		<input type="submit" name="btn">
		<?php
		error_reporting(0);
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$sql="select * from admin_add where user='$user' and pass='$pass' ";
		$result=mysqli_query($con,$sql);
		$fetch=mysqli_fetch_assoc($result);

		if(isset($_POST['btn']))
		{
		if(($user==$fetch['user'])&&($pass==$fetch['pass']))
		{
			$_SESSION['user_name']=$fetch['name'];
			$_SESSION['emp_code']=$fetch['reg_no'];
			
			header("Location:admin_profile.php");
		}
		else
		{
			?>
			 <span style="color:red"> wrong userid or password<span>
			<?php
		}
	}



		?>



	</form>
</div>
</body>
</html>