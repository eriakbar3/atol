<?php $titik ='../../' ?>
<?php
$side ='../';
session_start();
include '../../controller/Koneksi.php';
include '../../controller/Paket.php';
include '../../controller/Barang.php';
include '../../controller/Account.php';
include '../../controller/Transaksi.php';
include '../../controller/Pembayaran.php';
$pesanan = Transaksi::get();
if (!isset($_SESSION['username'])){
  header("Location:../login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/bootstrap.min.css">
    <script src="<?php echo $titik; ?>assets/js/jquery.js"></script>
    <script src="<?php echo $titik; ?>assets/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="<?php echo $titik; ?>assets/vendor/daterangepicker/css/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../assets\vendor\font-awesome\css\font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $titik; ?>assets/css/style.css">
    <style media="screen">
      .main-content{
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <?php include '../../lib/header.php'; ?>
    <div class="main-content">
      <div class="container">
        <?php include '../side.php'; ?>
        <div class="col-sm-9">
          <div class="panel panel-default">
            <div class="panel-heading">Transaksi</div>
            <div class="panel-body">
              <div class="">
                <?php
                  if (isset($_POST['submit'])) {
                    # code...
                    $account = Account::index();
                    $id_pelanggan = $account->id_pelanggan;
                    $tgl = $_POST['tgl'];
                    $atas_nama = $_POST['atas_nama'];
                    $dari = $_POST['dari_bank'];
                    $ke = $_POST['ke_bank'];
                    $jumlah = $_POST['jumlah'];
                    $id_pesanan = $_POST['id_pesanan'];
                    //$gambar = $_POST['gambar'];
                    $imgFile    = $_FILES['file']['name'];
                    $tmpDir     = $_FILES['file']['tmp_name'];
                    $imgSize    = $_FILES['file']['size'];

                    $img_ext    = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
                    $gambar      = md5(time()).''.rand(1000,1000000).".".$img_ext;
                    $upload_dir = '../../image/'.$gambar;
                    move_uploaded_file($tmpDir,$upload_dir);
                    $p = Pembayaran::insert($id_pelanggan,$tgl,$atas_nama,$jumlah,$dari,$ke,$id_pesanan,$gambar);
                  }
                 ?>
                <form class="" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Id Pesanan</label>
                    <select class="form-control" name="id_pesanan" style="width:40%">
                      <?php foreach ($pesanan as $pesan): ?>
                        <option value="<?php echo $pesan->id_pesanan; ?>"><?php echo $pesan->id_pesanan; ?>(Status : <?php echo $pesan->status; ?>)</option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                        <label>Tanggal Bayar</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="tgl" class="form-control" id="picker" style="width:25%"/>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Nama Pengirim</label>
                    <input type="text" name="atas_nama" value="" class="form-control">
                  </div>
                  <div class="col-sm-12" style="padding-left:0px;">
                    <div class="form-group col-sm-5">
                      <label>Dari Bank</label>
                      <select class="form-control" name="dari_bank" style="background:#fff;">
                        <option value="">Pilih Bank</option>
                        <option value="bni">BNI</option>
                        <option value="bri">BRI</option>
                        <option value="bca">BCA</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-5">
                      <label>Bank Tujuan</label>
                      <select class="form-control" name="ke_bank" style="background:#fff;">
                      <option value="">Pilih Bank</option>
                      <option value="bni">BNI</option>
                      <option value="bri">BRI</option>
                      <option value="bca">BCA</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Jumlah Transfer</label>
                    <input type="text" name="jumlah" value="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Bukti Transfer</label>
                    <input type="file" name="file" value="">
                  </div>
                  <input type="submit" name="submit" value="Kirim" class="btn btn-primary">
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <script src="../../assets/vendor/moment/js/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo $titik; ?>assets/vendor/daterangepicker/js/daterangepicker.js" type="text/javascript"></script>
    <script type="text/javascript">
    $("#picker").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });
    </script>
  </body>
</html>
