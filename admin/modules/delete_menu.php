<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);

    $sql = "DELETE FROM site_main_menu WHERE id = '$id'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $html = "";
    $html .= "<div class='message-box color-info'>";
    $html .= "<i class='bi bi-check-circle'></i>";
    $html .= "<span>Az adat sikeresen törölve lett.</span>";
    $html .= "</div>";

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}
include_once('views/delete_menu.php');
?>