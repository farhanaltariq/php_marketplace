<?php
    session_start();
    include_once("connection.php");
    mv();
    // Get Data
    $order = mysqli_query($connect, "SELECT * FROM orders, product WHERE orders.email='$_SESSION[userweb]' AND product_id=product.id GROUP BY tipe;");
    if(isset($_POST['delete'])){
        $qry = "DELETE FROM orders WHERE id_order=$_POST[idOrder];";
        mysqli_query($connect, $qry);
        unset($_POST['delete']);
        header("location:mybag.php");    
    }
?>
<div style="height: 70px; background: black;"><?=include_once("navbar.php");?></div>
<style>
    body{
        background-color: lightgrey;
        color : black;
    }
    td{
        border-bottom: 1.5px solid black;
    }
</style>

<?php 
    $total = 0;
    //count total price
    foreach ($order as $row) : 
    $total += $row['harga'];    
    endforeach;
    //convert data as array
    $row = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM user WHERE email = '$_SESSION[userweb]';"));
?>

<div class="container" style="margin-top: 40px; box-sizing: border-box;">
    <div class="sticky-top text-center" style="float: right; width: 370px; height: 400px; background: white; border-radius: 10px;">
    <div style="padding: 50px; box-sizing: border-box;">
        <!-- Right Panel -->
        <table class="table">
            <tr>
                <td colspan=2 class="rounded">
                    Send To : <a href="myaccount.php" style="color: orange; text-decoration: none;">My Address</a><br>
                    <input class="input" type="textarea" value="<?=$row['address'];?>" style="border: 0.3px dotted gray; border-radius: 10px; height: 70px; width: 270px;">
                </td>
            </tr>
            <tr>
                <td style="border: none;"><b>Subtotal</b></td>
                <td style="border: none;">IDR <?=$total?></td>
                <tr>
                    <td><b>Discount</b></td>
                    <td><b>-</b></td>
                </tr>
            </tr>
            <tr>
                <td><b>Total</b></td>
                <td>IDR <?=$total?></td>
            </tr>
        </table>
        <button class="btn btn-lg btn-success" style="width: 200px;"><b>B u y</b></button>
    </div>
    </div>
    <?php
        if(mysqli_num_rows($order)==0){
            echo "<div class='text-center'><h3>Your Bag is Currently Empty</h3></div>";
        }
    ?>
    <!-- Show The Orders Data -->
    <?php foreach ($order as $row) : ?>
        <div class="position-start" style="width: 890px; background: white; border-radius: 10px; height: 190px; box-sizing: border-box; padding-left: 90px; margin-top: 33px;">
            <img width="150" height="150" src="<?= $row['img']?>" alt="img" style="float: left; margin-right: 40px; margin-top: 11px;">
            <br><h4><?= $row['tipe']?></h4>
            Color: Same as in the picture<br>
            Size : <?= $row['ukuran'];?> <br>
            <b style="font-size: 24px;">IDR <?= $row['harga'];?></b>
            <div class="text-end" style="margin-right: 40px;">
                <form action="" method="POST">
                    <input type="number" name="idOrder" value="<?=$row['id_order']?>" hidden>
                    <button name="delete" class="button">&#128465;</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
    
</div>