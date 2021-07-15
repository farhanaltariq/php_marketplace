<?php
    include_once("connection.php");
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $name       = $_POST['name'];
    $birthdate  = $_POST['birthdate'];
    $gender     = $_POST['gender'];
    $profession = $_POST['profession'];
    $address    = $_POST['address'];
    $instagram  = $_POST['instagram'];
    $phone      = $_POST['phone'];

    echo "$email<br>$password<br>$name<br>$birthdate<br>$gender<br>$profession<br>$address<br>$instagram<br>$phone";
    $qry = "INSERT INTO user (email, password, name, birthdate, gender, profession, address, instagram, phone)".
            "VALUES ('$email', md5('$password'), '$name', '$birthdate', '$gender', '$profession', '$address', '$instagram', '$phone');";
    $sql = mysqli_query($connect, $qry);
    if($sql)
        header("location:home.php");
    else
        echo "<br>RAKENEK";
?>