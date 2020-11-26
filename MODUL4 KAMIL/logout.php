<?php

$dbhost = "localhost";
$dbuser = "root";
$dbname = "wad_modul4";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

session_start();
$_SESSION = [];
session_unset();
session_destroy();

header('Location: login.php');
exit;

?>