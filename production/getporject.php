<?php
include "connection1.php";
$pro=$_REQUEST['emp'];
$result=mysqli_query($con,"select * from project_list where proj_code='$pro' or proj_name='$pro'");
?>
<h2> <b><u>Project Pannel</u></b></h2>
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
<tr><tr><tr><tr>
<p style="margin-top:100px;"></p>
<h2 > <b><u>Employee Pannel</u></b></h2>
<table class="table table-striped table-responsive" >
	<tr>
		<th>#</th>
		<th>Employee id</th>
		<th>Employee Name</th>
		<th>Post</th>
		<th>Role</th>
		<th>Action</th>
	</tr>
	<?php
	$sql="select * from project_assign where project_name=(select proj_code from project_list where proj_code='$pro' or proj_name='$pro')";
	$result1=mysqli_query($con,$sql);
	$i=0;
	while($fetch1=mysqli_fetch_assoc($result1))
	{
		$empid=$fetch1['emp_id'];
	$result2=mysqli_query($con,"select * from emp_details where emp_id='$empid'");
	$fetch2=mysqli_fetch_assoc($result2);
	$name=$fetch2['fname']." ".$fetch2['mname']." ".$fetch2['lname'];
	?>
	<tr>
		<td><?php echo ++$i; ?></td>
		<td><?php echo $fetch1['emp_id']; ?></td>
		<td><?php  echo $name;  ?></td>
		<td><?php echo $fetch1['dept']; ?></td>
		<td><?php echo $fetch1['role']; ?></td>
		<td> <a href="get_project_delete.php?id=<?php echo $fetch1['emp_id']; ?>"><i class="fa fa-trash" style="font-size:25px;"></i></a></td>
	</tr>
	<?php
	}
	?>

</table>