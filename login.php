<?php
    session_start();
    include_once("connection.php");
    //if already logged in, then redirect to product page
    if(isset($_SESSION['userweb']))
        header("location:home.php");
    include_once("navbar.php");
?>
<!DOCTYPE html>
<html>
<head><title>AeroStreet</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="./style/loginStyle.css">
</head>
<body>
    <div class="loginradius container position-absolute top-50 start-50 translate-middle">
        <div class="loginlogo position-absolute top-0 start-0 text-center""></div>
        <div class="loginform">
            <div class="text-start" style="margin-bottom: 50px;"><b>Login Here !</b></div>
            <form method="post">
                 <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"><img src="./style/img/user.png" alt="" width=40px height=40px></label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"><img src="./style/img/user.png" alt="" width=40px height=40px></label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                    </div>
                <div class="mb-3">
                    <!-- <a class="hover" href="hehe.php" style="padding-right: 10px;">Forgot your password ?</a> -->
                    <button type="submit" class="btn btn-light" style="margin-left: 30px; float: right" name="login">login</button>
                </div>
            </form>
            <div class="newacc">
            Don't have an account ? create your account <a style="color:orange;" href="signup.php">here</a>
            </div>
        </div>
        
    </div>
</body>
<?php
    //check if login form are clicked
    if(isset($_POST['login'])){
    //check is there has an empty form
        if($_POST['email']=="" || $_POST['password']==""){
            echo "<div class='alert alert-secondary'>";
            echo "Email or password field can't be empty";
            echo "</div>";
    } else{
        //validating account data
        $email = $_POST['email'];
        $password = $_POST['password'];
        $qry = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email' AND password = md5('$password')");
        $check = mysqli_num_rows($qry);
        $checkstatus = mysqli_fetch_assoc($qry);
        //redirect if inputted valid data
        if($check){
            $_SESSION['status'] = "user";
            $_SESSION['userweb'] = $email;
            echo "<form method='POST' id='okform' action='home.php' hidden>";
            echo "<input type='email' name='mail' value='$email'>";
            echo "<button type='submit' id='click'>OK</button>";
            echo "<script type=\"text/javascript\">
                    document.getElementById('okform').submit();
                    </script>";
            echo "</form>";
            exit;
        }else {
            $qry = mysqli_query($connect, "SELECT * FROM admin WHERE email = '$email' AND password = md5('$password')");
            $check = mysqli_num_rows($qry);
            //redirect if inputted valid data
            if($check){
                $_SESSION['status'] = "admin";
                $_SESSION['userweb'] = $email;
                echo "<form method='POST' id='okform' action='admin.php' hidden>";
                echo "<input type='email' name='mail' value='$email'>";
                echo "<button type='submit' id='click'>OK</button>";
                echo "<script type=\"text/javascript\">
                        document.getElementById('okform').submit();
                        </script>";
                echo "</form>";
                exit;
            }
            echo "<div class='alert alert-danger'>";
            echo "Incorrect email or password";
            echo "</div>";
        }
    }
}
?>
</html>
