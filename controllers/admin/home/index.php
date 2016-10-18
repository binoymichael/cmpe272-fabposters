<?php
	if(!isset($_SESSION['user']))      // if there is no valid session
	{
	    header("Location: /login");
	} else {
		$users = file('../data/users.txt');
		require '../views/admin/home/index.view.php';
	}


