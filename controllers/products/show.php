<?php

function capitalised($movie) {
	return ucwords(str_replace("_", " ", $movie));
}
preg_match('/\d+/', $_SERVER['REQUEST_URI'], $matches);
$movie_id = $matches[0];
$movie = Movie::find($database_connection, $movie_id);
debug($_SERVER);

// if ($movie) {
// 	require '../views/products/show.view.php';
// } else {
// 	require '../controllers/errors/404.php';
// }

