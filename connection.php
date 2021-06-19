<?php
$DB_Location = "localhost";
$DB_Username = "root";
$DB_Password = "";
$DB_DBName = "aerostreet";
$connect = mysqli_connect($DB_Location,$DB_Username,$DB_Password,$DB_DBName);
if (!$connect)
  echo "Connection Failed";
?>
