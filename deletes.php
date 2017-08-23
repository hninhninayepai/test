<?php
require_once("db.php");
$sql="DELETE FROM emp WHERE id='".$_GET['eid']."'";
mysqli_query($con,$sql);
header("Location:indexes.php");
?>