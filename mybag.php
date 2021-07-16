<?php
    session_start();
    //$email = $_POST['mail'];
    include_once("connection.php");
    mv();
    include_once("navbar.php");
    $order = mysqli_query($connect, "SELECT * FROM orders, product WHERE orders.email='$_SESSION[userweb]' AND product_id=product.id GROUP BY tipe;");
?>
<style>
    body{
        background-color: black;
        color : white;
    }
</style>
<?php foreach ($order as $row) : ?>
    
    <div class="container">
        <table class="table table-dark text-center">
            <tr>
                <td><img width="150" height="200" src="<?= $row['img']?>" alt=""></td>
                <td><?= $row['email']?></td>
                <td><?= $row['tipe']?></td>
                <td><?= $row['harga']?></td>
            </tr>
        </table>
    </div>
<?php endforeach; ?>