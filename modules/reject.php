<?php
$selected = $_SESSION['selected'];
$appointment = $_SESSION['appointment'];

$sql = "UPDATE idopontkeres SET approved='no' WHERE selected='$selected' AND appointment='$appointment'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

include_once('views/calendar/reject.php');
?>