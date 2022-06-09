<?php
include "connection1.php";
$emp_id=$_POST['emp'];
$result=mysqli_query($con, "select * from emp_leave where emp_id='$emp_id'");

?>
<style>
.tr
{
	bgcolor:blue;
}
.th
{
	color:blue;
}
.Approved
{
		color:green;
}
.Reject
{
	color:red;
}
</style>
<h3> Leave History</h3>
<table class="table table-striped table-responsive">
	<tr class="tr">
		<th class='th'>Empid</th>
		<th class='th'>Leave Type</th>
		<th class='th'>From</th>
		<th class='th'>To</th>
		<th class='th'>Status</th>
    </tr>
	<?php
	while($fetch=mysqli_fetch_assoc($result))
	{
		?>
		<tr>
		<td><?php echo $fetch['emp_id']; ?></td>
		<td><?php echo $fetch['leave_type']; ?></td>
		<td><?php echo $fetch['from_date']; ?></td>
		<td><?php echo $fetch['to_date']; ?></td>
		<?php if($fetch['L1_status']=='3')
		{
		?>
		<td class="Approved">Approved</td>
			<?php
		}
		else if($fetch['L1_status']=='4')
		{
			?>
		<td class="Reject">Reject</td>
			<?php	
		}
		?>	
		</tr>
		<?php
	}
	
	?>

</table><br>
<h3> Leave Details</h3>
<table class="table table-striped table-responsive">
     <tr class="tr">
		<th class='th'>Leave Type</th>
		<th class='th'>Total</th>
		<th class='th'>Remaining</th>
	 </tr>
	 <?php  
	 $result_d=mysqli_query($con, "select * from employee_leave_details where emp_id='$emp_id'");
	 while($fetch_d=mysqli_fetch_assoc($result_d))
		 {
		 $rem=$fetch_d['no_of_days']-$fetch_d['temp_days'];	
	 
		 ?>
		 <tr>
		 <td><?php echo $fetch_d['leave_type']; ?></td>
		 <td><?php echo $fetch_d['no_of_days']; ?></td>
		 <td><?php echo $rem; ?></td>
		 </tr>
		 <?php
	 }
	 ?>
</table>