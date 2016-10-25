<?php
	$users = User::select($database_connection, $_GET);
	require '../views/users/index.view.php';
