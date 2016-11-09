<?php
	$url = "http://gargoos.com/user_list.txt";  
	$ch = curl_init();  
	// set URL and other appropriate options  
	curl_setopt($ch, CURLOPT_URL, $url);  
	curl_setopt($ch, CURLOPT_HEADER, 0);  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
	// grab URL and pass it to the browser  
	$output = curl_exec($ch);  
	// close curl resource, and free up system resources  
	curl_close($ch);  

	$gargoos_users = json_decode($output, true);
	$fabposters_users = User::all($database_connection);

	require '../views/users/all.view.php';
