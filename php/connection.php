<?php
$serverName = "mysql_db";
$userName = "rai-pramana";
$password = "rai123";
$dbName = "prodi";

// Create connection
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>