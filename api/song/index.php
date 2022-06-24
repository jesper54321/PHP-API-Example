<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/assets/incl/init.php";

// GET Route til liste 
Route::add('/api/song/', function() {
	$object = new Song;
	$response = $object->list();
	echo Helpers::jsonParser($response);
});

// GET Route til detaljer
Route::add('/api/song/([0-9]*)', function($id) {
	$object = new Song;
	$response = $object->details($id);
	echo Helpers::jsonParser($response);
});

// POST Route til create/update
Route::add('/api/song/', function() {
	$object = new Song;
	$object->id = isset($_POST['id']) && !empty($_POST['id']) ? (int)$_POST['id'] : null;
	$object->title = isset($_POST['title']) && !empty($_POST['title']) ? (string)$_POST['title'] : null;
	$object->content = isset($_POST['content']) && !empty($_POST['content']) ? (string)$_POST['content'] : null;
	$object->artist_id = isset($_POST['artist_id']) && !empty($_POST['artist_id']) ? (int)$_POST['artist_id'] : null;
	echo $object->save();
}, 'post');

// DELETE Route til at slette
Route::add('/api/song/([0-9]*)', function($id) {
	$object = new Song;
	$response = $object->delete($id);
	echo Helpers::jsonParser($response);
}, 'delete');

Route::run('/');