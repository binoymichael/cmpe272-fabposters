<?php
	function capitalised($movie) {
		return ucwords(str_replace("_", " ", $movie));
	}

	function transform($movie) {
		return array(
			"id" => $movie["id"],
			"name" => capitalised($movie["name"]),
			"quantity" => $movie["quantity"],
			"image_url" => urlencode("http://fabposters.slashbin.in/images/" . $movie['name'] . ".jpg"),
			"price" => "$8.00",
			"description" => capitalised($movie["name"]) . "movie poster description"
		);
	}
	$movies = Movie::all($database_connection);
	echo json_encode(array_map("transform", $movies));
