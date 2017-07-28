<?php
/**
 *
 */
class Agenda
{

  public function getAll()
  {
    # code...
    $cons = new Koneksi;
    $query = $cons->koneksi()->prepare("SELECT * FROM agenda LEFT JOIN pemesanan ON agenda.id_pesanan = pemesanan.id_pesanan");
    // Jalankan perintah SQL
    $query->execute();
    // Ambil semua data dan masukkan ke variable $data
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
  }
  public function getByUser($id)
  {
    # code...
    $cons = new Koneksi;
    $query = $cons->koneksi()->prepare("SELECT * FROM agenda  LEFT JOIN pemesanan ON agenda.id_pesanan = pemesanan.id_pesanan where agenda.id_pelanggan = '$id'");
    // Jalankan perintah SQL
    $query->execute();
    // Ambil semua data dan masukkan ke variable $data
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
  }
  public function insert($no_agenda,$id_pelanggan,$judul,$sinopsis,$image,$id_pesanan)
  {
    # code...
    $c = new Koneksi;
    $query = $c->koneksi()->exec("INSERT INTO agenda
      (no_agenda,sinopsis,judul,gambar,id_pesanan,id_pelanggan)
    VALUES ('$no_agenda','$sinopsis','$judul','$image','$id_pesanan','$id_pelanggan')
    ");
    if ($query) {
      # code...
      echo "<div class='alert alert-success'>Berhasil! Silahkan Tunggu Konfirmasi dari Kami</div>";
    }
  }
  public function edit($id)
  {
    $koneksi  = new Koneksi;
    $query = $koneksi->koneksi()->query("SELECT * FROM agenda WHERE no_agenda = '$id'");
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
  }
  public function update($id,$status){
    $koneksi =  new Koneksi;
    $q = $koneksi->koneksi()->exec("UPDATE agenda SET status_agenda = '$status' WHERE no_agenda = '$id'");
    if($q){
      echo "<div class='alert alert-success'>Berhasil!</div>";
    }
  }
}


 ?>
