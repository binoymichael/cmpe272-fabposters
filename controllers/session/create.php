<?php
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	if (User::is_admin($username, $password)) {
		$_SESSION['user'] = $username;
		header("location: /admin/home");
	} else {
		$MESSAGE = "Incorrect username or password.";
		require '../views/session/new.view.php';
	}
