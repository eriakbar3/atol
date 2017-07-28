<?php

  include "function/barang.php";

  $db = new barang();

  $kd_barang = $_GET['kd_barang'];

  if(isset($_POST['kd_barang']))
  {

    $kd_barang = $_POST['kd_barang'];
    $nama_barang = $_POST['nama_barang'];
   $harga = $_POST['harga'];
   $gambar = $_POST['gambar'];
       //insert data buku via method
       $db->updateBarang($kd_barang, $nama_barang,$harga,$gambar);


  }
 ?>



<div class="col-sm-12">
  <div class="tab-head">
    <h3>Edit Data Barang</h3>
  </div>
  <form class="" action="data-barang.php?data=barang&menu=edit&kd_barang=<?php echo $db->bacaDataBarang('kd_barang',$kd_barang); ?>" method="post">
    <div class="form-group">
      <label>Kode Barang</label>
      <input type="text" name="kd_barang" value="<?php echo $db->bacaDataBarang('kd_barang',$kd_barang); ?>" class="form-control" style="width:50%" readonly>
    </div>
    <div class="form-group">
      <label>Nama Barang</label>
      <input type="text" name="nama_barang" value="<?php echo $db->bacaDataBarang('nama_barang',$kd_barang); ?>" class="form-control" style="width:50%">
    </div>
    <div class="form-group">
      <label>Harga</label>
      <input type="text" name="harga" value="<?php echo $db->bacaDataBarang('harga',$kd_barang); ?>" class="form-control" style="width:20%">
    </div>
    <div class="form-group">
      <label>Image</label>
      <input type="file" name="gambar">
    </div>
    <input type="submit" name="submit" value="Simpan" class="btn btn-default">
  </form>
</div>
