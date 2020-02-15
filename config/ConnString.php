<?php 

$dbHost = "localhost";
$dbName = "rtgidb";
$dbUser = "root";
$dbPass = "";

//$config['environment'] = 'production';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if($conn->connect_error) die($conn->connect_error);


?>