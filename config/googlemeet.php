<?php
use Google\Client;
use Google\Service\Calendar;

$client = new Client();
$client->setAuthConfig(__DIR__ . '/../client_secret_820006613603-djnpgo3496iqd3opni1ujpmlndmfstcr.apps.googleusercontent.com.json');
$client->addScope(Calendar::CALENDAR);

$calendar = new Calendar($client);
?>