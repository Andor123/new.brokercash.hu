<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $content = mysqli_real_escape_string($connection, $_POST['content']);
    $id = mysqli_real_escape_string($connection, $_POST['id']);

    $sql = "UPDATE carousel 
        SET title = '$name', content = '$content' 
        WHERE id = '$id'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $html = "";
    $html .= "<div class='message-box color-info'>";
    $html .= "<i class='bi bi-check-circle'></i>";
    $html .= "<span>Az adat sikeresen mentve.</span>";
    $html .= "</div>";

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}
include_once('views/slider_edit.php');
?>