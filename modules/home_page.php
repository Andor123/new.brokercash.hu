<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $nev = mysqli_real_escape_string($connection, $_POST['nev']);
    $telefon = mysqli_real_escape_string($connection, $_POST['telefon']);

    $create_file = fopen('visszahivas.txt', 'w') or die("Unable to open file!");
    $txt = "";
    $txt .= "Név: " . $nev . "\n";
    $txt .= "Telefon: " . $telefon . "\n";
    $newTxt = mb_convert_encoding($txt, "ISO-8859-2", "UTF-8");
    fwrite($create_file, $newTxt);
    fclose($create_file);

    if (dirname($_SERVER["PHP_SELF"])) {
        $path = $_SERVER["HTTP_ORIGIN"] . dirname($_SERVER["PHP_SELF"]) . "/visszahivas.txt";
    } else {
        $path = $_SERVER["HTTP_ORIGIN"] . "/visszahivas.txt";
    }

    if (isset($path)) {
        $dokumentum = basename($path);
    }

    if (!empty($nev) && !empty($telefon)) {
        $sql = "INSERT INTO visszahivas (nev, telefon, dokumentum) 
            VALUES ('$nev', '$telefon', '$dokumentum')";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    }

    if (!empty($nev) && !empty($telefon)) {
        $to = "salamon.andor@gmail.com";
        $subject = "Visszahívás kérése";

        $message = "";
        $message .= "<html>";
        $message .= "<head>";
        $message .= "<title>Visszahívás kérése</title>";
        $message .= "</head>";
        $message .= "<body>";
        $message .= "<div>";
        $message .= "<h3>A visszahívást kérő adatai</h3>";
        $message .= "<p>Név: " . $nev . "</p>";
        $message .= "<p>Telefonszám: <a href=tel:" . $telefon . ">" . $telefon . "</a></p>";
        $message .= "<p>Dokumentum: <a href=" . $path . ">" . $dokumentum . "</a></p>";
        $message .= "<p>Köszönjük, hogy visszahívást kért tőlünk.</p>";
        $message .= "<p>Munkatársunk majd keresni fogja Önt a megadott telefonszámon.</p>";
        $message .= "<p>Üdvözlettel,<br><strong>Brokercash rendszer</strong></p>";
        $message .= "</div>";
        $message .= "</body>";
        $message .= "</html>";

        $headers = "";
        $headers .= "From: info@brokercash.hu\r\n";
        $headers .= "Reply-To: salamon.andor@gmail.com\r\n";
        $headers .= "Cc: info@brokercash.hu\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $mail_status = "";
        if (mail($to, $subject, $message, $headers)) {
            $mail_status .= "<p>Email sikeresen elküldve!</p>";
        } else {
            $mail_status .= "<p>Nem sikerült elküldeni az emailt.</p>";
        }
    }

    /*if (!empty($nev) && !empty($telefon)) {
        $webhookUrl = "https://brokercash.bitrix24.com/rest/1/l05p9qmi7fkh61w0/crm.lead.add.json";

        $data = array(
            "fields" => array(
                "TITLE" => "Visszahívás kérése",
                "NAME" => $nev,
                "PHONE" => array(
                    array("VALUE" => $telefon, "VALUE_TYPE" => "WORK")
                )
            )
        );

        $options = array(
            'http' => array(
                'method' => 'POST',
                'content' => http_build_query($data),
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
            )
        );

        $context = stream_context_create($options);
        $result = file_get_contents($webhookUrl, false, $context);
    }*/

    $html = "";
    if (!empty($nev) && !empty($telefon)) {
        $html .= "<div class='message-box color-info'>";
        $html .= "<i class='bi bi-check-circle'></i>";
        $html .= "<span>Továbbitottuk kérését, munkatársunk majd jelentkezik.</span>";
        $html .= "</div>";
    } else {
        $html .= "<div class='message-box color-info'>";
        $html .= "<i class='bi bi-x-circle'></i>";
        $html .= "<span>Kérjük töltse ki a kötelező mezőket.</span>";
        $html .= "</div>";
    }

    if (!empty($nev) && !empty($telefon)) {
        $response = array(
            'status' => 'success',
            'html' => $html,
            'mail_status' => $mail_status,
            //'crm_result' => $result
        );
    } else {
        $response = array(
            'status' => 'failure',
            'html' => $html
        );
    }

    echo json_encode($response);
    exit();
}
if (isset($_GET['ajax']) && $_GET['ajax'] == 2) {
    $hitelosszeg = $_POST['hitelosszeg'];
    $futamido = $_POST['futamido'];
    $kamat = $_POST['kamat'];
    $tipus = $_POST['tipus'];

    if ($tipus == "Lineáris") {
        $result = linear($hitelosszeg, $kamat, $futamido);
    } else {
        $result = annuity($hitelosszeg, $kamat, $futamido);
    }

    $html = "";
    $html .= "<div class='message-box color-info'>";
    $html .= "<i class='bi bi-check-circle'></i>";
    $html .= "<span>A számolás megtörtént.</span>";
    $html .= "</div>";

    $calculatorResult = "";
    $calculatorResult .= "<table class='table'>";
    $calculatorResult .= "<thead>";
    $calculatorResult .= "<tr>";
    $calculatorResult .= "<th>Hónap</th>";
    $calculatorResult .= "<th>Fennálló tartozás</th>";
    $calculatorResult .= "<th>Tőke előírás</th>";
    $calculatorResult .= "<th>Hitel kamata</th>";
    $calculatorResult .= "<th>Törlesztő</th>";
    $calculatorResult .= "</tr>";
    $calculatorResult .= "</thead>";
    $calculatorResult .= "<tbody>";
    foreach ($result as $key=>$value) {
        $calculatorResult .= "<tr>";
        $calculatorResult .= "<td>" . $value[0] . "</td>";
        $calculatorResult .= "<td>" . $value[1] . "</td>";
        $calculatorResult .= "<td>" . $value[2] . "</td>";
        $calculatorResult .= "<td>" . $value[3] . "</td>";
        $calculatorResult .= "<td>" . $value[4] . "</td>";
        $calculatorResult .= "</tr>";
    }
    $calculatorResult .= "</tbody>";
    $calculatorResult .= "</table>";

    $response = array(
        'status' => 'success',
        'html' => $html,
        'calculatorResult' => $calculatorResult
    );

    echo json_encode($response);
    exit();
}
include_once('views/home_page.php');
?>