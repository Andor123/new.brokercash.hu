<?php
$contact = $_SESSION['contact'];
$selected = $_SESSION['selected'];
$appointment = $_SESSION['appointment'];

$sql = "UPDATE idopontkeres SET approved='yes' WHERE selected='$selected' AND appointment='$appointment'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

$datetime = new DateTime($selected . $appointment);
$startDate = $datetime->format(DateTime::ATOM);

$addedtime = $datetime->add(new DateInterval('PT60M'));
$endDate = $addedtime->format(DateTime::ATOM);

$calendar = new Google_Service_Calendar($client);
$calendarId = 'primary';
$event = new Google_Service_Calendar_Event([
    'summary' => 'Brokercash Online Konzultáció',
    'location' => 'Google Meet',
    'description' => 'Ez a Brokercash online konzultációja',
    'start' => [
        'dateTime' => $startDate,
        'timeZone' => 'Europe/Budapest'
    ],
    'end' => [
        'dateTime' => $endDate,
        'timeZone' => 'Europe/Budapest'
    ],
    'conferenceData' => [
        'createRequest' => [
            'requestId' => uniqid(),
            'conferenceSolutionKey' => [
                'type' => 'hangoutsMeet'
            ]
        ]
    ]
]);

$event = $calendar->events->insert($calendarId, $event, ['conferenceDataVersion' => 1]);
$link = $event->getHangoutLink();

$to = $contact;
$subject = "Elfogadott időpontkérés";

$message = "";
$message .= "<html>";
$message .= "<head>";
$message .= "<title>Elfogadott időpontkérés</title>";
$message .= "</head>";
$message .= "<body>";
$message .= "<div>";
$message .= "<p>Örömmel értesítjük, hogy időpontkérése elfogadásra került.</p>";
$message .= "<p>Az alábbi linken keresztül elérheti a konzultáció szobát:</p>";
$message .= "<p><a href=" . $link . ">" . $link . "</a></p>";
$message .= "<p>Üdvözlettel,<br><strong>Brokercash rendszer</strong></p>";
$message .= "</div>";
$message .= "</body>";
$message .= "</html>";

$headers = "";
$headers .= "From: info@brokercash.hu\r\n";
$headers .= "Reply-To: " . $contact . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$mail_status = "";
if (mail($to, $subject, $message, $headers)) {
    $mail_status .= "<p>Email sikeresen elküldve!</p>";
} else {
    $mail_status .= "<p>Nem sikerült elküldeni az emailt.</p>";
}

include_once('views/calendar/accept.php');
?>