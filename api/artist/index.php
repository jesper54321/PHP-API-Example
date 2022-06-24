<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

Router::add('/api/song/', function() {
	$object = new Song;
	$response = $object->list();
	echo Helpers::jsonParser($response);
});

Router::run('/');