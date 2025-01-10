<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $befizetes = mysqli_real_escape_string($connection, $_POST['befizetes']);
    $megtakaritas = mysqli_real_escape_string($connection, $_POST['megtakaritas']);
    $futamido = mysqli_real_escape_string($connection, $_POST['futamido']);
    $osszeg = mysqli_real_escape_string($connection, $_POST['osszeg']);

    $igenylo_nev = mysqli_real_escape_string($connection, $_POST['nev']);
    $igenylo_szuletesi_nev = mysqli_real_escape_string($connection, $_POST['szuletesi-nev']);
    $igenylo_nem = mysqli_real_escape_string($connection, $_POST['nem']);
    $igenylo_anyja_neve = mysqli_real_escape_string($connection, $_POST['anyja-neve']);
    $igenylo_szuletesi_hely = mysqli_real_escape_string($connection, $_POST['szuletesi-hely']);
    $igenylo_szuletesi_ido = mysqli_real_escape_string($connection, $_POST['szuletesi-ido']);
    $igenylo_okmany_tipus = mysqli_real_escape_string($connection, $_POST['okmany-tipus']);
    $igenylo_okmany_szam = mysqli_real_escape_string($connection, $_POST['okmany-szam']);
    $igenylo_okmany_hatosag = mysqli_real_escape_string($connection, $_POST['okmany-hatosag']);
    $igenylo_adoazonosito = mysqli_real_escape_string($connection, $_POST['adoazonosito']);
    $igenylo_allampolgarsag = mysqli_real_escape_string($connection, $_POST['allampolgarsag']);
    $igenylo_lakcimkartya = mysqli_real_escape_string($connection, $_POST['lakcimkartya']);
    $igenylo_telefon = mysqli_real_escape_string($connection, $_POST['telefon']);
    $igenylo_email = mysqli_real_escape_string($connection, $_POST['email']);
    $igenylo_lakcim = mysqli_real_escape_string($connection, $_POST['lakcim']);
    $igenylo_levelezesi_cim = mysqli_real_escape_string($connection, $_POST['levelezesi-cim']);

    $kedvezmenyezett_nev = mysqli_real_escape_string($connection, $_POST['nev2']);
    $kedvezmenyezett_szuletesi_nev = mysqli_real_escape_string($connection, $_POST['szuletesi-nev2']);
    $kedvezmenyezett_nem = mysqli_real_escape_string($connection, $_POST['nem2']);
    $kedvezmenyezett_anyja_neve = mysqli_real_escape_string($connection, $_POST['anyja-neve2']);
    $kedvezmenyezett_szuletesi_hely = mysqli_real_escape_string($connection, $_POST['szuletesi-hely2']);
    $kedvezmenyezett_szuletesi_ido = mysqli_real_escape_string($connection, $_POST['szuletesi-ido2']);
    $kedvezmenyezett_okmany_tipus = mysqli_real_escape_string($connection, $_POST['okmany-tipus2']);
    $kedvezmenyezett_okmany_szam = mysqli_real_escape_string($connection, $_POST['okmany-szam2']);
    $kedvezmenyezett_okmany_hatosag = mysqli_real_escape_string($connection, $_POST['okmany-hatosag2']);
    $kedvezmenyezett_adoazonosito = mysqli_real_escape_string($connection, $_POST['adoazonosito2']);
    $kedvezmenyezett_allampolgarsag = mysqli_real_escape_string($connection, $_POST['allampolgarsag2']);
    $kedvezmenyezett_lakcimkartya = mysqli_real_escape_string($connection, $_POST['lakcimkartya2']);
    $kedvezmenyezett_telefon = mysqli_real_escape_string($connection, $_POST['telefon2']);
    $kedvezmenyezett_email = mysqli_real_escape_string($connection, $_POST['email2']);
    $kedvezmenyezett_lakcim = mysqli_real_escape_string($connection, $_POST['lakcim2']);
    $kedvezmenyezett_hozzatartozo = mysqli_real_escape_string($connection, $_POST['hozzatartozo']);

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

    $create_file = fopen('lakastakarek.txt', 'w') or die("Unable to open file!");
    $txt = "";
    $txt .= "Név: " . $igenylo_nev . "\n";
    $txt .= "Telefon: " . $igenylo_telefon . "\n";
    $txt .= "Email: " . $igenylo_email . "\n";
    $newTxt = mb_convert_encoding($txt, "ISO-8859-2", "UTF-8");
    fwrite($create_file, $newTxt);
    fclose($create_file);

    if (dirname($_SERVER["PHP_SELF"])) {
        $path = $_SERVER["HTTP_ORIGIN"] . dirname($_SERVER["PHP_SELF"]) . "/lakastakarek.txt";
    } else {
        $path = $_SERVER["HTTP_ORIGIN"] . "/lakastakarek.txt";
    }

    if (isset($path)) {
        $dokumentum = basename($path);
    }

    if (!empty($igenylo_nev) && !empty($igenylo_telefon) && !empty($igenylo_email) && $adatvedelem == 'true') {
            if (($befizetes !== '' || $megtakaritas !== '' || $futamido !== '' || $osszeg !== '') && 
                (!empty($kedvezmenyezett_nev) || !empty($kedvezmenyezett_szuletesi_nev) || $kedvezmenyezett_nem !== '' || !empty($kedvezmenyezett_anyja_neve)
                || !empty($kedvezmenyezett_szuletesi_hely) || !empty($kedvezmenyezett_szuletesi_ido) || $kedvezmenyezett_okmany_tipus !== '' || !empty($kedvezmenyezett_okmany_szam)
                || !empty($kedvezmenyezett_okmany_hatosag) || !empty($kedvezmenyezett_adoazonosito) || !empty($kedvezmenyezett_allampolgarsag) || !empty($kedvezmenyezett_lakcimkartya)
                || !empty($kedvezmenyezett_telefon) || !empty($kedvezmenyezett_email) || !empty($kedvezmenyezett_lakcim) || $kedvezmenyezett_hozzatartozo !== '')) {
                    $sql = "INSERT INTO lakastakarekpenztar_igenylo (nev, szuletesi_nev, nem, anyja_neve, szuletesi_hely, szuletesi_ido, okmany_tipus, okmany_szam, okmany_hatosag, adoazonosito, allampolgarsag, lakcimkartya, telefon, email, lakcim, levelezesi_cim) 
                                VALUES ('$igenylo_nev', '$igenylo_szuletesi_nev', '$igenylo_nem', '$igenylo_anyja_neve', '$igenylo_szuletesi_hely', '$igenylo_szuletesi_ido', '$igenylo_okmany_tipus', '$igenylo_okmany_szam', '$igenylo_okmany_hatosag', '$igenylo_adoazonosito', '$igenylo_allampolgarsag', '$igenylo_lakcimkartya', '$igenylo_telefon', '$igenylo_email', '$igenylo_lakcim', '$igenylo_levelezesi_cim');
                            INSERT INTO lakastakarekpenztar_kedvezmenyezett (nev, szuletesi_nev, nem, anyja_neve, szuletesi_hely, szuletesi_ido, okmany_tipus, okmany_szam, okmany_hatosag, adoazonosito, allampolgarsag, lakcimkartya, telefon, email, lakcim, hozzatartozo) 
                                VALUES ('$kedvezmenyezett_nev', '$kedvezmenyezett_szuletesi_nev', '$kedvezmenyezett_nem', '$kedvezmenyezett_anyja_neve', '$kedvezmenyezett_szuletesi_hely', '$kedvezmenyezett_szuletesi_ido', '$kedvezmenyezett_okmany_tipus', '$kedvezmenyezett_okmany_szam', '$kedvezmenyezett_okmany_hatosag', '$kedvezmenyezett_adoazonosito', '$kedvezmenyezett_allampolgarsag', '$kedvezmenyezett_lakcimkartya', '$kedvezmenyezett_telefon', '$kedvezmenyezett_email', '$kedvezmenyezett_lakcim', '$kedvezmenyezett_hozzatartozo');
                            INSERT INTO lakastakarekpenztar (befizetes, megtakaritas, futamido, osszeg, igenylo_nev, kedvezmenyezett_nev, hirlevel, adatvedelem, dokumentum) 
                                VALUES ('$befizetes', '$megtakaritas', '$futamido', '$osszeg', '$igenylo_nev', '$kedvezmenyezett_nev', '$hirlevel', '$adatvedelem', '$dokumentum')";
                    $result = mysqli_multi_query($connection, $sql) or die(mysqli_error($connection));
            } else if (($befizetes == '' || $megtakaritas == '' || $futamido == '' || $osszeg == '') && 
                        (!empty($kedvezmenyezett_nev) || !empty($kedvezmenyezett_szuletesi_nev) || $kedvezmenyezett_nem !== '' || !empty($kedvezmenyezett_anyja_neve)
                        || !empty($kedvezmenyezett_szuletesi_hely) || !empty($kedvezmenyezett_szuletesi_ido) || $kedvezmenyezett_okmany_tipus !== '' || !empty($kedvezmenyezett_okmany_szam)
                        || !empty($kedvezmenyezett_okmany_hatosag) || !empty($kedvezmenyezett_adoazonosito) || !empty($kedvezmenyezett_allampolgarsag) || !empty($kedvezmenyezett_lakcimkartya)
                        || !empty($kedvezmenyezett_telefon) || !empty($kedvezmenyezett_email) || !empty($kedvezmenyezett_lakcim) || $kedvezmenyezett_hozzatartozo !== '')) {
                            $sql = "INSERT INTO lakastakarekpenztar_igenylo (nev, szuletesi_nev, nem, anyja_neve, szuletesi_hely, szuletesi_ido, okmany_tipus, okmany_szam, okmany_hatosag, adoazonosito, allampolgarsag, lakcimkartya, telefon, email, lakcim, levelezesi_cim) 
                                        VALUES ('$igenylo_nev', '$igenylo_szuletesi_nev', '$igenylo_nem', '$igenylo_anyja_neve', '$igenylo_szuletesi_hely', '$igenylo_szuletesi_ido', '$igenylo_okmany_tipus', '$igenylo_okmany_szam', '$igenylo_okmany_hatosag', '$igenylo_adoazonosito', '$igenylo_allampolgarsag', '$igenylo_lakcimkartya', '$igenylo_telefon', '$igenylo_email', '$igenylo_lakcim', '$igenylo_levelezesi_cim');
                                    INSERT INTO lakastakarekpenztar_kedvezmenyezett (nev, szuletesi_nev, nem, anyja_neve, szuletesi_hely, szuletesi_ido, okmany_tipus, okmany_szam, okmany_hatosag, adoazonosito, allampolgarsag, lakcimkartya, telefon, email, lakcim, hozzatartozo) 
                                        VALUES ('$kedvezmenyezett_nev', '$kedvezmenyezett_szuletesi_nev', '$kedvezmenyezett_nem', '$kedvezmenyezett_anyja_neve', '$kedvezmenyezett_szuletesi_hely', '$kedvezmenyezett_szuletesi_ido', '$kedvezmenyezett_okmany_tipus', '$kedvezmenyezett_okmany_szam', '$kedvezmenyezett_okmany_hatosag', '$kedvezmenyezett_adoazonosito', '$kedvezmenyezett_allampolgarsag', '$kedvezmenyezett_lakcimkartya', '$kedvezmenyezett_telefon', '$kedvezmenyezett_email', '$kedvezmenyezett_lakcim', '$kedvezmenyezett_hozzatartozo');
                                    INSERT INTO lakastakarekpenztar (igenylo_nev, kedvezmenyezett_nev, hirlevel, adatvedelem, dokumentum) 
                                        VALUES ('$igenylo_nev', '$kedvezmenyezett_nev', '$hirlevel', '$adatvedelem', '$dokumentum')";
                            $result = mysqli_multi_query($connection, $sql) or die(mysqli_error($connection));
            } else if (($befizetes !== '' || $megtakaritas !== '' || $futamido !== '' || $osszeg !== '') && 
                        (empty($kedvezmenyezett_nev) || empty($kedvezmenyezett_szuletesi_nev) || $kedvezmenyezett_nem == '' || empty($kedvezmenyezett_anyja_neve)
                        || empty($kedvezmenyezett_szuletesi_hely) || empty($kedvezmenyezett_szuletesi_ido) || $kedvezmenyezett_okmany_tipus == '' || empty($kedvezmenyezett_okmany_szam)
                        || empty($kedvezmenyezett_okmany_hatosag) || empty($kedvezmenyezett_adoazonosito) || empty($kedvezmenyezett_allampolgarsag) || empty($kedvezmenyezett_lakcimkartya)
                        || empty($kedvezmenyezett_telefon) || empty($kedvezmenyezett_email) || empty($kedvezmenyezett_lakcim) || $kedvezmenyezett_hozzatartozo == '')) {
                            $sql = "INSERT INTO lakastakarekpenztar_igenylo (nev, szuletesi_nev, nem, anyja_neve, szuletesi_hely, szuletesi_ido, okmany_tipus, okmany_szam, okmany_hatosag, adoazonosito, allampolgarsag, lakcimkartya, telefon, email, lakcim, levelezesi_cim) 
                                        VALUES ('$igenylo_nev', '$igenylo_szuletesi_nev', '$igenylo_nem', '$igenylo_anyja_neve', '$igenylo_szuletesi_hely', '$igenylo_szuletesi_ido', '$igenylo_okmany_tipus', '$igenylo_okmany_szam', '$igenylo_okmany_hatosag', '$igenylo_adoazonosito', '$igenylo_allampolgarsag', '$igenylo_lakcimkartya', '$igenylo_telefon', '$igenylo_email', '$igenylo_lakcim', '$igenylo_levelezesi_cim');
                                    INSERT INTO lakastakarekpenztar (befizetes, megtakaritas, futamido, osszeg, igenylo_nev, hirlevel, adatvedelem, dokumentum) 
                                        VALUES ('$befizetes', '$megtakaritas', '$futamido', '$osszeg', '$igenylo_nev', '$hirlevel', '$adatvedelem', '$dokumentum')";
                            $result = mysqli_multi_query($connection, $sql) or die(mysqli_error($connection));
            } else {
                $sql = "INSERT INTO lakastakarekpenztar_igenylo (nev, szuletesi_nev, nem, anyja_neve, szuletesi_hely, szuletesi_ido, okmany_tipus, okmany_szam, okmany_hatosag, adoazonosito, allampolgarsag, lakcimkartya, telefon, email, lakcim, levelezesi_cim) 
                            VALUES ('$igenylo_nev', '$igenylo_szuletesi_nev', '$igenylo_nem', '$igenylo_anyja_neve', '$igenylo_szuletesi_hely', '$igenylo_szuletesi_ido', '$igenylo_okmany_tipus', '$igenylo_okmany_szam', '$igenylo_okmany_hatosag', '$igenylo_adoazonosito', '$igenylo_allampolgarsag', '$igenylo_lakcimkartya', '$igenylo_telefon', '$igenylo_email', '$igenylo_lakcim', '$igenylo_levelezesi_cim');
                        INSERT INTO lakastakarekpenztar (igenylo_nev, hirlevel, adatvedelem, dokumentum) 
                            VALUES ('$igenylo_nev', '$hirlevel', '$adatvedelem', '$dokumentum')";
                $result = mysqli_multi_query($connection, $sql) or die(mysqli_error($connection));
            }
    }

    if (!empty($igenylo_nev) && !empty($igenylo_telefon) && !empty($igenylo_email) && $adatvedelem == 'true') {
            $to = $igenylo_email;
            $subject = "Lakástakarékpénztár";

            $message = "";
            $message .= "<html>";
            $message .= "<head>";
            $message .= "<title>Lakástakarék</title>";
            $message .= "</head>";
            $message .= "<body>";
            $message .= "<div>";
            $message .= "<h3>A lakástakarék biztosítást igénylő adatai</h3>";
            $message .= "<p>Név: " . $igenylo_nev . "</p>";
            $message .= "<p>Telefonszám: " . $igenylo_telefon . "</p>";
            $message .= "<p>Email cím: " . $igenylo_email . "</p>";
            $message .= "<p>Dokumentum: <a href=" . $path . ">" . $dokumentum . "</a></p>";
            $message .= "<p>Köszönjük, hogy lakástakarék biztosítást igényelt tőlünk.</p>";
            $message .= "<p>Munkatársunk majd keresni fogja Önt.</p>";
            $message .= "<p>Üdvözlettel,<br><strong>Brokercash rendszer</strong></p>";
            $message .= "</div>";
            $message .= "</body>";
            $message .= "</html>";

            $headers = "";
            $headers .= "From: info@brokercash.hu\r\n";
            $headers .= "Reply-To: " . $igenylo_email . "\r\n";
            $headers .= "Cc: info@brokercash.hu\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            $mail_status = "";
            if (mail($to, $subject, $message, $headers)) {
                $mail_status .= "<p>Email sikeresen elküldve!</p>";
            } else {
                $mail_status .= "<p>Nem sikerült elküldeni az emailt.</p>";
            }
    }

    /*if (!empty($igenylo_nev) && !empty($igenylo_telefon) && !empty($igenylo_email) && $adatvedelem == 'true') {
            $webhookUrl = "https://brokercash.bitrix24.com/rest/1/l05p9qmi7fkh61w0/crm.lead.add.json";

            $data = array(
                "fields" => array(
                    "TITLE" => "Új lakástakarék biztosítás kérvény",
                    "NAME" => $igenylo_nev,
                    "PHONE" => array(
                        array("VALUE" => $igenylo_telefon, "VALUE_TYPE" => "WORK")
                    ),
                    "EMAIL" => array(
                        array("VALUE" => $igenylo_email, "VALUE_TYPE" => "WORK")
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
    if (!empty($igenylo_nev) && !empty($igenylo_telefon) && !empty($igenylo_email) && $adatvedelem == 'true') {
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

    if (!empty($igenylo_nev) && !empty($igenylo_telefon) && !empty($igenylo_email) && $adatvedelem == 'true') {
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
include_once('views/megtakaritas/lakastakarek-penztar-online-szerzodeskotes.php');
?>