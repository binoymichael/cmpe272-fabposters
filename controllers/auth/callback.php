<?php

if (isset($_GET['code'])) 
{
    $code = $_GET['code'];
    $url = 'https://merkato.herokuapp.com/oauth/token';
    $fields = array(
                'grant_type' => 'authorization_code',
                'client_id' => $app_config['merkato']['id'],
                'client_secret' => $app_config['merkato']['secret'],
                'redirect_uri' => $app_config['merkato']['redirect_uri'],
                'code' => urlencode($code),
    );

    $fields_string = "";
    //url-ify the data for the POST
    foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
    rtrim($fields_string, '&');

    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, count($fields));
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //execute post
    $result_json = curl_exec($ch);
    //close connection
    curl_close($ch);

    $result = json_decode($result_json, true);
    if (isset($result['access_token'])) {
        $accessToken = $result['access_token'];
        $url = 'https://merkato.herokuapp.com/api/user';
        $headers = [
            "Accept: application/json",
            "Authorization: Bearer $accessToken",
        ];

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result_json = curl_exec($ch);
        curl_close($ch);

        $user = json_decode($result_json, true);
		$_SESSION['user'] = $user['name'];
		header("location: /admin/home");
    } else {
        $MESSAGE = "Access denied!";
        require '../views/session/new.view.php';
    }
}
else
{
    $MESSAGE = "Access denied!";
    require '../views/session/new.view.php';
}

