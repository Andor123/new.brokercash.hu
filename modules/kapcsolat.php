<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $nev = mysqli_real_escape_string($connection, $_POST['nev']);
    $telefon = mysqli_real_escape_string($connection, $_POST['telefon']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $uzenet = mysqli_real_escape_string($connection, $_POST['uzenet']);
    $dokumentum = mysqli_real_escape_string($connection, $_FILES['dokumentum']['name']);

    if (!empty($nev) && !empty($telefon) && !empty($email)) {
        $sql = "INSERT INTO kapcsolat (nev, telefon, email, uzenet, dokumentum) 
            VALUES ('$nev', '$telefon', '$email', '$uzenet', '$dokumentum')";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    }

    if (!empty($dokumentum)) {
        $directory = "uploads";
        $path = $directory . "/" . $dokumentum;
        $tmp = $_FILES['dokumentum']['tmp_name'];
        move_uploaded_file($tmp, $path);
    }

    if (!empty($nev) && !empty($telefon) && !empty($email)) {
        $to = $email;
        $subject = "Kapcsolatfelvétel";

        $message = "";
        $message .= "<html>";
        $message .= "<head>";
        $message .= "<title>Kapcsolatfelvétel</title>";
        $message .= "</head>";
        $message .= "<body>";
        $message .= "<div>";
        $message .= "<h3>A kapcsolatfelvevő adatai</h3>";
        $message .= "<p>Név: " . $nev . "</p>";
        $message .= "<p>Telefonszám: " . $telefon . "</p>";
        $message .= "<p>Email cím: " . $email . "</p>";
        if (!empty($uzenet)) {
            $message .= "<p>Üzenet: " . $uzenet . "</p>";
        }
        if (!empty($dokumentum)) {
            $message .= "<p>Dokumentum: <a href=http://" . $_SERVER['HTTP_HOST'] . "/" . $path . ">" . $dokumentum . "</a></p>";
        }
        $message .= "<p>Köszönjük, hogy kapcsolatot szeretne felvenni velünk.</p>";
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

    /*if (!empty($nev) && !empty($telefon) && !empty($email)) {
        $webhookUrl = "https://brokercash.bitrix24.com/rest/1/l05p9qmi7fkh61w0/crm.lead.add.json";

        if (!empty($uzenet)) {
            $data = array(
                "fields" => array(
                    "TITLE" => "Új kapcsolatfelvétel",
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
                    "TITLE" => "Új kapcsolatfelvétel",
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
    if (!empty($nev) && !empty($telefon) && !empty($email)) {
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

    if (!empty($nev) && !empty($telefon) && !empty($email)) {
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
    $selected = mysqli_real_escape_string($connection, $_POST['selectedDate']);
    $appointment = mysqli_real_escape_string($connection, $_POST['appointment']);

    $html = "";
    if ($appointment !== "") {
        $html .= "<div class='message-box color-info'>";
        $html .= "<i class='bi bi-check-circle'></i>";
        $html .= "<span>Az időpont lefoglalva, várjuk szeretettel.</span>";
        $html .= "</div>";
    } else {
        $html .= "<div class='message-box color-info'>";
        $html .= "<i class='bi bi-check-circle'></i>";
        $html .= "<span>Kérjük töltse ki a kötelező mezőket.</span>";
        $html .= "</div>";
    }

    if ($appointment !== "") {
        $response = array(
            'status' => 'success',
            'html' => $html
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
include_once('views/footer_menu/kapcsolat.php');
?>