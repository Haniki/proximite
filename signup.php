<?php
    session_start();
   if (isset($_POST['inscription'])) {
       $usr = $_POST['inscription'];
       if (isset($_FILES['image'])) {
           $img = __DIR__ . '/img/';
           move_uploaded_file($_FILES['image']['tmp_name'], $img . '/'. $_FILES['image']['name']);
           $usr['avatar'] = 'img/' . $_FILES['image']['name'];
       }

       $usrId = count($_SESSION['data']['users']) + 1;
       $usr['id'] = $usrId;
       $_SESSION['current_user'] = $usr;
       $_SESSION['data']['users'][$usrId] = $usr;
       header('Location: /?page=home');
   }
    exit;