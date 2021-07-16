<?php
  session_start();
  include_once("navbar.php");
  if($_SESSION['status']!="admin")
    header("location:home.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>aerostreet - admin</title>
  <style>
    .c{
      background-color: black;
    }
  </style>
</head>
<body>

<?php
  include_once("connection.php");
  
  if(!isset($_SESSION['userweb']))
      header("location: index.php");
  
  if(isset($_POST['delete'])){
    mysqli_query($connect, "DELETE FROM product WHERE id=$_POST[id];");
  }

  if(isset($_POST["update"])){
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
  
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["img"]["name"];    // get the image name in $fnm variable
    $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["img"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
    $qry = "UPDATE product SET tipe = '$_POST[tipe]', harga = $_POST[harga], ukuran = $_POST[ukuran], stok = $_POST[stok], img = '$dst_db' WHERE id = $_POST[id];";
    mysqli_query($connect, $qry);
  }
?>

<div class="container">
  <center><h2><b>ADMIN MODE</b></h2></center>
  <hr>
  <a href="addProduct.php"><button class="btn btn-primary">Add Product</button></a>
  <a href="cekorder.php">See Orders</a>
  <form method="post" enctype="multipart/form-data">
    <table class="table text-center">
      <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Price</th>
        <th>Size</th>
        <th>Stock</th>
        <th>Image</th>
        <th colspan=2>Action</th>
      </tr>
      
      <?php
        $sql = "SELECT * FROM product";
        $result = $connect->query($sql);
        if($result->num_rows>0){
          while ($row = $result->fetch_assoc()){
            //field for update
            echo "<tr><form method='POST'>".
                  "<td><input type='text' value='{$row['id']}' disabled><input name='id' type='text' value='{$row['id']}' hidden></td>".
                  "<td><input name='tipe' type='text' value='{$row['tipe']}'></td>".
                  "<td><input name='harga' type='text' value='{$row['harga']}'</td>".
                  "<td><input name='ukuran' type='text' value='{$row['ukuran']}'</td>".
                  "<td><input name='stok' type='text' value='{$row['stok']}'</td>".
                  "<td><center><img src='{$row['img']}' width='70px' height='70px'><br>".
                  "<input name='img' type='file' value='{$row['img']}' style='margin-top:0px;'></center></td>".
                  "<td><button class='btn btn-warning' type='submit' name='update'>Update</td>".
                  "</form>";
            
            //field for delete
            echo "<form method='POST'><td><input name='id' type='text' value={$row['id']} hidden><button class='btn btn-danger' type='submit' name='delete'>Delete</button>".
            "</form></tr>";
          }
        }
      ?>
    </table>
  </form>
  </div>
</body>
<style>
  body{
      background-color: white;
      color: black;
  }
  input{
    color: black;
      width: 80px;
      border: none;
      border-bottom: 1px dotted black;
      background-color: white;
      margin-top: 40px;
      margin-bottom: 0px;
  }
  th{
    color: black;
  }
</style>
</html>

