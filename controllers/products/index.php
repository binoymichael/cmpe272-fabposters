<?php
	function capitalised($movie) {
		return ucwords(str_replace("_", " ", $movie));
	}

	$movies = Movie::all($database_connection);
	require '../views/products/index.view.php';
