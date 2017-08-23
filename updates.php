<?php
require_once("db.php");
$sql="UPDATE emp SET name='".$_POST['name']."',address='".$_POST['address']."',phone='".$_POST['phone']."',salary='".$_POST['salary']."' WHERE id='".$_POST['id']."'";
mysqli_query($con,$sql);
header('Location:indexes.php');
?>