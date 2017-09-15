<?php
$users = array(
    1 => array(
        'id' => 1
    )
);

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



//<div class="form-group" style="margin-top:10px;">
//        <select class="form-control" name="inscription[poste]">
//            <optgroup label="Administration">
//            <option value="9">Directeur général</option>
//            <option value="4">Comptable</option>
//            <option value="5">Assistant de direction</option>
//            <option value="7">Direction administrative</option>
//            <option value="10">Responsable RH</option>
//            <optgroup label="Editorial">
//            <option value="8">Rédacteur web</option>
//            <optgroup label="Gestion / management">
//            <option value="6">Chef de produit</option>
//            <option value="2">Chef de projet</option>
//            <option value="2">QA</option>
//            <optgroup label="Technique">
//            <option value="1">Développeur web</option>
//            <option value="3">Intégrateur web </option>
//                <optgroup label="Juridique">
//            <option value="1">Juriste</option>
//            <option value="3">Avocat</option>
//        </select>
//    </div>