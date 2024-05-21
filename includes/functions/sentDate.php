<?php

function formatDate($messageDate)
{
    $currentDate = new DateTime();
    $messageDateTime = new DateTime($messageDate);

    if ($messageDateTime->format('Y-m-d') == $currentDate->format('Y-m-d')) {
        return $messageDateTime->format('H:i');
    } else {
        return $messageDateTime->format('d/m H:i');
    }
}
