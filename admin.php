<?php
  session_start();
  echo "<div class='container-fluid' style='background-color: black;'";
  include_once("navbar.php");
  echo "</div>";
  include_once('connection.php');
  if(!isset($_SESSION['userweb']))
    header("location:index.php");
  else
    if($_SESSION['status']!="admin")
      header("location:index.php");
  if (isset($_POST['del'])){
    $sql = mysqli_query($connect, "DELETE FROM product WHERE id=$_POST[id];");
    if($sql)
      header("location: admin.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <div class="container text-center">
    <button class="btn btn-primary"><a style="color: white;" href="addProduct.php">Add Item</a></button>
    <button class="btn btn-primary"><a style="color: white;" href="cekOrder.php">See Order(s)</a></button>
    </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">Size</th>
      <th scope="col">Stock</th>
      <th scope="col" colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $sql = "SELECT * FROM product";
        $result = $connect->query($sql);
        $counter = 0;
        if($result->num_rows>0){
         while ($row = $result->fetch_assoc()){
           $counter++;
           echo "<tr>" .
                "<th scope='row'> $counter </th>" .
                "<td> {$row['tipe']} </td>" .
                "<td> {$row['harga']} </td>" .
                "<td> {$row['ukuran']} </td>" .
                "<td> {$row['stok']} </td>" .
                "<td><img src='{$row['img']}' width=70px height=70px></td>" .

                "<form action='update.php' method='post'>" .
                "<input name='id' value={$row['id']} hidden>".
                "<td><button type='submit' class='btn btn-sm btn-info'>Edit</button></td>" .
                "</form>" .

                "<form action='' method='post'>" .
                "<input name='id' value={$row['id']} hidden>".
                "<td><button name='del' class='btn btn-sm btn-danger'>Delete</button></td>" .
                "</form></tr>" ;
         }
        }
        mysqli_close($connect);
        ?>
  </tbody>
</table>
  </body>
</html>
