<?php
session_start();

$creator = $_GET['creator'];
$event_id = $_GET['event'];
$in = $_GET['in'];

if ($in == 0 && !in_array($creator, $_SESSION['data']['events'][$event_id]['participants'])) {
    $_SESSION['data']['events'][$event_id]['participants'][] = $creator;
} else {
    $key = array_search($creator, $_SESSION['data']['events'][$event_id]['participants']);
    unset($_SESSION['data']['events'][$event_id]['participants'][$key]);
}