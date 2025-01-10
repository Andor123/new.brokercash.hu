<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);

    $sql = "INSERT INTO site_main_menu (main_menu_name) 
        VALUES ('$name')";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $html = "";
    $html .= "<div class='message-box color-info'>";
    $html .= "<i class='bi bi-check-circle'></i>";
    $html .= "<span>Sikeresen hozzálett adva az új menűpont.</span>";
    $html .= "</div>";

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}
include_once('views/create_menu.php');
?>