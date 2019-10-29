<?php 

include("config.php");

if(isset($_POST['tambahbuku'])) {
  
  $tipe_buku = $_POST['tipe_buku'];
  $judul_buku = $_POST['judul_buku'];

  $sql = "INSERT INTO buku (tipe_buku, judul_buku) VALUE ('$tipe_buku', '$judul_buku')";
  $query = mysqli_query($db, $sql);

  if( $query ) {
    header('Location: tambahbuku.php?status=tambahsukses');
  } else {
    header('Location: tambahbuku.php?status=tambahgagal');
  }

} else {
  die("Access Dinied!");
}