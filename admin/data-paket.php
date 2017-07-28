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
          include 'data-paket/data.php';
        }elseif ($_GET['data']=='paket' && $_GET['menu']=='tambah') {
          include 'data-paket/tambah.php';
        }elseif ($_GET['data']=='paket' && $_GET['menu']=='edit') {
          include 'data-paket/edit.php';
        }
      ?>
    </div>
  </body>
</html>
