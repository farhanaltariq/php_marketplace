<?php
$DB_Location = "localhost";
$DB_Username = "root";
$DB_Password = "";
$DB_DBName = "aerostreet";
$connect = mysqli_connect($DB_Location,$DB_Username,$DB_Password,$DB_DBName);
if (!$connect)
  echo "Connection Failed";

//restrict user to show admin page
function mv() : void{
  if(!isset($_SESSION['userweb'])){
        echo "<script>".
                "alert('You Must Log In First');" .
                "window.location.replace('index.php');" .
              "</script>";
  }
  if($_SESSION['status']!="user"){
    echo "<script>".
            "alert('Admin Can\'t Use This Page');" .
            "window.location.replace('admin.php');" .
          "</script>";
  }
  
}
?>
