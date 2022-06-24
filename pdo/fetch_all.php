<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";
Helpers::Header("Velkommen");

// Database Connection
$dns = "mysql:host=localhost;dbname=songbook;";
$username = "root";
$password = "password";
$db = new PDO($dns, $username, $password);

// Fetch All
$sql = "SELECT * 
		FROM song 
		ORDER BY rand() 
		LIMIT 4";
$stmt = $db->query($sql);
$row = $stmt->fetchAll();
foreach($row as $value) {
	echo "<p>" . $value['title'] . "</p>";
}

Helpers::Footer();
