<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = 'fall2020';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$database);

if($conn){

     }
else{
	echo "connection not established".mysqli_connect_error();
}

?>