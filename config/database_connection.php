<?php

$app_config = require 'config.php';
$db_config = $app_config['database'];

try {
	$database_connection = 
		new PDO(
	        $db_config['connection'].';dbname='.$db_config['name'],
	        $db_config['username'],
	        $db_config['password'],
	        $db_config['options']
	    );
} catch (PDOException $e) {
    die($e->getMessage());
}
