<?php
$con=mysqli_connect("localhost","root","","multidata");
if(!$con){
	die("Accessed denied".mysqli_error($con));
}else{
	echo "can successfully connected....<br>";
}
$sql="INSERT INTO emp(name,address,phone) VALUES('Hnin Hnin','Hlaing','09-5081260')";
$res=mysqli_query($con,$sql);
if($res){
	echo "successfully inserted....<br>";
}
?>