<?php 
require('config.php');
require_once('header.php');

  $nama = $_POST['nama'];
  $judul_buku = $_POST['judul_buku'];

  if(isset($_POST['submit'])) {
    
    $sql = "SELECT id FROM buku WHERE judul_buku = '$judul_buku'";
    $query = mysqli_query($db, $sql);
    $judulId = mysqli_fetch_array($query);
      
    $id = $judulId['id'];

    $sql1 = "INSERT INTO peminjam (nama, buku_id) VALUES ('$nama', $id)";
    $query1 = mysqli_query($db, $sql1);

    if( $query1 ) {
      header('Location: tambahpeminjam.php?status=sukses');
    } else {
      header('Location: tambahpeminjam.php?status=gagal');
    }

  } else {
    echo "Access dinied!";
  }


require_once('footer.php');