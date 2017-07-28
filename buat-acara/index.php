<?php
$titik = "../";
session_start();
include '../controller/Koneksi.php';
include '../controller/Paket.php';
include '../controller/Barang.php';
include '../controller/Account.php';

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
    <link href="<?php echo $titik; ?>assets/vendor/daterangepicker/css/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets\vendor\font-awesome\css\font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/style.css">
  </head>
  <body>
    <?php include '../lib/header.php'; ?>
    <div class="main-content">
      <div class="container">

        <div class="produk">
          <div class="row">
            <div class="title">
              <div class="text-center bd-b">
                <h2>Buat Acara</h2>
                <h4>Buat Acara Pernikahan Anda disini</h4>
              </div>

            </div>
          </div>
          <div class="col-sm-12">
            <?php if (!isset($_SESSION['username'])){ ?>
              <div class="alert alert-warning">
                Silahkan Login Terlebih Dahulu
              </div>
            <?php }else{
              $paket = Paket::index();
              $barang = Barang::index();
              $account = Account::index();
              ?>
            <form class="" action="proses.php" method="post">
              <div class="form-group">
                <label>Nama Pelanggan</label>
                <input type="text" name="nama" value="<?php echo $account->nama_pelanggan ?>" class="form-control" style="width:50%" readonly>
              </div>
              <div class="form-group">
                  <label>Tanggal Acara</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="tgl" class="form-control" id="picker" style="width:25%"/>
                  </div>
              </div>
              <div class="form-group">
                <label>Alamat Acara</label>
                <textarea name="alamat" rows="8" cols="80" class="form-control" style="width:50%"></textarea>
              </div>
              <div class="form-group">
                <label>Pilih Paket</label>
                <select  name="paket" class="form-control" style="width:25%">
                  <option>Pilih Paket</option>
                  <?php foreach ($paket as $pakets): ?>
                    <option value="<?php echo $pakets->kd_paket ?>"><?php echo $pakets->nama_paket ?> (Rp. <?php echo $pakets->harga ?>)</option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label>Barang Tambahan</label>
                <div class="col-sm-12">
                  <div class="col-sm-3">
                    <select  name="barang" class="form-control" >
                      <option>Pilih Barang</option>
                      <?php foreach ($barang as $barangs): ?>
                        <option value="<?php echo $barangs->kd_barang ?>"><?php echo $barangs->nama_barang ?> (Rp. <?php echo $barangs->harga ?>)</option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <input type="text" name="jumlah" value="" placeholder="Jumlah" class="form-control" style="width:30%" >
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Catatan</label>
                <textarea name="catatan" rows="8" cols="80" class="form-control" style="width:50%"></textarea>
              </div>
              <input type="submit" name="" value="Pesan" class="btn btn-primary">
            </form>
            <?php } ?>
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
    <script src="../assets/vendor/moment/js/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo $titik; ?>assets/vendor/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
    <script type="text/javascript">
    $("#picker").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });
    </script>
  </body>
</html>
