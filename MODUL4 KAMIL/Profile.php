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

$query = "SELECT * FROM user";
$select = mysqli_query($conn, $query);

if(isset($_POST['submit'])){

  // ambil data dari formulir
  
  $nama = $_POST['nama'];
  $no_hp = $_POST['no_hp'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  // buat query update
  $sql = "UPDATE user SET nama='$nama', no_hp='$no_hp', password='$password'";
  $query = mysqli_query($conn, $sql);

  if($query){
    echo '<div class=alert alert-warning" role="alert">';
    echo 'Berhasil diupdate';
    echo '</div>';
  }
}

?>
    

  </head>
  <body> 

  <?php 
    
    while($selects = mysqli_fetch_assoc($select)){
    ?>


    <div class="container" style="padding-top: 2cm; width: 50rem;">
    <form method="POST">
    <h3 style= "text-align:center;">Profile</h3>
    <form>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="text" readonly class="form-control-plaintext" id="email" value="<?=$selects['email']?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="no_hp" name="no_hp">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div>
  <div class="form-group row">
    <label for="password2" class="col-sm-2 col-form-label">Password Confirm</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password2" name="password2">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" style="width: 50rem;" class="btn btn-primary" name="submit" value="Submit"></input>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="reset" style="width: 50rem;" class="btn btn-light" value="Cancel"></input>
    </div>
  </div>
</form>

    </div>

    <?php } ?>
 

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