<?php

$templates = [
    "question_1" => "Какую челюсть нужно восстановить ",
    "question_2" => "Корни зубов ",
    "question_3" => "Заболевания ",
    "question_4" => "Лечение во сне ",
    "question_5" => "Оплата ",
    "question_6" => "Куда отправить расчет ",
    "id" => "phone",
    "phone" => "phone"
];

//$bitrix = "https://api.tech-ud72.ru/sendBx/index.php";
//$telegram = "https://api.tech-ud72.ru/sendTg/index.php";
//
//$tempPost = $_POST;
//
//$bitrixQuery = json_decode(file_get_contents("queryBitrix.json"), true);
//$fieldsBitrixQuery = ["utm", "utm_medium", "utm_campaign", "utm_content", "utm_term"];
//foreach($fieldsBitrixQuery as $field) {
//    if(isset($tempPost[$field])) {
//        $bitrixQuery["options"][$field] = $tempPost[$field];
//        unset($tempPost[$field]);
//    }
//}
//$fieldsNotRequiredBitrix = ["title", "city"];
//foreach($fieldsNotRequiredBitrix as $field) {
//    unset($tempPost[$field]);
//}
//
//$index = 0;
//foreach ($tempPost as $key => $value) {
//    if($key !== "tags" && $key !== "subject" && $key !== "form_type") {
//        $bitrixQuery["options"]["data"][$index]["name"] = $templates[$key];
//    }
//    $bitrixQuery["options"]["data"][$index]["value"] = is_array($value) ? implode(", ", $value) : $value;
//    $index++;
//}
//$bitrixPost = json_encode($bitrixQuery, true);
//var_dump($bitrixPost);
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
//
//$response = curl_exec($curl);
//
//curl_close($curl);


//$telegramQuery = json_decode(file_get_contents("queryTelegram.json"), true);
//$fieldsTelegramQuery = ["utm", "utm_medium", "city"];
//$fieldsNotRequiredTg = ["utm_campaign", "utm_content", "utm_term", "title", "city"];
//foreach($fieldsTelegramQuery as $field) {
//    if(isset($_POST[$field])) {
//        if($field === "utm_medium") {
//            $telegramQuery["options"]["medium"] = $_POST[$field];
//            unset($_POST[$field]);
//        }else {
//            $telegramQuery["options"][$field] = $_POST[$field];
//            unset($_POST[$field]);
//        }
//    }
//}
//foreach($fieldsNotRequiredTg as $field) {
//    unset($_POST[$field]);
//}
//$index2 = 0;
//foreach ($_POST as $key => $value) {
//    if($key !== "tags" && $key !== "subject" && $key !== "form_type") {
//        $telegramQuery["options"]["data"][$index2]["name"] = $templates[$key];
//    }
//    $telegramQuery["options"]["data"][$index2]["value"] = is_array($value) ? implode(", ", $value) : $value;
//    $index2++;
//}
//
//$telegramPost = json_encode($telegramQuery, true);

//$curl = curl_init();
//
//curl_setopt_array($curl, array(
//    CURLOPT_URL => $telegram,
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => '',
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 0,
//    CURLOPT_FOLLOWLOCATION => true,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => 'POST',
//    CURLOPT_POSTFIELDS => $telegramPost,
//    CURLOPT_HTTPHEADER => array(
//        'Content-Type: application/json'
//    ),
//));
//
//$response = curl_exec($curl);
//
//curl_close($curl);

