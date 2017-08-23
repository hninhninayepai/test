<?php
require_once("db.php");
$id=$_GET['stu_id'];
$sql="SELECT * FROM student WHERE id='$id'";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);

?>
<form method="post" action="updated.php">
<table border="1">
<tr>
	<td><input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
		<label>Name</label>
		<input type="text" name="name"  value="<?php  echo $row["name"]; ?>">

	</td>
</tr>
<tr>
	<td><label>Address</label>
		<input type="text" name="address" value="<?php echo $row['address']; ?>"></td>
</tr>
<tr>
	<td>
		<label>Phone</label>
		<input type="text" name="phone"  value="<?php echo $row['phone']; ?>">
	</td>
</tr>
<tr>
	<td>
		<input type="submit" name="">
		<input type="button" name="" value="Cancel" onclick="location.href='indexed.php'">
	</td>
</tr>
	
</table>
	
</form>