<?php
$DB_Location = "localhost";
$DB_Username = "root";
$DB_Password = "";
$DB_DBName = "aerostreet";
$connect = mysqli_connect($DB_Location,$DB_Username,$DB_Password,$DB_DBName);
if (!$connect)
  echo "Connection Failed";

function mv() : void{
  if(!isset($_SESSION['userweb']))
        echo "<script>".
                "alert('You Must Log In First');" .
                "window.location.replace('index.php');" .
              "</script>";
}
?>
