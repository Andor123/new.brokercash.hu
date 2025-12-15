<?php
session_start();
header('Content-Type: text/html; charset=utf8');
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/Budapest');

require_once 'vendor/autoload.php';

include('config/config.php');
include('config/calculator.php');
include('config/googlemeet.php');

$pg = 'home_page';
if (isset($_GET['pg']) && !empty($_GET['pg'])) {
    $pg = $_GET['pg'];
}

include_once('modules/' . $pg . '.php');
?>