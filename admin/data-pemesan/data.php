<?php include '../controller/Koneksi.php'; ?>
<?php include '../controller/Transaksi.php'; ?>
<?php
    $transaksi = Transaksi::get();
 ?>

<div class="col-sm-12">
  <div class="tab-head">
    <div class="" style="width:50%; float: left;">

    <h3 style="pull-left" >Data Paket</h3>
    </div>

  </div>
  <div class="panel panel-default" style="width:100%; float:left;margin-top:10px;">
    <div class="panel-heading">Data Paket</div>
    <div class="panel-body">
      <table class="table">
        <thead>
          <tr>
            <th>ID Pesanan</th>
            <th>ID Pelanggan</th>
            <th>Nama Paket</th>
            <th>Tanggal Pesan</th>
            <th>Tanggal Acara</th>
            <th>Total Biaya</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($transaksi as $trans): ?>
            <tr>
              <td><?php echo $trans->id_pesanan; ?></td>
              <td><?php echo $trans->id_pelanggan; ?></td>
              <td><?php echo $trans->kd_paket; ?></td>
              <th><?php echo $trans->tgl_pesan; ?></th>
              <td><?php echo $trans->tgl_acara; ?></td>
              <td><?php echo $trans->total_biaya; ?></td>
              <td><a href="#">Detail</a> | <a href="?data=pemesan&menu=edit&id_pesanan=<?php echo $trans->id_pesanan; ?>">Edit</a> | <a href="#">Hapus</a></td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>

</div>
