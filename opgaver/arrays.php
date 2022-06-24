<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

$array = [
	"UK" => "England",
	"DK" => "Danmark",
	"DE" => "Tyskland",
];

$array_sorted = $array;
sort($array_sorted);

showMe($array);
showMe($array_sorted);