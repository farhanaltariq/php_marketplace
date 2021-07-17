<?php
    session_start();
    require 'connection.php';
    // if looged in as admin, redirect to admin page
    if($_SESSION['status']=="admin")
        header("location:admin.php");
    
    // get data
    $produk = mysqli_query($connect, "SELECT * FROM product");
    // if not logged in, redirect to index page
    if (!isset($_SESSION['userweb']))
        header("location: index.php");

    // save email data that can be used later
    $email = $_SESSION['userweb'];
    //call navigation bar
    include_once("navbar.php");
    //insert data to database
    if(isset($_POST['addtocart'])){
        $msg = "Successfully Added to Cart";
        $query = "INSERT INTO orders (email, product_id) VALUES ('$email', $_POST[product_id]);";
        echo "<script>alert('$msg')</script>";
        mysqli_query($connect, $query);
        unset($_POST['addtocart']);
    }
?>
<html>

<head>
    <title>AeroStreet</title>
    <link rel="stylesheet" href="./style/productStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            margin-right: 30px;
            margin-top: 60px;
            color: black;
        }
        table tr{
            border-bottom: hidden;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($produk as $row) : ?>
                <div class="card" style="width: 18rem;">
                <form action="" method="POST">
                    <img width="150" height="200" src="<?= $row['img'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-center"><b><?= $row["tipe"]; ?></b></h4>
                        <table class="table table-light text-start">
                        <tr><p><td>IDR</td> <td><?= $row["harga"]; ?></td></p></tr>
                        <tr><p><td>Size</td> <td><?= $row["ukuran"]; ?></td></p></tr>
                        <!-- <tr><p><td>Stock</td> <td><?= $row["stok"]; ?></td></p></tr> -->
                        </table>
                        <div style="text-align: right; font-size: 24px;">
                        <input type="mail" name="mail" value="<?=$email;?>" hidden>
                        <input type="number" name="product_id" value ="<?= $row['id']?>" hidden>
                        <button type='submit' name='addtocart' class="btn btn-sm btn-warning">Add to cart <b>&plus;</a></b></button>
                        </div>
                    </div>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>