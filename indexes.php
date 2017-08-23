<?php
require_once("db.php");
$sql="SELECT * FROM emp";
$res=mysqli_query($con,$sql);
?>
<form method="post" action="">
<table border="1">
<tr>
	<td>Name</td>
	<td>Address</td>
	<td>Phone</td>
	<td>Salary</td>
	<td>Action</td>
	<td>Action</td>
</tr>
<?php
while($row=mysqli_fetch_array($res)){
?>


<tr>
	<td>
		<?php echo $row['name']; ?>
	</td>
	<td>
		<?php echo $row['address']; ?>
	</td>
	<td>
		<?php echo $row['phone']; ?>
	</td>
	<td>
		<?php echo $row['salary']; ?>
	</td>
	<td>
		<a href="edits.php?eid=<?php echo $row['id']; ?>">Edit</a>
	</td>
	<td>
		<a href="deletes.php?eid=<?php echo $row['id']; ?>">Delete</a>
	</td>
</tr>
	
<?php	
}
?>
</table>
	
</form>