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
          include 'data-pemesan/data.php';
        }elseif ($_GET['data']=='pemesan' && $_GET['menu']=='tambah') {
          include 'data-pemesan/tambah.php';
        }elseif ($_GET['data']=='pemesan' && $_GET['menu']=='edit') {
          include 'data-pemesan/edit.php';
        }
      ?>
    </div>
  </body>
</html>
