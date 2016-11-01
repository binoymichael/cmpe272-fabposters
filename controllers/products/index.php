<?php
	function capitalised($movie) {
		return ucwords(str_replace("_", " ", $movie));
	}

	if (array_key_exists('last_viewed', $_COOKIE)) {
		$last_viewed = explode(",", $_COOKIE['last_viewed']);
	} else {
		$last_viewed_string = array();
	}

	$last_viewed_movies = Movie::find_set($database_connection, $last_viewed);
	$movies = Movie::all($database_connection);
	require '../views/products/index.view.php';
