<?php
  require 'flight/Flight.php';
  Flight::route('*', function(){
    Flight::render('hello.php');
  });
  Flight::start();
  ?>
