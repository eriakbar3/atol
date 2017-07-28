<?php

  include "function/barang.php";

  $db = new barang();

  if(isset($_POST['nama_barang']))
  {

    $nama_barang     = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    //$gambar = $_POST['gambar'];
    $imgFile    = $_FILES['gambar']['name'];
    $tmpDir     = $_FILES['gambar']['tmp_name'];
    $imgSize    = $_FILES['gambar']['size'];

    $img_ext    = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $gambar      = md5(time()).''.rand(1000,1000000).".".$img_ext;
    $upload_dir = '../image/'.$gambar;
    //echo $gambar;
    move_uploaded_file($tmpDir,$upload_dir);
       //insert data buku via method
      $db->tambahBarang($nama_barang,$harga,$gambar);

  }
 ?>



<div class="col-sm-12">
  <div class="tab-head">
    <h3>Tambah Data Barang</h3>
  </div>
  <form class="" action="data-barang.php?data=barang&menu=tambah" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>Nama Barang</label>
      <input type="text" name="nama_barang" value="" class="form-control" style="width:50%">
    </div>
    <div class="form-group">
      <label>Harga</label>
      <input type="text" name="harga" value="" class="form-control" style="width:20%">
    </div>
    <div class="form-group">
      <label>Image</label>
      <input type="file" name="gambar" >
    </div>
    <input type="submit" name="submit" value="Tambah" class="btn btn-default">
  </form>
</div>
