<?php
define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "brokercash");

$connection = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE) or die(mysqli_connect_error());

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($connection, 'SET NAMES utf8') or die(mysqli_error($connection));
mysqli_query($connection, 'SET CHARACTER SET utf8') or die(mysqli_error($connection));
mysqli_query($connection, 'SET COLLATION_CONNECTION="utf8_general_ci"') or die(mysqli_error($connection));
?>