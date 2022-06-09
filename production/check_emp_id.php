<html>
<head>
<?php error_reporting(0); ?>
</head>
<body>


<?php
				 include("connection1.php");
				$s= $_POST[emp];
				 $result= mysqli_query($con,"select * from emp_salary  where emp_id='$s'");
				$fetch=mysqli_fetch_assoc($result);
				if($_POST['emp']=="")
				{
					
				}
				else
				{
				if($fetch['emp_id']==$_POST['emp'])
				 { 
					
			        ?>
					<p style="font-size:22px; color:green">&#10004;</p>
					<?php
				 }  
					
				 else
				 {	?>
					 <p style="font-size:22px; color:red">&#10008;</p>
					 <?php
				 }
				 
				}
				
				
				
				  
					 
?>



</body>				
</html>