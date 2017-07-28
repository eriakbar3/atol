<?php

  include "../function/barang.php";

  $db = new barang();

  if(isset($_GET['ID']))
  {

    $id=$_GET['ID'];

    $db->hapusBarang($id);
    echo "<script>window.location='../data-barang.php';</script>";

  }
 ?>
