<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin - Wedding | Data Barang</title>
    <?php include 'layouts/lay.php'; ?>
  </head>
  <body>
    <?php include 'layouts/header.php'; ?>
    <div class="container">

      <?php
        if (empty($_GET['data'])) {
          # code...
          include 'data-barang/data.php';
        }elseif ($_GET['data']=='barang' && $_GET['menu']=='tambah') {
          # code...
          include 'data-barang/tambah.php';

        }elseif ($_GET['data']=='barang' && $_GET['menu']=='edit') {
          # code...
          include 'data-barang/edit.php';
        }

      ?>
    </div>
  </body>
</html>
