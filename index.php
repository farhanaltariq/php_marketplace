<?php
    include_once("connection.php");
?>
<!DOCTYPE html>
<html>
<head><title>AeroStreet Login</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./style/test.png" class="logo" alt="TEST"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
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
                    <input placeholder="Email" type="email" class="form-control field" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input placeholder="Password" type="password" class="form-control field" id="exampleInputPassword1">
                </div>
                <a href="hehe.php">Forgot your password ?</a><button style="margin-left: 15px" type="submit" class="btn btn-light">Submit</button>
            </form>
        </div>
        <div class="loginform">
            Don't have an account ? create your account <a style="color:orange" href="home.php">here</a>
        </div>
    </div>
</body>
</html>