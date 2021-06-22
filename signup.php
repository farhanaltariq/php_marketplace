<?php
    session_start();
    include "connection.php";
    include_once("navbar.php");
?>
<!DOCTYPE html>
<html>
<head><title>AeroStreet</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="./style/signupStyle.css">
</head>
<body style="color: black;">   
    <div class="loginradius container position-absolute top-50 start-50 translate-middle">
        <div class="container-fuid signupform" style="box-sizing: border-box;">
            <div class="text-start" style="margin-top: 30px; margin-left: 20px;"><b>Create Your Account !</b></div>
            <form method="post" action="adduser.php">
                <div class="left-form mb-3">
                    <input name="email" placeholder="Email" type="email" class="form-control field" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <input name="password" placeholder="Password" type="password" class="form-control field" id="exampleInputPassword1">
                    <input name="name" placeholder="Name" type="text" class="form-control field" id="exampleInputEmail1">
                    <input name="birthday" placeholder="Birthday" type="date" class="form-control field" id="exampleInputEmail1">
                </div>
                <div class="right-form mb-3">
                    <input name="re-password" placeholder="Re-Type Password" type="password" class="form-control field" id="exampleInputPassword1">
                    <select id="cars" name="cars" class="form-control field">
                        <option value="" disabled selected>Gender</option>
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                    </select>
                    <input name="profession" placeholder="Profession" type="text" class="form-control field" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <input name="address" placeholder="Address" type="text" class="form-control field" id="exampleInputEmail1">
                </div>
                <div>
                    Confirmation
                </div>
                <div class="left-form mb-3">
                    <input name="instagram" placeholder="Instagram" type="text" class="form-control field" id="exampleInputEmail1" >
                </div>
                <div class="right-form mb-3" style="margin-top: 0px;">
                    <input name="phone" placeholder="Phone" type="number" class="form-control field" id="exampleInputPassword1">
                </div>
                <div class>
                    <br><br><br>
                    <input name="agreement" type="checkbox"> 
                    <label for="agreement">License Agreement</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
