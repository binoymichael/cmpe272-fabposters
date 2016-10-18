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
        '/admin/home' => 'admin/home/index.php'
    ],
    'POST' => [
        '/products/order' => 'products/order.php',
        '/login' => 'session/create.php'
    ]
];
