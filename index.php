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

if (!isset($_SESSION['access_token'])) {
    $authUri = $client->createAuthUrl();
    header('Location: ' . $authUri);
    exit;
}

$client->setAccessToken($_SESSION['access_token']);

if ($client->isAccessTokenExpired()) {
    if ($client->getRefreshToken()) {
        $client->fetchAccessTokenWithRefreshToken(
            $client->getRefreshToken()
        );
        $_SESSION['access_token'] = $client->getAccessToken();
    } else {
        unset($_SESSION['access_token']);
        header('Location: index.php');
        exit;
    }
}

include_once('modules/' . $pg . '.php');
?>