<?php

Class Barang {
  public function index(){
    $cons = new Koneksi;
    $query = $cons->koneksi()->prepare("SELECT * FROM barang");
    // Jalankan perintah SQL
    $query->execute();
    // Ambil semua data dan masukkan ke variable $data
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
  }
  public function select($id){
    $cons = new Koneksi;
    $query = $cons->koneksi()->prepare("SELECT * FROM barang WHERE kd_barang = '$id'");
    $query->execute();
    // Ambil semua data dan masukkan ke variable $data
    $res = $query->fetch(PDO::FETCH_OBJ);
    return $res;
  }
}

 ?>
