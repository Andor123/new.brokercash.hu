<?php
session_start();
header('Content-Type: text/html; charset=utf8');
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/Budapest');

include('../config/config.php');

$pg = 'login';
if (isset($_GET['pg']) && !empty($_GET['pg'])) {
    $pg = $_GET['pg'];
}

include_once('modules/' . $pg . '.php');
?>