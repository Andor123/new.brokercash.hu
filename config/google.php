<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig(__DIR__ . "/../client_secret_222068222398-h3kv18btaj6d303mi0k5sgsccruik9ii.apps.googleusercontent.com.json");
$client->setScopes([
    Google_Service_Calendar::CALENDAR
]);
$client->setRedirectUri('http://localhost/new.brokercash.hu/auth.php');
$client->setAccessType('offline');
$client->setPrompt('consent');
?>