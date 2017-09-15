<?php
session_start();
include('data.php');

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'register';

if($page === 'signup') {
    include($page.'.php');
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Pro'ximite</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <?php include('header.php') ?>
    <div class="container">


      <?php include($page.'.php') ?>

    </div> <!-- /container -->

    <?php include('footer.php') ?>
  </body>
</html>
