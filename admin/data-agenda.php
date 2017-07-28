<?php
session_start();
if(empty($_SESSION['username'])){
   header("location:login.php");
}
 ?>
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
          include 'data-agenda/data.php';
        }elseif ($_GET['data']=='agenda' && $_GET['menu']=='edit') {
          include 'data-agenda/edit.php';
        }
      ?>
    </div>
  </body>
</html>
