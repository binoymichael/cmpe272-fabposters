<?php

return [
    'GET' => [
    	'/' => 'home/index.php',
    	'/home' => 'home/index.php',
    	'/products' => 'products/index.php',
        '/products/:id/show' => 'products/show.php',
    	'/about' => 'about/index.php',
    	'/news' => 'news/index.php',
    	'/contacts' => 'contacts/index.php',
        '/credits' => 'credits/index.php',
        '/login' => 'session/new.php',
        '/logout' => 'session/destroy.php',
        '/admin/home' => 'admin/home/index.php',
        '/users/new' => 'users/new.php',
        '/users' => 'users/index.php',
        '/users/all' => 'users/all.php',
        '/users/list' => 'users/list.php',
        '/api/products' => 'api/products/index.php',
        '/api/products/:id' => 'api/products/show.php',
        '/auth/redirect' => 'auth/redirect.php',
        '/auth/callback' => 'auth/callback.php'
    ],
    'POST' => [
        '/products/:id/order' => 'products/order.php',
        '/api/products' => 'api/products/update.php',
        '/login' => 'session/create.php',
        '/users/create' => 'users/create.php'
    ]
];
