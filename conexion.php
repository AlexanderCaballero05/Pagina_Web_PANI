<?php

$serverName = "localhost";
$userName = "APANI";
$password ="*Myaccountpani*";
$dbName = "db_web_pani";
//create connection
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
// check conneection
if(!$conn) {
    die("connection failed: " .mysqli_connect_error());
}

?>

