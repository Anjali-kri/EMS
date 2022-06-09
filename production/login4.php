

<?php
error_reporting(0);
$con=mysqli_connect('localhost','root','','power');

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	<link rel="stylesheet" href="login_css1.css">
	<link rel="stylesheet" href="style.css">
	body
{
	background-image: url("abc.jpg");
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background-size: cover;
}
.box
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 400px;
	padding: 40px;
	background: rgba(0,0,0,0.5);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,0.5);
	border-left: 10ox

}
.box h2
{
	margin: 0 0 30px;
	padding: 0px;
	color: #fff;
	text-align: center;
}
.box .inputBox
{
	position: relative;;

}
.box .inputBox input
{
	width: 300px;
	padding: 10px;
	font-size: 16px;
	color: #fff;
	letter-spacing: 1px;
	margin-bottom: 30px;
	border-bottom-width: 1px;
	
	outline: 2px;
	background: transparent;
}
.box input[type="submit"]
{
	background: transparent;
	border:none;
	outline: none;
	color: #fff;
	background:#03a9f4;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 5px;

}
</style>
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
			
		</div>
		<input type="submit" name="btn">
		<?php
		error_reporting(0);
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$mysqli="insert into  login ($user,$pass) values('preeti', '123', )";
;
		if(isset($_POST['btn']))
		{
		if(($user=="user") && ($pass=="pass") )
		{
			header("Location:p.php");
		}
		else
		{
			
			echo  "wrong userid or password";
		}
	}

		?>
	</form>
</div>
</body>
</html>