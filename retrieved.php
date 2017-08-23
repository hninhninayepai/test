<?php
$con=mysqli_connect("localhost","root","","multidata");
if(!$con){
	die("Accessed denied".mysqli_error($con));
}else{
	echo "can successfully connected....<br>";
}
$sql="SELECT * FROM emp";
$res=mysqli_query($con,$sql);
if($res){
	echo "successfully retrieved....<br>";
}
while ($row=mysqli_fetch_array($res)) {
	echo "emp id".$row['id']."---- "."Name ".$row['name']." -----"."Address ".$row['address']."--- "."Phone ".$row['phone']." ";
}
?>