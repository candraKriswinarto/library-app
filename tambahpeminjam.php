<?php require("config.php") ?>
<?php require_once("header.php") ?>

  <header>
    <h1>Selamat Datang Admin</h1>
  </header>

  <?php 
    $sql = "SELECT * FROM buku";
    $query = mysqli_query($db, $sql);
  ?>

  <main>

  <?php if(isset($_GET['status'])): ?>
    <p>
      <?php 
        if($_GET['status'] == 'sukses') {
          echo "*Penambahan data peminjam berhasil";
        } else {
          echo "*Penambahan data peminjam Gagal";
        }
      ?>
    </p>
  <?php endif; ?>

    <h4>Tambah Peminjam</h4>
    <form action="proses-pinjam.php" method=POST>
      <p>
        <label for="nama">Nama Peminjam: </label>
        <input type="text" name="nama" placeholder="Nama...">
      </p> 
      <p>
        <label for="judul_buku">Judul Buku</label>

          <select name="judul_buku">
            <?php 
              $sql2 = "SELECT DISTINCT judul_buku FROM buku";
              $query2 = mysqli_query($db, $sql2);

              while($judulBuku = mysqli_fetch_array($query2)) {
                echo "<option>".$judulBuku['judul_buku']."</option>";
              }
            ?>
        </select>
      </p>

      <p>
        <input type="submit" value="Pinjam" name="submit">
      </p>
    </form>
  </main>

<?php require_once("footer.php") ?>