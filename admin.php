<?php
  session_start();
  include_once("navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>aerostreet - admin</title>
</head>
<body>

<?php
  include 'connection.php';
  
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
    mysqli_query($connect, "UPDATE product SET tipe = '$_POST[tipe]', harga = $_POST[harga], ukuran = $_POST[ukuran], stok = $_POST[stok] WHERE id = $_POST[id];");
  }
?>

<div class="container">
  <center><h2><b>ADMIN MODE</b></h2></center>
  <hr>
  <a href="addProduct.php"><button class="btn btn-primary">Add Product</button></a>
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
                  "<td><input type='text' value='{$row['id']}' disabled><input name='id' type='text' value='{$row['id']}' hidden></td>".
                  "<td><input name='tipe' type='text' value='{$row['tipe']}'></td>".
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
      ?>
    </table>
  </form>
  </div>
</body>
<style>
  body{
      background-color: black;
      color: white;
      text-color: white;
  }
  input{
    color: white;
      width: 80px;
      border: none;
      border-bottom: 1px dotted white;
      background-color: black;
      margin-top: 40px;
      margin-bottom: 0px;
  }
  th{
    color: white;
  }
</style>
</html>

