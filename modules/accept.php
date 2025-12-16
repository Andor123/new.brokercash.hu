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

$client->setAccessToken($_SESSION['access_token']);

if ($client->isAccessTokenExpired()) {
    $client->fetchAccessTokenWithRefreshToken(
        $client->getRefreshToken()
    );
    $_SESSION['access_token'] = $client->getAccessToken();
}

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
printf('Esemény létrehozva: %s\n', $event->htmlLink);

include_once('views/calendar/accept.php');
?>