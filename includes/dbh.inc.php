<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: *");
$ServerName = "localhost";
$dbUserName = "bakka";
$dbPassword = "Dragon420!";
$dbName = "divineaccess";

$conn = mysqli_connect($ServerName, $dbUserName, $dbPassword, $dbName);

if (!$conn){
	die("Connection Failed" . mysqli_connect_error());
}




