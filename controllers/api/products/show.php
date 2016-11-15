<?php
function capitalised($movie) {
	return ucwords(str_replace("_", " ", $movie));
}
preg_match('/\d+/', $_SERVER['REQUEST_URI'], $matches);
$movie_id = $matches[0];
$movie = Movie::find($database_connection, $movie_id);

echo json_encode(array(
	"id" => $movie["id"],
	"name" => capitalised($movie["name"]),
	"quantity" => 3,
	"image_url" => urlencode("http://fabposters.slashbin.in/images/" . $movie['name'] . ".jpg"),
	"price" => "$8.00",
	"description" => capitalised($movie["name"]) . " movie poster description"
));
