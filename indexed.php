<?php
require_once("db.php");
$sql="SELECT * FROM student";
$result=mysqli_query($con,$sql);
?>
<form method="post" action="">
<table border="1">
<tr>
	<td>Name</td>
	<td>Address</td>
	<td>Phone</td>
	<td>Action</td>
	<td>Action</td>
</tr>
<?php
while ($row=mysqli_fetch_array($result)) {

?>
<tr>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['address']; ?></td>
	<td><?php echo $row['phone']; ?></td>
	<td><a href="edited.php?stu_id=<?php echo $row['id']; ?>">Edited</a></td>
	<td><a href="deleted.php?stu_id=<?php echo $row['id']; ?>">deleted</a></td>

<?php
}
?>	
</table>
	
</form>