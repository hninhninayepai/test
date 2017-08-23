<?php
require_once("db.php");
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$sql="INSERT INTO student(name,address,phone) VALUES('$name','$address','$phone')";
mysqli_query($con,$sql);
$current_id=mysqli_insert_id($con);
if(!empty($current_id)){
	echo "new query inserted......";
}else{
	die("cannot inserted a new query".mysqli_error($current_id));
}
header('Location:indexed.php')
?>