<?php 
    //delete session data and redirect to welcome page
    session_start();
    session_destroy();
    header("location:index.php") 
?>