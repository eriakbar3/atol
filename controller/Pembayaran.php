<?php
/**
 *
 */
class Pembayaran
{

  public function insert($id_pelanggan,$tgl,$atas_nama,$jumlah,$dari,$ke,$id_pesanan,$bukti)
  {
    # code...
    $c = new Koneksi;
    $query = $c->koneksi()->exec("INSERT INTO pembayaran
      (id_pelanggan,tgl_bayar,atas_nama,jml_transfer,bukti_bayar,id_pesanan,dari_bank,ke_bank)
    VALUES ('$id_pelanggan','$tgl','$atas_nama','$jumlah','$bukti','$id_pesanan','$dari','$ke')
    ");
    if ($query) {
      # code...
      echo "<div class='alert alert-success'>Berhasil! Silahkan Tunggu Konfirmasi dari Kami</div>";
    }
  }
  public function get()
  {
    $koneksi  = new Koneksi;
    $query = $koneksi->koneksi()->query("SELECT * FROM pembayaran");
    $result = $query->fetchAll(PDO::FETCH_OBJ);
    return $result;
  }
  public function edit($id)
  {
    $koneksi  = new Koneksi;
    $query = $koneksi->koneksi()->query("SELECT * FROM pembayaran WHERE no_pembayaran = $id");
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
  }
  public function update($id,$status){
    $koneksi =  new Koneksi;
    $q = $koneksi->koneksi()->exec("UPDATE pembayaran SET status = '$status' WHERE no_pembayaran = '$id'");
    if($q){
      echo "<div class='alert alert-success'>Berhasil!</div>";
    }
  }
}


 ?>
