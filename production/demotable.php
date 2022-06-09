<html>
<head   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title> cbdk</title>
</head>
<body>
 <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
<tr>
<th>name</th>
<th>roll</th>
<th>class</th>
</tr>
<tr>
<td>fu</td>
<td>gijo</td>
<td>hi</td>
</tr>
</thead>


</table>


</body>


if (isset($_POST["save"]))
{
   $block=$_POST['block'];
   $floor=$_POST['floor'];

	   $q="insert into adminseat values('$block','$floor')";
 $r=mysqli_query($con,$q); 
	  
	}

if(mysqli_affected_rows($con)<0)
{
	echo"<script>alert('Sorry Error Occured');</script>";
}


	$sql="select * from adminhostel";
	$r=mysqli_query($con,$sql);
	











</html>