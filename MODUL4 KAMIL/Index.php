<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#page=top">WAD Beauty</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
          
          <li class="nav-item active">
              <a class="fa fa-shopping-cart" href="Cart.php"> <span class="sr-only">(current)</span></a>
            </li>
            <p>Selamat Datang,</p>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Arsika Cipta Pelangi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Profile.php">Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
          </ul>
        </div>
      </nav>

    <title>WAD</title>

    <?php

 

$dbhost = "localhost";
$dbuser = "root";
$dbname = "wad_modul4";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

session_start();
if(!isset($_SESSION['login'])){
  header('location:login.php');
}

$current = $_SESSION['email'];
$sql = "SELECT id FROM user WHERE email = '$current'";
$user_id = mysqli_query($conn,$sql);
$id_user=0;
while ($userid = mysqli_fetch_assoc($user_id)){
  $id_user = $userid['id'];
}

if(isset($_POST['YUJA'])){
  $YUJA = "YUJA NIACIN";
  $harga = "170000";

  $query = ("INSERT INTO cart (user_id, nama_barang, harga) VALUES ('$id_user','$YUJA','$harga')");
  $insert = mysqli_query($conn, $query);

  if($insert){
    echo '<div class=alert alert-warning" role="alert">';
    echo 'Berhasil ditambahkan';
    echo '</div>';
  }

}

if(isset($_POST['SNAIL'])){
  $SNAIL = "SNAIL TRUECICA";
  $harga = "180000";

  $query = ("INSERT INTO cart (user_id, nama_barang, harga) VALUES ('$id_user','$SNAIL','$harga')");
  $insert = mysqli_query($conn, $query);

  if($insert){
    echo '<div class=alert alert-warning" role="alert">';
    echo 'Berhasil ditambahkan';
    echo '</div>';
  }

  
}

if(isset($_POST['MIRACLE'])){
  $MIRACLE = "MIRACLE TONER";
  $harga = "100000";

  $query = ("INSERT INTO cart (user_id, nama_barang, harga) VALUES ('$id_user','$MIRACLE','$harga')");
  $insert = mysqli_query($conn, $query);

  if($insert){
    echo '<div class=alert alert-warning" role="alert">';
    echo 'Berhasil ditambahkan';
    echo '</div>';
  }
}

?>


  </head>
  <body> 
  <div class="container " style="padding-top: 1cm; width: 50rem;">
  <div style="background-color:aquamarine; height: 3cm; text-align:center;">
  <br>
  <h4> WAD Beauty </h4>
  <p> Tersedia Skin Care dengan harga murah tapi bukan murahan dan berkualitas </p>
  </div>
  <form method="POST" action="">
  <div class="card-group">
  <div class="card">
    <img src="YUJA.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">YUJA NIACIN</h5>
      <p class="card-text">Rp.170.000</p>
    <div class="d-flex justify-content-center">
      <input type="submit" name="YUJA" class="btn btn-primary btn-sm" value="Tambahkan ke Keranjang"></input>
  </div>
    </div>
  </div>
  <div class="card">
    <img src="SNAIL.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">SNAIL TRUECICA</h5>
      <p class="card-text">Rp.180.000</p>
      <div class="d-flex justify-content-center">
      <input type="submit" name="SNAIL" class="btn btn-primary btn-sm" value="Tambahkan ke Keranjang"></input>
  </div>
    </div>
  </div>
  <div class="card">
    <img src="MIRACLE.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">MIRACLE TONER</h5>
      <p class="card-text">Rp.100.000</p>
      <div class="d-flex justify-content-center">
      <input type="submit" name="MIRACLE" class="btn btn-primary btn-sm" value="Tambahkan ke Keranjang"></input>
  </div>
    </div>
  </div>
</div>
</form>
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