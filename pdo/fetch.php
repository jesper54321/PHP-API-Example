<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";
Helpers::Header("Velkommen");

// Database Connection
$dns = "mysql:host=localhost;dbname=songbook;";
$username = "root";
$password = "password";
$db = new PDO($dns, $username, $password);

// Fetch
$id =isset($_GET['id']) && $_GET['id'] ? $_GET['id'] : 1;

$sql = "SELECT * 
		FROM song 
		WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$row = $stmt->fetch();
var_dump($row);

Helpers::Footer();
