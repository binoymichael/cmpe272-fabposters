<?php
    $query = http_build_query([
        'client_id' => $app_config['merkato']['id'],
        'redirect_uri' => $app_config['merkato']['redirect_uri'],
        'response_type' => 'code',
        'scope' => '',
    ]);

    header("Location: https://merkato.herokuapp.com/oauth/authorize?$query");



