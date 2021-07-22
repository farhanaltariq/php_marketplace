<?php
    session_start();
    include_once("connection.php");
    //get data
    $order = mysqli_query($connect, "SELECT * FROM orders, product, user WHERE product.id=orders.product_id AND user.email=orders.email;");
    if(isset($_POST['complete'])){
        mysqli_query($connect, "DELETE FROM orders WHERE id_order=$_POST[idOrder];");
        header("location:cekorder.php");
    }
        
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
                <th colspan=3>Action</th>
            </tr>
        <?php
            function checkPayment($email){
                // Deklarasi ulang koneksi karena fungsi connect tidak bisa dipanggil
                $DB_Location = "localhost";
                $DB_Username = "root";
                $DB_Password = "";
                $DB_DBName = "aerostreet";
                $connection = mysqli_connect($DB_Location,$DB_Username,$DB_Password,$DB_DBName);
                $db = mysqli_query($connection, "SELECT * FROM payment WHERE email='$email';");
                $result = mysqli_fetch_assoc($db);
                if($result!=null)
                    return $result['payment_img'];
                else
                    return "errorHandle.html";
            }
        ?>
        <?php foreach ($order as $row) : ?>
            <tr>
                <td><img width="150" height="150" src="<?= $row['img']?>" alt=""></td>
                <td><?= $row['email']?></td>
                <td><?= $row['tipe']?> </td> 
                <td><?= $row['uname']?> </td> 
                <td><?= $row['harga']?></td>
                <td><?= $row['address']?></td>
                <td><a href="<?=checkPayment($row['email']);?>">See Proof of Payment</a></td>
                <form action="" method="POST">
                    <input type="number" hidden name="idOrder" value="<?= $row['id_order']; ?>">
                    <td><button name="complete" class="btn btn-md btn-primary">Mark as Done</button></td>
                </form>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
</div>