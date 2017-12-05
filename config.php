<?php
session_start();

// Define database
define('dbhost', 'localhost');
define('dbuser', 'root');
define('dbpass', '1');
define('dbname', 'users');

// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

// function listUser() {
// 	$conn = config();
// 	$sql  = "SELECT * FROM test2";
// 	$stmt =$conn ->prepare($sql);
// 	$stmt ->setFetchMode(PDO::FETCH_ASSOC);
// 	$stm-> execute();
// 	$resultSet = $stmt ->fetchAll();
// 	return $resultSet;

// }

?>
