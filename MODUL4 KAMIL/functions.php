<?php

$dbhost = "localhost";
$dbuser = "root";
$dbname = "wad_modul4";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn) {
    echo "<script> alert ('Failed Connect into Database');
            </script>";
}


function registrasi($data) {
    global $conn;

    $nama = strtolower(stripslashes($data['nama']));
    $email = ($data['email']);
    $no_hp = ($data['no_hp']);
    $password = mysqli_real_escape_string($conn,$data['password']);
    $password2 = mysqli_real_escape_string($conn,$data['password2']);

    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('email sudah ada')</script>";
        return false;
    }

    if ($password !== $password2) {
        echo "<script>
                alert('password tidak sesuai!');
                </script>";
                return false;
    }
    
    $password = password_hash($password,PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('','$nama','$email','$no_hp','$password')");

    return mysqli_affected_rows($conn);
}

?>