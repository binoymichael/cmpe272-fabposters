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
	$last_viewed = array();
}

if (isset($_COOKIE['most_viewed'])) {
	$most_viewed = $_COOKIE['most_viewed'];
} else {
	$most_viewed = array();
}
$most_viewed[$movie_id] += 1;

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
foreach ($most_viewed as $key => $value) {
	setcookie("most_viewed[$key]", $value, time() + 60 * 60 * 24 * 90, '/', $domain);
}

$site_url = "https://merkato.herokuapp.com/sellers/3/products/$movie_id/track";
$options = array(
    CURLOPT_RETURNTRANSFER => true,
    // return web page
    CURLOPT_HEADER         => false,// don't return headers
    CURLOPT_POST           => 1,
    CURLOPT_FOLLOWLOCATION => true,   // follow redirects
    CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
    CURLOPT_ENCODING       => "",     // handle compressed
    CURLOPT_USERAGENT      => "test", // name of client
    CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
    CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
    CURLOPT_TIMEOUT        => 120,    // time-out on response
);
$ch = curl_init($site_url);
curl_setopt_array($ch, $options);

$content  = curl_exec($ch);

curl_close($ch);

require '../views/products/show.view.php';

