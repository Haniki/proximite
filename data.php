<?php
$users = array(
    1 => array(
        'id' => 1,
        'prenom' => 'Sara',
        'nom' => 'Coet',
        'ville' => 'Paris',
        'business' => 1,
        'avatar' => 'img/sara.png',
    )
);

$eventTypes = array(
    1 => 'After-Work',
    2 => 'Parc',
    3 => 'Déjeuner',
    4 => 'Autre',
);

$eventBusiness = array(
    1 => 'Métiers du web',
    2 => 'Graphisme',
    3 => 'Journalisme',
    4 => 'Marketing',
    5 => 'Finance',
    6 => 'Start-ups',
    7 => 'Avocats',
    8 => 'Communication',
);

$events = array(
    1 => array(
        'name' => 'Afterwork Escale Tech',
        'address' => '12 rue de penthièvre 75008 Paris',
        'phone' => '01 02 03 04 05',
        'type' => $eventTypes[1],
        'business' => $eventBusiness[1],
        'avatar_owner' => 'sara.png',
        'where' => 'L\'Escale',
        'date' => '16/02/2018',
        'hour' => '19:00',
        'participants' => array(
            1
        ),
        'creator' => 1,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras est purus, tempor vitae quam eu, euismod sodales leo. Duis convallis,
       odio eu lacinia commodo, nulla risus egestas dolor, nec venenatis nulla orci in ipsum. Duis a auctor nulla, id gravida dui. Aliquam hendrerit vel nulla nec rutrum.
        Ut tristique auctor elit et venenatis. Etiam venenatis ultrices leo, sed rutrum ipsum dignissim quis. Etiam auctor odio mi, non rutrum sem dictum et.'
    )
);

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array(
        'users' => $users,
        'events' => $events,
    );
}