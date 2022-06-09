<?php
include "connection1.php";
$dept=$_POST['emp'];
$Post=$_POST['emp1'];

?>
<br><br><br><br><br><br>
<div class="row">
<div class="col-sm-12">
<table class="table table-responsive table-striped">
<tr>

<td>POST CODE</td>
<td>POST</td>
<td>DEPARTMENT</td>
<td>CREATION</td>
<td>ACTION</td>
</tr>
<?php
$res=mysqli_query($con, "select * from admin_post ORDER BY id DESC ");
while($fetch_v=mysqli_fetch_assoc($res))
{
?>
<tr>

<td><?php echo $fetch_v['post_code']; ?></td>
<td><?php echo $fetch_v['post']; ?></td>
<td><?php echo $fetch_v['department']; ?></td>
<td><?php echo $fetch_v['creation']; ?></td>
<td><a href="admin_update_post.php?id=<?php echo $fetch_v['post_code']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp;&nbsp;<a href="get_post_delete.php?id=<?php echo $fetch_v['post_code']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
</tr>
<?php
}
?>
</table>
</div>
</div>





