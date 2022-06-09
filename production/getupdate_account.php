<?php
$a_code=$_POST['a_type'];
error_reporting(0);
include "connection1.php";
$result=mysqli_query($con, "select * from admin_account where account_type='$a_code'");
?>

				<table class="table table-striped table-responsive">
					<tr>
						<th>#</th>
						<th>Account Type</th>
						<th>Account Code</th>
						<th>Name</th>
						<th>Action</th>
					</tr>
				<?php
				$i=0;
				while($fetch=mysqli_fetch_assoc($result))
				{
					?>
						<tr>
							<td><?php echo ++$i; ?></td>
							<td><?php  echo $fetch['account_type'];  ?></td>
							<td><?php  echo $fetch['account_code'];  ?></td>
							<td><?php  echo $fetch['name'];  ?></td>
							<td><a href="get_update_name.php?id=<?php echo $fetch['account_code'];  ?>" class="btn btn-success ">Update</a></td>
						</tr>
					<?php
				}
				?>
                </table>
				