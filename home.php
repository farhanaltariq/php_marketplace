<?php
    session_start();
    include 'connection.php';
    if(!isset($_SESSION['userweb']))
        header("location: index.php");
    include_once("navbar.php");
?>
<html>
    <head>
        <title>AeroStreet</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/productStyle.css">
    </head>
    <body>
    <div class="position-absolute start-50 top-50 translate-middle" style="border: 2px solid red;">
        <table class="table table-dark" style="width:800px;">
        <?php
            $sql = "SELECT * FROM product";
            $result = $connect->query($sql);
            $counter = 0;
            if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
            $counter++;
                echo $counter;
                if($counter%3==0)
                    echo "<tr>";
                echo "<td> <center><img src='{$row['img']}' width='200px' height='70%'> </center>$counter".
                        "<br>{$row['id']}".
                    "</td>";
                if($counter%3==0)
                    echo "</tr>";                }
            }
            mysqli_close($connect);
        ?>
        </table>
    </div>
    </body>
</html>