<?php
$post1=$_POST['emp1'];
include "connection1.php";
$result=mysqli_query($con, "select * from admin_post where 	post_code='$post1'");
$fetch=mysqli_fetch_assoc($result);
$post=$fetch['post']; 
$dept=$fetch['department'];
$result_detail=mysqli_query($con, "select * from emp_details where dept='$dept' and desi='$post' ");

?>
<h3>Post wise Leave</h3>
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
	<th class="th">Emp id</th>
	<th class="th">Name</th>
	<th class="th"> leave type</th>
	<th class="th">Starting leave</th>
	<th class="th">Ending ending</th>
	</tr>

<?php

while($fetch_detail=mysqli_fetch_assoc($result_detail))
{
$result_leave=mysqli_query($con,"select * from emp_leave where L1_status='0' or L1_status='1' or L1_status='2'"); 
$fetch_leave=mysqli_fetch_assoc($result_leave);	
if($fetch_leave['emp_id']==$fetch_detail['emp_id'])	
{
	$name=$fetch_detail['fname']." ".$fetch_detail['mname']." ".$fetch_detail['lname'];
	?>
	<tr>
		<td><?php echo $fetch_leave['emp_id']; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $fetch_leave['leave_type'] ?></td>
		<td><?php echo $fetch_leave['from_date'] ?></td>
		<td><?php echo $fetch_leave['to_date'] ?></td>
	
	</tr>
	<?php
}
}

?>
</table>