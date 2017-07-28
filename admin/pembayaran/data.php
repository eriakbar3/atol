<?php include '../controller/Koneksi.php'; ?>
<?php include '../controller/Pembayaran.php'; ?>
<?php
    $pembayaran = Pembayaran::get();
 ?>
 <!-- Add fancyBox main CSS files -->
 	<link rel="stylesheet" type="text/css" href="../assets/vendor/fancybox/jquery.fancybox.css" media="screen" />
 	<!-- Add Button helper (this is optional) -->
 	<link rel="stylesheet" type="text/css" href="../assets/vendor/fancybox/helpers/jquery.fancybox-buttons.css" />
 	<!-- Add Thumbnail helper (this is optional) -->
 	<link rel="stylesheet" type="text/css" href="../assets/vendor/fancybox/helpers/jquery.fancybox-thumbs.css" />
 	<!--page level css end-->
<div class="col-sm-12">
  <div class="tab-head">
    <div class="" style="width:50%; float: left;">

    <h3 style="pull-left" >Data Pembayaran</h3>
    </div>

  </div>
  <div class="panel panel-default" style="width:100%; float:left;margin-top:10px;">
    <div class="panel-heading">Data Pembayaran</div>
    <div class="panel-body">
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
            <th>Bukti Transfer</th>
            <th>Status</th>
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
              <td><div class=" gallery-border">
  								<a class="fancybox" href="../image/<?php echo $pem->bukti_bayar?>" data-fancybox-group="gallery" title="">
  									cek bukti
  								</a>
  						</div></td>
              <td><a href="?data=pembayaran&menu=edit&id=<?php echo $pem->no_pembayaran ?>"><?php echo $pem->status; ?></a> </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>

</div>
<script type="text/javascript" src="../assets/vendor/fancybox/jquery.mousewheel-3.0.6.pack.js" ></script>
<script type="text/javascript" src="../assets/vendor/fancybox/jquery.fancybox.pack.js?v=2.1."></script>
<script type="text/javascript" src="../assets/vendor/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="../assets/vendor/fancybox/helpers/jquery.fancybox-thumbs.js" ></script>
<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="../assets/vendor/fancybox/helpers/jquery.fancybox-media.js" ></script>
<script type="text/javascript" src="../assets/js/gallery.js"  ></script>
