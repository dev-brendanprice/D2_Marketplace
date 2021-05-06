<?php

define('CLIENT_ID', '35544');
define('SECRET', 'VLpGsG5rUh6UDYKOtM6.yMrRntZPgv9GLv1jNl-te4E');
define('API_KEY', '9684e697ebc34632a86f8fb4c8366111');

if(str_contains($_SERVER['HTTP_REFERER'], 'https://www.bungie.net/en/oauth/authorize?client_id=' . CLIENT_ID . '&response_type=code')){
        echo "<script>console.log('penis123')</script>";
}

function getToken($code, $refresh = false) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.bungie.net/platform/app/oauth/token/');
        curl_setopt($ch, CURLOPT_POST, 1);
        if($refresh) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=refresh_token&refresh_token='.$code);
        } else {
                curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=authorization_code&code='.$code);
        }
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Basic '.base64_encode(CLIENT_ID.':'.SECRET),
                'Content-Type: application/x-www-form-urlencoded'
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);
  
        return json_decode($result);
}

function getBungieAccount($token) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,'https://www.bungie.net/Platform/User/GetCurrentBungieAccount/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'X-API-Key: '.API_KEY,
                'Authorization: Bearer ' . $token
        ]);
  
        $user_info = curl_exec($ch);
        curl_close($ch);
  
        return  json_decode($user_info);
}

if(!isset($_GET['code'])) {
        header('Location: https://www.bungie.net/en/oauth/authorize?client_id='.CLIENT_ID.'&response_type=code');
} else {
        $token = getToken($_GET['code']);
        $account_info = getBungieAccount($token->access_token);
        echo "<pre>";
        print_r($account_info);
}