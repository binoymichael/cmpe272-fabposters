<?php
	function capitalised($movie) {
		return ucwords(str_replace("_", " ", $movie));
	}
	$movies = file('assets/movies.txt');
	require '../views/credits/index.view.php';
