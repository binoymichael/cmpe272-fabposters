<?php
	function capitalised($movie) {
		return ucwords(str_replace("_", " ", $movie));
	}

	$all_movies = Movie::all($database_connection);
	$movies = array_slice($all_movies, 0, 4);
	require '../views/home/index.view.php';
