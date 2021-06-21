<?php
    include_once("connection.php");
?>
<!DOCTYPE html>
<html>
<head><title>AeroStreet Login</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="./style/homeStyle.css">
</head>
<body>
   <!-- Navigation Bar -->
   <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <img src="./style/img/logo2.png" class="logo" alt="AeroStreet">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarTogglerDemo02">
                <div class="navbar-nav ml-auto">
                    <a style="margin-left: 50px;" class="nav-link active"  href="index.php">HOME</a>
                    <a style="margin-left: 50px;" class="nav-link" aria-current="page" href="home.php">PRODUCT</a>
                    <a style="margin-left: 50px;" class="nav-link" href="login.php">LOGIN</a>
                    <a style="margin-left: 50px;" class="nav-link" href="https://api.whatsapp.com/send?phone=6281230447023&text=Hai%20Farhan,%20kamu%20sangat%20tampan.">CONTACT</a>
                </div>
                <img src="./style/img/bag.png" style="width: 25px; height: 25px; margin-top: 5px; margin-left: 50px; margin-right: 50px;">
            </div>
        </div>
    </nav>
    </nav>
    <div class="container position-absolute top-50 start-50 translate-middle text-center">
        <div class="jumbotron">
            <img src="./style/img/logo1.png" alt="" class="brand">
            <br>
            <a class="btn btn-lg" href="login.php" role="button"><b>SHOP NOW</b></a>
        </div>
        </div>
    </div>
</body>
</html>