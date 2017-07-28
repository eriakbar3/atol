<?php

Class Paket{
  public function index(){
    $cons = new Koneksi;
    $query = $cons->koneksi()->prepare("SELECT * FROM paket");
    // Jalankan perintah SQL
    $query->execute();
    // Ambil semua data dan masukkan ke variable $data
    $res = $query->fetchAll(PDO::FETCH_OBJ);
    return $res;
  }
  public function select($id){
    $cons = new Koneksi;
    $query = $cons->koneksi()->prepare("SELECT * FROM paket WHERE kd_paket = '$id'");
    $query->execute();
    // Ambil semua data dan masukkan ke variable $data
    $res = $query->fetch(PDO::FETCH_OBJ);
    return $res;
  }
}

 ?>
