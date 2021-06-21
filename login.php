<!DOCTYPE html>
<html>
<head><title>AeroStreet Login</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="./style/loginStyle.css">
<script type="text/javascript">
    function submitform(){
        document.getElementById("form").submit();
    }
</script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <img src="./style/img/logo2.png" class="logo" alt="AeroStreet">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarTogglerDemo02">
                <div class="navbar-nav ml-auto">
                    <a style="margin-left: 50px;" class="nav-link"  href="index.php">HOME</a>
                    <a style="margin-left: 50px;" class="nav-link" aria-current="page" href="home.php">PRODUCT</a>
                    <a style="margin-left: 50px;" class="nav-link active" href="login.php">LOGIN</a>
                    <a style="margin-left: 50px;" class="nav-link" href="https://api.whatsapp.com/send?phone=6281230447023&text=Hai%20Farhan,%20kamu%20sangat%20tampan.">CONTACT</a>
                </div>
                <img src="./style/img/bag.png" style="width: 25px; height: 25px; margin-top: 5px; margin-left: 50px; margin-right: 50px;">
            </div>
        </div>
    </nav>

    
    <div class="loginradius container position-absolute top-50 start-50 translate-middle">
        <div class="loginlogo position-absolute top-0 start-0 text-center""></div>
        <div class="loginform">
            <div class="text-start" style="margin-bottom: 50px;"><b>Login Here !</b></div>
            <form method="post">
                <div class="mb-3">
                    <input name="email" placeholder="Email" type="email" class="form-control field rounded" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input name="password" placeholder="Password" type="password" class="form-control field" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <?php
                        //check if login form are clicked
                        include_once("connection.php");
                        if(isset($_POST['login'])){
                            //check is there has an empty form
                            if($_POST['email']=="" || $_POST['password']==""){
                            echo "<div class='alert-sm text-primary'>";
                            echo "Email dan password tidak boleh kosong";
                            echo "</div>";
                            } else{
                            //validating account data
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $qry = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email' AND password = md5('$password')");
                            $check = mysqli_num_rows($qry);
                            //redirect if inputted valid data
                            if($check){
                                $_SESSION['userweb'] = $email;
                                echo "<form id='form' method='POST' action='index.php'>";
                                echo "<input type='text' name='uname' value='$email' hidden>";
                                echo "<script type=\"text/javascript\">submitform()</script>";
                                echo "</form>";
                                exit;
                            }else {
                                echo "<div class='alert-sm text-danger'>";
                                echo "Email atau password salah";
                                echo "</div>";
                            }
                            }
                        }
                        ?>
                    <a class="hover" href="hehe.php" style="padding-right: 10px;">Forgot your password ?</a>
                    <button type="submit" class="btn btn-light" style="margin-left: 30px" name="login">login</button>
                </div>
            </form>
        </div>
        <div class="newacc">
            Don't have an account ? create your account <a style="color:orange;" href="home.php">here</a>
        </div>
    </div>
</body>
</html>