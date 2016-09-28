<?php

require __DIR__ . '/../config/initialize.php';

$routes = require __DIR__ . '/../config/routes.php';
$router = new Router($routes);
require $router->redirect_to($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

