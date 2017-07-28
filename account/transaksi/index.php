<?php $titik ='../../' ?>
<?php
$side ='../';
session_start();
include '../../controller/Koneksi.php';
include '../../controller/Paket.php';
include '../../controller/Barang.php';
include '../../controller/Account.php';
include '../../controller/Transaksi.php';
$pesanan = Transaksi::get();
if (!isset($_SESSION['username'])){
  header("Location:../login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/bootstrap.min.css">
    <script src="<?php echo $titik; ?>assets/js/jquery.js"></script>
    <script src="<?php echo $titik; ?>assets/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/style.css">
    <style media="screen">
      .main-content{
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <?php include '../../lib/header.php'; ?>
    <div class="main-content">
      <div class="container">
        <?php include '../side.php'; ?>
        <div class="col-sm-9">
          <div class="panel panel-default">
            <div class="panel-heading">Transaksi</div>
            <div class="panel-body">
              <div class="">

                <table class="table">
                  <thead>
                    <tr>
                      <th>Id Pesanan</th>
                      <th>Kode Paket</th>
                      <th>Tanggal Pesan</th>
                      <th>Total Biaya</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($pesanan as $pesan): ?>
                      <tr>
                        <td><?php echo $pesan->id_pesanan ?></td>
                        <td><?php echo $pesan->kd_paket; ?></td>
                        <td><?php echo $pesan->tgl_pesan; ?></td>
                        <td><?php echo $pesan->total_biaya; ?></td>
                        <td><?php echo $pesan->status; ?></td>

                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
