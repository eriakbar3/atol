<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Wedding | Data Barang</title>
    <link rel="stylesheet" href="../assets\vendor\font-awesome\css\font-awesome.min.css">
    <?php include 'layouts/lay.php'; ?>
  </head>
  <body>
    <?php include 'layouts/header.php'; ?>
    <?php include '../controller/Koneksi.php'; ?>
<?php include '../controller/Transaksi.php'; ?>
    <?php
        $transaksi = Transaksi::get();
     ?>
    <div class="container">
      <div class="col-sm-12">
        <div class="tab-head">
          <div class="" style="width:50%; float: left;">

          <h3 style="pull-left" >Data Pemesanan</h3>
          </div>

        </div>
        <div class="panel panel-default" style="width:100%; float:left;margin-top:10px;">
          <div class="panel-heading">Data Paket</div>
          <div class="panel-body">
            <div class="col-sm-12">
              <a class="pull-right btn btn-default"style="color:#333; margin-top:40px;margin-right:40px;" href="print-pemesanan.php">
          <i class="fa fa-print" aria-hidden="true"></i>
                  Print
              </a>
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th>ID Pesanan</th>
                  <th>ID Pelanggan</th>
                  <th>Nama Paket</th>
                  <th>Tanggal Pesan</th>
                  <th>Tanggal Acara</th>
                  <th>Total Biaya</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
          <?php foreach ($transaksi as $trans): ?>
                  <tr>
                    <td><?php echo $trans->id_pesanan; ?></td>
                    <td><?php echo $trans->id_pelanggan; ?></td>
                    <td><?php echo $trans->kd_paket; ?></td>
                    <th><?php echo $trans->tgl_pesan; ?></th>
                    <td><?php echo $trans->tgl_acara; ?></td>
                    <td><?php echo $trans->total_biaya; ?></td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>
