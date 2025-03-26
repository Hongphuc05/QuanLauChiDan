<?php
      //start session
      session_start();

      //create constants to store Non repeating value
      define('SITEURL','http://localhost/frontend/');
      define('LOCALHOST','localhost');
      define('DB_USERNAME','root');
      define('DB_PASSWORD','');
      define('DB_NAME','quanlauchidan');

      $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_connect_error()); //Database connection
      $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_connect_error()); // selecting database
?>
