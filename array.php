<?php
$car=array("Volvo","Toyota","BMW");
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>";
	echo "Car_Name" ;
	echo "</td>";
	echo "</tr>";

for($i=0;$i<3;$i++){
	echo "<tr>";
	echo "<td>";
	print_r($car[$i]) ;
	echo "</td>";
	echo "</tr>";

}
echo "</table>";
?>
<?php
$book=array("one"=>"HTML","two"=>"CSS","three"=>"PHP");
foreach ($book as $key => $value) {
	echo $key." " . $value."<br>";
}
$book_count=count($book);
echo $book_count;
echo "<table border='1'>";
echo "<tr>";
	echo "<td>";
	echo "Array NO:";
	echo "</td>";
	echo "<td>";
	echo "Array Value";
	echo "</td>";
	echo "</tr>";
foreach ($book as $key => $value) {
	echo "<tr>";
	echo "<td>";
	echo $key;
	echo "</td>";
	echo "<td>";
	echo $value;
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
?>
<?php
$name=$_POST['name'];
$address=$_POST['address'];
if(!empty($name)){
echo "Welcome : ".$name;
echo "<br>";
}else{
	echo "Please enter your name!!!!";
	echo "<br>";
}
if(!empty($address)){
	echo "You address : ".$address;
	echo "<br>";
}else{
	echo "Please enter your address";
	echo "<br>";
}
?>