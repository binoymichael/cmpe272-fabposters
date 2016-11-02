<?php
	function capitalised($movie) {
		return ucwords(str_replace("_", " ", $movie));
	}

	if (array_key_exists('last_viewed', $_COOKIE)) {
		$last_viewed = explode(",", $_COOKIE['last_viewed']);
	} else {
		$last_viewed = array();
	}

	if (isset($_COOKIE['most_viewed'])) {
		$most_viewed = $_COOKIE['most_viewed'];
	} else {
		$most_viewed = array();
	}
	arsort($most_viewed);
	$most_viewed_ids = array_slice(array_keys($most_viewed), 0, 5);
	$last_viewed_movies = Movie::find_set($database_connection, $last_viewed);
	$most_viewed_movies = Movie::find_set($database_connection, $most_viewed_ids);
	$movies = Movie::all($database_connection);
	require '../views/products/index.view.php';
