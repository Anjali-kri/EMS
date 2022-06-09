<style>
.tr
{
	bgcolor:blue;
}
.th
{
	color:blue;
}
</style>

<table class="table table-striped table-responsive">
	<tr class="tr">
	<th class="th">Emp_id</th>
	<th class="th">Name</th>
	<th class="th">Leave Type</th>
	<th class="th">Starting Date</th>
	<th class="th">Ending Date</th>
	<th class="th">Apply Date</th>
	</tr>
<?php
include "connection1.php";
$start_date=$_POST['s'];
$end_date=$_POST['e'];
$result_date=mysqli_query($con, "select * from emp_leave where from_date>='$start_date' and to_date<='$end_date'");
while($fetch_date=mysqli_fetch_assoc($result_date))
{
	?>
	<tr>
	<td><?php echo $fetch_date['emp_id']; ?></td>
	<td><?php echo $fetch_date['name']; ?></td>
	<td><?php echo $fetch_date['leave_type']; ?></td>
	<td><?php echo $fetch_date['from_date']; ?></td>
	<td><?php echo $fetch_date['to_date']; ?></td>
	<td><?php echo $fetch_date['creation']; ?></td>
	</tr>
	<?php
	
}




?>
</table>