<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $nev = mysqli_real_escape_string($connection, $_POST['nev']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $telefon = mysqli_real_escape_string($connection, $_POST['telefon']);
    $szuletesi_nev = mysqli_real_escape_string($connection, $_POST['szuletesi-nev']);
    $lakcim = mysqli_real_escape_string($connection, $_POST['lakcim']);
    $anyja_neve = mysqli_real_escape_string($connection, $_POST['anyja-neve']);
    $szuletesi_hely = mysqli_real_escape_string($connection, $_POST['szuletesi-hely']);
    $szuletesi_ido = mysqli_real_escape_string($connection, $_POST['szuletesi-ido']);
    $igazolvany_szam = mysqli_real_escape_string($connection, $_POST['igazolvany-szam']);
    $lakcimkartya = mysqli_real_escape_string($connection, $_POST['lakcimkartya']);
    $szemelyi_szam = mysqli_real_escape_string($connection, $_POST['szemelyi-szam']);
    $adoazonosito = mysqli_real_escape_string($connection, $_POST['adoazonosito']);

    $cegnev = mysqli_real_escape_string($connection, $_POST['cegnev']);
    $szekhely = mysqli_real_escape_string($connection, $_POST['szekhely']);
    $telephely = mysqli_real_escape_string($connection, $_POST['telephely']);
    $tevekenyseg = mysqli_real_escape_string($connection, $_POST['tevekenyseg']);
    $egyeb = mysqli_real_escape_string($connection, $_POST['egyeb']);
    $szemelyek = mysqli_real_escape_string($connection, $_POST['szemelyek']);
    $torzstoke = mysqli_real_escape_string($connection, $_POST['torzstoke']);
    $ceg_email = mysqli_real_escape_string($connection, $_POST['ceg-email']);
    $adozasi_forma = mysqli_real_escape_string($connection, $_POST['adozasi-forma']);

    $kapcsolattarto_nev = mysqli_real_escape_string($connection, $_POST['nev2']);
    $kapcsolattarto_email = mysqli_real_escape_string($connection, $_POST['email2']);
    $kapcsolattarto_telefon = mysqli_real_escape_string($connection, $_POST['telefon2']);
    $megjegyzes = mysqli_real_escape_string($connection, $_POST['megjegyzes']);

    if (isset($_POST['hirlevel'])) {
        $hirlevel = mysqli_real_escape_string($connection, $_POST['hirlevel']);
    } else {
        $hirlevel = 'false';
    }

    if (isset($_POST['adatvedelem'])) {
        $adatvedelem = mysqli_real_escape_string($connection, $_POST['adatvedelem']);
    } else {
        $adatvedelem = 'false';
    }

    $create_file = fopen('cegalapitas.txt', 'w') or die("Unable to open file!");
    $txt = "";
    $txt .= "Név: " . $nev . "\n";
    $txt .= "Telefon: " . $telefon . "\n";
    $txt .= "Email: " . $email . "\n";
    $newTxt = mb_convert_encoding($txt, "ISO-8859-2", "UTF-8");
    fwrite($create_file, $newTxt);
    fclose($create_file);

    if (dirname($_SERVER["PHP_SELF"])) {
        $path = $_SERVER["HTTP_ORIGIN"] . dirname($_SERVER["PHP_SELF"]) . "/cegalapitas.txt";
    } else {
        $path = $_SERVER["HTTP_ORIGIN"] . "/cegalapitas.txt";
    }

    if (isset($path)) {
        $dokumentum = basename($path);
    }

    if (!empty($nev) && !empty($email) && !empty($telefon) && $adatvedelem == 'true') {
            if ((!empty($cegnev) || !empty($szekhely) || !empty($telephely) || !empty($tevekenyseg)
                || !empty($egyeb) || !empty($szemelyek) || !empty($torzstoke) || !empty($ceg_email)
                || $adozasi_forma !== '') && (!empty($kapcsolattarto_nev) || !empty($kapcsolattarto_email) || !empty($kapcsolattarto_telefon)
                || !empty($megjegyzes))) {
                    $sql = "INSERT INTO cegalapitas_alapitando_ceg (cegnev, szekhely, telephely, tevekenyseg, egyeb, szemelyek, torzstoke, ceg_email, adozasi_forma) 
                                VALUES ('$cegnev', '$szekhely', '$telephely', '$tevekenyseg', '$egyeb', '$szemelyek', '$torzstoke', '$ceg_email', '$adozasi_forma');
                            INSERT INTO cegalapitas_kapcsolattarto (nev, email, telefon, megjegyzes) 
                                VALUES ('$kapcsolattarto_nev', '$kapcsolattarto_email', '$kapcsolattarto_telefon', '$megjegyzes');
                            INSERT INTO cegalapitas (nev, email, telefon, szuletesi_nev, lakcim, anyja_neve, szuletesi_hely, szuletesi_ido, igazolvany_szam, lakcimkartya, szemelyi_szam, adoazonosito, cegnev, kapcsolattarto_nev, hirlevel, adatvedelem, dokumentum) 
                                VALUES ('$nev', '$email', '$telefon', '$szuletesi_nev', '$lakcim', '$anyja_neve', '$szuletesi_hely', '$szuletesi_ido', '$igazolvany_szam', '$lakcimkartya', '$szemelyi_szam', '$adoazonosito', '$cegnev', '$kapcsolattarto_nev', '$hirlevel', '$adatvedelem', '$dokumentum')";
                        $result = mysqli_multi_query($connection, $sql) or die(mysqli_error($connection));
            } else if ((empty($cegnev) || empty($szekhely) || empty($telephely) || empty($tevekenyseg)
                        || empty($egyeb) || empty($szemelyek) || empty($torzstoke) || empty($ceg_email)
                        || $adozasi_forma == '') && (!empty($kapcsolattarto_nev) || !empty($kapcsolattarto_email) || !empty($kapcsolattarto_telefon)
                        || !empty($megjegyzes))) {
                            $sql = "INSERT INTO cegalapitas_kapcsolattarto (nev, email, telefon, megjegyzes) 
                                        VALUES ('$kapcsolattarto_nev', '$kapcsolattarto_email', '$kapcsolattarto_telefon', '$megjegyzes');
                                    INSERT INTO cegalapitas (nev, email, telefon, szuletesi_nev, lakcim, anyja_neve, szuletesi_hely, szuletesi_ido, igazolvany_szam, lakcimkartya, szemelyi_szam, adoazonosito, kapcsolattarto_nev, hirlevel, adatvedelem, dokumentum) 
                                        VALUES ('$nev', '$email', '$telefon', '$szuletesi_nev', '$lakcim', '$anyja_neve', '$szuletesi_hely', '$szuletesi_ido', '$igazolvany_szam', '$lakcimkartya', '$szemelyi_szam', '$adoazonosito', '$kapcsolattarto_nev', '$hirlevel', '$adatvedelem', '$dokumentum')";
                            $result = mysqli_multi_query($connection, $sql) or die(mysqli_error($connection));
            } else if ((!empty($cegnev) || !empty($szekhely) || !empty($telephely) || !empty($tevekenyseg)
                        || !empty($egyeb) || !empty($szemelyek) || !empty($torzstoke) || !empty($ceg_email)
                        || $adozasi_forma !== '') && (empty($kapcsolattarto_nev) || empty($kapcsolattarto_email) || empty($kapcsolattarto_telefon)
                        || empty($megjegyzes))) {
                            $sql = "INSERT INTO cegalapitas_alapitando_ceg (cegnev, szekhely, telephely, tevekenyseg, egyeb, szemelyek, torzstoke, ceg_email, adozasi_forma) 
                                        VALUES ('$cegnev', '$szekhely', '$telephely', '$tevekenyseg', '$egyeb', '$szemelyek', '$torzstoke', '$ceg_email', '$adozasi_forma');
                                    INSERT INTO cegalapitas (nev, email, telefon, szuletesi_nev, lakcim, anyja_neve, szuletesi_hely, szuletesi_ido, igazolvany_szam, lakcimkartya, szemelyi_szam, adoazonosito, cegnev, hirlevel, adatvedelem, dokumentum) 
                                        VALUES ('$nev', '$email', '$telefon', '$szuletesi_nev', '$lakcim', '$anyja_neve', '$szuletesi_hely', '$szuletesi_ido', '$igazolvany_szam', '$lakcimkartya', '$szemelyi_szam', '$adoazonosito', '$cegnev', '$hirlevel', '$adatvedelem', '$dokumentum')";
                            $result = mysqli_multi_query($connection, $sql) or die(mysqli_error($connection));
            } else {
                $sql = "INSERT INTO cegalapitas (nev, email, telefon, szuletesi_nev, lakcim, anyja_neve, szuletesi_hely, szuletesi_ido, igazolvany_szam, lakcimkartya, szemelyi_szam, adoazonosito, hirlevel, adatvedelem, dokumentum) 
                            VALUES ('$nev', '$email', '$telefon', '$szuletesi_nev', '$lakcim', '$anyja_neve', '$szuletesi_hely', '$szuletesi_ido', '$igazolvany_szam', '$lakcimkartya', '$szemelyi_szam', '$adoazonosito', '$hirlevel', '$adatvedelem', '$dokumentum')";
                $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        }
    }

    if (!empty($nev) && !empty($email) && !empty($telefon) && $adatvedelem == 'true') {
            $to = $email;
            $subject = "Cégalapítás";

            $message = "";
            $message .= "<html>";
            $message .= "<head>";
            $message .= "<title>Cégalapítás</title>";
            $message .= "</head>";
            $message .= "<body>";
            $message .= "<div>";
            $message .= "<h3>A cégalapító adatai</h3>";
            $message .= "<p>Név: " . $nev . "</p>";
            $message .= "<p>Telefonszám: " . $telefon . "</p>";
            $message .= "<p>Email cím: " . $email . "</p>";
            $message .= "<p>Dokumentum: <a href=" . $path . ">" . $dokumentum . "</a></p>";
            $message .= "<p>Köszönjük, hogy online felületünkön szeretne céget alapítani.</p>";
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

    /*if (!empty($nev) && !empty($email) && !empty($telefon) && $adatvedelem == 'true') {
            $webhookUrl = "https://brokercash.bitrix24.com/rest/1/l05p9qmi7fkh61w0/crm.lead.add.json";

            $data = array(
                "fields" => array(
                    "TITLE" => "Új cégalapítás kérvény",
                    "NAME" => $nev,
                    "PHONE" => array(
                        array("VALUE" => $telefon, "VALUE_TYPE" => "WORK")
                    ),
                    "EMAIL" => array(
                        array("VALUE" => $email, "VALUE_TYPE" => "WORK")
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
    if (!empty($nev) && !empty($email) && !empty($telefon) && $adatvedelem == 'true') {
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

    if (!empty($nev) && !empty($email) && !empty($telefon) && $adatvedelem == 'true') {
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
include_once('views/vallalkozoi_szolgaltatasok/cegalapitas-online.php');
?>