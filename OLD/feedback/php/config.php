<?php
  $hostname = " sql205.epizy.com";
  $username = " epiz_29628914";
  $password = "1IsIZmYxDbtms9N";
  $dbname = "epiz_29628914_feedback";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
