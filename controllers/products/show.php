<?php

function capitalised($movie) {
	return ucwords(str_replace("_", " ", $movie));
}
preg_match('/\d+/', $_SERVER['REQUEST_URI'], $matches);
$movie_id = $matches[0];
$movie = Movie::find($database_connection, $movie_id);

if (!$movie) {
	require '../controllers/errors/404.php';
	die();
}


if (array_key_exists('last_viewed', $_COOKIE)) {
	$last_viewed = explode(",", $_COOKIE['last_viewed']);
} else {
	$last_viewed_string = array();
}

$index = array_search($movie_id, $last_viewed);
if ($index === false) {
	if (count($last_viewed) == 5) {
		array_pop($last_viewed);
	}
} else {
	unset($last_viewed[$index]);
}
array_unshift($last_viewed, $movie_id);
$new_cookie_value = implode(",", $last_viewed);
$domain = ($_SERVER['HTTP_HOST'] != 'localhost:8887') ? $_SERVER['HTTP_HOST'] : false;
setcookie('last_viewed', $new_cookie_value, time() + 60 * 60 * 24 * 90, '/', $domain);

require '../views/products/show.view.php';

