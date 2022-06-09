<?php
include "connection1.php";
$pro_id=$_POST['pro_name'];
$result=mysqli_query($con, "select * from  project_list where proj_code='$pro_id'");
$fetch=mysqli_fetch_assoc($result);
?>
<style>
.heading_tr
{
	font-size:25px;
		
}
.body_td
{
	font-size:10px;
	
}
.td_margin
{
	margin-bottom:50px;
}
</style>
	<table class="table table-striped table-bordered table-sm table-responsive">
		<tr class="heading_tr ">
			<th class="table-secondary">Details</th>
			<th class="table-secondary">Value</th>
		</tr>
		<tr class="body_td">
			<td>projct Code</td>
			<td>: <?php echo $fetch['proj_code'];?></td>
		</tr>
		<tr class="body_td">
			<td>Project Name</td>
			<td>: <?php echo $fetch['proj_name'];?></td>
		</tr >
		<tr class="body_td">
			<td>Company</th>
			<td>: <?php echo $fetch['company'];?></td>
		</tr>
		<tr class="body_td">
			<td>Starting Date</td>
			<td>: <?php echo $fetch['start_date'];?></td>
		</tr>
		<tr class="body_td">
			<td>Ending Date</td>
			<td>: <?php echo $fetch['last_date'];?></td>
		</tr>
		<tr class="body_td td_margin">
			<td>Marginal Date</td>
			<td>: <?php echo $fetch['marginal_date'];?></td>
		</tr>
	
	
	</table>

	