<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#page=top">WAD Beauty</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Login.php">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="registrasi.php">Register</a>
            </li>
          </ul>
        </div>
      </nav>

    <title>WAD</title>

    <?php

    session_start();

    if(isset($_COOKIE['login'])){
        if($_COOKIE['login'] == 'true'){
            $_SESSION['login'] = true;
        }
    }

    if(isset($_SESSION['login'])){
        header('Location:Index.php');
        exit;
    }

$dbhost = "localhost";
$dbuser = "root";
$dbname = "wad_modul4";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    require 'functions.php';
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");

        if(mysqli_num_rows($result)===1){

            $row = mysqli_fetch_assoc($result);
            if(password_verify($password,$row['password'])){
                $_SESSION['login'] = true;

                if(isset($_POST['remember'])){
                    setcookie('login','true',time()+60);
                }

                header('location:Index.php');
                exit;
            }
        }
        $error = true;

    }



    ?>

  </head>
  <body style="background-color:powderblue;">

  <?php if(isset($error) ) : 
    echo "<script>alert('Email/Password salah!')</script>";
    ?>

    
  <?php endif; ?>

<div class="container" style="padding-top: 3cm;">
  <div class="d-flex justify-content-center">
  <div class="card" style="width: 22rem;">
  <div class="card-body">
    <h4 class="card-title" style= "text-align:center;">Login</h4>

    <form method="POST" action="">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="password">Kata Sandi</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="remember">
    <label class="form-check-label" for="remember" name="remember">Remember Me</label>
  </div>
  <div class="d-flex justify-content-center">
  <input type="submit" name="login" class="btn btn-primary btn-sm " value="Login"></button>
  </div>
  <div  style= "text-align:center;">
  <p>  Belum punya akun? <a href="registrasi.php">Registrasi</a><p>
  </div>
</form>

  </div>
</div>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>