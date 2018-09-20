<?php 

$server = "localhost";
$user = "root";
$pass = "";
$dbName = "votersmanagement";
$conn = mysqli_connect($server, $user, $pass, $dbName);

if (!$conn) {
	die("<h5> DB connection failed" .

	mysqli_connect_error() . "</h5>");
	
}else{
	echo "connection successful";
}
 ?>
