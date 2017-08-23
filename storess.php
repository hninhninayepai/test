<?php
require_once("db.php");
$sql="INSERT INTO emp(name,address,phone,salary) VALUES('".$_POST['name']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['salary']."')";
mysqli_query($con,$sql);
$current_id=mysqli_insert_id($con);
if (!empty($current_id)) {
	echo "New query inserted";
}else {
	die("can not inserted ".mysqli_error($current_id));
}
header("Location:indexes.php")
?>