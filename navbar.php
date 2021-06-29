<?php
//session_start();
include 'connection.php';
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

    <script src="./style/sidebar.js"></script>
</head>

<body>
    <!--Navigation Bar  & Side Bar-->
    <div class="container-fluid">
        <!-- Side Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">My Account</a>
                <a href="#">Product</a>
                <a href="#">My Bag</a>
                <a href="#">My Order</a>
            </div>
            <span class="stripes" style="font-size:30px; margin-left:20px; margin-right: 20px; color: white;" onclick="openNav()">&#9776;</span>
            <a href="index.php"><img src="./style/img/logo2.png" class="logo" alt="AeroStreet"></a>


            <!-- Navigation Bar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a style="margin-left: 50px;" class="nav-link" href="index.php">HOME</a>
                    <a style="margin-left: 50px;" class="nav-link" aria-current="page" href="home.php">PRODUCT</a>
                    <a style="margin-left: 50px;" class="nav-link" href="<?= strtolower($text) ?>.php"><?= $text ?></a>
                    <a style="margin-left: 50px;" class="nav-link" href="https://api.whatsapp.com/send?phone=6281230447023&text=Hai%20Farhan,%20kamu%20sangat%20tampan.">CONTACT</a>
                </div>
                <img src="./style/img/bag.png" style="width: 25px; height: 25px; margin-top: 5px; margin-left: 50px; margin-right: 50px;">
            </div>
        </nav>
    </div>
</body>

</html>