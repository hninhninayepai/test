<?php

$con=mysqli_connect("localhost","root","");
if($con){
	echo "Can successfully conncected......<br>";
}else{
	die("Access Denied".mysqli_connect_error($con));
}
$db_connect=mysqli_select_db($con,"multidata");
if($db_connect){
echo "can connect db<br>";
}
$create_table="CREATE TABLE emp( id INT NOT NULL AUTO_INCREMENT  primary key,name VARCHAR(50) NOT NULL,address VARCHAR(50) NOT NULL,phone VARCHAR(50) NOT NULL)";
 $con_table=mysqli_query($con,$create_table);
 if($con_table){
echo "table emp successfully created.....";
 }else{
 	die("Could not created table".mysqli_error($con));
 }

?>
