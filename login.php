<?php
    include_once("connection.php");
?>
<!DOCTYPE html>
<html>
<head><title>AeroStreet Login</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="./style/loginStyle.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <img src="./style/img/logo2.png" class="logo" alt="AeroStreet">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto" id="navbarTogglerDemo02">
            <div class="navbar-nav ml-auto">
                <a style="margin-left: 50px;" class="nav-link"  href="index.php">HOME</a>
                <a style="margin-left: 50px;" class="nav-link" aria-current="page" href="home.php">PRODUCT</a>
                <a style="margin-left: 50px;" class="nav-link active" href="login.php">LOGIN</a>
                <a style="margin-left: 50px;" class="nav-link" href="home.php"">CONTACT</a>
            </div>
            <img src="./style/img/bag.png" style="width: 25px; height: 25px; margin-top: 5px; margin-left: 50px; margin-right: 50px;">
        </div>
    </div>
    </nav>
    <div class="loginradius container position-absolute top-50 start-50 translate-middle">
        <div class="loginlogo position-absolute top-0 start-0 text-center"">
        </div>
        <div class="loginform">
            <div class="text-left" style="margin-bottom: 50px;"><b>Login Here !</b></div>
            <form action="home.php" method="post">
                <div class="mb-3">
                    <input placeholder="Email" type="email" class="form-control field rounded" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input placeholder="Password" type="password" class="form-control field" id="exampleInputPassword1">
                </div>
                <a class="hover" href="hehe.php">Forgot your password ?</a><button style="margin-left: 100px" type="submit" class="btn btn-light">Submit</button>
            </form>
        </div>
        <div class="loginform" id="forgot">
            Don't have an account ? create your account <a style="color:orange;" href="home.php">here</a>
        </div>
    </div>
</body>
</html>