<?php
  include "function/paket.php";

  $db = new paket();


 ?>

<div class="col-sm-12">
  <div class="tab-head">
    <div class="" style="width:50%; float: left;">

    <h3 style="pull-left" >Data Paket</h3>
    </div>
  <div class="pull-right" style="width:49%">
    <a href="?data=paket&menu=tambah" class="btn btn-primary pull-right" style="margin-top:20px;margin-bottom:10px">Tambah Data</a>
  </div>
  </div>
  <div class="panel panel-default" style="width:100%; float:left;margin-top:10px;">
    <div class="panel-heading">Data Paket</div>
    <div class="panel-body">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Image</th>
            <th>Nama Paket</th>
            <th>Jenis Paket</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php

            $db->tampilPaket();

           ?>

        </tbody>
      </table>
    </div>
  </div>

</div>
