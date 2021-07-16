<?php
    require 'connection.php';
    //get user data from database
    $produk = mysqli_query($connect, "SELECT * FROM user");
?>
<div class="card" style="align-text: center">
<h4>Name</h4>
email : birthdate : profession : gender : addres : instagram : phone
</div>
<?php foreach ($produk as $row) : ?>
    <div class="card" style="align-text: center">
    <form action="" method="POST">
            <h4><b><?= $row["name"]; ?></b></h4>
            <?= $row["email"]; ?> :
            <?= $row["birthdate"]; ?> :
            <?= $row["profession"]; ?> :
            <?= $row["gender"]; ?> :
            <?= $row["address"]; ?> :
            <?= $row["instagram"]; ?> :
            <?= $row["phone"]; ?>
        </div>
        </form>
<?php endforeach; ?>