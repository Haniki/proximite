<?php
$users = array();

$eventTypes = array(
    1 => 'After-Work',
    2 => 'Parc',
    3 => 'Déjeuner',
    4 => 'Autre',
);

$eventBusiness = array(
    1 => 'Développeurs',
    2 => 'Intégrateurs',
    3 => 'Graphistes',
);

$events = array(
    array(
        'name' => 'Afterwork Escale Tech',
        'address' => '12 rue de penthièvre 75008 Paris',
        'phone' => '01 02 03 04 05',
        'type' => $eventTypes[1],
        'business' => $eventBusiness[1],
        'avatar_owner' => 'sara.png',
        'where' => 'L\'Escale',
        'date' => '16/02/2018',
        'hour' => '19:00',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras est purus, tempor vitae quam eu, euismod sodales leo. Duis convallis,
       odio eu lacinia commodo, nulla risus egestas dolor, nec venenatis nulla orci in ipsum. Duis a auctor nulla, id gravida dui. Aliquam hendrerit vel nulla nec rutrum.
        Ut tristique auctor elit et venenatis. Etiam venenatis ultrices leo, sed rutrum ipsum dignissim quis. Etiam auctor odio mi, non rutrum sem dictum et.'
    )
);