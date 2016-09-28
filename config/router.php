<?php

class Router
{
	public $routes;

	function __construct($routes)
	{
		$this->routes = $routes;
	}


	public function redirect_to($method, $uri)
	{
		$path = parse_url($uri, PHP_URL_PATH);

		if (array_key_exists($path, $this->routes[$method]))
		{
			return __DIR__ . "/../controllers/" . $this->routes[$method][$path];
		}

		return __DIR__ . '/../controllers/errors/404.php';
	}
}