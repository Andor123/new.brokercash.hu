<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $main_menu = mysqli_real_escape_string($connection, $_POST['main_menu']);
    $url = mysqli_real_escape_string($connection, $_POST['url']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $content = mysqli_real_escape_string($connection, $_POST['content']);
    $id = mysqli_real_escape_string($connection, $_POST['id']);

    $sql = "UPDATE site_pages 
        SET main_menu_id = '$main_menu', page_url = '$url', page_title = '$name', page_content = '$content' 
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
include_once('views/edit_page.php');
?>