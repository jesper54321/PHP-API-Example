<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";
Helpers::Header("Velkommen");

// Database Connection
$dns = "mysql:host=localhost;dbname=songbook;";
$username = "root";
$password = "password";
$db = new PDO($dns, $username, $password);

Helpers::Footer();
