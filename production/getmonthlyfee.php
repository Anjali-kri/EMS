<html>
	<?php
	include('connection.php');
	$sql="select * from fee where class='".$_POST["adno"]."'";
	$r=mysqli_query($con,$sql);
	$result11=mysqli_fetch_assoc($r);
?>

<?php
if(mysqli_num_rows($r)>0)
{  
  $fee=$result11['fee'];
  $activity=$result11['activity'];
  $lab=$result11['lab'];
  $exam=$result11['exam'];
    
  $totalfee=$fee+$activity+$lab+$exam;
  $totalthreemonth=$totalfee*3;
  
?>
<select name="totalfee">
<option value="<?php echo $totalthreemonth;?>"><?php echo $totalthreemonth ;?></option>
</select>
<?php
}
else
{
	
echo "Sorry! No result found!!";
}
?>
</html>





