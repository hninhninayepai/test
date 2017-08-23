<?php
require_once("db.php");
$sql="SELECT * FROM emp WHERE id='".$_GET['eid']."'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
?>
<form method="post" action="updates.php">
	<table border="1">
	<tr>
	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
		<td><label>Name</label>
		<input type="text" name="name" value="<?php echo $row['name'];?>"></td>
	</tr>
	<tr>
		<td>
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $row['address'];?>">
		</td>
	</tr>
	<tr>
		<td>
			<label>Phone</label>
			<input type="text" name="phone" value="<?php echo $row['phone'];?>">
		</td>
	</tr>
	<tr>
		<td>
			<label>Salary</label>
			<input type="text" name="salary" value="<?php echo $row['salary'];?>">
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="">
			<input type="button" name="" value="Cancel" onclick="location.href='indexes.php'">
		</td>
	</tr>
		
	</table>
</form>