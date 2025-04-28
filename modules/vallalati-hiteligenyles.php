<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $cegalapitas = mysqli_real_escape_string($connection, $_POST['cegalapitas']);
    $nev = mysqli_real_escape_string($connection, $_POST['nev']);
    $telefon = mysqli_real_escape_string($connection, $_POST['telefon']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $cegnev = mysqli_real_escape_string($connection, $_POST['cegnev']);
    $hitelosszeg = mysqli_real_escape_string($connection, $_POST['hitelosszeg']);
    $hitelcel = mysqli_real_escape_string($connection, $_POST['hitelcel']);
    $ingatlan = mysqli_real_escape_string($connection, $_POST['ingatlan']);
    $uzenet = mysqli_real_escape_string($connection, $_POST['uzenet']);
    $dokumentum = mysqli_real_escape_string($connection, $_FILES['dokumentum']['name']);

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

    if ($cegalapitas == 'true' && !empty($nev) && !empty($telefon) && !empty($email) 
        && $hitelcel !== '' && $adatvedelem == 'true') {
            $sql = "INSERT INTO vallalati_hiteligenyles (cegalapitas, nev, telefon, email, cegnev, hitelosszeg, hitelcel, ingatlan, uzenet, adatvedelem, hirlevel, dokumentum) 
                VALUES ('$cegalapitas', '$nev', '$telefon', '$email', '$cegnev', '$hitelosszeg', '$hitelcel', '$ingatlan', '$uzenet', '$adatvedelem', '$hirlevel', '$dokumentum')";
            $result = mysqli_query($connection, $sql) or die($connection);
    } else if ($cegalapitas == 'false' && !empty($nev) && !empty($telefon) && !empty($email) 
                && $hitelcel !== '' && $adatvedelem == 'true') {
                    $sql = "INSERT INTO vallalati_hiteligenyles (cegalapitas, nev, telefon, email, cegnev, hitelosszeg, hitelcel, ingatlan, uzenet, adatvedelem, hirlevel, dokumentum) 
                        VALUES ('$cegalapitas', '$nev', '$telefon', '$email', 'N/A', '$hitelosszeg', '$hitelcel', '$ingatlan', '$uzenet', '$adatvedelem', '$hirlevel', '$dokumentum')";
                    $result = mysqli_query($connection, $sql) or die($connection);
    }

    if (!empty($dokumentum)) {
        $directory = "uploads/";
        $path = $directory . $dokumentum;
        $tmp = $_FILES['dokumentum']['tmp_name'];
        move_uploaded_file($tmp, $path);
    }

    if (($cegalapitas == 'true' && !empty($nev) && !empty($telefon) && !empty($email) 
        && $hitelcel !== '' && $adatvedelem == 'true') || 
        ($cegalapitas == 'false' && !empty($nev) && !empty($telefon) && !empty($email) 
        && $hitelcel !== '' && $adatvedelem == 'true')) {
            $to = $email;
            $subject = "Vállalati hiteligénylés";

            $message = "";
            $message .= "<html>";
            $message .= "<head>";
            $message .= "<title>Vállalati hiteligénylés</title>";
            $message .= "</head>";
            $message .= "<body>";
            $message .= "<div>";
            $message .= "<h3>A vállalati hiteligénylő adatai</h3>";
            if ($cegalapitas == 'true') {
                $message .= "<p>Státusz: Rendelkezik saját céggel</p>";
            } else {
                $message .= "<p>Státusz: Most szeretne céget alapítani</p>";
            }
            $message .= "<p>Név: " . $nev . "</p>";
            $message .= "<p>Telefonszám: " . $telefon . "</p>";
            $message .= "<p>Email cím: " . $email . "</p>";
            $message .= "<p>A hitel célja: " . $hitelcel . "</p>";
            if (!empty($uzenet)) {
                $message .= "<p>Üzenet: " . $uzenet . "</p>";
            }
            if (!empty($dokumentum)) {
                $message .= "<p>Dokumentum: <a href=" . $path . ">" . $dokumentum . "</a></p>";
            }
            $message .= "<p>Köszönjük, hogy vállalati hitel igényére nyújtott be kérvényt.</p>";
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

    /*if (($cegalapitas == 'true' && !empty($nev) && !empty($telefon) && !empty($email) 
        && $hitelcel !== '' && $adatvedelem == 'true') || 
        ($cegalapitas == 'false' && !empty($nev) && !empty($telefon) && !empty($email) 
        && $hitelcel !== '' && $adatvedelem == 'true')) {
            $webhookUrl = "https://brokercash.bitrix24.com/rest/1/l05p9qmi7fkh61w0/crm.lead.add.json";

            if (!empty($uzenet)) {
                $data = array(
                    "fields" => array(
                        "TITLE" => "Új vállalati hiteligény",
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
                        "TITLE" => "Új vállalati hiteligény",
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
    if (($cegalapitas == 'true' && !empty($nev) && !empty($telefon) && !empty($email) 
        && $hitelcel !== '' && $adatvedelem == 'true') || 
        ($cegalapitas == 'false' && !empty($nev) && !empty($telefon) && !empty($email) 
        && $hitelcel !== '' && $adatvedelem == 'true')) {
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

    if (($cegalapitas == 'true' && !empty($nev) && !empty($telefon) && !empty($email) 
        && $hitelcel !== '' && $adatvedelem == 'true') || 
        ($cegalapitas == 'false' && !empty($nev) && !empty($telefon) && !empty($email) 
        && $hitelcel !== '' && $adatvedelem == 'true')) {
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
include_once('views/hiteligenyles/vallalati-hiteligenyles.php');
?>