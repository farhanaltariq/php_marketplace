<?php
    session_start();
    //$email = $_POST['mail'];
    include_once("connection.php");
    $order = mysqli_query($connect, "SELECT * FROM orders, product, user WHERE product.id=orders.product_id AND user.email=orders.email;");
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <div style="background: black; box-sizing: border-box; height: 70px;">
        <?=include_once("navbar.php");?>
    </div>
<style>
    body{
        background-color: lightgrey;
        color : black;
    }
    table{
       background: white;
       border-radius: 10px;
    }
    th{
        background: black;
        color: orangered;
    }
</style>
    <div class="container">
    <div>
        <h3 class="text-center"><b>Order Lists</b></h3>
        <table class="table text-center">
            <tr>
                <th></th>
                <th>Email</th>
                <th>Product Name</th>
                <th>Tipe</th>
                <th>Buyer</th>
                <th>Address</th>
                <th colspan=3>Aksi</th>
            </tr>
        <?php foreach ($order as $row) : ?>
            <tr>
                <td><img width="150" height="150" src="<?= $row['img']?>" alt=""></td>
                <td><?= $row['email']?></td>
                <td><?= $row['tipe']?> </td> 
                <td><?= $row['uname']?> </td> 
                <td><?= $row['harga']?></td>
                <td><?= $row['address']?></td>
                <td><a href="<?=$row['img']?>">Lihat Bukti Bayar</a></td>
                <td><button class="btn btn-md btn-primary">Tandai Selesai</button></td>
                <td><button class="btn btn-md btn-danger">Hapus Pesanan</button></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
</div>