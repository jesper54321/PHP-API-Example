<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . "/assets/incl/init.php");

Route::add("/contact", function () {
	echo ("this is the contact page");
}, 'get');
Route::pathNotFound(function () {
	echo "path not found";
});
Route::run();

Helpers::Header("Velkommen");

$params = array(
	"id" => array(4, PDO::PARAM_INT)
);

$sql = "SELECT id, title FROM song where id=:id";

$result = $db->query($sql, $params);
//var_dump($result);

Helpers::Footer();

/* $testArray = array();
$testArray = json_decode(file_get_contents("config.json"));

$config = fopen("config.json", "w") or die("Unable to open file!");
fwrite($config, json_encode($testArray));
fclose($config);

var_dump(file_get_contents("config.json")); */
