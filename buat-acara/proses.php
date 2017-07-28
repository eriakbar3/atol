<?php
session_start();
include '../controller/Koneksi.php';
include '../controller/Paket.php';
include '../controller/Barang.php';
include '../controller/Account.php';

$account = Account::index();

$id_pelanggan = $account->id_pelanggan;
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];
$paket = $_POST['paket'];
$barang = $_POST['barang'];
$pak = Paket::select($paket);
$bar = Barang::select($barang);
$jumlah = $_POST['jumlah'];
$catatan = $_POST['catatan'];
$tgl_pesan = date('Y-m-d');
$koneksi = new Koneksi;
$squery = $koneksi->koneksi()->query("SELECT * FROM pemesanan Order By id_pesanan DESC LIMIT 1");
$resu = $squery->fetch();
$id_pesanan = $resu['id_pesanan'];
$id = "PES";
$no_id = (integer) substr($id_pesanan,4);
$no_id++;
$id_pesanan_baru = "$id" . sprintf("%03d",$no_id);
$total_biaya =$pak->harga;
$harga_barang = $bar->harga;
$total_harga = $harga_barang*$jumlah;
$query = $koneksi->koneksi()->exec("INSERT INTO pemesanan
  (id_pesanan,id_pelanggan,kd_paket,tgl_pesan,tgl_acara,alamat_acara,total_biaya,catatan)
  VALUES ('$id_pesanan_baru','$id_pelanggan','$paket','$tgl_pesan','$tgl','$alamat','$total_biaya','$catatan')");
  $query2 = $koneksi->koneksi()->exec("INSERT INTO detil_pesan
    (id_pesanan,kd_barang,jumlah,total_harga)
    VALUES ('$id_pesanan_baru','$barang','$jumlah','$total_harga')");
    if ($query && $query2) {
      # code...
      echo "<script type='text/javascript'>window.alert('Berhasil Ditambahkan');</script>";
      header('location:../account/transaksi');
    }else {
      echo "error";
    }
 ?>
