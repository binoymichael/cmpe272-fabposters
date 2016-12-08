<?php
	if(!isset($_SESSION['user']))      // if there is no valid session
	{
	    header("Location: /login");
	} else {
        $MESSAGE = "Logged as " .$_SESSION['user'];
		$users = file('../data/users.txt');
		require '../views/admin/home/index.view.php';
	}


