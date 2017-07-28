<?php $titik = "../";
include '../controller/Koneksi.php';
include '../controller/Paket.php';
$paket = Paket::index();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wedding</title>
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/bootstrap.min.css">
    <script src="<?php echo $titik; ?>assets/js/jquery.js"></script>
    <script src="<?php echo $titik; ?>assets/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/style.css">
  </head>
  <body>
    <?php include '../lib/header.php'; ?>
    <div class="main-content">
      <div class="container">

        <div class="produk">
          <div class="row">
            <div class="title">
              <div class="bag-kiri">
                <h2 class="title-content">Paket Baru</h2>
              </div>
              <div class="bag-kanan">
                <a href="#">Lihat Semua</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12">

            <?php foreach ($paket as $pakets): ?>
              <div class="col-sm-12">
                <div class="col-sm-3">
                  <div class="thumbnail">
                    <a href="#">
                      <img class="myimg" src="<?php echo $titik; ?>image/<?php echo $pakets->gambar?>" alt="Lights" style="width:100%">
                      <div class="caption">
                        <p><?php echo "$pakets->nama_paket"; ?></p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
    <div class="footer">
      <div class="container">
        <div class="col-sm-4">
          <h4>Kelompok 4</h3>
          <ul>
            <li>Eri Akbar Nurjaman (10114160)</li>
            <li>Budi Satria Utama (10114163)</li>
            <li>Anggi Edo Prasetya (10114173)</li>
            <li>Jihad (10114151)</li>
            <li>Dadi Rosadi (10114014)</li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h4>Universitas Komputer Indonesia</h3>
          <p>Kelas ATOL - 7</p>
        </div>
        <div class="col-sm-4">
          <img src="<?php echo $titik; ?>assets/img/unikom.png" alt="" class="img-responsive" style="height:150px;margin-left:125px">

        </div>

      </div>
      <div class="footer-cpr">
        <div class="container">
          <p>Copyright © Kelompok 4 ATOL - 7, 2017</p>
        </div>
      </div>
    </div>
  </body>
</html>
