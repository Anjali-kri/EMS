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
  $development=$result11['development'];
  $addfee=$result11['addfee'];
  $icard=$result11['icard'];
  $uniform=$result11['uniform'];
  $yearlyfee=$fee+$activity+$lab+$exam+$development+$addfee+$icard+$uniform;
?>
<select name="yearlyfee">
<option value="<?php echo $yearlyfee;?>" ><?php echo $yearlyfee;?></option>
</select>
<?php
}
else
{
	
echo "Sorry! No result found!!";
}
?>
</html>