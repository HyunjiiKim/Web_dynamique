<?php
//dbconnect allows me to connect to the database. I have to replace the $database by my bdd. the file must be include before my requests

$servername = "localhost";
//the name of your database
$database = "dbcar";

$username = "root";
$password = "root";

//
$sql = "mysql:host=$servername;dbname=$database;";

try {
	//creation af the object pdo we use to make our query
	$pdo = new PDO($sql, $username, $password);
	//echo "Connected successfully";
} catch (PDOException $error) {
	echo 'Connection error: ' . $error->getMessage();
}
