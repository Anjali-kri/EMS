<?php
include "connection1.php";
$result=mysqli_query($con,"select * from project_list");
?>
<table class="table table-striped table-responsive">
	<tr>
		<th>#</th>
		<th>project Code</th>
		<th>Project Name</th>
		<th>Company Name</th>
		<th>Total Employees</th>
		<th>Starting </th>
		<th>Ending</th>
		<th>Marginal</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	<?php
	$i=1;
	while($fetch=mysqli_fetch_assoc($result))
	{
		?>
		<tr>
		<td><?php echo $i++;  ?></td>
		<td><?php echo $fetch['proj_code'];  ?></td>
		<td><?php echo $fetch['proj_name'];  ?></td>
		<td><?php echo $fetch['company'];  ?></td>
		<td><?php echo $fetch['no_emp'];  ?></td>
		<td><?php echo $fetch['start_date'];  ?> </td>
		<td><?php echo $fetch['last_date'];  ?></td>
		<td><?php echo $fetch['marginal_date'];  ?></td>
		<td><?php echo $fetch['status'];  ?></td>
		<td><a href="admin_update_project.php?id=<?php echo $fetch['proj_code']; ?>" class="btn btn-info">Update</a</td>
		
	</tr>
		<?php
	}
	?>
</table>