<?php
// Start session
session_start();
session_regenerate_id();

require 'router.php';
require 'database_connection.php';


// Models
require '../models/user.php';
require '../models/movie.php';

function debug($d) {
	echo '<pre>' . var_export($d, true) . '</pre>';
}
