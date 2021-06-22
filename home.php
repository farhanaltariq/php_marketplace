<?php
    session_start();
    include 'connection.php';
    if(!isset($_SESSION['userweb']))
        header("location:index.php");
?>
<html>
    <head>
        <title>Hehe</title>
    </head>
    <body>
    <style type="text/css">
        h1 {
            text-align: center;
            font-size: 90px;
            font-family: Helvetica, Verdana, Arial;
        }
    </style>
    <h1>Sabar broh, belom jadi</h1>
    <h1><a href="index.php">Home</a></h1>
    <h1><a href="logout.php">Log Out</a></h1>
    </body>
</html>