<?php
	$users = User::all($database_connection);
	$json_string = json_encode($users);
	echo ($json_string);

