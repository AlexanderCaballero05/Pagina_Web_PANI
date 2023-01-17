<?php
$serverName = "localhost";
$userName = "root";
$password ="";
$dbName = "db_pani_web";
//create connection
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
// check conneection
if(!$conn) {
    die("connection failed: " .mysqli_connect_error());
}

?>

