<?php

  include "function/paket.php";

  $db = new paket();

  if(isset($_POST['nama_paket']))
  {

    $nama_paket = $_POST['nama_paket'];
    $harga = $_POST['harga'];
    $imgFile    = $_FILES['gambar']['name'];
    $tmpDir     = $_FILES['gambar']['tmp_name'];
    $imgSize    = $_FILES['gambar']['size'];

    $img_ext    = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $gambar      = md5(time()).''.rand(1000,1000000).".".$img_ext;
    $upload_dir = '../image/'.$gambar;
    //echo $gambar;
    move_uploaded_file($tmpDir,$upload_dir);
    $deskripsi = $_POST['deskripsi'];
    $jenis_paket = $_POST['jenis_paket'];
       //insert data buku via method
      $db->tambahPaket($nama_paket,$harga,$gambar,$jenis_paket,$deskripsi);

  }
 ?>

<div class="col-sm-12">
  <div class="tab-head">
    <h3>Tambah Data Paket</h3>
  </div>
  <form class="" action="data-paket.php?data=paket&menu=tambah" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label>Nama Paket</label>
      <input type="text" name="nama_paket" value="" class="form-control" style="width:50%">
    </div>
    <div class="form-group">
      <label>Harga</label>
      <input type="text" name="harga" value="" class="form-control" style="width:20%">
    </div>
    <div class="form-group">
      <label>Jenis</label>
      <input type="text" name="jenis_paket" value="" class="form-control" style="width:20%">
    </div>
    <div class="form-group">
      <label>Image</label>
      <input type="file" name="gambar">
    </div>
    <div class="form-group">
      <label>Deskripsi</label>
      <textarea name="deskripsi" rows="8" cols="80" class="form-control" style="width:50%"></textarea>
    </div>
    <input type="submit" name="submit" value="Tambah" class="btn btn-default">
  </form>
</div>
