<?php

session_start();
if(empty($_SESSION['username'])){
   header("location:login.php");
}

include "function/barang.php";
include "function/paket.php";

$db = new barang();
$db2 = new paket();


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Wedding</title>
    <?php include 'layouts/lay.php'; ?>
  </head>
  <body>
    <div class="wrapper">
      <?php include 'layouts/header.php'; ?>
      <div class="container">
          <div class="col-sm-12">
            <div class="tab-head">
              <div class="" style="width:50%; float: left;">

              <h3 style="pull-left" >Data Barang</h3>
              </div>

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
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      $db->tampilBarangHome();

                     ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>

        <div class="col-sm-12">
          <div class="tab-head">
            <div class="" style="width:50%; float: left;">

            <h3 style="pull-left" >Data Paket</h3>
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
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                      $db2->tampilPaketHome();

                     ?>

                  </tbody>
                </table>
              </div>
            </div>

        </div>
      </div>
    </div>
  </body>
</html>
