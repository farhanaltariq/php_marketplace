<!DOCTYPE html>
<html>
<head>
  <title>Insert image in MySQL database in PHP</title>
</head>
<body style="background: darkgrey;">

<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['userweb']))
    header("location: index.php");
include "connection.php"; // Using database connection file here
include_once("navbar.php");

if(isset($_POST["submit"]))
{
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
      <table class="table">
        <tr>
          <td>ID</td>
          <td>Type</td>
          <td>Price</td>
          <td>Size</td>
          <td>Stock</td>
          <td>Image</td>
        </tr>
        
        <?php
            $sql = "SELECT * FROM product";
            $result = $connect->query($sql);
            $counter = 0;
            if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){
              echo "<tr>".
              "<td>{$row['id']}</td>".
              "<td>{$row['tipe']}</td>".
              "<td>{$row['harga']}</td>".
              "<td>{$row['ukuran']}</td>".
              "<td>{$row['stok']}</td>".
                    "<td> <img src='{$row['img']}' width='50px' height='50px'> ".
                    "</td>";
              echo "</tr>";                }
            }
            mysqli_close($connect);
        ?>
      </table>
    </div>

<h2>Insert Data</h2>
<form method="post" enctype="multipart/form-data">
    <tr>
      <td>Select Image</td>
      <td><input type="file" name="image" Required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Upload"></td>			
    </tr>
  </table>
</form>

</body>
</html>

