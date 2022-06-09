<?php
	include('connection.php');
	$sql1="select * from fee where class='".$_POST["adno"]."'";
	$r1=mysqli_query($con,$sql1);
	$result12=mysqli_fetch_assoc($r1);
?>

<?php
if(mysqli_num_rows($r1)>0)
{  
  $fee=$result11['fee'];
  $activity=$result11['activity'];
  $lab=$result11['lab'];
  $exam=$result11['exam'];
  $development=$result11['development'];
  $addfee=$result11['addfee'];
  $icard=$result11['icard'];
  $uniform=$result11['uniform'];
  $yearlyfee=$fee+$activity+$lab+$exam+$development+$addfee+$icard+$uniform;
  
  
?>
<select>
<option value="<?php echo $yearlyfee;?>"><?php echo $yearlyfee ;?></option>
</select>
<?php
}
else
{
	
echo "Sorry! No result found!!";
}
?>
</html>