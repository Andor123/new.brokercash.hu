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

file_put_contents(
    __DIR__ . '/token.json',
    json_encode($token)
);

header('Location: index.php');
exit;
?>