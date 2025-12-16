<?php
session_start();
include ('config/google.php');

if (!isset($_GET['code'])) {
    exit('Nincs auth kód');
}

$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

if (isset($token['error'])) {
    die('OAuth hiba: ' . $token['error_description']);
}

$_SESSION['access_token'] = $token;

header('Location: index.php');
exit;
?>