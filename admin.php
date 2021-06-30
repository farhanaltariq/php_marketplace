<?=include_once("navbar.php");?>

<!DOCTYPE html>
<html>
<head>
  <title>Insert image in MySQL database in PHP</title>
  <link rel="stylesheet" href="./style/adminStyle.css">
</head>
<body>

<?php
  include 'connection.php';
  session_start();
  // $qry = mysqli_query($connect, "SELECT * FROM admin WHERE email = '$_POST[email]' AND password = md5('$_POST[password]')");
  // $check = mysqli_num_rows($qry);
  // //redirect if inputted valid data
  // if(!$check)
  //   header('location:home.php');
  if(!isset($_SESSION['userweb']))
      header("location: index.php");
  
  if(isset($_POST['delete'])){
    mysqli_query($connect, "DELETE FROM product WHERE id=$_POST[id];");
  }

  if(isset($_POST["update"])){
    echo $_POST['id'];
    mysqli_query($connect, "UPDATE product SET tipe = '$_POST[tipe]', harga = $_POST[harga], ukuran = $_POST[ukuran], stok = $_POST[stok];");
  }
?>

<div class="container">
  <center><h2><b>ADMIN MODE</b></h2></center>
  <hr>
  <a href="addPrdoduct.php"><button class="btn btn-primary">Add Product</button></a>
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
            echo "<form method='POST'><tr>".
                  "<td><input name='id' type='text' value='{$row['id']}' disabled></td>".
                  "<td><input name='tipe' type='text' value='{$row['tipe']}'</td>".
                  "<td><input name='harga' type='text' value='{$row['harga']}'</td>".
                  "<td><input name='ukuran' type='text' value='{$row['ukuran']}'</td>".
                  "<td><input name='stok' type='text' value='{$row['stok']}'</td>".
                  "<td><center><img src='{$row['img']}' width='70px' height='70px'><br>".
                  "<input name='image' type='file' value='{$row['img']}' style='margin-top:0px;'></center></td>".
                  "<td><button class='btn btn-warning' type='submit' name='update'>Update</td>".
                  "</form>";
            
            //field for delete
            echo "<form method='POST'><td><input name='id' type='text' value={$row['id']} hidden><button class='btn btn-danger' type='submit' name='delete'>Delete</button>".
            "</tr></form>";
          }
        }
        mysqli_close($connect);
      ?>
    </table>
  </form>
  </div>
</body>
</html>

