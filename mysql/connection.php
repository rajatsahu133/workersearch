<?php /*useing session*/

$dbhost = "localhost";
$username = "root";
$password = "";
$database_name = "job";


$con = mysqli_connect($dbhost,$username,$password,$database_name);

if ($con) {
	
	//echo "Database conected sucessfull.<br>";
}
else{
	die('Could not connect: '.mysqli_connect_error()); 
}















?>