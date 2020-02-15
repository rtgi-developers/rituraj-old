<?php  
/*
|--------------------------------------------------------------------------
| Database configuration
|--------------------------------------------------------------------------
| 1. Define database configuration strings
| 2. Conect to database
| 3. Validation connections
| IMPORTANT! Include only if required.
|-------------------------------------------------------------------------- 
*/

$dbHost = "182.50.133.88";
$dbName = "Orient_DB";
$dbUser = "oms24db";
$dbPass = "lexus123";

$db = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if($db->connect_error) die($db->connect_error);
