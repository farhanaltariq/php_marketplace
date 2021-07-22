<?php
  session_start();
  include_once("navbar.php");
  include_once("connection.php"); // Using database connection file here
  
  if(!isset($_SESSION['userweb']))
      header("location: index.php");
  if($_SESSION['status']=='admin'){
      echo "<script>alert('Admin can\'t use this page');</script>";
  }
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
          $dst = "./all_images/payment/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
          $dst_db = "all_images/payment/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name
      
          move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
        
          $check = mysqli_query($connect,"insert into payment(email, payment_img) values('$_SESSION[userweb]','$dst_db')");  // executing insert query
          
          if($check){
            echo "<script>alert('Thank You, Your Order Will be Processed Soon');</script>";
            echo "<script>window.location.replace('mybag.php');</script>";
          }
        
          mysqli_close($db);  // close connection 
        }
      ?>
      <div class='container position-absolute text-center start-50 top-50 translate-middle'>
      <h2>Proof of Payment</h2>
      <div class="text-center">
          Please transfer IDR <span class="text-warning"><b><?=$_POST['price'];?></b></span><br>
          To the following account <br>
          <span class="text-warning">6318x-xxxx-xxxxx</span> <br>
      </div>
      <div class="mb-3 row">
        <!-- Insert Data Here -->

      <form method="post" enctype="multipart/form-data">
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
      
      