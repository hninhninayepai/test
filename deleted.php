<?php
require_once("db.php");
$id=$_GET['stu_id'];
$sql="DELETE FROM student WHERE id='$id'";
mysqli_query($con,$sql);
header("Location:indexed.php");
?>
