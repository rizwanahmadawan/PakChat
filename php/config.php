<?php
  //Development Purpose
  /*$hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";*/

   
 $hostname = "remotemysql.com";
  $username = "b160wlRLDe";
  $password = "NVepohH46D";
  $dbname = "b160wlRLDe";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
