<?php
session_start();
header('Content-Type: text/html; charset=utf8');
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/Budapest');

include('config/config.php');
include('config/calculator.php');
include('config/google.php');

$pg = 'home_page';
if (isset($_GET['pg']) && !empty($_GET['pg'])) {
    $pg = $_GET['pg'];
}

$tokenPath = __DIR__ . '/token.json';

if (!file_exists($tokenPath)) {
    header('Location: auth.php');
    exit;
}

$token = json_decode(file_get_contents($tokenPath), true);
$client->setAccessToken($token);

if ($client->isAccessTokenExpired()) {
    if ($client->getRefreshToken()) {
        $client->fetchAccessTokenWithRefreshToken(
            $client->getRefreshToken()
        );
        file_put_contents(
            $tokenPath,
            json_encode($client->getAccessToken())
        );
    } else {
        unlink($tokenPath);
        header('Location: auth.php');
        exit;
    }
}

include_once('modules/' . $pg . '.php');
?>