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
            font-size: 120px;
            font-family: Helvetica, Verdana, Arial;
        }
    </style>
    <h1>Sabar broh, belom jadi</h1>
    <div class="text-center">
        <a href="logout.php">Log Out</a>
    </div>
    </body>
</html>