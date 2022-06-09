<?php
include "connection.php";
$b_id=$_POST['emp1'];

$result=mysqli_query($con,"select * from book_detail");
?>
<style>
th
{
	color:white;
}
</style>
<table class="table table-striped table-responsive">
<tr style="background-color:#00cc99">
<th>#</th>
<th>Id</th>
<th>Book Name</th>
<th>Author Name</th>
<th>Publisher's Name</th>
<th>Price</th>
<th>sub_code</th>
<th>block</th>
<th>self No.</th>
<th>Opertation</th>
</tr>
<?php
$i=0;
while($fetch=mysqli_fetch_assoc($result))
{
	?>
	<tr>
	<td><?php echo ++$i; ?></td>
	<td><?php  echo  $fetch['id']; ?></td>
	<td><?php  echo  $fetch['book_name']; ?></td>
	<td><?php  echo  $fetch['author_name']; ?></td>
	<td><?php  echo  $fetch['publisher_name']; ?></td>
	<td><?php  echo  $fetch['price']; ?></td>
	<td><?php  echo  $fetch['sub_code']; ?></td>
	<td><?php  echo  $fetch['block']; ?></td>
	<td><?php  echo  $fetch['self_no']; ?></td>
	<td ><a href="get_edit_book.php?id=<?php echo $fetch['id']; ?>" ><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;<a href="get_delete_book.php?id=<?php echo $fetch['id']; ?>"><i class="fa fa-trash"></i></a></td>
	
	</tr>
	<?php
}
?>
</table>