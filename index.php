<?php
  // Entry point for the api calls
  include 'add.php';
  include 'subtract.php';
  include 'divide.php';
  include 'multiply.php';

  echo add(subtract(50, 30), 5);
?>