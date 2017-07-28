<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Wedding | Data Barang</title>
    <link rel="stylesheet" href="../assets\vendor\font-awesome\css\font-awesome.min.css">
    <?php include 'layouts/lay.php'; ?>
  </head>
  <body>
    <?php include '../controller/Koneksi.php'; ?>
    <?php include '../controller/Pembayaran.php'; ?>
    <?php
        $pembayaran = Pembayaran::get();
     ?>
    <div class="container">
      <div class="col-sm-12">
        <div class="tab-head">
          <div  class="text-center" style="width:100%; float: left;">
            <h1>Wedding Orginizer</h1>
            <h3>Laporan Data Pembayaran</h3>
          </div>

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
    <script type="text/javascript">
      window.print();
    </script>
  </body>
</html>
