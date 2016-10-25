<?php

return [
    'GET' => [
    	'/' => 'home/index.php',
    	'/home' => 'home/index.php',
    	'/products' => 'products/index.php',
    	'/about' => 'about/index.php',
    	'/news' => 'news/index.php',
    	'/contacts' => 'contacts/index.php',
        '/credits' => 'credits/index.php',
        '/login' => 'session/new.php',
        '/logout' => 'session/destroy.php',
        '/admin/home' => 'admin/home/index.php',
        '/users/new' => 'users/new.php',
        '/users' => 'users/index.php'
    ],
    'POST' => [
        '/products/order' => 'products/order.php',
        '/login' => 'session/create.php',
        '/users/create' => 'users/create.php'
    ]
];
