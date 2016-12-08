<?php

$secret = $app_config['merkato']['seller_secret'];

if (isset(getallheaders()['nonce'])) {
    $nonce = getallheaders()['nonce'];
}

if (isset(getallheaders()['Authorization'])) {
    $digest = getallheaders()['Authorization'];
}

$body = file_get_contents("php://input");
$signature = "POST+" . $nonce . "+" . $body;
$computed_digest = rawurlencode(base64_encode(hash_hmac('sha256', $signature, $secret, true)));


if ($digest === $computed_digest) {
    $data = json_decode($body, true);
    foreach ($data as $movie_id => $quantity) 
    {
        Movie::update($database_connection, $movie_id, $quantity);
    }
}


