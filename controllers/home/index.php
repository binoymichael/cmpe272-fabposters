<?php
	function capitalised($movie) {
		return ucwords(str_replace("_", " ", $movie));
	}

	$movie_lines = array_slice(file('assets/movies.txt'), 0, 4);
	$movies = array_map(function($line) {return explode(',', $line)[0]; }, $movie_lines);
	require '../views/home/index.view.php';
