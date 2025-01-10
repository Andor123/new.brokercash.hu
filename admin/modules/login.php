<?php
if (isset($_POST) && !empty($_POST)) {
    $nev = mysqli_real_escape_string($connection, $_POST['nev']);
    $jelszo = mysqli_real_escape_string($connection, $_POST['jelszo']);

    $sql = "SELECT nev, jelszo FROM admin WHERE nev = '$nev' AND jelszo = '$jelszo'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if ($nev == $row['nev'] && $jelszo == $row['jelszo']) {
                header('Location:index.php?pg=main');
                $_SESSION['nev'] = $row['nev'];
            }
        }
    }
}
include_once('views/login.php');
?>