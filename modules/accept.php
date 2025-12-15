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

$event = new Google_Service_Calendar_Event(array(
    'summary' => 'Brokercash Online Konzultáció',
    'location' => 'Google Meet',
    'description' => 'Ez a Brokercash online konzultációja',
    'start' => array(
        'dateTime' => $startDate,
        'timeZone' => 'Europe/Budapest'
    ),
    'end' => array(
        'dateTime' => $endDate,
        'timeZone' => 'Europe/Budapest'
    ),
    'conferenceData' => array(
        'createRequest' => array(
            'requestId' => uniqid(),
            'conferenceSolutionKey' => array(
                'type' => 'hangoutsMeet'
            )
        )
    )
));

$calendarId = 'primary';
//$event = $calendar->events->insert($calendarId, $event, ['conferenceDataVersion' => 1]);

include_once('views/calendar/accept.php');
?>