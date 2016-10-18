<?php
	if(!isset($_SESSION['user']))      // if there is no valid session
	{
		header("Location: /login");
	} else {
		unset($_SESSION['user']);
		session_destroy();
		header("Location: /login");
	}
