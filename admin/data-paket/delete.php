<?php

  include "../function/paket.php";

  $db = new paket();

  if(isset($_GET['ID']))
  {

    $id=$_GET['ID'];

    $db->hapusPaket($id);
    echo "<script>window.location='../data-paket.php';</script>";

  }
 ?>
