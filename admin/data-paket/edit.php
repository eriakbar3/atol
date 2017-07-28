<?php

  include "function/paket.php";

  $db = new paket();

  $kd_paket = $_GET['kd_paket'];

  if(isset($_POST['kd_paket']))
  {

    $kd_paket = $_POST['kd_paket'];
    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];
    $jenis_paket = $_POST['jenis_paket'];
       //insert data buku via method
    $db->updatePaket($kd_paket, $nama_paket,$harga,$gambar,$jenis_paket,$deskripsi);
  }
 ?>


<div class="col-sm-12">
  <div class="tab-head">
    <h3>Edit Data Barang</h3>
  </div>
  <form class="" action="data-paket.php?data=paket&menu=edit&kd_paket=<?php echo $db->bacaDataPaket('kd_paket',$kd_paket); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>Kode Paket</label>
      <input type="text" name="kd_paket" value="<?php echo $db->bacaDataPaket('kd_paket',$kd_paket); ?>" class="form-control" style="width:50%" readonly>
    </div>
    <div class="form-group">
      <label>Nama Paket</label>
      <input type="text" name="nama_paket" value="<?php echo $db->bacaDataPaket('nama_paket',$kd_paket); ?>" class="form-control" style="width:50%">
    </div>
    <div class="form-group">
      <label>Harga</label>
      <input type="text" name="harga" value="<?php echo $db->bacaDataPaket('harga',$kd_paket); ?>" class="form-control" style="width:20%">
    </div>
    <div class="form-group">
      <label>Jenis</label>
      <input type="text" name="jenis_paket" value="<?php echo $db->bacaDataPaket('jenis_paket',$kd_paket); ?>" class="form-control" style="width:20%">
    </div>
    <div class="form-group">
      <label>Image</label>
      <input type="file" name="gambar">
    </div>
    <div class="form-group">
      <label>Deskripsi</label>
      <textarea name="deskripsi" rows="8" cols="80" class="form-control" style="width:50%"><?php echo $db->bacaDataPaket('deskripsi',$kd_paket); ?></textarea>
    </div>
    <input type="submit" name="submit" value="Simpan" class="btn btn-default">
  </form>
</div>
