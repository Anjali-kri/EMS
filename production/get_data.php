<?php
include "connection1.php";
 $post=$_POST['emp'];
 $leave=$_POST['emp1'];
 $days=$_POST['emp2'];
 $result_row=mysqli_query($con,"select * from leave_details where post_id='$post' and leave_type='$leave'");
 $row=mysqli_num_rows($result_row);

 if($row>0)
 {
	?><span style="color:red;font-weight:bold;">Data already exist in databse</span><?php 
 }
 else
 {
	mysqli_query($con, "insert into leave_details values('','$post','$leave','$days')"); 
 }
 
 
 $result=mysqli_query($con, "select * from leave_details order by id desc");
 
?>
<div>
<table class="table table-responsive table-striped">
<tr>

<td>Post_id</td>
<td>Leave_type</td>
<td>No.of Days</td>
<td>Action</td>
</tr>
<?php
while($fetch_data=mysqli_fetch_assoc($result))
{
?>
<tr>

<td><?php echo $fetch_data['post_id'];?></td>
<td><?php echo $fetch_data['leave_type'];?></td>
<td><?php echo $fetch_data['no_of_days'];?></td>
<td><a href="admin_update_leave_list.php?id=<?php  echo $fetch_data['post_id']; ?>&id2=<?php echo $fetch_data['id'];?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="get_delete_post.php?id=<?php  echo $fetch_data['post_id']; ?>&id2=<?php echo $fetch_data['id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

</tr>
<?php
}
?>
</table>

</div>