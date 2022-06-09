 <?php
 include("connection1.php");
 error_reporting(0);
				$ap= $_POST[emp];
			//echo $ap;
 
 
 ?>
 
 
 <html>
 <?php
				  
					  echo "data Selected";
				 $result= mysqli_query($con,"select max(id )as maximum from finance_year");
				 $fetch=mysqli_fetch_assoc($result);
				  $maxi= $fetch['maximum'];
				  $result1= mysqli_query($con,"select * from finance_year where id='$maxi'");
				  $fetch1=mysqli_fetch_assoc($result1);
				  $yr=$fetch1['start'];
				  $result2= mysqli_query($con,"select * from yearly where year='$yr'");
				  $fetch2=mysqli_fetch_assoc($result2);
				  $tmp=$fetch2['id'];
				  $tmp=$tmp+1;
				 $y1=$tmp-1;
				 ?>
				 <select ><?php
				 while(($fetch2['id'])!=$tmp)
				{
					  if($tmp==14)
					  {
						  $tmp=1;
						  $y1=1;
						
					  }
					 $result3= mysqli_query($con,"select * from yearly where id='$y1'");
				  $fetch3=mysqli_fetch_assoc($result3);
					 
					 ?><option value="<?php echo $fetch3['year'] ; ?>"><?php echo $fetch3['year'] ; ?></option>
					 <?Php
					 ++$y1;
				++$tmp;
				  }
				  ?>
</select>
</html>