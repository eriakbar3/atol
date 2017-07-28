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
    <?php include '../controller/Pembayaran.php'; ?>
    <?php
        $pembayaran = Pembayaran::get();
     ?>
    <div class="container">
      <div class="col-sm-12">
        <div class="tab-head">
          <div class="" style="width:50%; float: left;">

          <h3 style="pull-left" >Data Pembayaran</h3>
          </div>

        </div>
        <div class="panel panel-default" style="width:100%; float:left;margin-top:10px;">
          <div class="panel-heading">Data Paket</div>
          <div class="panel-body">
            <div class="col-sm-12">
              <a class="pull-right btn btn-default"style="color:#333; margin-top:40px;margin-right:40px;" href="print-pembayaran.php">
          <i class="fa fa-print" aria-hidden="true"></i>
                  Print
              </a>
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Pelanggan</th>
                  <th>Tanggal Bayar</th>
                  <th>Atas Nama</th>
                  <th>Dari Bank</th>
                  <th>Ke Bank</th>
                  <th>Jumlah Transfer</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php foreach ($pembayaran as $pem): ?>
                  <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $pem->id_pelanggan; ?></td>
                    <td><?php echo $pem->tgl_bayar; ?></td>
                    <td><?php echo $pem->atas_nama; ?></td>
                    <td><?php echo $pem->dari_bank; ?></td>
                    <td><?php echo $pem->ke_bank; ?></td>
                    <td><?php echo $pem->jml_transfer; ?></td>

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
