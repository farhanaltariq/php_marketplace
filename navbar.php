<?php
//session_start();
include_once("connection.php");
//change text if logged in or out
if (isset($_SESSION['userweb']))
    $text = "LOGOUT";
else
    $text = "LOGIN";
?>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/sidebar.css">
    <title>Marketplace</title>
    <script src="./style/sidebar.js"></script>
</head>

<body>
    <!--Navigation Bar  & Side Bar-->
    <div class="container-fluid c">
        <!-- Side Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="myaccount.php">My Account</a>
                <a href="home.php">Product</a>
                <a href="mybag.php">My Order</a>
            </div>
            <span class="stripes" style="font-size:30px; margin-left:20px; margin-right: 20px; color: white;" onclick="openNav()">&#9776;</span>
            <!-- <a href="index.php"><img src="./style/img/logo2.png" class="logo" alt="AeroStreet"></a> -->


            <!-- Navigation Bar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a style="margin-left: 50px;" class="nav-link" href="index.php">HOME</a>
                    <a style="margin-left: 50px;" class="nav-link" aria-current="page" href="home.php">PRODUCT</a>
                    <a style="margin-left: 50px;" class="nav-link" href="<?= strtolower($text) ?>.php"><?= $text ?></a>
                    <a style="margin-left: 50px;" class="nav-link" href="#" onclick=alert("This_function_is_not_available")>CONTACT</a>
                </div> 
                <a href="mybag.php"><img src="./style/img/bag.png" style="width: 25px; height: 25px; margin-top: 5px; margin-left: 50px; margin-right: 50px;"></a>
            </div>
        </nav>
    </div>
</body>

</html>