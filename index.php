<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
    session_start();
    include_once("connection.php");
    //call navbar
    include_once("navbar.php");
?>
<!DOCTYPE html>
<html>
<head><title>AeroStreet</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="./style/indexStyle.css">
</head>
<body>
    <!--BUTTON-->
    <div class="container position-absolute top-50 start-50 translate-middle text-center">
        <div class="jumbotron">
            <img src="./style/img/pink.jpg" alt="" class="brand">
            <br>
            <a class="btn btn-lg" href="login.php" role="button"><b>SHOP NOW</b></a>
        </div>
        </div>
    </div>
</body>
</html>