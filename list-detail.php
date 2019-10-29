<?php 
require('config.php');
require_once('header.php');

    $sql = "SELECT 
              peminjam.nama,
                peminjam.waktu_pinjam,
                buku.tipe_buku,
                buku.judul_buku
            FROM peminjam
            INNER JOIN buku
            ON buku.id = peminjam.buku_id;";
    $query = mysqli_query($db, $sql);

    while($array = mysqli_fetch_array($query)) {
      echo "<ul>".$array['nama'];
      echo "<li>".$array['tipe_buku']."</li>";
      echo "<li>".$array['judul_buku']."</li>";
      echo "<li>".$array['waktu_pinjam']."</li>";
      echo "</ul>";
    }


require_once('footer.php');