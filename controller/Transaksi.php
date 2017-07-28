<?php
/**
 *
 */
class Transaksi
{
  public function get()
  {
    $koneksi  = new Koneksi;
    $query = $koneksi->koneksi()->query("SELECT * FROM pemesanan");
    $result = $query->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }

}

 ?>
