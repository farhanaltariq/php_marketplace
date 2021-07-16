<?php 
    session_start();
    setcookie('username', '', time()-3600);
    unset($_COOKIE);
    session_destroy();
    header("location:index.php") 
?>