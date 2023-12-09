<?php

$bitrix = "https://api.tech-ud72.ru/sendBx/index.php";
$telegram = "https://api.tech-ud72.ru/sendTg/index.php";

$ch = curl_init();

$payload = json_encode(json_encode($_POST, JSON_UNESCAPED_UNICODE));

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $bitrix,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));

curl_close($curl);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $telegram,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));

curl_close($curl);