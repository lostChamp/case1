<?php

//$bitrix = "https://api.tech-ud72.ru/sendBx/index.php";
//$telegram = "https://api.tech-ud72.ru/sendTg/index.php";

$tempPost = $_POST;

$bitrixQuery = json_decode(file_get_contents("queryBitrix.json"), true);
$fieldsBitrixQuery = ["title", "utm", "utm_medium", "utm_campaign", "utm_content", "utm_term", "city"];
foreach($fieldsBitrixQuery as $field) {
    if(isset($_POST[$field])) {
        $bitrixQuery["options"][$field] = $tempPost[$field];
        unset($tempPost[$field]);
    }
}
$bitrixQuery["options"]["domen"] = $_SERVER["SERVER_NAME"] ?? "";
$bitrixQuery["options"]["data"] = $tempPost;
$bitrixPost = json_encode($bitrixQuery, true);
var_dump($bitrixPost);

$telegramQuery = json_decode(file_get_contents("queryTelegram.json"), true);
$fieldsTelegramQuery = ["utm", "title", "utm_medium", "city"];
$fieldsNotRequiredTg = ["utm_campaign", "utm_content", "utm_term"];
foreach($fieldsTelegramQuery as $field) {
    if(isset($_POST[$field])) {
        if($field === "utm_medium") {
            $telegramQuery["options"]["medium"] = $_POST[$field];
            unset($_POST[$field]);
        }else {
            $telegramQuery["options"][$field] = $_POST[$field];
            unset($_POST[$field]);
        }
    }
}
foreach($fieldsNotRequiredTg as $field) {
    unset($_POST[$field]);
}
$telegramQuery["options"]["domen"] = $_SERVER["SERVER_NAME"] ?? "";
$telegramQuery["options"]["data"] = $_POST;
$telegramPost = json_encode($telegramQuery, true);
var_dump($telegramPost);


//$ch = curl_init();
//
//$curl = curl_init();
//
//curl_setopt_array($curl, array(
//    CURLOPT_URL => $bitrix,
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => '',
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 0,
//    CURLOPT_FOLLOWLOCATION => true,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => 'POST',
//    CURLOPT_POSTFIELDS => $bitrixPost,
//    CURLOPT_HTTPHEADER => array(
//        'Content-Type: application/json'
//    ),
//));
////
////curl_close($curl);
////
////$curl = curl_init();
////
////curl_setopt_array($curl, array(
////    CURLOPT_URL => $telegram,
////    CURLOPT_RETURNTRANSFER => true,
////    CURLOPT_ENCODING => '',
////    CURLOPT_MAXREDIRS => 10,
////    CURLOPT_TIMEOUT => 0,
////    CURLOPT_FOLLOWLOCATION => true,
////    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
////    CURLOPT_CUSTOMREQUEST => 'POST',
////    CURLOPT_POSTFIELDS => $telegramPost,
////    CURLOPT_HTTPHEADER => array(
////        'Content-Type: application/json'
////    ),
////));
////
////curl_close($curl);

