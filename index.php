<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . "/assets/incl/init.php");
model::constructor();

Route::add(
	"/api/([^\s\/]+)",
	function ($request) {
		echo ("will get all items from $request when finished");
		var_dump(model::list($request));
		//var_dump($_SERVER['REMOTE_ADDR']); // remote address ::1 is localhost
	},
	'get'
);

Route::add("/api/([^\s\/]+)/([0-9]*)", function ($request, $id) {
	echo ("will get item $id from $request when finished");
	var_dump(model::details($request, $id));
}, 'get');

Route::add("/api/([^\s\/]+)", function ($request) {
	echo ("will post a new item to $request when finished");
}, 'post');

Route::add(
	"/api/([^\s\/]+)/([0-9]*)",
	function ($request, $id) {
		echo ("post dont take an id");
	},
	'post'
);

Route::add(
	"/api/([^\s\/]+)",
	function ($request) {
		echo ("missing id after the url");
	},
	'put'
);

Route::add("/api/([^\s\/]+)/([0-9]*)", function ($request, $id) {
	echo ("will update item $id from $request when finished");
}, 'put');

Route::add(
	"/api/([^\s\/]+)",
	function ($request) {
		echo ("missing id after the url");
	},
	'delete'
);

Route::add("/api/([^\s\/]+)/([0-9]*)", function ($request, $id) {
	echo ("will delete item $id from $request when finished");
}, 'delete');

Route::pathNotFound(function () {
	echo "path not found";
});

Route::run("/");

/* $testArray = array();
$testArray = json_decode(file_get_contents("config.json"));

$config = fopen("config.json", "w") or die("Unable to open file!");
fwrite($config, json_encode($testArray));
fclose($config);

var_dump(file_get_contents("config.json")); */
