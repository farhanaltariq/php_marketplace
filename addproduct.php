<?php
  session_start();
  include_once("navbar.php");
  include_once("connection.php"); // Using database connection file here
  
  if(!isset($_SESSION['userweb']))
      header("location: index.php");
  if($_SESSION['status']=="user")
    header("location:index.php");
?>
      <!DOCTYPE html>
      <html>
      <head>
        <title>AeroStreet</title>
        <link rel="stylesheet" href="./style/loginStyle.css">
      </head>
      <body style='background: black; color: white'>
      
      <?php
      
      if(isset($_POST["submit"]))
      {      
          $var1 = rand(1111,9999);  // generate random number in $var1 variable
          $var2 = rand(1111,9999);  // generate random number in $var2 variable
        
          $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
          $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number
      
          $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
          $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
          $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

          $allowed = [
            'image/jpg',
            'image/jpeg',
            'image/png',
            'image/webp'
          ];
          $msglist = [];
          if (!in_array(@$fileFoto->type, $allowed)) {
            array_push($msglist, "File extension not allowed");
            echo "<center><h4>Extension Not Allowed</h4></center>";
          }
          else{
            move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
          
            $check = mysqli_query($connect,"insert into product(tipe, harga, ukuran, stok,img) values('$_POST[Type]', '$_POST[Price]', '$_POST[Size]', '$_POST[Stock]','$dst_db')");  // executing insert query
            mysqli_close($db);  // close connection 
            if($check)
              header('location:admin.php');
          }  
          
        }
      ?>
      <div class='container position-absolute text-center start-50 top-50 translate-middle'>
      <h2>Insert Data</h2>
      <div class="mb-3 row">
        <!-- Insert Data Here -->
      <form method="post" enctype="multipart/form-data">
            <input type="text" name="Type" placeholder="Type" required><br><br>
            <input type="number" name="Price" placeholder="Price" required><br><br>
            <input type="number" name="Size" placeholder="Size" required><br><br>
            <input type="number" name="Stock" placeholder="Stock" required><br><br>
            <input type="file" name="image" Required><br><br>
            <input type="submit" name="submit" value="Upload">
      </form>
      </div>
      </div>
      </body>
      <style>
        input{
          width: 300px;
        }
      </style>
      </html>
      
      