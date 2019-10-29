<?php require("config.php") ?>
<?php require_once("header.php") ?>

  <header>
    <h1>Selamat Datang Admin</h1>
  </header>

  <?php 
    $sql = "SELECT * FROM buku";
    $query = mysqli_query($db, $sql);

  ?>

  <?php if(isset($_GET['status'])): ?>
    <p>
      <?php 
        if($_GET['status'] == 'tambahsukses') {
          echo "Buku baru telah disimpan";
        } else {
          echo "Gagal Menyimpan";
        }
      ?>
    </p>
  <?php endif; ?>

  <main>
    <h4>Tambah buku</h4>
    <form action="proses-tambahbuku.php" method=POST> 
      <p>
        <label for="tipe_buku">Tipe Buku: </lable>
          <select name="tipe_buku">
            <?php 
              $sql1 = "SELECT DISTINCT tipe_buku FROM buku";
              $query1 = mysqli_query($db, $sql1);

              while($tipeBuku = mysqli_fetch_array($query1)) {
                echo "<option>".$tipeBuku['tipe_buku']."</option>";
              }
            ?>
          </select>
      </p>
      <p>
        <label for="judul_buku">Judul Buku</label>
        <input type="text" name="judul_buku">
      </p>

      <p>
        <input type="submit"value="tambah" name="tambahbuku">
      </p>
    </form>
  </main>

<?php require_once("footer.php") ?>