<?php

User::create($database_connection, $_POST);
$_SESSION['message'] = "User successfully created!";
header("location: /users");
