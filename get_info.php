<?php
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$userIP = getUserIP();

date_default_timezone_set('America/Sao_Paulo');

$timeZone = date_default_timezone_get();
//$time = date('T');

$serverTime = date('d-m-y H:i:s');

echo json_encode(['ip' => $userIP, 'serverTime' => $serverTime, 'timeZone' => $timeZone]);
?>
