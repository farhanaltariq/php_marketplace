<?=include_once("navbar.php");?>

<!DOCTYPE html>
<html>
<head>
  <title>Insert image in MySQL database in PHP</title>
  <link rel="stylesheet" href="./style/adminStyle.css">
</head>
<body>

<?php
  session_start();
  include 'connection.php';
  if(!isset($_SESSION['userweb']))
      header("location: index.php");
  include "connection.php"; // Using database connection file here
  

  if(isset($_POST["addProduct"])){
      $var1 = rand(1111,9999);  // generate random number in $var1 variable
      $var2 = rand(1111,9999);  // generate random number in $var2 variable
    
      $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
      $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

      $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
      $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
      $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

      move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
    
      $check = mysqli_query($connect,"insert into product(id,img) values('$_POST[fname]','$dst_db')");  // executing insert query
      
      if($check)
      {
        echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
      }
      else
      {
        echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
      }

      mysqli_close($connect);  // close connection 
    }
?>

<div class="container">
  <center><h2><b>ADMIN MODE</b></h2></center>
  <hr>
  <form method="post" enctype="multipart/form-data">
    <table class="table">
      <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Price</th>
        <th>Size</th>
        <th>Stock</th>
        <th>Image</th>
        <th></th>
        <th></th>
      </tr>
      
      <?php
        $sql = "SELECT * FROM product";
        $result = $connect->query($sql);
        $counter = 0;
        if($result->num_rows>0){
          while ($row = $result->fetch_assoc()){
            //field for update
            echo "<form ><tr>".
            "<td><input name='id' type='text' value='{$row['id']}'></td>".
            "<td><input name='tipe' type='text' value='{$row['tipe']}'</td>".
            "<td><input name='harga' type='text' value='{$row['harga']}'</td>".
            "<td><input name='ukuran' type='text' value='{$row['ukuran']}'</td>".
            "<td><input name='stok' type='text' value='{$row['stok']}'</td>".
            "<td><center><img src='{$row['img']}' width='70px' height='70px'><br>".
            "<input name='img' type='file' value='{$row['img']}'></center></td>".
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
<center>
<h4>Add Product</h4>
<div class="container">
  <form method="post" enctype="multipart/form-data">
        
        <label for="image"></label>
        <input type="file" name="image" Required><br>
        <button type="submit" name="addProduct">Upload</button>
  </form>
</div>
</center>
</body>
</html>

