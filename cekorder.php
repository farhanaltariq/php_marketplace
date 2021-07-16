<?php
    session_start();
    //$email = $_POST['mail'];
    include_once("connection.php");
    include_once("navbar.php");
    $order = mysqli_query($connect, "SELECT * FROM orders, product, user WHERE product.id=orders.product_id AND user.email=orders.email;");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
    body{
        background-color: black;
        color : white;
    }
    table{
       background: white;
    }
</style>
    <div class="container">
    <div>
        <h3 class="text-center">Daftar Pesanan</h3>
        <table class="table text-center">
            <th>
                <!-- <td></td> -->
                <td>Email</td>
                <td>Product Name</td>
                <td>Tipe</td>
                <td>Buyer</td>
                <td>Address</td>
                <td colspan=3>Aksi</td>
            </th>
        <?php foreach ($order as $row) : ?>
            <tr>
                <td><img width="150" height="200" src="<?= $row['img']?>" alt=""></td>
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