<?php 

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pinjambuku";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ) {
  die("Koneksi ke database gagal: " . mysqli_connect_error());
}