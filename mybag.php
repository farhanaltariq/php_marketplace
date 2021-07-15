<?php
    session_start();
    //$email = $_POST['mail'];
    include_once("connection.php");
    include_once("navbar.php");
    $order = mysqli_query($connect, "SELECT * FROM orders, product WHERE orders.email='$_COOKIE[username]' GROUP BY tipe;");
?>
<style>
    body{
        background-color: black;
        color : white;
    }
</style>
<?php foreach ($order as $row) : ?>
    
    <div class="text-center">
        <img width="150" height="200" src="<?= $row['img']?>" alt="">
        <?= $row['email']?> : 
        <?= $row['tipe']?> : 
        <?= $row['harga']?>
    </div>
<?php endforeach; ?>