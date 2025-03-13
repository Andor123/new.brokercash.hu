<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $hitelcel = mysqli_real_escape_string($connection, $_POST['hitelcel']);
    $hitelosszeg = mysqli_real_escape_string($connection, $_POST['hitelosszeg']);
    $nev = mysqli_real_escape_string($connection, $_POST['nev']);
    $telefon = mysqli_real_escape_string($connection, $_POST['telefon']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $uzenet = mysqli_real_escape_string($connection, $_POST['uzenet']);

    if (isset($_POST['adatvedelem'])) {
        $adatvedelem = mysqli_real_escape_string($connection, $_POST['adatvedelem']);
    } else {
        $adatvedelem = 'false';
    }

    if (isset($_POST['hirlevel'])) {
        $hirlevel = mysqli_real_escape_string($connection, $_POST['hirlevel']);
    } else {
        $hirlevel = 'false';
    }

    $create_file = fopen('lakossagi_hiteligenyles.txt', 'w') or die("Unable to open file!");
    $txt = "";
    $txt .= "Név: " . $nev . "\n";
    $txt .= "Telefon: " . $telefon . "\n";
    $txt .= "Email: " . $email . "\n";
    $txt .= "Hitelcél: " . $hitelcel . "\n";
    if (!empty($uzenet)) {
        $txt .= "Üzenet: " . $uzenet . "\n";
    }
    $newTxt = mb_convert_encoding($txt, "ISO-8859-2", "UTF-8");
    fwrite($create_file, $newTxt);
    fclose($create_file);

    if (dirname($_SERVER["PHP_SELF"])) {
        $path = $_SERVER["HTTP_ORIGIN"] . dirname($_SERVER["PHP_SELF"]) . "/lakossagi_hiteligenyles.txt";
    } else {
        $path = $_SERVER["HTTP_ORIGIN"] . "/lakossagi_hiteligenyles.txt";
    }

    if (isset($path)) {
        $dokumentum = basename($path);
    }

    if ($hitelcel !== '' && !empty($nev) && !empty($telefon) && !empty($email) && $adatvedelem == 'true') {
            $sql = "INSERT INTO lakossagi_hiteligenyles (hitelcel, hitelosszeg, nev, telefon, email, uzenet, adatvedelem, hirlevel, dokumentum) 
                VALUES ('$hitelcel', '$hitelosszeg', '$nev', '$telefon', '$email', '$uzenet', '$adatvedelem', '$hirlevel', '$dokumentum')";
            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    }

    if ($hitelcel !== '' && !empty($nev) && !empty($telefon) && !empty($email) && $adatvedelem == 'true') {
            $to = $email;
            $subject = "Lakossági hiteligénylés";

            $message = "";
            $message .= "<html>";
            $message .= "<head>";
            $message .= "<title>Lakossági hiteligénylés</title>";
            $message .= "</head>";
            $message .= "<body>";
            $message .= "<div>";
            $message .= "<h3>A lakossági hiteligénylő adatai</h3>";
            $message .= "<p>Név: " . $nev . "</p>";
            $message .= "<p>Telefonszám: " . $telefon . "</p>";
            $message .= "<p>Email cím: " . $email . "</p>";
            $message .= "<p>A hitel célja: " . $hitelcel . "</p>";
            if (!empty($uzenet)) {
                $message .= "<p>Üzenet: " . $uzenet . "</p>";
            }
            $message .= "<p>Dokumentum: <a href=" . $path . ">" . $dokumentum . "</a></p>";
            $message .= "<p>Köszönjük, hogy lakossági hitel igényére nyújtott be kérvényt.</p>";
            $message .= "<p>Munkatársunk majd keresni fogja Önt.</p>";
            $message .= "<p>Üdvözlettel,<br><strong>Brokercash rendszer</strong></p>";
            $message .= "</div>";
            $message .= "</body>";
            $message .= "</html>";

            $headers = "";
            $headers .= "From: info@brokercash.hu\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            $headers .= "Cc: info@brokercash.hu, mariann.cseke@brokercash.hu, orsi.kiss@brokercash.hu\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            $mail_status = "";
            if (mail($to, $subject, $message, $headers)) {
                $mail_status .= "<p>Email sikeresen elküldve!</p>";
            } else {
                $mail_status .= "<p>Nem sikerült elküldeni az emailt.</p>";
            }
    }

    /*if ($hitelcel !== '' && !empty($nev) && !empty($telefon) && !empty($email) && $adatvedelem == 'true') {
            $webhookUrl = "https://brokercash.bitrix24.com/rest/1/l05p9qmi7fkh61w0/crm.lead.add.json";

            if (!empty($uzenet)) {
                $data = array(
                    "fields" => array(
                        "TITLE" => "Új lakossági hiteligény",
                        "NAME" => $nev,
                        "PHONE" => array(
                            array("VALUE" => $telefon, "VALUE_TYPE" => "WORK")
                        ),
                        "EMAIL" => array(
                            array("VALUE" => $email, "VALUE_TYPE" => "WORK")
                        ),
                        "COMMENTS" => $uzenet
                    )
                );
            } else {
                $data = array(
                    "fields" => array(
                        "TITLE" => "Új lakossági hiteligény",
                        "NAME" => $nev,
                        "PHONE" => array(
                            array("VALUE" => $telefon, "VALUE_TYPE" => "WORK")
                        ),
                        "EMAIL" => array(
                            array("VALUE" => $email, "VALUE_TYPE" => "WORK")
                        )
                    )
                );
            }

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
    if ($hitelcel !== '' && !empty($nev) && !empty($telefon) && !empty($email) && $adatvedelem == 'true') {
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

    if ($hitelcel !== '' && !empty($nev) && !empty($telefon) && !empty($email) && $adatvedelem == 'true') {
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
include_once('views/hiteligenyles/lakossagi-hiteligenyles.php');
?>