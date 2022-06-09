
<?php
error_reporting(0);
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
					$a= $fetch['net_pay'];
					echo $a;
			 ?>
	
				<?php	
				 }  
					
				 else
				 {	
			 
				 }
				 
				}
				
				
				
				  
					 
?>



