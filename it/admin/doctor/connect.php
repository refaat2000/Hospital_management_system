<?php 
$host = "localhost"; // Your database host
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "Hospital"; // Your database name

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
