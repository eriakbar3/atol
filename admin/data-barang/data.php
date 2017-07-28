<?php
  include "function/barang.php";

  $db = new barang();


 ?>


<div class="col-sm-12">
  <div class="tab-head">
    <div class="" style="width:50%; float: left;">

    <h3 style="pull-left" >Data Barang</h3>
    </div>
  <div class="pull-right" style="width:49%">
    <a href="?data=barang&menu=tambah" class="btn btn-primary pull-right" style="margin-top:20px;margin-bottom:10px">Tambah Data</a>
  </div>
  </div>
  <form method="get" class="input-group">
    <input type="text" name="cari" class="form-control" placeholder="Pencarian...">
    <span class="input-group-btn">
      <a href="data-barang.php" class="btn btn-primary" type="button">Cari</a>
    </span>
  </form>
  <div class="panel panel-default" style="width:100%; float:left;margin-top:10px;">
    <div class="panel-heading">Data Barang</div>
    <div class="panel-body">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Image</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php


            if(isset($_GET['cari'])){

              $nama_barang = $_GET['cari'];
              $db->tampilCariBarang($nama_barang);
            }else{
            $db->tampilBarang();
          }

           ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
