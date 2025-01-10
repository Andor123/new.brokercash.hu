<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $nev = mysqli_real_escape_string($connection, $_POST['nev']);
    $szuletesi_nev = mysqli_real_escape_string($connection, $_POST['szuletesi-nev']);
    $szuletesi_hely_ido = mysqli_real_escape_string($connection, $_POST['szuletesi-hely-ido']);
    $anyja_neve = mysqli_real_escape_string($connection, $_POST['anyja-neve']);
    $lakcim = mysqli_real_escape_string($connection, $_POST['lakcim']);
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

    $create_file = fopen('gyorskolcson.txt', 'w') or die("Unable to open file!");
    $txt = "";
    $txt .= "Név: " . $nev . "\n";
    $txt .= "Telefon: " . $telefon . "\n";
    $txt .= "Email: " . $email . "\n";
    if (!empty($uzenet)) {
        $txt .= "Üzenet: " . $uzenet . "\n";
    }
    $newTxt = mb_convert_encoding($txt, "ISO-8859-2", "UTF-8");
    fwrite($create_file, $newTxt);
    fclose($create_file);

    if (dirname($_SERVER["PHP_SELF"])) {
        $path = $_SERVER["HTTP_ORIGIN"] . dirname($_SERVER["PHP_SELF"]) . "/gyorskolcson.txt";
    } else {
        $path = $_SERVER["HTTP_ORIGIN"] . "/gyorskolcson.txt";
    }

    if (isset($path)) {
        $dokumentum = basename($path);
    }

    if (!empty($nev)  && !empty($telefon) && !empty($email) && $adatvedelem == 'true') {
            $sql = "INSERT INTO gyorskolcson (nev, szuletesi_nev, szuletesi_hely_ido, anyja_neve, lakcim, telefon, email, uzenet, adatvedelem, hirlevel, dokumentum) 
                VALUES ('$nev', '$szuletesi_nev', '$szuletesi_hely_ido', '$anyja_neve', '$lakcim', '$telefon', '$email', '$uzenet', '$adatvedelem', '$hirlevel', '$dokumentum')";
            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    }

    if (!empty($nev)  && !empty($telefon) && !empty($email) && $adatvedelem == 'true') {
            $to = $email;
            $subject = "Kérvény gyorskölcsönre";

            $message = "";
            $message .= "<html>";
            $message .= "<head>";
            $message .= "<title>Kérvény gyorskölcsönre</title>";
            $message .= "</head>";
            $message .= "<body>";
            $message .= "<div>";
            $message .= "<h3>A gyorskölcsönt kérvényező adatai</h3>";
            $message .= "<p>Név: " . $nev . "</p>";
            $message .= "<p>Telefonszám: " . $telefon . "</p>";
            $message .= "<p>Email cím: " . $email . "</p>";
            if (!empty($uzenet)) {
                $message .= "<p>Üzenet: " . $uzenet . "</p>";
            }
            $message .= "<p>Dokumentum: <a href=" . $path . ">" . $dokumentum . "</a></p>";
            $message .= "<p>Köszönjük, hogy kérvényt nyujtott be gyorskölcsönre.</p>";
            $message .= "<p>Munkatársunk majd keresni fogja Önt.</p>";
            $message .= "<p>Üdvözlettel,<br><strong>Brokercash rendszer</strong></p>";
            $message .= "</div>";
            $message .= "</body>";
            $message .= "</html>";

            $headers = "";
            $headers .= "From: info@brokercash.hu\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            $headers .= "Cc: info@brokercash.hu\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            $mail_status = "";
            if (mail($to, $subject, $message, $headers)) {
                $mail_status .= "<p>Email sikeresen elküldve!</p>";
            } else {
                $mail_status .= "<p>Nem sikerült elküldeni az emailt.</p>";
            }
    }

    /*if (!empty($nev)  && !empty($telefon) && !empty($email) && $adatvedelem == 'true') {
            $webhookUrl = "https://brokercash.bitrix24.com/rest/1/l05p9qmi7fkh61w0/crm.lead.add.json";

            if (!empty($uzenet)) {
                $data = array(
                    "fields" => array(
                        "TITLE" => "Új gyorskölcsön kérvény",
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
                        "TITLE" => "Új gyorskölcsön kérvény",
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
    if (!empty($nev)  && !empty($telefon) && !empty($email) && $adatvedelem == 'true') {
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

    if (!empty($nev)  && !empty($telefon) && !empty($email) && $adatvedelem == 'true') {
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
include_once('views/hiteligenyles/gyorskolcson.php');
?>