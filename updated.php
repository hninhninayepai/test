<?php
require_once("db.php");
$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$sql="UPDATE student SET name='$name', address='$address', phone='$phone' WHERE id='$id'";
$result=mysqli_query($con,$sql);

header("Location:indexed.php");

?>