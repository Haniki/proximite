<?php
    session_start();
   if (isset($_POST['inscription'])) {
       $_SESSION = $_POST['inscription'];
       if (isset($_FILES['image'])) {
           $img = __DIR__ . '/img/';
           move_uploaded_file($_FILES['image']['tmp_name'], $img . '/'. $_FILES['image']['name']);
           $_SESSION['image'] = $_FILES['image']['name'];
       }
       header('Location: /?page=home');
   }
    exit;