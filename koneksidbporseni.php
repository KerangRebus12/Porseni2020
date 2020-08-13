<?php 
//Membuat koneksi Database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "porseni2020";

$koneksi = new mysqli($host,$user,$pass,$dbname) or die(mysqli_error());
?>